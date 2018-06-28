<?php  namespace App\Http\Controllers;

use App\Models\Post;
use App\Library\Markdown;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect ;
use DB;

class HomeController extends Controller {

	public function __construct()
	{
		parent::__construct();

		$this->data['pageLang'] = 'en';
		if(\Session::get('lang') != '')
		{
			$this->data['pageLang'] = \Session::get('lang');
		}
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index( Request $request)
	{
        \App::setLocale(\Session::get('lang'));

		if(config('sximo.cnf_front') =='false' && $request->segment(1) =='' ) :
			return redirect('dashboard');
		endif;

		$page = $request->segment(1);
		\DB::table('tb_pages')->where('alias',$page)->update(array('views'=> \DB::raw('views+1')));

		if($page == 'tentang'){
				return $this->pageTentang();
		}elseif($page == 'home'){
				return $this->pageHome();
		}elseif($page == 'thankyou'){
			\Auth::logout();
			return $this->pageProfile();
		}elseif($page == 'jadwallomba'){
			return $this->pageJadwalLomba();
		}elseif($page == 'daftar'){
			return $this->pageDaftar();
		}elseif($page == 'galeri'){
			return $this->pageGaleri();
		}elseif($page == 'video'){
			return $this->pageVideo();
		}



		if($page !='') {
			//var_dump("masuk"); die;
			$sql = \DB::table('tb_pages')->where('alias','=',$page)->where('status','=','enable')->get();
			$row = $sql[0];
			if(file_exists(base_path().'/resources/views/layouts/'.config('sximo.cnf_theme').'/template/'.$row->filename.'.blade.php') && $row->filename !='')
			{
				$page_template = 'layouts.'.config('sximo.cnf_theme').'.template.'.$row->filename;
			} else {
				$page_template = 'layouts.'.config('sximo.cnf_theme').'.template.page';
			}

			$this->data['pages'] = $page_template;
			$this->data['title'] = $row->title ;
			$this->data['subtitle'] = $row->sinopsis ;
			$this->data['pageID'] = $row->pageID ;
			$this->data['content'] = \PostHelpers::formatContent($row->note);
			$this->data['note'] = $row->note;
			if($row->template =='frontend'){
				$page = 'layouts.'.config('sximo.cnf_theme').'.index';
			}
			else {
				return view($page_template, $this->data);

			}

			return view( $page, $this->data);
		}
		else {

			// if(!\Auth::check())
			// 	return  Redirect(\SiteHelpers::urlLoginSso());

			$sql = \DB::table('tb_pages')->where('default','1')->get();
			if(count($sql)>=1)
			{
				$row = $sql[0];
				$this->data['title'] = $row->title ;
				$this->data['subtitle'] = $row->sinopsis ;
				if(file_exists(base_path().'/resources/views/layouts/'.config('sximo.cnf_theme').'/template/'.$row->filename.'.blade.php') && $row->filename !='')
				{
					$page_template = 'layouts.'.config('sximo.cnf_theme').'.template.'.$row->filename;
				} else {
					$page_template = 'layouts.'.config('sximo.cnf_theme').'.template.page';
				}
				$this->data['pages'] = $page_template;
				$this->data['pageID'] = $row->pageID ;
				$this->data['content'] = \PostHelpers::formatContent($row->note);
				$this->data['note'] = $row->note;
				$page = 'layouts.'.config('sximo.cnf_theme').'.index';


				return $this->pageHome();

			} else {
				return 'Please Set Default Page';
			}
		}
	}

	public function  getLang( Request $request , $lang='en')
	{
		$request->session()->put('lang', $lang);
		return  Redirect::back();
	}

	public function  getSkin($skin='sximo')
	{
		\Session::put('themes', $skin);
		return  Redirect::back();
	}

	public  function  postContact( Request $request)
	{

		$this->beforeFilter('csrf', array('on'=>'post'));
		$rules = array(
				'name'		=>'required',
				'subject'	=>'required',
				'message'	=>'required|min:20',
				'sender'	=>'required|email'
		);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->passes())
		{

			$data = array('name'=>$request->input('name'),'sender'=>$request->input('sender'),'subject'=>$request->input('subject'),'notes'=>$request->input('message'));
			$message = view('emails.contact', $data);
			$data['to'] = $this->config['cnf_email'];
			if($this->config['cnf_mail'] =='swift')
			{
				Mail::send('user.emails.contact', $data, function ($message) use ($data) {
		    		$message->to($data['to'])->subject($data['subject']);
		    	});

			}  else {

				$headers  	= 'MIME-Version: 1.0' . "\r\n";
				$headers 	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers 	.= 'From: '.$request->input('name').' <'.$request->input('sender').'>' . "\r\n";
					mail($data['to'],$data['subject'], $message, $headers);
			}




			return Redirect::to($request->input('redirect'))->with('message', \SiteHelpers::alert('success','Thank You , Your message has been sent !'));

		} else {
			return Redirect::to($request->input('redirect'))->with('message', \SiteHelpers::alert('error','The following errors occurred'))
			->withErrors($validator)->withInput();
		}
	}

	public function submit( Request $request )
	{
		$formID = $request->input('form_builder_id');

		$rows = \DB::table('tb_forms')->where('formID',$formID)->get();
		if(count($rows))
		{
			$row = $rows[0];
			$forms = json_decode($row->configuration,true);
			$content = array();
			$validation = array();
			foreach($forms as $key=>$val)
			{
				$content[$key] = (isset($_POST[$key]) ? $_POST[$key] : '');
				if($val['validation'] !='')
				{
					$validation[$key] = $val['validation'];
				}
			}

			$validator = Validator::make($request->all(), $validation);
			if (!$validator->passes())
					return redirect()->back()->with(['status'=>'error','message'=>'Please fill required input !'])
							->withErrors($validator)->withInput();


			if($row->method =='email')
			{
				// Send To Email
				$data = array(
					'email'		=> $row->email ,
					'content'	=> $content ,
					'subject'	=> "[ " .config('sximo.cnf_appname')." ] New Submited Form ",
					'title'		=> $row->name
				);

				if( config('sximo.cnf_mail') =='swift' )
				{
					\Mail::send('sximo.form.email', $data, function ( $message ) use ( $data ) {
			    		$message->to($data['email'])->subject($data['subject']);
			    	});

				}  else {

					$message 	 = view('sximo.form.email', $data);
					$headers  	 = 'MIME-Version: 1.0' . "\r\n";
					$headers 	.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers 	.= 'From: '. config('sximo.cnf_appname'). ' <'.config('sximo.cnf_email').'>' . "\r\n";
						mail($data['email'], $data['subject'], $message, $headers);
				}

				return redirect()->back()->with(['status'=>'success','message'=> $row->success ]);

			} else {
				// Insert into database
				\DB::table($row->tablename)->insert($content);
				return redirect()->back()->with(['status'=>'success','message'=>  $row->success  ]);

			}
		} else {

			return redirect()->back()->with(['status'=>'error','message'=>'Cant process the form !']);
		}


	}

	public function getLoad()
	{
		$result = \DB::table('tb_notification')->where('userid',\Session::get('uid'))->where('is_read','0')->orderBy('created','desc')->limit(5)->get();

		$data = array();
		$i = 0;
		foreach($result as $row)
		{
			if(++$i <=10 )
			{
				if($row->postedBy =='' or $row->postedBy == 0)
				{
					$image = '<img src="'.asset('uploads/images/system.png').'" border="0" class="img-circle" />';
				}
				else {
					$image = \SiteHelpers::avatar('40', $row->postedBy);
				}
				$data[] = array(
						'url'	=> $row->url,
						'title'	=> $row->title ,
						'icon'	=> $row->icon,
						'image'	=> $image,
						'text'	=> substr($row->note,0,100),
						'date'	=> date("d/m/y",strtotime($row->created))
					);
			}
		}

		$data = array(
			'total'	=> count($result) ,
			'note'	=> $data
			);
		 return response()->json($data);
	}

	public function posts( Request $request , $read = '')
	{
		$posts = \DB::table('tb_pages')
					->select('tb_pages.*','tb_users.username',\DB::raw('COUNT(commentID) AS comments'))
					->leftJoin('tb_users','tb_users.id','tb_pages.userid')
					->leftJoin('tb_comments','tb_comments.pageID','tb_pages.pageID')
					->groupBy('tb_pages.pageID')
					->where('pagetype','post');
					if($read !='') {
						$posts = $posts->where('alias', $read )->get();
					}
		else {

			$posts = $posts->paginate(12);
		}

		$this->data['title']		= 'Post Articles';
		$this->data['posts']		= $posts;
		$this->data['pages']		= 'secure.posts.posts';
		base_path().'/resources/views/layouts/'.config('sximo.cnf_theme').'/blog/index.blade.php';

		if(file_exists(base_path().'/resources/views/layouts/'.config('sximo.cnf_theme').'/blog/index.blade.php'))
		{
			$this->data['pages'] = 'layouts.'.config('sximo.cnf_theme').'.blog.index';
		}

		if($read !=''){
			if(file_exists(base_path().'/resources/views/layouts/'.config('sximo.cnf_theme').'/blog/view.blade.php'))
			{
				if(count($posts))
				{
					$this->data['posts'] = $posts[0];
					$this->data['comments']	= \DB::table('tb_comments')
												->select('tb_comments.*','username','avatar','email')
												->leftJoin('tb_users','tb_users.id','tb_comments.UserID')
												->where('PageID',$this->data['posts']->pageID)
												->get();
					\DB::table('tb_pages')->where('pageID',$this->data['posts']->pageID)->update(array('views'=> \DB::raw('views+1')));
				} else {
					return redirect('posts');
				}
				$this->data['title']		= $this->data['posts']->title;
				$this->data['pages'] = 'layouts.'.config('sximo.cnf_theme').'.blog.view';

			}
		}
		$page = 'layouts.'.config('sximo.cnf_theme').'.index';
		return view( $page , $this->data);
	}

	public function comment( Request $request)
	{
		$rules = array(
			'comments'	=> 'required'
		);
		$validator = Validator::make($request->all(), $rules);
		if ($validator->passes()) {

			$data = array(
					'userID'		=> \Session::get('uid'),
					'posted'		=> date('Y-m-d H:i:s') ,
					'comments'		=> $request->input('comments'),
					'pageID'		=> $request->input('pageID')
				);

			\DB::table('tb_comments')->insert($data);
			return redirect('posts/'.$request->input('alias'))
        		->with(['message'=>'Thank You , Your comment has been sent !','status'=>'success']);
		} else {
			return redirect('posts/'.$request->input('alias'))
				->with(['message'=>'The following errors occurred','status'=>'error']);
		}
	}

	public function remove( Request $request, $pageID , $alias , $commentID )
	{
		if($commentID !='')
		{
			\DB::table('tb_comments')->where('commentID',$commentID)->delete();
			return redirect('posts/'.$alias)
				->with(['message'=>'Comment has been deleted !','status'=>'success']);

		} else {
			return redirect('posts/'.$alias)
				->with(['message'=>'Failed to remove comment !','status'=>'error']);
		}
	}

	public function set_theme( $id ){
		session(['set_theme'=> $id ]);
		return response()->json(['status'=>'success']);
	}

	public function pageProfile()
	{
		if(!\Auth::check())
			return  Redirect(\SiteHelpers::urlLoginSso());

		$data = array(
						'sso_username'		=> \Auth::user()->sso_username,
						'sso_email'				=> \Auth::user()->sso_email,
						'sso_firstname'		=> \Auth::user()->sso_firstname,
						'sso_lastname'		=> \Auth::user()->sso_lastname,
						'sso_phone'				=> \Auth::user()->sso_phone,
						'sso_province'		=> \Auth::user()->sso_province,
						'sso_city'				=> \Auth::user()->sso_city,
						'sso_profilepic'	=> \Auth::user()->sso_profilepic

				);
				//var_dump($data); die;
		return view('layouts.default.template.profile', $data);

	}

	public function pageHistory()
	{
		if(!\Auth::check())
			return  Redirect(\SiteHelpers::urlLoginSso());

		$data = array(
						'sso_username'		=> \Auth::user()->sso_username,
						'sso_email'				=> \Auth::user()->sso_email,
						'sso_firstname'		=> \Auth::user()->sso_firstname,
						'sso_lastname'		=> \Auth::user()->sso_lastname,
						'sso_phone'				=> \Auth::user()->sso_phone,
						'sso_province'		=> \Auth::user()->sso_province,
						'sso_city'				=> \Auth::user()->sso_city,
						'sso_profilepic'	=> \Auth::user()->sso_profilepic,
						'no_mypoin'	=> \Auth::user()->no_mypoin,
						'no_ponta'	=> \Auth::user()->no_ponta

				);
				//var_dump($data); die;
	## PERHITUNGAN IDM
	// $data['total_idm'] = \DB::table('tb_leader_idm')
	// 									 ->leftjoin('tb_users', 'tb_users.no_mypoin', '=', 'tb_leader_idm.no_mypoin')
	// 									 ->select(DB::raw('IF(tb_users.no_mypoin = tb_leader_idm.no_mypoin, IF(tb_users.id_vote > 0, tb_leader_idm.points + 20,  tb_leader_idm.points + 10) ,  tb_leader_idm.points + 0) AS  points,
	// 																		tb_leader_idm.no_mypoin
	// 									 '))
	// 									 ->groupBy('tb_leader_idm.no_mypoin')
	// 									 ->where('tb_leader_idm.no_mypoin', \Auth::user()->no_mypoin)
	// 									 ->first();




	## PERHITUNGAN Satu
	//dd($data);

		return view('layouts.default.template.pointhistory', $data);

	}

	public function pageHome()
	{
		$data = array();
		$leader_idm = array();
		$leader_sat = array();
		// Ambil VOTE
		$jml_vote = \DB::table('tb_users')
	                     ->select(DB::raw('id_vote, count(id_vote) as total'))
	                     ->where('id_vote','>','0')
											 ->groupBy("id_vote")
	                     ->get();

		foreach ($jml_vote as $key => $value) {

			$data["finalist_".$value->id_vote] = $value->total;

		}

		$row_idm = \DB::table('tb_leader_idm')
											 ->leftjoin('tb_users', 'tb_users.no_mypoin', '=', 'tb_leader_idm.no_mypoin')
	                     ->select(DB::raw('IF(tb_users.no_mypoin = tb_leader_idm.no_mypoin, IF(tb_users.id_vote > 0, tb_leader_idm.points + 20,  tb_leader_idm.points + 10) ,  tb_leader_idm.points + 0) AS  points,
											 									tb_leader_idm.no_mypoin
											 '))
											 ->groupBy('tb_leader_idm.no_mypoin')
											 ->orderBy('points','DESC')
											 ->limit(30)
	                     ->get();

		 foreach ($row_idm as $key => $value) {
 				$data['idm'][$value->no_mypoin] = $value->points;
 			}

		 $row_sat = \DB::table('tb_leader_sat')
		 										 ->leftjoin('tb_users', 'tb_users.no_ponta', '=', 'tb_leader_sat.no_ponta')
		                     ->select(DB::raw('IF(tb_users.no_ponta = tb_leader_sat.no_ponta, IF(tb_users.id_vote > 0, tb_leader_sat.points + 20,  tb_leader_sat.points + 10) ,  tb_leader_sat.points + 0) AS  points,
												 									tb_leader_sat.no_ponta

																						'))
												 ->groupBy('tb_leader_sat.no_ponta')
												 ->orderBy('points','DESC')
												 ->limit(30)
		                     ->get();

		 foreach ($row_sat as $key => $value) {
 				$data['sat'][$value->no_ponta] = $value->points;
 			}



		//dd($data);

		if(\Auth::check()){

			$dat1 = array(
							'sso_username'		=> \Auth::user()->sso_username,
							'sso_email'				=> \Auth::user()->sso_email,
							'sso_firstname'		=> \Auth::user()->sso_firstname,
							'sso_lastname'		=> \Auth::user()->sso_lastname,
							'sso_phone'				=> \Auth::user()->sso_phone,
							'sso_province'		=> \Auth::user()->sso_province,
							'sso_city'				=> \Auth::user()->sso_city,
							'sso_profilepic'	=> \Auth::user()->sso_profilepic

					);
					$data = 	array_merge($data, $dat1);
					$id_user = \Auth::user()->id;
					// no My poin dan ponta
					$poin = \DB::table('tb_users')
				                     ->select(DB::raw('no_mypoin, no_ponta'))
				                     ->where('id', $id_user)
				                     ->first();

					$data['no_mypoin'] = $poin->no_mypoin;
					$data['no_ponta'] = $poin->no_ponta;

					return view('layouts.default.template.home', $data);

		}else{

					return view('layouts.default.template.home', $data);
		}


	}

	public function pageSubmission()
	{
		if(!\Auth::check())
			return  Redirect(\SiteHelpers::urlLoginSso());

		return view('layouts.default.template.submission');

	}

	public function pageSubmissionSuccess()
	{
		if(!\Auth::check())
			return  Redirect(\SiteHelpers::urlLoginSso());



			$data = array(
							'nama_lengkap'		=> \Auth::user()->sso_firstname
			);

		return view('layouts.default.template.submission-success', $data);

	}

	public  function  postVote( Request $request)
	{
		if(!\Auth::check()) return "VOTE GAGAL, Silahkan login terlebih dahulu";
		$id_user = \Auth::user()->id;
		$vote = $request->input('id_vote');

		$tgl_now = date('d');
		$jam_now = date('H:i:s');

		if($tgl_now > 9 ){
			return "3";

		}

		$data = array(
						'nama_lengkap'		=> \Auth::user()->sso_firstname
		);

		$row = \DB::table('tb_users')
										 ->select('id_vote')
										 ->where('id', $id_user)
										//->where('no_mypoin','>','0')
										 ->first();
		if($row->id_vote > 0){
				return "2";
		}else{

			\DB::table('tb_users')
						->where('id', $id_user)
						->update(['id_vote' => $vote ]);


						return "1";

		}

	}

	public function postKartu(Request $request)
	{

		if(!\Auth::check()) return "SIMPAN KARTU GAGAL, Silahkan login terlebih dahulu";
		$id_user = \Auth::user()->id;

		$no_mypoin =  $request->input("mypoin");
		$no_ponta = $request->input("ponta");
		// CEK APAKAH SUDAH INPUT IDM DAN SAT

		if($no_mypoin > 0){
			$row = \DB::table('tb_users')
	                     ->select('no_mypoin')
											 ->where('id', $id_user)
	                    //->where('no_mypoin','>','0')
	                     ->first();
			if($row->no_mypoin < 1){

			 \DB::table('tb_users')
	            ->where('id', $id_user)
	            ->update(['no_mypoin' => $no_mypoin]);
			}
		}

		if($no_ponta > 0){
			$row = \DB::table('tb_users')
	                     ->select('no_ponta')
											 ->where('id', $id_user)
	                    //->where('no_mypoin','>','0')
	                     ->first();

			if($row->no_ponta < 1){
			 \DB::table('tb_users')
	            ->where('id', $id_user)
	            ->update(['no_ponta' => $no_ponta]);
			}
		}




			return "SUKSES MENYIMPAN DATA";

			//update nomor

	}

	public function pageTentang()
	{
		// if(!\Auth::check())
		// 	return  Redirect(\SiteHelpers::urlLoginSso());

		return view('layouts.default.template.tentang');

	}


	public function pageJadwalLomba()
	{
		// if(!\Auth::check())
		// 	return  Redirect(\SiteHelpers::urlLoginSso());

		return view('layouts.default.template.jadwal');

	}


	public function pageDaftar()
	{
		if(!\Auth::check())
			return  Redirect(\SiteHelpers::urlLoginSso());

			$data = array(
							'sso_username'		=> \Auth::user()->sso_username,
							'sso_email'				=> \Auth::user()->sso_email,
							'sso_firstname'		=> \Auth::user()->sso_firstname,
							'sso_lastname'		=> \Auth::user()->sso_lastname,
							'sso_phone'				=> \Auth::user()->sso_phone,
							'sso_province'		=> \Auth::user()->sso_province,
							'sso_city'				=> \Auth::user()->sso_city,
							'sso_profilepic'	=> \Auth::user()->sso_profilepic,
							'sso_uuid'	=> \Auth::user()->sso_uuid


					);
			//	dd($data);

			## PERHITUNGAN IDM
			$data['data_peserta'] = \DB::table('tb_peserta')

												 ->select(DB::raw(' nama_anak, IF(jenis_kelamin = 1, "L", "P") AS jenis_kelamin, tanggal_lahir '))

												 ->where('id_sso', \Auth::user()->sso_uuid)
												 ->get();



		return view('layouts.default.template.daftar', $data);

	}


	public function pageGaleri()
	{
		// if(!\Auth::check())
		// 	return  Redirect(\SiteHelpers::urlLoginSso());

		return view('layouts.default.template.gallery');

	}


	public function pageVideo()
	{
		// if(!\Auth::check())
		// 	return  Redirect(\SiteHelpers::urlLoginSso());

		return view('layouts.default.template.video');

	}


}

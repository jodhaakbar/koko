<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller {

	public function __construct()
	{
		parent::__construct();

        $this->data = array(
            'pageTitle' =>  $this->config['cnf_appname'],
            'pageNote'  =>  'Welcome to Dashboard',

        );
	}

	public function index( Request $request )
	{
		if(\Auth::user()->group_id == 1) return view('dashboard.index',$this->data);
		if(\Auth::user()->group_id == 4) return view('dashboard.index',$this->data);

		return redirect('');

	}

	public function getDashboard()
	{

	}


}
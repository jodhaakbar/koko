<!DOCTYPE html>
<html>
<head>
	<title>GALERI - Koko Krunch</title>
  <meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap.min.css">

		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/default.css">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/gallery.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="container-fluid-full">
		<nav class="navbar navbar-default">
	      <div class="">
	        <div class="navbar-header">
	            <div class="logo hidden-xs">
	            	<a class="navbar-brand" href="#">
	                   <img src="{{ URL::to('/') }}/asset/images/web/logo-koko.png" style="width:150px;">
	                </a>
	            </div>
	            <div class="logo visible-xs">
	            	<a class="navbar-brand" href="#">
	                   <img src="{{ URL::to('/') }}/asset/images/web/logo-koko.png" style="width:80px;margin-top: -15px;">
	                </a>
	            </div>
	            <div class="visible-xs visible-sm visible-md">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	            </div>
	        </div> <!-- end of navbar-header -->

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse navbar-custom" id="bs-navbar-collapse-1">
	          <ul class="nav navbar-nav">
							<ul class="nav navbar-nav">
							 <li><a href="{{ URL::to('/') }}" class="home">BERANDA</a></li>
							 <li><a href="{{ URL::to('/') }}/tentang/" >TENTANG</a></li>
							 <li><a href="{{ URL::to('/') }}/jadwallomba/" >JADWAL LOMBA</a></li>
							 <li><a href="{{ URL::to('/') }}/daftar/" >DAFTAR</a></li>
							 <li><a href="{{ URL::to('/') }}/galeri/" class="active" >GALERI</a></li>
							 <li><a href="{{ URL::to('/') }}/video/">VIDEO</a></li>
						 </ul>
	          </ul>
	          <ul class="nav navbar-nav navbar-right nav-lbc visible-lg">
	          	<li>
	        		<img src="{{ URL::to('/') }}/asset/images/web/logo-nbc-new.png" class="img-responsive">
	        	</li>
	          </ul>
	        </div><!-- /.navbar-collapse -->
	      </div>
	    </nav>
	</div>
	<div class="breadcrumbs">
			<div class="col-md-1 col-xs-12">
					<h4>Galeri</h4>
			</div>
			<div class="clearfix"></div>
	</div>
<div class="container-fluid-full">
		<div class="body-content" id="gallery">
			<div class="tab" role="tabpanel">
									<!-- Nav tabs -->

									<div class="col-md-12 hidden-xs">
									<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#Section1" class="roundleft" aria-controls="home" role="tab" data-toggle="tab">BEKASI</a></li>
											<li role="presentation"><a href="#Section2" class="noround" aria-controls="profile" role="tab" data-toggle="tab">BANDUNG</a></li>
											<li role="presentation"><a href="#bengkulu" class="noround" aria-controls="messages" role="tab" data-toggle="tab">BENGKULU</a></li>
											<li role="presentation"><a href="#solo" class="noround" aria-controls="messages" role="tab" data-toggle="tab">SOLO</a></li>
											<li role="presentation"><a href="#malang" class="noround" aria-controls="messages" role="tab" data-toggle="tab">MALANG</a></li>
											<li role="presentation"><a href="#siantar" class="roundright" aria-controls="messages" role="tab" data-toggle="tab">SIANTAR</a></li>
											<li role="presentation"><a href="#palu" class="noround" aria-controls="profile" role="tab" data-toggle="tab">PALU</a></li>
											<li role="presentation"><a href="#pontianak" class="noround" aria-controls="messages" role="tab" data-toggle="tab">PONTIANAK</a></li>
											<li role="presentation"><a href="#tangsel" class="noround" aria-controls="profile" role="tab" data-toggle="tab">TANGSEL</a></li>
											<li role="presentation"><a href="#makassar" class="noround" aria-controls="profile" role="tab" data-toggle="tab">MAKASSAR</a></li>
											<li role="presentation"><a href="#cirebon" class="noround" aria-controls="profile" role="tab" data-toggle="tab">CIREBON</a></li>
											<li role="presentation"><a href="#tegal" class="noround" aria-controls="profile" role="tab" data-toggle="tab">TEGAL</a></li>
											<li role="presentation"><a href="#padang" class="noround" aria-controls="profile" role="tab" data-toggle="tab">PADANG</a></li>
											<li role="presentation"><a href="#lampung" class="noround" aria-controls="profile" role="tab" data-toggle="tab">LAMPUNG</a></li>






									</ul><br />
									<!-- <ul class="nav nav-tabs" role="tablist">
											<li role="presentation"><a href="#cirebon" class="roundleft" aria-controls="home" role="tab" data-toggle="tab">CIREBON</a></li>
											<li role="presentation"><a href="#lampung" class="noround" aria-controls="profile" role="tab" data-toggle="tab">LAMPUNG</a></li>
											<li role="presentation"><a href="#makassar" class="noround" aria-controls="profile" role="tab" data-toggle="tab">MAKASSAR</a></li>
											<li role="presentation"><a href="#tangsel" class="noround" aria-controls="profile" role="tab" data-toggle="tab">TANGSEL</a></li>
											<li role="presentation"><a href="#tegal" class="noround" aria-controls="profile" role="tab" data-toggle="tab">TEGAL</a></li>
											<li role="presentation"><a href="#palu" class="noround" aria-controls="profile" role="tab" data-toggle="tab">PALU</a></li>
											<li role="presentation"><a href="#padang" class="roundright" aria-controls="messages" role="tab" data-toggle="tab">PADANG</a></li>
									</ul> -->
									</div>
									<div class="visible-xs">
											<div class=" col-xs-12">
												<!-- <ul class="nav nav-tabs" role="tablist">
													<li role="presentation" class="active"><a href="#Section1" class="roundleft" aria-controls="home" role="tab" data-toggle="tab">BEKASI</a></li>
													<li role="presentation"><a href="#Section2" class="noround" aria-controls="profile" role="tab" data-toggle="tab">BANDUNG</a></li>
													<li role="presentation"><a href="#bengkulu" class="noround" aria-controls="messages" role="tab" data-toggle="tab">BENGKULU</a></li>
													<li role="presentation"><a href="#malang" class="noround" aria-controls="messages" role="tab" data-toggle="tab">MALANG</a></li>
													<li role="presentation"><a href="#solo" class="noround" aria-controls="messages" role="tab" data-toggle="tab">SOLO</a></li>
													<li role="presentation"><a href="#pontianak" class="noround" aria-controls="messages" role="tab" data-toggle="tab">PONTIANAK</a></li>
													<li role="presentation"><a href="#cirebon" class="noround" aria-controls="profile" role="tab" data-toggle="tab">CIREBON</a></li>
													<li role="presentation"><a href="#lampung" class="noround" aria-controls="profile" role="tab" data-toggle="tab">LAMPUNG</a></li>
													<li role="presentation"><a href="#makassar" class="noround" aria-controls="profile" role="tab" data-toggle="tab">MAKASSAR</a></li>
													<li role="presentation"><a href="#tangsel" class="noround" aria-controls="profile" role="tab" data-toggle="tab">TANGSEL</a></li>
													<li role="presentation"><a href="#tegal" class="noround" aria-controls="profile" role="tab" data-toggle="tab">TEGAL</a></li>
													<li role="presentation"><a href="#palu" class="noround" aria-controls="profile" role="tab" data-toggle="tab">PALU</a></li>
													<li role="presentation"><a href="#padang" class="noround" aria-controls="profile" role="tab" data-toggle="tab">PADANG</a></li>
													<li role="presentation"><a href="#siantar" class="roundright" aria-controls="messages" role="tab" data-toggle="tab">SIANTAR</a></li>
												</ul> -->
												<select class="form-control" id="city" style="margin-top: 100px;">
													<option value="Section1">BEKASI</option>
													<option value="Section2">BANDUNG</option>
													<option value="bengkulu">BENGKULU</option>
													<option value="malang">MALANG</option>
													<option value="solo">SOLO</option>
													<option value="pontianak">PONTIANAK</option>
													<option value="cirebon">CIREBON</option>
													<option value="lampung">LAMPUNG</option>
													<option value="makassar">MAKASSAR</option>
													<option value="tangsel">TANGSEL</option>
													<option value="tegal">TEGAL</option>
													<option value="palu">PALU</option>
													<option value="padang">PADANG</option>
													<option value="siantar">SIANTAR</option>
												</select>
											</div>
									</div>
									<div class="clearfix"></div>
									<!-- Tab panes -->
									<div class="tab-content tabs">
											<div role="tabpanel" class="tab-pane fade in active" id="Section1">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>GOR Patriot Bekasi</h4>
																			<p>4 Maret 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-1">
																					<article class="col-6 col-sm-3" id="section1-1">  <a href="#">                                                    <img data-position="1" src="{{ URL::to('/') }}/asset/images/bekasi-1.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-2">  <a href="#">                                                    <img data-position="2" src="{{ URL::to('/') }}/asset/images/bekasi-2.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-3">  <a href="#">                                                    <img data-position="3" src="{{ URL::to('/') }}/asset/images/bekasi-3.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-4">  <a href="#">                                                    <img data-position="4" src="{{ URL::to('/') }}/asset/images/bekasi-4.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-5">  <a href="#">                                                    <img data-position="5" src="{{ URL::to('/') }}/asset/images/bekasi-5.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-6">  <a href="#">                                                    <img data-position="6" src="{{ URL::to('/') }}/asset/images/bekasi-6.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-7">  <a href="#">                                                    <img data-position="7" src="{{ URL::to('/') }}/asset/images/bekasi-7.JPG" alt="">                                               </a>  </article>
																					<article class="col-6 col-sm-3" id="section1-8">  <a href="#">                                                    <img data-position="8" src="{{ URL::to('/') }}/asset/images/bekasi-8.JPG" alt="">                                               </a>  </article>  </div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="0"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>  </div>  </div>   </div>  </div>
											<div role="tabpanel" class="tab-pane fade" id="Section2">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>Miko Mall Bandung</h4>
																			<p>25 Maret 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-2">
																					<article class="col-6 col-sm-3" id="section2-1">
																							<a href="#">
																									<img data-position="9" src="{{ URL::to('/') }}/asset/images/bandung-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-2">
																							<a href="#">
																									<img data-position="10" src="{{ URL::to('/') }}/asset/images/bandung-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-3">
																							<a href="#">
																									<img data-position="11" src="{{ URL::to('/') }}/asset/images/bandung-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-4">
																							<a href="#">
																									<img data-position="12" src="{{ URL::to('/') }}/asset/images/bandung-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-5">
																							<a href="#">
																									<img data-position="13" src="{{ URL::to('/') }}/asset/images/bandung-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-6">
																							<a href="#">
																									<img data-position="14" src="{{ URL::to('/') }}/asset/images/bandung-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-7">
																							<a href="#">
																									<img data-position="15" src="{{ URL::to('/') }}/asset/images/bandung-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section2-8">
																							<a href="#">
																									<img data-position="16" src="{{ URL::to('/') }}/asset/images/bandung-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="1"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>  </div>  </div>   </div>  </div>
											<div role="tabpanel" class="tab-pane fade" id="bengkulu">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>GOR Sawah Lebar</h4>
																			<p>31 Maret 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-3">
																					<article class="col-6 col-sm-3" id="section3-1">
																							<a href="#">
																									<img data-position="17" src="{{ URL::to('/') }}/asset/images/bengkulu-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="18" src="{{ URL::to('/') }}/asset/images/bengkulu-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-3">
																							<a href="#">
																									<img data-position="19" src="{{ URL::to('/') }}/asset/images/bengkulu-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-4">
																							<a href="#">
																									<img data-position="20" src="{{ URL::to('/') }}/asset/images/bengkulu-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-5">
																							<a href="#">
																									<img data-position="21" src="{{ URL::to('/') }}/asset/images/bengkulu-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="22" src="{{ URL::to('/') }}/asset/images/bengkulu-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="23" src="{{ URL::to('/') }}/asset/images/bengkulu-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section3-2">
																							<a href="#">
																									<img data-position="24" src="{{ URL::to('/') }}/asset/images/bengkulu-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="2"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="malang">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-6">
																			<h4>Gedung Samantha Krida, Universitas Brawijaya MALANG</h4>
																			<p>1 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-4">
																					<article class="col-6 col-sm-3" id="section4-1">
																							<a href="#">
																									<img data-position="25" src="{{ URL::to('/') }}/asset/images/malang-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-2">
																							<a href="#">
																									<img data-position="26" src="{{ URL::to('/') }}/asset/images/malang-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-3">
																							<a href="#">
																									<img data-position="27" src="{{ URL::to('/') }}/asset/images/malang-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-4">
																							<a href="#">
																									<img data-position="28" src="{{ URL::to('/') }}/asset/images/malang-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-5">
																							<a href="#">
																									<img data-position="29" src="{{ URL::to('/') }}/asset/images/malang-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-6">
																							<a href="#">
																									<img data-position="30" src="{{ URL::to('/') }}/asset/images/malang-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-7">
																							<a href="#">
																									<img data-position="31" src="{{ URL::to('/') }}/asset/images/malang-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section4-8">
																							<a href="#">
																									<img data-position="32" src="{{ URL::to('/') }}/asset/images/malang-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="solo">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>Luwes Gentan</h4>
																			<p>1 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-5">
																					<article class="col-6 col-sm-3" id="section5-1">
																							<a href="#">
																									<img data-position="33" src="{{ URL::to('/') }}/asset/images/solo-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-2">
																							<a href="#">
																									<img data-position="34" src="{{ URL::to('/') }}/asset/images/solo-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-3">
																							<a href="#">
																									<img data-position="35" src="{{ URL::to('/') }}/asset/images/solo-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-4">
																							<a href="#">
																									<img data-position="36" src="{{ URL::to('/') }}/asset/images/solo-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-5">
																							<a href="#">
																									<img data-position="37" src="{{ URL::to('/') }}/asset/images/solo-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-6">
																							<a href="#">
																									<img data-position="38" src="{{ URL::to('/') }}/asset/images/solo-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-7">
																							<a href="#">
																									<img data-position="39" src="{{ URL::to('/') }}/asset/images/solo-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section5-8">
																							<a href="#">
																									<img data-position="40" src="{{ URL::to('/') }}/asset/images/solo-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="pontianak">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-2">
																			<h4>Gor Pangsuma Pontianak</h4>
																			<p>8 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-6">
																					<article class="col-6 col-sm-3" id="section6-1">
																							<a href="#">
																									<img data-position="41" src="{{ URL::to('/') }}/asset/images/pontianak-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-2">
																							<a href="#">
																									<img data-position="42" src="{{ URL::to('/') }}/asset/images/pontianak-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-3">
																							<a href="#">
																									<img data-position="43" src="{{ URL::to('/') }}/asset/images/pontianak-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-4">
																							<a href="#">
																									<img data-position="44" src="{{ URL::to('/') }}/asset/images/pontianak-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-5">
																							<a href="#">
																									<img data-position="45" src="{{ URL::to('/') }}/asset/images/pontianak-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-6">
																							<a href="#">
																									<img data-position="46" src="{{ URL::to('/') }}/asset/images/pontianak-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-7">
																							<a href="#">
																									<img data-position="47" src="{{ URL::to('/') }}/asset/images/pontianak-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section6-8">
																							<a href="#">
																									<img data-position="48" src="{{ URL::to('/') }}/asset/images/pontianak-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="siantar">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>Aula Kampus Nommensen</h4>
																			<p>21 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-7">
																					<article class="col-6 col-sm-3" id="section7-1">
																							<a href="#">
																									<img data-position="49" src="{{ URL::to('/') }}/asset/images/siantar-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-2">
																							<a href="#">
																									<img data-position="50" src="{{ URL::to('/') }}/asset/images/siantar-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-3">
																							<a href="#">
																									<img data-position="51" src="{{ URL::to('/') }}/asset/images/siantar-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-4">
																							<a href="#">
																									<img data-position="52" src="{{ URL::to('/') }}/asset/images/siantar-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-5">
																							<a href="#">
																									<img data-position="53" src="{{ URL::to('/') }}/asset/images/siantar-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-6">
																							<a href="#">
																									<img data-position="54" src="{{ URL::to('/') }}/asset/images/siantar-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-7">
																							<a href="#">
																									<img data-position="55" src="{{ URL::to('/') }}/asset/images/siantar-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section7-8">
																							<a href="#">
																									<img data-position="56" src="{{ URL::to('/') }}/asset/images/siantar-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="cirebon">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>Pemuda Sport Centre</h4>
																			<p>6 May 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-8">
																					<article class="col-6 col-sm-3" id="section8-1">
																							<a href="#">
																									<img data-position="57" src="{{ URL::to('/') }}/asset/images/cirebon-1.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-2">
																							<a href="#">
																									<img data-position="58" src="{{ URL::to('/') }}/asset/images/cirebon-2.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-3">
																							<a href="#">
																									<img data-position="59" src="{{ URL::to('/') }}/asset/images/cirebon-3.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-4">
																							<a href="#">
																									<img data-position="60" src="{{ URL::to('/') }}/asset/images/cirebon-4.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-5">
																							<a href="#">
																									<img data-position="61" src="{{ URL::to('/') }}/asset/images/cirebon-5.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-6">
																							<a href="#">
																									<img data-position="62" src="{{ URL::to('/') }}/asset/images/cirebon-6.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-7">
																							<a href="#">
																									<img data-position="63" src="{{ URL::to('/') }}/asset/images/cirebon-7.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section8-8">
																							<a href="#">
																									<img data-position="64" src="{{ URL::to('/') }}/asset/images/cirebon-8.jpg" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="lampung">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>GOR Way Halim</h4>
																			<p>6 May 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-9">
																					<article class="col-6 col-sm-3" id="section9-1">
																							<a href="#">
																									<img data-position="65" src="{{ URL::to('/') }}/asset/images/lampung-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-2">
																							<a href="#">
																									<img data-position="66" src="{{ URL::to('/') }}/asset/images/lampung-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-3">
																							<a href="#">
																									<img data-position="67" src="{{ URL::to('/') }}/asset/images/lampung-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-4">
																							<a href="#">
																									<img data-position="68" src="{{ URL::to('/') }}/asset/images/lampung-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-5">
																							<a href="#">
																									<img data-position="69" src="{{ URL::to('/') }}/asset/images/lampung-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-6">
																							<a href="#">
																									<img data-position="70" src="{{ URL::to('/') }}/asset/images/lampung-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-7">
																							<a href="#">
																									<img data-position="71" src="{{ URL::to('/') }}/asset/images/lampung-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section9-8">
																							<a href="#">
																									<img data-position="72" src="{{ URL::to('/') }}/asset/images/lampung-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="makassar">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>Celebes Convention Center</h4>
																			<p>15 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-10">
																					<article class="col-6 col-sm-3" id="section10-1">
																							<a href="#">
																									<img data-position="73" src="{{ URL::to('/') }}/asset/images/makassar-1.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-2">
																							<a href="#">
																									<img data-position="74" src="{{ URL::to('/') }}/asset/images/makassar-2.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-3">
																							<a href="#">
																									<img data-position="75" src="{{ URL::to('/') }}/asset/images/makassar-3.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-4">
																							<a href="#">
																									<img data-position="76" src="{{ URL::to('/') }}/asset/images/makassar-4.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-5">
																							<a href="#">
																									<img data-position="77" src="{{ URL::to('/') }}/asset/images/makassar-5.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-6">
																							<a href="#">
																									<img data-position="78" src="{{ URL::to('/') }}/asset/images/makassar-6.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-7">
																							<a href="#">
																									<img data-position="79" src="{{ URL::to('/') }}/asset/images/makassar-7.jpeg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section10-8">
																							<a href="#">
																									<img data-position="80" src="{{ URL::to('/') }}/asset/images/makassar-8.jpeg" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="tangsel">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>QBIG BSD City</h4>
																			<p>15 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-11">
																					<article class="col-6 col-sm-3" id="section11-1">
																							<a href="#">
																									<img data-position="81" src="{{ URL::to('/') }}/asset/images/tangsel-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-2">
																							<a href="#">
																									<img data-position="82" src="{{ URL::to('/') }}/asset/images/tangsel-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-3">
																							<a href="#">
																									<img data-position="83" src="{{ URL::to('/') }}/asset/images/tangsel-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-4">
																							<a href="#">
																									<img data-position="84" src="{{ URL::to('/') }}/asset/images/tangsel-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-5">
																							<a href="#">
																									<img data-position="85" src="{{ URL::to('/') }}/asset/images/tangsel-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-6">
																							<a href="#">
																									<img data-position="86" src="{{ URL::to('/') }}/asset/images/tangsel-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-7">
																							<a href="#">
																									<img data-position="87" src="{{ URL::to('/') }}/asset/images/tangsel-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-8">
																							<a href="#">
																									<img data-position="88" src="{{ URL::to('/') }}/asset/images/tangsel-8.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-8">
																							<a href="#">
																									<img data-position="89" src="{{ URL::to('/') }}/asset/images/tangsel-9.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-8">
																							<a href="#">
																									<img data-position="90" src="{{ URL::to('/') }}/asset/images/tangsel-10.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section11-8">
																							<a href="#">
																									<img data-position="91" src="{{ URL::to('/') }}/asset/images/tangsel-11.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="tegal">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>GOR Wisanggeni Tegal</h4>
																			<p>19 May 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-12">
																					<article class="col-6 col-sm-3" id="section12-1">
																							<a href="#">
																									<img data-position="92" src="{{ URL::to('/') }}/asset/images/tegal-1.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-2">
																							<a href="#">
																									<img data-position="93" src="{{ URL::to('/') }}/asset/images/tegal-2.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-3">
																							<a href="#">
																									<img data-position="94" src="{{ URL::to('/') }}/asset/images/tegal-3.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-4">
																							<a href="#">
																									<img data-position="95" src="{{ URL::to('/') }}/asset/images/tegal-4.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-5">
																							<a href="#">
																									<img data-position="96" src="{{ URL::to('/') }}/asset/images/tegal-5.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-6">
																							<a href="#">
																									<img data-position="97" src="{{ URL::to('/') }}/asset/images/tegal-6.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-7">
																							<a href="#">
																									<img data-position="98" src="{{ URL::to('/') }}/asset/images/tegal-7.jpg" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section12-8">
																							<a href="#">
																									<img data-position="99" src="{{ URL::to('/') }}/asset/images/tegal-8.jpg" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="palu">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>GOR KONI Palu</h4>
																			<p>22 April 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-13">
																					<article class="col-6 col-sm-3" id="section13-1">
																							<a href="#">
																									<img data-position="100" src="{{ URL::to('/') }}/asset/images/palu-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-2">
																							<a href="#">
																									<img data-position="101" src="{{ URL::to('/') }}/asset/images/palu-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-3">
																							<a href="#">
																									<img data-position="102" src="{{ URL::to('/') }}/asset/images/palu-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-4">
																							<a href="#">
																									<img data-position="103" src="{{ URL::to('/') }}/asset/images/palu-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-5">
																							<a href="#">
																									<img data-position="104" src="{{ URL::to('/') }}/asset/images/palu-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-6">
																							<a href="#">
																									<img data-position="105" src="{{ URL::to('/') }}/asset/images/palu-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-7">
																							<a href="#">
																									<img data-position="106" src="{{ URL::to('/') }}/asset/images/palu-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section13-8">
																							<a href="#">
																									<img data-position="107" src="{{ URL::to('/') }}/asset/images/palu-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
											<div role="tabpanel" class="tab-pane fade" id="padang">
													<div class="gallery-detail">
															<div class="container-fluid">
																	<div class="col-md-3">
																			<h4>GOR UNP Universitas Negeri Padang</h4>
																			<p>6 May 2018</p>
																	</div>
															</div>
													</div>
													<div class="wrap-gallery">
															<div class="fotos">
																	<div class="gallerij">
																			<div class="row" id="galeri-14">
																					<article class="col-6 col-sm-3" id="section14-1">
																							<a href="#">
																									<img data-position="108" src="{{ URL::to('/') }}/asset/images/padang-1.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-2">
																							<a href="#">
																									<img data-position="109" src="{{ URL::to('/') }}/asset/images/padang-2.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-3">
																							<a href="#">
																									<img data-position="110" src="{{ URL::to('/') }}/asset/images/padang-3.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-4">
																							<a href="#">
																									<img data-position="111" src="{{ URL::to('/') }}/asset/images/padang-4.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-5">
																							<a href="#">
																									<img data-position="112" src="{{ URL::to('/') }}/asset/images/padang-5.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-6">
																							<a href="#">
																									<img data-position="113" src="{{ URL::to('/') }}/asset/images/padang-6.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-7">
																							<a href="#">
																									<img data-position="114" src="{{ URL::to('/') }}/asset/images/padang-7.JPG" alt="">
																							</a>
																					</article>
																					<article class="col-6 col-sm-3" id="section14-8">
																							<a href="#">
																									<img data-position="115" src="{{ URL::to('/') }}/asset/images/padang-8.JPG" alt="">
																							</a>
																					</article>
																			</div>
																			<div class="clearfix"></div>
																			<p><a href="#" class="btn red-rounded more" data-number="3"><i class="fa fa-angle-down" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Load more</a></p>
																			</div>
																	</div>
													</div>
											</div><!-- tab panel -->
									</div>
		</div> <!-- end of body content -->
</div>
<div class="container-fluid-full">
		<div class="footer">
	    	<div class="row hidden-xs">
	    		<div class="col-md-3">
	    			<img src="{{ URL::to('/') }}/asset/images/web/koko-olimpiade.png" class="img-responsive">
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact">
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0">
	    					<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-phone.png">
	    				</div>
	    				<div style="width: 130px;float: left">
	    					Nestl&eacute; Customer Service<br />
	    					0800018-21028<br />
	    					Senin - Minggu, <br />
	    					Jam 08.00 - 24.00
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0">
	    					<a href="http://sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-mail.png">
	    					</a>
	    				</div>
	    				<div style="width: 70px;float: left;padding: 15px 0 0 0">
	    					<a href="http://sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						Kontak Kami
	    					</a>
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0;">
	    					<a href="http://sahabatnestle.co.id/privacy" title="Privacy Policy">
	    						<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-policy.png">
	    					</a>
	    				</div>
	    				<div style="width: 100px;float: left;padding: 15px 0 0 0;">
	    					<a href="http://sahabatnestle.co.id/privacy" title="Privacy Policy">
	    						Privacy Policy
	    					</a>
	    				</div>
	    			</div>
	    			<div class="clearfix"></div>
	    		</div>
	    		<div class="col-md-4 text-right">
	    			Nestl&eacute; Indonesia<br />
	    			&copy;Hak Cipta oleh PT Nestl&eacute; Indonesia dilindungi oleh undang-undang
	    			Tidak diperkenankan mengambil materi / isi website dan
	    			mempublikasikan dalam bentuk apapun tanpa izin tertulis dari
	    			PT Nestl&eacute; Indonesia. Saran, komentar, dan pelayanan
	    			mengenai website ditujukan ke sahabat.nestle@id.nestle.com atau kontak kami
	    		</div>
	    	</div>
	    	<div class="row visible-xs">
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<img src="{{ URL::to('/') }}/asset/images/web/koko-olimpiade.png" class="img-responsive">
	    		</div>
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<div class="col-xs-3">
	    					<img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-phone.png">
	    				</div>
	    				<div class="col-xs-9">
	    					Nestl&eacute; Customer Service<br />
	    					0800018-21028<br />
	    					Senin - Minggu, <br />
	    					Jam 08.00 - 24.00
	    				</div>
	    		</div>
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<div class="contact">
	    				<div style="width: 30px;float: left;padding: 10px 0 0 0">
	    					<a href="https://www.sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						<img style="width:25px" src="{{ URL::to('/') }}/asset/images/web/icon-mail.png">
	    					</a>
	    				</div>
	    				<div style="width: 70px;float: left;padding: 15px 0 0 0">
	    					<a href="https://www.sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						Kontak Kami
	    					</a>
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0;">
                            <a href="https://www.sahabatnestle.co.id/privacy" title="Privacy Policy">
                                <img style="width:40px" src="{{ URL::to('/') }}/asset/images/web/icon-policy.png">
                            </a>
                        </div>
                        <div style="width: 75px;float: left;padding: 15px 0 0 0;">
                            <a href="https://www.sahabatnestle.co.id/privacy" title="Privacy Policy">
                                Privacy Policy
                            </a>
                        </div>
	    			</div>
	    			<div class="clearfix"></div>
	    		</div>
	    		<div class="col-md-4 text-right col-xs-12">
	    			Nestl&eacute; Indonesia<br />
	    			&copy;Hak Cipta oleh PT Nestl&eacute; Indonesia dilindungi oleh undang-undang
	    			Tidak diperkenankan mengambil materi / isi website dan
	    			mempublikasikan dalam bentuk apapun tanpa izin tertulis dari
	    			PT Nestl&eacute; Indonesia. Saran, komentar, dan pelayanan
	    			mengenai website ditujukan ke sahabat.nestle@id.nestle.com atau kontak kami
	    		</div>
	    	</div>
	    </div>
	</div>
	<div class="floating-notice visible-xs text-center">
    	<a href="{{ URL::to('/') }}/daftar/"><h4><b><u>Daftar Lomba</u></b></h4></a>
	  </div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <script type="text/javascript">
	    $(window).load(function() {
	        $('#slider').nivoSlider();
	    });
	    </script>
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		  <script>
		  $( function() {
		    $( ".datepicker" ).datepicker({
		      changeMonth: true,
		      changeYear: true,
		      dateFormat: 'dd/mm/yy'
		    });
		  } );
		  </script>
		  <script type="text/javascript" src="asset/slick/slick/slick.min.js"></script>
		  <script type="text/javascript">
	      $(document).ready(function() {
	                    var a = 8,
	                        b = 8,
	                        c = 8;
	                    $(".more").click(function(d) {
	                        d.preventDefault();
	                        var e = $(this).attr("data-number");
	                        if ("0" == e) {
	                            a = Number(a) + Number(8);
	                            for (var f = $("#galeri-1 .col-6").size(), g = 1; g < Number(a) + Number(1); g++) $("#section1-" + g).show();
	                            a >= f && $(this).hide()
	                        } else if ("1" == e) {
	                            b = Number(b) + Number(8);
	                            for (var f = $("#galeri-2 .col-6").size(), g = 1; g < Number(b) + Number(1); g++) $("#section2-" + g).show();
	                            b >= f && $(this).hide()
	                        } else if ("2" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-3 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section3-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("3" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-4 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section4-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("4" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-5 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section5-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("5" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-6 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section6-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("6" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-7 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section7-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("7" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-8 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section8-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("8" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-9 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section9-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("9" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-10 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section10-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("10" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-11 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section11-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("11" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-12 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section12-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                        else if ("12" == e) {
	                            c = Number(c) + Number(8);
	                            for (var f = $("#galeri-13 .col-6").size(), g = 1; g < Number(c) + Number(1); g++) $("#section13-" + g).show();
	                            c >= f && $(this).hide()
	                        }
	                    }), $(".less").click(function(a) {
	                        a.preventDefault(), $(".more").show()
	                    });
	                    var d = [],
	                        e = [];
	                    $(".gallerij a img").each(function() {
	                        var a = $(this).attr("src"),
	                            b = a.replace("-150x150", "");
	                        d.push(a), e.push(b)
	                    }), $(".gallerij article").each(function() {
	                        $(this).find("a").on("click", function(a) {
	                            a.preventDefault();
	                            var b = $(this).find("img").attr("data-position") - 1;
	                            $("body").append('<div class="lightbox"><article><span><i class="fa fa-times" aria-hidden="true"></i></span><img data-thumb="' + b + '" src="' + e[b] + '" alt="" /><div class="navigation"><i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i></div></article></div>')
	                        })
	                    }), $(document).on("click", ".navigation .fa-chevron-right", function(a) {
	                        a.stopPropagation(), $(this).each(function() {
	                            var a = $(".lightbox img").attr("data-thumb"),
	                                b = ++a,
	                                c = e[b];
	                            $(".lightbox article").hide(), $(".lightbox article img").attr("src", c), $(".lightbox article img").attr("data-thumb", b), $(".lightbox article").fadeIn();
	                            var d = e[e.length - 1];
	                            $(".lightbox article img").attr("src") == d ? $(this).addClass("disabled") : $(this).removeClass("disabled"), $(".navigation .fa-chevron-left").removeClass("disabled")
	                        })
	                    }), $(document).on("click", ".navigation .fa-chevron-left", function(a) {
	                        a.stopPropagation(), $(this).each(function() {
	                            var a = $(".lightbox img").attr("data-thumb"),
	                                b = --a,
	                                c = e[b];
	                            $(".lightbox article").hide(), $(".lightbox article img").attr("src", c), $(".lightbox article img").attr("data-thumb", b), $(".lightbox article").fadeIn();
	                            var d = e[0];
	                            $(".lightbox article img").attr("src") == d ? $(this).addClass("disabled") : $(this).removeClass("disabled"), $(".navigation .fa-chevron-right").removeClass("disabled")
	                        })
	                    }), $(document).on("click", ".lightbox", function() {
	                        $(".lightbox").fadeOut().delay(3e3).queue(function() {
	                            $(this).remove()
	                        })
	                    })
	                })
				$('#city').change(function () {
				  city = $( "#city" ).val();
				  $('[href="#'+city+'"]').tab('show');
				});
	    </script>
	</body>
	</html>

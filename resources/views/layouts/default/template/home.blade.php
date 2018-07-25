<!DOCTYPE html>
<html>
<head>
	<title>BERANDA - Koko Krunch</title>
  <meta charset="UTF-8">


  <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="asset/bootstrap-less/css/bootstrap.min.css">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/asset/bootstrap-less/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/default.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
   	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32304861-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-32304861-5');
</script>


</head>
<body>
	<div class="container-fluid-full">
		<nav class="navbar navbar-default">
	      <div class="">
	        <div class="navbar-header">
	            <div class="logo hidden-xs">
	            	<a class="navbar-brand" href="#">
	                   <img src="asset/images/web/logo-koko.png" style="width:150px;">
	                </a>
	            </div>
	            <div class="logo visible-xs">
	            	<a class="navbar-brand" href="#">
	                   <img src="asset/images/web/logo-koko.png" style="width:80px;margin-top: -15px;">
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
	            <li><a href="{{ URL::to('/') }}" class="active home">BERANDA</a></li>
	            <li><a href="{{ URL::to('/') }}/tentang/">TENTANG</a></li>
	            <li><a href="{{ URL::to('/') }}/jadwallomba/">JADWAL LOMBA</a></li>
	            <li><a href="{{ URL::to('/') }}/daftar/">DAFTAR</a></li>
	            <li><a href="{{ URL::to('/') }}/galeri/">GALERI</a></li>
	            <li><a href="{{ URL::to('/') }}/video/">VIDEO</a></li>
	          </ul>
	          <ul class="nav navbar-nav navbar-right nav-lbc visible-lg">
	          	<li>
	        		<img src="asset/images/web/logo-nbc-new.png" class="img-responsive">
	        	</li>
	          </ul>
	        </div><!-- /.navbar-collapse -->
	      </div>
	    </nav>
	</div>
	<div class="breadcrumbs">
		<div class="col-md-1 col-xs-12">
			<h4>Beranda</h4>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="container-fluid-full">
	    <div class="body-content">
	    		<div class="col-md-8">
	    			<div class="slider-wrapper theme-default">
			            <div id="slider" class="nivoSlider slider-height">
			                <img src="asset/images/web/banner1.jpg" data-thumb="images/web/banner1.jpg" alt=""/>
			                <img src="asset/images/web/banner1.jpg" data-thumb="images/web/banner1.jpg" alt=""/>
			            </div>
			        </div>
	    		</div>
	    		<div class="col-md-4">
	    			<div class="banner-right">
	    				<h4>JADWAL LOMBA</h4>
	    				<p>Pare Pare - 12 Agustus 2018</p>
	    				<h5>Gedung Islamic Center</h5>
	    				<p>Mallusetasi, Ujung, Kota Pare Sulawesi Selatan 91111</p>
	    				<!-- <p>Kota Bekasi, Jawa Barat 17141</p><br /> -->
	    				</p>
	    				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.022233532824!2d119.62155961465263!3d-4.015838897079591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d95bb3c52a2acd9%3A0x957408fc49404652!2sGedung+Islamic+Center!5e0!3m2!1sid!2sid!4v1532480716231" width="100%" height="310px" frameborder="0" style="border:0" allowfullscreen></iframe>
	    			</div>
	    		</div>
	    		<div class="clearfix"></div>
	    </div> <!-- end of body content -->
	</div>
	<div class="container-fluid-full">
		<div class="footer">
	    	<div class="row hidden-xs">
	    		<div class="col-md-3">
	    			<img src="asset/images/web/koko-olimpiade.png" class="img-responsive">
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact">
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0">
	    					<img style="width:40px" src="asset/images/web/icon-phone.png">
	    				</div>
	    				<div style="width: 130px;float: left">
	    					Nestl&eacute; Customer Service<br />
	    					0800018-21028<br />
	    					Senin - Minggu, <br />
	    					Jam 08.00 - 24.00
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0">
	    					<a href="http://sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						<img style="width:40px" src="asset/images/web/icon-mail.png">
	    					</a>
	    				</div>
	    				<div style="width: 70px;float: left;padding: 15px 0 0 0">
	    					<a href="http://sahabatnestle.co.id/contactus" title="Kontak Kami">
	    						Kontak Kami
	    					</a>
	    				</div>
	    				<div style="width: 45px;float: left;padding: 10px 0 0 0;">
	    					<a href="https://www.sahabatnestle.co.id/privacy" title="Privacy Policy">
	    						<img style="width:40px" src="asset/images/web/icon-policy.png">
	    					</a>
	    				</div>
	    				<div style="width: 100px;float: left;padding: 15px 0 0 0;">
	    					<a href="https://www.sahabatnestle.co.id/privacy" title="Privacy Policy">
	    						Privacy Policy
	    					</a>
	    				</div>
	    				<div class="clearfix"></div>
	    			</div>
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
	    			<img src="asset/images/web/koko-olimpiade.png" class="img-responsive">
	    		</div>
	    		<div class="col-xs-12" style="margin-bottom: 25px;">
	    			<div class="col-xs-3">
	    					<img style="width:40px" src="asset/images/web/icon-phone.png">
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
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stamina &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<!--<p class="num">Call: +91 9767042555</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
-->
					</div>
				</div>
			</div>
		</div>
		<?php
         include("commonpages/header.php")
		?>
	</nav>

	
	<!--<div id="map" class="fh5co-map"></div>-->
		<!-- END map -->
	
	<!--<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li class="url"><a href="http://gettemplates.co">gettemplates.co</a></li>
						</ul>
					</div>

				</div>-->
				<div class="col-md-12 animate-box" align="center">
					
					<form action="PHP/registration_insert.php" align="center" method="POST">
                      <table width="40%" height="600px" >
						<div class="row form-group">
							<div class="col-md-12">
						    <div class="col-md-12">
								<tr>
								<h1>REGISTRATION!</h1>
								</tr>
								<tr>
								<td>Name:</td>
								<td><input type="text" id="name"  name="name" class="form-control" placeholder="Your Name here"></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Email:</td>
								<td><input type="email" id="email" name="email" class="form-control" placeholder="Your Email here"></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Password:</td>
								<td><input type="password" id="pass" name="pass" class="form-control" placeholder="Your Password here"></td>
							</tr>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Contact:</td>
								<td><input type="number" id="Mobile" name="contact" class="form-control" placeholder="Your contact here"></td>
							</tr>
							</div>
						</div>


						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Team Name:</td>
								<td><textarea rows="3" cols="25" name="team name">
									
								</textarea></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Register Date:</td>
								<td><input type="date" id="date" name="regdate" class="form-control" placeholder="registeration date"></td>
							</tr>
							</div>
						</div>
						

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Address:</td>
								<td><textarea rows="3" cols="25" name="address">
									
								</textarea></td>
							</tr>
							</div>
						</div>
						
						
						<div class="form-group">
							<tr>
								<td>&nbsp;</td>
								<td><input type="submit" value="Register" name='submit' class="btn btn-primary"> &nbsp; &nbsp; &nbsp;  
						<input type="submit" value="Cancel"  name='submit' class="btn btn-primary"></td>

							</tr>

						</div>
                    </table>
					</form>		
				</div>
			</div>

			<?php
         include("commonpages/out_footer.php")
		?>

		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


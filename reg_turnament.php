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
						<p class="num">Call: 9021091017</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php
         include("commonpages/loginheader.php")
		?>
	</nav>
				<div class="col-md-12 animate-box" align="center">
					
					<form action="./PHP/turnament_insert.php" method="post" align="center">
                      <table width="40%" height="500px">
						<div class="row form-group">
							<div class="row form-group">
								<?php 
                                if(isset($_GET['rid'])){
                                   $rid=$_GET['rid'];
                                    include('./PHP/connection_db.php');
                                    $q="SELECT game_name FROM tournament WHERE t_id='$rid'";
                                  $data=mysqli_query($con,$q);
                                   $row=mysqli_fetch_array($data);

                                	}
								 ?>
                                
							<div class="col-md-12">
								<tr>
								<td>Game Name:</td>
								<td><input type="text" id="name" name="game" class="form-control" readonly value="<?=$row['game_name']?>"></td>
							</tr>
							</div>
						</div>
							<div class="col-md-12">
								<tr>
								<h1>TURNAMENT REGISTRATION!</h1>
								</tr>
								<tr>
								<td>Name:</td>
								<td><input type="text" id="name" name="name" class="form-control"></td>
							</tr>
							</div>
						</div>
							<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Email:</td>
								<td><input type="email" id="mobile" name="email"class="form-control"></td>
							</tr>
							</div>
						</div>

					
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Contact:</td>
								<td><input type="number" id="mobile" name="contact"class="form-control"></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Address:</td>
								<td><input type="text" id="gametype" name="address" class="form-control"></td>
							</tr>
							</div>
						</div>
                         <div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Date:</td>
								<td><input type="date" id="gametype" name="date" class="form-control"></td>
							</tr>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td>Team Name:</td>
								<td><input type="text" id="team" name="team" class="form-control"></td>
							</tr>
							</div>
						</div>
						
						<div class="form-group">
							<tr>
								<input type="hidden" name="rid" value="<?=$rid?>">
								<td>&nbsp;</td>
								<td><input type="submit" value="submit" class="btn btn-primary" name="btn_t"> &nbsp; &nbsp; &nbsp;  
						<input type="submit" value="Reset" class="btn btn-primary"></td>

							</tr>

						</div>
                    </table>
					</form>		
				</div>
			</div>
			
		<?php
         include("commonpages/footer.php")
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


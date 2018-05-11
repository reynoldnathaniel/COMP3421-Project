<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Restaurant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

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

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

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
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">LovEat</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li class="active has-dropdown">
									<a href="#">About US</a>
									<ul class="dropdown">
										<li><a href="aboutus.php">LovEat</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<?php
									if(isset($_SESSION["user_id"])){
										echo '<a href="#">Booking</a>
									<ul class="dropdown">
										<li><a href="restaurantsPage.php">Restaurant</a></li>
										<li><a href="dishesPage.php">Dishes</a></li>
									</ul>';
									}
									else{
										echo '<a href="#">Booking</a>
									<ul class="dropdown">
										<li><a href="loginPage.php">Restaurant</a></li>
										<li><a href="loginPage.php">Dishes</a></li>
									</ul>';
									}
									?>
									

								</li>
								<li class="has-dropdown">
									<?php
										if(isset($_SESSION["user_id"])){
											$lastname = strtoupper($_SESSION['lastname']);
											echo '<a href="#">'.$lastname.'</a>
											<ul class="dropdown">
											<li><a href="profile.php">Profile</a></li>
											<li><a href="editProfile.php">Edit Profile</a></li>
											<li><a href="favorite.php">Favorite Restaurant</a></li>
											<li><a href="logoutProcess.php">Logout</a></li>
											</ul>';
										}
										else{
											echo '
											<a href="loginPage.php">Account</a>
											<ul class="dropdown">
												<li><a href="loginPage.php">Login</a></li>
											</ul>
											';
										}
									?>
									

								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h1>About us</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-about">
			<div class="container">
				<div class="row">
					<div class="about-flex">
						<div class="col-one-forth aside-stretch animate-box">
							<div class="row">
								<div class="col-md-12 about">
									<h2>About</h2>
								</div>
							</div>
						</div>
						<div class="col-three-forth animate-box">
							<h2>LovEat</h2>
							<div class="row">
								<div class="col-md-12">
									<p>LOVEAT is made to aid in restaurant operations. We provide both potential customers and restaurants memorable experience. We start our business from Hong Kong and reaching out to the world.</p>

									<p>The potential customers of restaurants can search for the restaurants which suit their taste by cuisine or location or name using our searching engine and book a table. The restaurant staffs can manage bookings, update menu and news and check customers’ reviews.</p>

									<div class="row row-pb-sm">
										<div class="col-md-6">
											<img class="img-responsive" src="images/bg_2.jpg" alt="">
										</div>
										<div class="col-md-6">
											<p>We provide various restaurants with different cuisine from all over Hong Kong. Japanese, American, Italian, European, Thai... Find out your new favorite restaurant though us, LovEat. We LovEat! Share the review of the restaurant with others and visit the most hottest restaurant in Hong Kong right now.</p>
											<p>We create valuable experience. Don't forget to check out news of your favorite restaurant and do not miss out the discount promotion. We hope you enjoy delicious food with us and add a little happiness to your day.</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>LovEat</h4>
						<p>Dine at Top Restaurants in HK. Make an Instant Reservation with LovEat, the top hong kong restaurant reservation system.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>11 Yuk Choi Rd, Hung Hom</li>
							<li><a href="tel://1234567920">+852 12341234</a></li>
							<li><a href="mailto:info@yoursite.com">info@loveat.com</a></li>
							<li><a href="#">loveat.com</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


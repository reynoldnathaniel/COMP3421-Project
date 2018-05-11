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



<!-- SelectPicker  -->
<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

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
							<div id="colorlib-logo"><a href="index.php">LovEat</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="#">About US</a>
									<ul class="dropdown">
										<li><a href="#">LovEat</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<?php
									if(isset($_SESSION["user_id"])){
										echo '<a href="#">Booking</a>
									<ul class="dropdown">
										<li><a href="restaurantsPage.php">Restaurants</a></li>
										<li><a href="dishesPage.php">Dishes</a></li>
										<li><a href="#">News</a></li>
									</ul>';
									}
									else{
										echo '<a href="#">Booking</a>
									<ul class="dropdown">
										<li><a href="loginPage.php">Restaurant</a></li>
										<li><a href="loginPage.php">News</a></li>
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
			   	<li style="background-image: url(images/bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Best Table Reservations System in Hong Kong</h2>
				   					<h1>LovEat</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Enjoy</h2>
				   					<h1>Amazing Testing Tour</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Explore our most loved restaurants</h2>
				   					<h1>Search Your New Favorite </h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Taste the</h2>
				   					<h1>Best Food Ever</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>

		<!-- menu segment start -->
		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-12 col-md-offset-0 heading2 animate-box">
									<h2>Restaurants</h2>
									<?php
									//echo "<h2>".$_SESSION["rest_name"]."</h2>";
									?>
								</div>

								<!-- info segment start here -->
								<?php
								include("connection.php");
								$sql = "SELECT * FROM restaurant";
								if(isset($_POST["rest_type"])){
									if($_POST["rest_type"]!="" && $_POST["rest_region"]!=""){
										$sql = "SELECT * FROM restaurant WHERE rest_type LIKE '%$_POST[rest_type]%' AND rest_region LIKE '%$_POST[rest_region]%'";
									}
									else if($_POST["rest_type"]!="" && $_POST["rest_region"]==""){
										$sql = "SELECT * FROM restaurant WHERE rest_type LIKE '%$_POST[rest_type]%'";
									}
									else if($_POST["rest_type"]=="" && $_POST["rest_region"]!=""){
										$sql = "SELECT * FROM restaurant WHERE rest_region LIKE '%$_POST[rest_region]%'";
									}
								}
              					$result = mysqli_query($con,$sql);
              					while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              						$sql_getc="SELECT AVG(cmnt_rating) AS avg_rating,COUNT(cmnt_id) AS num_review FROM comment WHERE rest_id='$row[rest_id]'";
              						$result_getc = mysqli_query($con,$sql_getc);
              						$row_getc = mysqli_fetch_array($result_getc,MYSQLI_ASSOC);
              						$avg = $row_getc['avg_rating'];
              						$avg = number_format((float)$avg, 1, '.', '');
              						$num_review = $row_getc['num_review'];
              						//<i class="icon-star-half"></i>
									echo "
									<div class='col-md-6 col-sm-6 animate-box'>
									<div class='hotel-entry'>
										<a href='restaurantDetailPage.php?restid=$row[rest_id]&restname=$row[rest_name]' class='hotel-img' style='background-image: url(images/$row[rest_image]);'>
											<p class='price'><span>";
									for($i=1;$i<=$avg;$i++){
										echo "<i class='icon-star-full'></i>";
									}
									$j=$i;
									for($i=$j;$i<=5;$i++){
										echo "<i class='icon-star-empty'></i>";
									}

									echo "</span></p>
										</a>
										<div class='desc'>
											<p class='star'><span></span> $avg/5 <br>$num_review Reviews</p>
											<h3><a href='restaurantDetailPage.php?restid=$row[rest_id]&restname=$row[rest_name]'>$row[rest_name]</a></h3>
											<span class='place'>$row[rest_region]</span>
											<p>$row[rest_description]</p>
										</div>
									</div>
								</div>



									";
								}
								?>
								<!-- info segment end here -->
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your restaurants!</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                  	<i class="icon icon-arrow-down3"></i>
				                    <label for="date">Cuisine:</label>
				                    	<select name="rest_type" id="category" class="form-control">
			                    		<option value="">Select your cuisine</option>
								        <option value="Japanese">Japanese</option>
								        <option value="BBQ">BBQ</option>
								        <option value="American">American</option>
								        <option value="Bar">Bar</option>
								        <option value="European">European</option>
								        <option value="Italian">Italian</option>
								        <option value="Thai">Thai</option>
								        <option value="Dessert">Dessert</option>
								      </select>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                  	<i class="icon icon-arrow-down3"></i>
				                    <label for="date">Location:</label>
				                    	<select name="rest_region" id="category" class="form-control">
				                    		<option value="">Select your region</option>
											<option value="Central">Central</option>
											<option value="Hung Hom">Hung Hom</option>
											<option value="Tsim Sha Tsui">Tsim Sha Tsui</option>
											<option value="Wan Chai">Wan Chai</option>
											<option value="Soho">Soho</option>
											<option value="North Point">North Point</option>
									  </select>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Find Restaurant" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- menu segment end -->

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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


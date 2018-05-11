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
										<li><a href="aboutus.php">LovEat</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<?php
									if(isset($_SESSION["user_id"])){
										echo '<a href="#">Booking</a>
									<ul class="dropdown">
										<li><a href="restaurantsPage.php">Restaurants</a></li>
										<li><a href="dishesPage.php">Dishes</a></li>
<<<<<<< HEAD
<<<<<<< HEAD
										<li><a href="#">News</a></li>
=======
>>>>>>> 083435d0c8f5dc8faf012cc76dc0bd1cc1b14110
=======
>>>>>>> 083435d0c8f5dc8faf012cc76dc0bd1cc1b14110
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
		<div id="colorlib-reservation">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="search-wrap">
						<div class="container">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#flight"><i class="flaticon-food-1"></i> By Cuisine & location</a></li>
								
								<li><a data-toggle="tab" href="#hotel"><i class="flaticon-restaurant"></i> By Restaurant</a></li>
								
							</ul>
						</div>

						<div class="tab-content">
							<div id="flight" class="tab-pane fade in active">
								<form method="post" class="colorlib-form" action="restaurantsPage.php">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Search for your favorite cuisine!</h2>
				              	 	</div>
				              	 </div>
				                
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Any Cuisine</label>
				                    <div class="form-field">
				                    	<i class="icon icon-arrow-down3"></i>
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
				                </div>

				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Any Location</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
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
				                </div>

				                <div class="col-md-1">
				                  <input type="submit" name="submit" id="submit" value="Search" class="btn  ">
				                </div>
				              </div>
				            </form>
				         </div>
				         <div id="hotel" class="tab-pane fade">
						      <form method="post" class="colorlib-form" action="dishesPage.php">
				              	<div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>SEARCH FOR YOUR FAVORITE DISHES!</h2>
				              	 	</div>
				              	 </div>
				 
				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Dish type</label>
				                    <div class="form-field">
				                      <i class="icon icon-user"></i>
				                      <select name="dish_type" class="form-control">
				                      	<option value="">Please select dish</option>
								        <option value="appetizers">Appetizers</option>
								        <option value="main dishes">Main dishes</option>
								        <option value="side dishes">Side dishes</option>
								        <option value="beverages">Beverages</option>
								        <option value="desserts">Desserts</option>
								      </select>
				                    </div>
				                  </div>
				                </div>

				                <div class="col-md-3">
				                  <div class="form-group">
				                    <label for="guests">Price Range</label>
				                    <div class="form-field">
				                      <i class="icon icon-time"></i>
				                     <select name="dish_price" id="people" class="form-control">
				                      	<option value="">Please select dish</option>
				                        <option value="1">$1-$50</option>
				                        <option value="2">$51-$100</option>
				                        <option value="3">$101-150</option>
				                        <option value="4">$151-$200</option>
				                        <option value="5">$201-$250</option>
				                        <option value="6">$251-$300</option>
			                      	</select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-1">
				                  <input type="submit" name="submit" id="submit" value="Search" class="btn  ">
				                </div>
				              </div>
				            </form>
						   </div>
						   
						   
			         </div>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Popular Restaurants</h2>
						<p>Check out the most popular restaurants in Hong Kong right now.</p>
						<span style = "font-size: 45px;" class="flaticon-food-3"></span>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
				<?php
				include("connection.php");

				$sql = "SELECT * FROM restaurant";
		        $result = mysqli_query($con,$sql);
		        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		        	$restid=$row['rest_id'];
		        	$restname=$row['rest_name'];
		        	$resttype=$row['rest_type'];
		        	$restregion=$row['rest_region'];
		        	$restimage=$row['rest_image'];

		        	$sql_getc="SELECT AVG(cmnt_rating) AS avg_rating,COUNT(cmnt_id) AS num_review FROM comment WHERE rest_id='$row[rest_id]'";
					$result_getc = mysqli_query($con,$sql_getc);
					$row_getc = mysqli_fetch_array($result_getc,MYSQLI_ASSOC);
					$avg = $row_getc['avg_rating'];
					$avg = number_format((float)$avg, 1, '.', '');
					$num_review = $row_getc['num_review'];


		        	echo"
		        	<a href='restaurantDetailPage.php?restid=$restid&restname=$restname' class='tour-entry animate-box'>
					<div class='tour-img' style='background-image: url(images/$restimage);'>
					</div>
					<span class='desc'>
					<p class='star'><span>";
					for($i=1;$i<=$avg;$i++){
						echo "<i class='icon-star-full'></i>";
					}
					$j=$i;
					for($i=$j;$i<=5;$i++){
						echo "<i class='icon-star-empty'></i>";
					}

					echo "
					</span>
					$num_review Reviews
					</p>
					<h2>$restname</h2>
					<span class='city'>$resttype</span>
					<span class='price'>$restregion</span>
					</span>
					</a>
		        	";
		        	
		        }
		        //<i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
				mysqli_close($con);
				?>
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
	

	</script>
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


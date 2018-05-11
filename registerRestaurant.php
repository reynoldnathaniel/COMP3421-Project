<?php
include("header.php");
?>
<!DOCTYPE html>
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
  <style type="text/css">
      #register-box{
          height: auto;
      }
  </style>
</head>
<body class="colorlib-light-grey">
	<div class="colorlib-loader"></div>
  <br>
  <center><a href="adminHomepage.php"><h1>Homepage Admin</h1></a></center>
  <div id="register-box">
    <form method="POST" action="registerRestaurantProcess.php" enctype="multipart/form-data">
      <center>
        <br>
      <h2>Registration Restaurant</h2>
<br>
      <input type="text" placeholder="Restaurant Name" name="rest_name">
      <input type="text" placeholder="Restaurant Address" name="rest_address">
      Restaurant Region
      <select name="rest_region" id="category" class="form-control">
		<option value="Central">Central</option>
		<option value="Hung Hom">Hung Hom</option>
		<option value="Tsim Sha Tsui">Tsim Sha Tsui</option>
		<option value="Wan Chai">Wan Chai</option>
		<option value="Soho">Soho</option>
		<option value="North Point">North Point</option>
	  </select>
	  Restaurant Type:
	  <select name="rest_type" id="category" class="form-control">
        <option value="Japanese">Japanese</option>
        <option value="BBQ">BBQ</option>
        <option value="American">American</option>
        <option value="Bar">Bar</option>
        <option value="European">European</option>
        <option value="Italian">Italian</option>
        <option value="Thai">Thai</option>
        <option value="Dessert">Dessert</option>
      </select>
      Opening Time:
      <select name="rest_opentime" id="category" class="form-control">
        <option value="09">09:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
        <option value="12">12:00</option>
        <option value="13">13:00</option>
        <option value="14">14:00</option>
        <option value="15">15:00</option>
        <option value="16">16:00</option>
        <option value="17">17:00</option>
        <option value="18">18:00</option>
        <option value="19">19:00</option>
        <option value="20">20:00</option>
        <option value="21">21:00</option>
        <option value="22">22:00</option>
        <option value="23">23:00</option>
      </select>
      Closing Time:
       <select name="rest_closetime" id="category" class="form-control">
        <option value="09">09:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
        <option value="12">12:00</option>
        <option value="13">13:00</option>
        <option value="14">14:00</option>
        <option value="15">15:00</option>
        <option value="16">16:00</option>
        <option value="17">17:00</option>
        <option value="18">18:00</option>
        <option value="19">19:00</option>
        <option value="20">20:00</option>
        <option value="21">21:00</option>
        <option value="22">22:00</option>
        <option value="23">23:00</option>
      </select>
      <br>
      <input type="text" placeholder="Number of Seats" name="rest_seats">
      Description<br>
      <textarea  rows="3" cols="50" name="description" placeholder="Please write down the menu description here... "></textarea>
      <br>
      <label>Image</label><br> <input type="file" name="restaurantImage" id="restaurantImage"> 
      <button type="submit" class="btn">Register!</button>
      <p style="color: red;">*Max 5MB</p>
      </center>
    </form>
    <center>
        <a href="adminHomepage.php" style="color:blue;">Back to Home Page</a>
      </center>
  </div>
</body>
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
</html>

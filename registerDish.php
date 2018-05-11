<?php
include("header.php");
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
    <style type="text/css">
        #register-box{
            height: auto;
        }
    </style>
</head>
<body class="colorlib-light-grey">
	<div class="colorlib-loader"></div>
    <center><a href="staffHomepage.php"><h1>Homepage Staff</h1></a></center>
  <div id="register-box">
    <form method="POST" action="registerDishProcess.php" enctype="multipart/form-data">
      <center>
        <br><br>
      <h2>Add Dish Page</h2>
      <br>
      <label>Name</label><input type="text" placeholder="" name="dishname">
      <label>Description</label><br><textarea  rows="5" cols="50" name="description" placeholder="Please write down the menu description here... "></textarea>
      <br><br>
      <label>Price ($HKD)</label><br><input type="number" value="100.00" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" name="price"/>
      <br><br>
      <label>Type of Dish</label><br> <select name="dishtype">
        <option>appetizers</option>
        <option>main dishes</option>
        <option>side dishes</option>
        <option>beverages</option>
        <option>desserts</option> </select>  
       <br>
      <label>Image</label><br> <input type="file" name="dishImage" id="dishImage"> 
      <p style="color: red;">* to select multiple files, hold down the CTRL or SHIFT key while selecting </p>
      <button type="submit" class="btn">Add!</button>
      </center>
    </form>
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

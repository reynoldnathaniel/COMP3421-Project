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
  <style>
  table{
    width: 90%; border:1px solid black;
  }
  td{
    padding: 15px;border:1px solid black;
  }
  tr:nth-child(even){
    background-color: #f2f2f2;
  }
  tr:hover {background-color: #f5f5f5;}
</style>
</head>
<body class="colorlib-light-grey">
	<div class="colorlib-loader"></div>
    <form method="POST" enctype="multipart/form-data">
      <center>
        <br><br>
        <a href="adminHomepage.php"><h1>Homepage Admin</h1></a><br><br>
        <input type="text" placeholder="Resturant Name" name="rest_name" value="">
        <input type="text" placeholder="Address" name="rest_address" value="">
        <input type="text" placeholder="Region" name="rest_region" value="">
        <button type="submit" class="btn">Browse</button>
        <br><br>
      <h2>List of Restaurants</h2>
      <br>

      <table>
        <tr>
          <td>Restaurant Name</td>
          <td>Restaurant Average Rating</td>
          <td>Restaurant Address</td>
          <td>Restaurant Region</td>
          <td>Restaurant Type</td>
          <td>Restaurant Opening Time</td>
          <td>Restaurant Closing Time</td>
          <td>Restaurant Number Of Seats</td>
          <td>Restaurant Dishes</td>
          <td>Delete Restaurant</td>
        </tr>
        <!-- the following tr is for debugging purpose, please keep -->
        <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td> <form action='viewDish.php' method='POST'>
                  <input type='hidden' name='restid' value='$row[rest_id]'>
                </form></td>
              <td> <form action='deleteRestaurantProcess.php' method='POST'>
                  <input type='hidden' name='restid' value='$row[rest_id]'>
                </form></td>
             
              </tr>
        <?php
            include("connection.php");
<<<<<<< HEAD
            if(isset($_POST["rest_name"])){
              $rest_name = $_POST['rest_name'];
              $rest_address = $_POST['rest_address'];
              $rest_region = $_POST['rest_region'];
             }
=======
            $sql = "SELECT * FROM restaurant";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              echo "
              <tr>
              <td>$row[rest_name]</td>
              <td>$row[rest_avg_rating]</td>
              <td>$row[rest_address]</td>
              <td>$row[rest_region]</td>
              <td>$row[rest_type]</td>
              <td>$row[rest_opentime]</td>
              <td>$row[rest_closetime]</td>
              <td>$row[rest_seats]</td>
              <td> <form action='viewDish.php' method='POST'>
                  <input type='hidden' name='restid1' value='$row[rest_id]'>
                  <button type='submit' name='viewDishButton'>View Dish</button>
                </form></td>
              <td> <form action='deleteRestaurantProcess.php' method='POST'>
                  <input type='hidden' name='restid2' value='$row[rest_id]'>
                  <button type='submit' name='deleteRestaurantButton'>Delete</button>
                </form></td>
             
              </tr>
              ";
            }
>>>>>>> 47b2ad62465e42ea8d4ff14b040a5cc616360c9f

            if(isset($_POST['rest_name']) && isset($_POST['rest_address']) && isset($_POST['rest_region'])){
              $sql = "SELECT * FROM restaurant WHERE rest_name LIKE '%$rest_name%' AND rest_address LIKE '%$rest_address%' AND rest_region LIKE '%$rest_region%'";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "
                <tr>
                <td>$row[rest_name]</td>
                <td>$row[rest_avg_rating]</td>
                <td>$row[rest_address]</td>
                <td>$row[rest_region]</td>
                <td>$row[rest_type]</td>
                <td>$row[rest_opentime]</td>
                <td>$row[rest_closetime]</td>
                <td>$row[rest_seats]</td>
                <td> <form action='viewDish.php' method='POST'>
                    <input type='hidden' name='restid' value='$row[rest_id]'>
                    <button type='submit' name='viewDishButton'>View Dish</button>
                  </form></td>
               
                </tr>
                ";
              }
            }
            else if(isset($_POST['rest_name'])){
              $sql = "SELECT * FROM restaurant WHERE rest_name LIKE '%$rest_name%'";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "
                <tr>
                <td>$row[rest_name]</td>
                <td>$row[rest_avg_rating]</td>
                <td>$row[rest_address]</td>
                <td>$row[rest_region]</td>
                <td>$row[rest_type]</td>
                <td>$row[rest_opentime]</td>
                <td>$row[rest_closetime]</td>
                <td>$row[rest_seats]</td>
                <td> <form action='viewDish.php' method='POST'>
                    <input type='hidden' name='restid' value='$row[rest_id]'>
                    <button type='submit' name='viewDishButton'>View Dish</button>
                  </form></td>
               
                </tr>
                ";
              }
            }
            else if(isset($_POST['rest_address'])){
              $sql = "SELECT * FROM restaurant WHERE rest_address LIKE '%$rest_address%'";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "
                <tr>
                <td>$row[rest_name]</td>
                <td>$row[rest_avg_rating]</td>
                <td>$row[rest_address]</td>
                <td>$row[rest_region]</td>
                <td>$row[rest_type]</td>
                <td>$row[rest_opentime]</td>
                <td>$row[rest_closetime]</td>
                <td>$row[rest_seats]</td>
                <td> <form action='viewDish.php' method='POST'>
                    <input type='hidden' name='restid' value='$row[rest_id]'>
                    <button type='submit' name='viewDishButton'>View Dish</button>
                  </form></td>
               
                </tr>
                ";
              }
            }
            else if(isset($_POST['rest_region'])){
              $sql = "SELECT * FROM restaurant WHERE rest_region LIKE '%$rest_region%'";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "
                <tr>
                <td>$row[rest_name]</td>
                <td>$row[rest_avg_rating]</td>
                <td>$row[rest_address]</td>
                <td>$row[rest_region]</td>
                <td>$row[rest_type]</td>
                <td>$row[rest_opentime]</td>
                <td>$row[rest_closetime]</td>
                <td>$row[rest_seats]</td>
                <td> <form action='viewDish.php' method='POST'>
                    <input type='hidden' name='restid' value='$row[rest_id]'>
                    <button type='submit' name='viewDishButton'>View Dish</button>
                  </form></td>
               
                </tr>
                ";
              }
            }
            else{
              $sql = "SELECT * FROM restaurant";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "
                <tr>
                <td>$row[rest_name]</td>
                <td>$row[rest_avg_rating]</td>
                <td>$row[rest_address]</td>
                <td>$row[rest_region]</td>
                <td>$row[rest_type]</td>
                <td>$row[rest_opentime]</td>
                <td>$row[rest_closetime]</td>
                <td>$row[rest_seats]</td>
                <td> <form action='viewDish.php' method='POST'>
                    <input type='hidden' name='restid' value='$row[rest_id]'>
                    <button type='submit' name='viewDishButton'>View Dish</button>
                  </form></td>
               
                </tr>
                ";
              }
            }

          ?>
           <!-- <a href=notes.php? $_SESSION["ID"]= $row["ID"] ?> -->
      </table>
      </center>
    </form>
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

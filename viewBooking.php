<?php
include("header.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Booking</title>
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
        <?php 
          if($_SESSION["user_type"] == 'staff'){
            echo "<a href='staffHomepage.php'><h1>Homepage ".$_SESSION["user_type"]."</h1></a>";
          }
          else if($_SESSION["user_type"] == 'admin'){
            echo "<a href='adminHomepage.php'><h1>Homepage ".$_SESSION["user_type"]."</h1></a>";
          }
        ?>
        <br><br>
        <input type="text" placeholder="Booking ID" name="book_id" value="">
        <input type="text" placeholder="Customer" name="user_id" value="">
        <input type="text" placeholder="Booking Date" name="book_date" value="">
        <button type="submit" class="btn">Browse</button>
        <br><br>
      <h2>List of Bookings</h2>
      <br>

      <table>
        <tr>
          <td>Booking ID</td>
          <?php 
          if($_SESSION["user_type"] == 'admin'){
            echo "<td>Restaurant</td>";
          }
          ?>
          <td>Customer</td>
          <td>Booking Date</td>
          <td>Start Time</td>
          <td>End Time</td>
          <td>Party Size</td>
          <td>Cancel Booking</td>
        </tr>
        <!-- the following tr is for debugging purpose, please keep -->
        <tr>
              <td></td>
              <td></td>
              <td></td><?php 
              if($_SESSION["user_type"] == 'admin'){
                echo "<td></td>";
              }
              ?>
              <td></td>
              <td></td>
              <td></td>
              <td> <form action='cancelBooking.php' method='POST'>
                  <input type='hidden' name='restname' value='$row[rest_name]'>
                    <input type='hidden' name='restid' value='$row[rest_id]'>
                </form></td>
             
              </tr>
        <?php
            include("connection.php");
            if(isset($_POST["book_id"])){
              $book_id = $_POST['book_id'];
              $user_id = $_POST['user_id'];
              $book_date = $_POST['book_date'];
             }

            if(isset($_POST['book_id']) && isset($_POST['user_id']) && isset($_POST['book_date'])){
              if($_SESSION["user_type"] == 'admin'){
                $sql = "SELECT * FROM booking WHERE book_id='$book_id' AND user_id='$user_id' AND book_date LIKE '%$book_date%'";
              }
              else if($_SESSION["user_type"] == 'staff'){
                $rest_id=$_SESSION["rest_id"];
                $sql = "SELECT * FROM booking WHERE book_id='$book_id' AND user_id='$user_id' AND book_date LIKE '%$book_date%' AND rest_id='$rest_id'";
              }
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $sql_getuser = "SELECT * FROM users WHERE user_id='$row[user_id]'";
                $result_getuser = mysqli_query($con,$sql_getuser);
                $row_getuser = mysqli_fetch_array($result_getuser,MYSQLI_ASSOC);
                $sql_getrest = "SELECT * FROM restaurant WHERE rest_id='$row[rest_id]'";
                $result_getrest = mysqli_query($con,$sql_getrest);
                $row_getrest = mysqli_fetch_array($result_getrest,MYSQLI_ASSOC);
                echo "
                <tr>
                <td>$row[book_id]</td>";

                if($_SESSION["user_type"] == 'admin'){
                  echo "<td><a href='viewRestaurant.php'>$row_getrest[rest_name]</a></td>";
                }
                echo "
                <td><a href='viewCustomer.php?userid=$row_getuser[user_id]'>$row_getuser[user_lname]</a></td>
                <td>$row[book_date]</td>
                <td>$row[book_time1]</td>
                <td>$row[book_time2]</td>
                <td>$row[book_size]</td>
               <td> <form action='cancelBooking.php' method='POST'>
                  <input type='hidden' name='bookid' value='$row[book_id]'>
                  <button type='submit' name='cancelBookingButton'>Cancel</button>
                </form></td>
                </tr>
                ";
              }
            }
            else if(isset($_POST['book_id'])){
              if($_SESSION["user_type"] == 'admin'){
                $sql = "SELECT * FROM booking WHERE book_id='$book_id'";
              }
              else if($_SESSION["user_type"] == 'staff'){
                $rest_id=$_SESSION["rest_id"];
                $sql = "SELECT * FROM booking WHERE book_id='$book_id' AND rest_id='$rest_id'";
              }
              
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $sql_getuser = "SELECT * FROM users WHERE user_id='$row[user_id]'";
                $result_getuser = mysqli_query($con,$sql_getuser);
                $row_getuser = mysqli_fetch_array($result_getuser,MYSQLI_ASSOC);
                $sql_getrest = "SELECT * FROM restaurant WHERE rest_id='$row[rest_id]'";
                $result_getrest = mysqli_query($con,$sql_getrest);
                $row_getrest = mysqli_fetch_array($result_getrest,MYSQLI_ASSOC);
                echo "
                <tr>
                <td>$row[book_id]</td>";

                if($_SESSION["user_type"] == 'admin'){
                  echo "<td><a href='viewRestaurant.php'>$row_getrest[rest_name]</a></td>";
                }
                echo "
                <td><a href='viewCustomer.php?userid=$row_getuser[user_id]'>$row_getuser[user_lname]</a></td>
                <td>$row[book_date]</td>
                <td>$row[book_time1]</td>
                <td>$row[book_time2]</td>
                <td>$row[book_size]</td>
               <td> <form action='cancelBooking.php' method='POST'>
                  <input type='hidden' name='bookid' value='$row[book_id]'>
                  <button type='submit' name='cancelBookingButton'>Cancel</button>
                </form></td>
                </tr>
                ";
              }
            }
            else if(isset($_POST['user_id'])){
              if($_SESSION["user_type"] == 'admin'){
                $sql = "SELECT * FROM booking WHERE user_id='$user_id'";
              }
              else if($_SESSION["user_type"] == 'staff'){
                $rest_id=$_SESSION["rest_id"];
                $sql = "SELECT * FROM booking WHERE user_id='$user_id' AND rest_id='$rest_id'";
              }
              
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $sql_getuser = "SELECT * FROM users WHERE user_id='$row[user_id]'";
                $result_getuser = mysqli_query($con,$sql_getuser);
                $row_getuser = mysqli_fetch_array($result_getuser,MYSQLI_ASSOC);
                $sql_getrest = "SELECT * FROM restaurant WHERE rest_id='$row[rest_id]'";
                $result_getrest = mysqli_query($con,$sql_getrest);
                $row_getrest = mysqli_fetch_array($result_getrest,MYSQLI_ASSOC);
                echo "
                <tr>
                <td>$row[book_id]</td>";

                if($_SESSION["user_type"] == 'admin'){
                  echo "<td><a href='viewRestaurant.php'>$row_getrest[rest_name]</a></td>";
                }
                echo "
                <td><a href='viewCustomer.php?userid=$row_getuser[user_id]'>$row_getuser[user_lname]</a></td>
                <td>$row[book_date]</td>
                <td>$row[book_time1]</td>
                <td>$row[book_time2]</td>
                <td>$row[book_size]</td>
               <td> <form action='cancelBooking.php' method='POST'>
                  <input type='hidden' name='bookid' value='$row[book_id]'>
                  <button type='submit' name='cancelBookingButton'>Cancel</button>
                </form></td>
                </tr>
                ";
              }
            }
            else if(isset($_POST['book_date'])){
              if($_SESSION["user_type"] == 'admin'){
                $sql = "SELECT * FROM booking WHERE book_date LIKE '%$book_date%'";
              }
              else if($_SESSION["user_type"] == 'staff'){
                $rest_id=$_SESSION["rest_id"];
                $sql = "SELECT * FROM booking WHERE book_date LIKE '%$book_date%' AND rest_id='$rest_id'";
              }
              
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $sql_getuser = "SELECT * FROM users WHERE user_id='$row[user_id]'";
                $result_getuser = mysqli_query($con,$sql_getuser);
                $row_getuser = mysqli_fetch_array($result_getuser,MYSQLI_ASSOC);
                $sql_getrest = "SELECT * FROM restaurant WHERE rest_id='$row[rest_id]'";
                $result_getrest = mysqli_query($con,$sql_getrest);
                $row_getrest = mysqli_fetch_array($result_getrest,MYSQLI_ASSOC);
                echo "
                <tr>
                <td>$row[book_id]</td>";

                if($_SESSION["user_type"] == 'admin'){
                  echo "<td><a href='viewRestaurant.php'>$row_getrest[rest_name]</a></td>";
                }
                echo "
                <td><a href='viewCustomer.php?userid=$row_getuser[user_id]'>$row_getuser[user_lname]</a></td>
                <td>$row[book_date]</td>
                <td>$row[book_time1]</td>
                <td>$row[book_time2]</td>
                <td>$row[book_size]</td>
               <td> <form action='cancelBooking.php' method='POST'>
                  <input type='hidden' name='bookid' value='$row[book_id]'>
                  <button type='submit' name='cancelBookingButton'>Cancel</button>
                </form></td>
                </tr>
                ";
              }
            }
            else{//nothing is set
              if($_SESSION["user_type"] == 'admin'){
                $sql = "SELECT * FROM booking";
              }
              else if($_SESSION["user_type"] == 'staff'){
                $rest_id=$_SESSION["rest_id"];
               // echo $rest_id."!!!!!!!!!!!!!!!!!";
                $sql = "SELECT * FROM booking WHERE rest_id='$rest_id'";
              }
              
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $sql_getuser = "SELECT * FROM users WHERE user_id='$row[user_id]'";
                $result_getuser = mysqli_query($con,$sql_getuser);
                $row_getuser = mysqli_fetch_array($result_getuser,MYSQLI_ASSOC);
                $sql_getrest = "SELECT * FROM restaurant WHERE rest_id='$row[rest_id]'";
                $result_getrest = mysqli_query($con,$sql_getrest);
                $row_getrest = mysqli_fetch_array($result_getrest,MYSQLI_ASSOC);
                echo "
                <tr>
                <td>$row[book_id]</td>";

                if($_SESSION["user_type"] == 'admin'){
                  echo "<td><a href='viewRestaurant.php'>$row_getrest[rest_name]</a></td>";
                }
                echo "
                <td><a href='viewCustomer.php?userid=$row_getuser[user_id]'>$row_getuser[user_lname]</a></td>
                <td>$row[book_date]</td>
                <td>$row[book_time1]</td>
                <td>$row[book_time2]</td>
                <td>$row[book_size]</td>
               <td> <form action='cancelBooking.php' method='POST'>
                  <input type='hidden' name='bookid' value='$row[book_id]'>
                  <button type='submit' name='cancelBookingButton'>Cancel</button>
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

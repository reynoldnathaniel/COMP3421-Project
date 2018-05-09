<?php
include("header.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Staff</title>
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
  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<body class="colorlib-light-grey">
	<div class="colorlib-loader"></div>
    <form method="POST" enctype="multipart/form-data">
      <center>
        <br>
        <a href="adminHomepage.php"><h1>Homepage Admin</h1></a>
        <br><br>
      <h2>List of Staffs</h2>
      <br>

      <table>
        <tr>
          <td>Staff First Name&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Staff Last Name&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Staff Email&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Restaurant&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Delete Staff</td>
        </tr>
        <!-- the following tr is for debugging purpose, please keep -->
        <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td> <form action='deleteStaffProcess.php' method='POST'>
                  <input type='hidden' name='staffid' value='$row[user_id]'>
                </form></td>
             
              </tr>
        <?php
            include("connection.php");
            $sql = "SELECT * FROM users WHERE user_type='staff'";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              echo "
              <tr>
              <td>$row[user_fname]</td>
              <td>$row[user_lname]</td>
              <td>$row[user_email]</td>
              <td>$row[rest_id]</td>
              <td> <form action='deleteStaffProcess.php' method='POST'>
                  <input type='hidden' name='staffid' value='$row[user_id]'>
                  <button type='submit' name='deleteStaffButton'>Delete</button>
                </form></td>
             
              </tr>
              ";
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

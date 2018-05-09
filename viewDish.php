<?php
include("header.php");

  if (isset($_POST['viewDishButton'])){
    $_SESSION['rest_id'] = $_POST['restid1'];
    $restid = $_POST['restid1'];
  }

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dish</title>
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
</head>
<body class="colorlib-light-grey">
	<div class="colorlib-loader"></div>
    <form method="POST" enctype="multipart/form-data">
      <center>
        <br>
        <a href="adminHomepage.php"><h1>Homepage Admin</h1></a>
        <br><br>
      <h2>List of Dishes for Restaurant <?php echo $_SESSION['rest_id'];?></h2>

      <br>

      <table>
        <tr>
          <td>Dish Name&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Dish Price&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Dish Type&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Dish Description&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td>Delete Dish</td>
        </tr>
        <!-- the following tr is for debugging purpose, please keep -->
        <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td> <form action='deleteDishProcess.php' method='POST'>
                  <input type='hidden' name='dishid' value='$row[dish_id]'>
                </form></td>
              </tr>
        <?php
            include("connection.php");
            $restid = $_SESSION['rest_id'];
            $sql = "SELECT * FROM dish WHERE rest_id='$restid'";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
              echo "
              <tr>
              <td>$row[dish_name]</td>
              <td>$row[dish_price]</td>
              <td>$row[dish_type]</td>
              <td>$row[dish_description]</td>
              <td> <form action='deleteDishProcess.php' method='POST'>
                  <input type='hidden' name='dishid' value='$row[dish_id]'>
                  <button type='submit' name='deleteDishButton'>Delete</button>
                </form></td>
              </tr>
              ";
            }


          ?>
      </table><br><br>
      </center>
    </form>

    <form method="POST" action="registerDish.php" >
      <center>
        <button type='submit' name='registerDishButton'>Add Dish</button><br><br>
      </center>
      </form>

    <form method="POST" action="viewRestaurant.php" >
      <center>
        <button type='submit' name='backButton'>Back</button>
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

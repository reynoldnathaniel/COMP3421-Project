<!DOCTYPE HTML>
<?php
include("header.php");
echo "<script>var user_id = $_SESSION[user_id];</script>";
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tour Template</title>
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

    <style>
body .static-header {
  max-width: 900px;
  overflow: hidden;
  box-sizing: border-box;
  margin-left: 20px;
}

body .static-header nav {
  max-width: 400px;
  margin-left: 0;
}
body .static-header nav a {
  display: inline-block;
  color: #666666;
  text-decoration: none;
  font-size: 14px;
  cursor: pointer;
}
body .static-header nav a:not(:last-of-type) {
  padding-right: 30px;
}
body .static-header nav a:hover {
  color: #ffcc00;
}

body .container__content {
  margin: 0 auto;
  max-width: 900px;
  background: rgba(255, 255, 255, 0.8);
  box-sizing: border-box;
  min-height: 1000px;
  overflow: hidden;
  padding: 15px;
  clear: both;
}
body .container__content > div {
  min-height: 300px;
  display: block;
  overflow: hidden;
}
body .container__content > div h2 {
  font-weight: bold;
}
body .container__content > div h1 {
  text-align: center;
  line-height: 300px;
  color: #666666;
  margin: 0;
}

body .container__content > div.section4 {
  background: #ddebfd;
}

.rating-gly {
    font-family: 'Glyphicons Halflings' !important;
}
.rating-gly-star {
    font-family: 'Glyphicons Halflings' !important;
    padding-left: 2px;
}

.rating-gly-star .rating-stars:before {
    padding-left: 2px;
}

.rating-lg .rating-gly-star, .rating-lg .rating-gly-star .rating-stars:before {
    padding-left: 4px;
}

.rating-xl .rating-gly-star, .rating-xl .rating-gly-star .rating-stars:before {
    padding-left: 2px;
}

.rating-active {
    cursor: default;
}

.rating-disabled {
    cursor: not-allowed;
}

.rating-uni {
    font-size: 1.2em;
    margin-top: -5px;
}

.rating-container {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    color: #e3e3e3;
    overflow: hidden;
}

.rating-container:before {
    content: attr(data-content);
}

.rating-container .rating-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #fde16d;
    transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -webkit-transition: all 0.25s ease-out;
}

.rating-container .rating-stars:before {
    content: attr(data-content);
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
}

.rating-container-rtl {
    position: relative;
    vertical-align: middle;
    display: inline-block;
    overflow: hidden;
    color: #fde16d;
}

.rating-container-rtl:before {
    content: attr(data-content);
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.7);
}

.rating-container-rtl .rating-stars {
    position: absolute;
    left: 0;
    top: 0;
    white-space: nowrap;
    overflow: hidden;
    color: #e3e3e3;
    transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    -webkit-transition: all 0.25s ease-out;
}

.rating-container-rtl .rating-stars:before {
    content: attr(data-content);
}

/**
 * Rating sizes
 */
.rating-xl {
    font-size: 4.89em;
}

.rating-lg {
    font-size: 3.91em;
}

.rating-md {
    font-size: 3.13em;
}

.rating-sm {
    font-size: 2.5em;
}

.rating-xs {
    font-size: 2em;
}

/**
 * Clear rating button
 */
.star-rating .clear-rating, .star-rating-rtl .clear-rating {
    color: #aaa;
    cursor: not-allowed;
    display: inline-block;
    vertical-align: middle;
    font-size: 60%;
}

.clear-rating-active {
    cursor: pointer !important;
}

.clear-rating-active:hover {
    color: #843534;
}

.star-rating .clear-rating {
    padding-right: 5px;
}

/**
 * Caption
 */
.star-rating .caption, .star-rating-rtl .caption {
    color: #999;
    display: inline-block;
    vertical-align: middle;
    font-size: 55%;
}

.star-rating .caption {
    padding-left: 5px;
}

.star-rating-rtl .caption {
    padding-right: 5px;
}
.glyphicon-lg{font-size:3em}
.blockquote-box{border-right:5px solid #E6E6E6;margin-bottom:25px}
.blockquote-box .square{width:100px;min-height:50px;margin-right:22px;text-align:center!important;background-color:#E6E6E6;padding:20px 0}
.blockquote-box.blockquote-primary{border-color:#357EBD}
.blockquote-box.blockquote-primary .square{background-color:#428BCA;color:#FFF}
.blockquote-box.blockquote-success{border-color:#4CAE4C}
.blockquote-box.blockquote-success .square{background-color:#5CB85C;color:#FFF}
.blockquote-box.blockquote-info{border-color:#46B8DA}
.blockquote-box.blockquote-info .square{background-color:#5BC0DE;color:#FFF}
.blockquote-box.blockquote-warning{border-color:#EEA236}
.blockquote-box.blockquote-warning .square{background-color:#F0AD4E;color:#FFF}
.blockquote-box.blockquote-danger{border-color:#D43F3A}
.blockquote-box.blockquote-danger .square{background-color:#D9534F;color:#FFF}


.reviews{
  padding: 15px;
  max-width: 768px;
  margin: 0 auto;
}

.review-item{
  background-color: white;
  padding: 15px;
  margin-bottom: 5px;
  box-shadow: 1px 1px 5px #343a40;
}

.review-item .review-date{
  color: #cecece;
}
.review-item .review-text{
  font-size: 16px;
  font-weight: normal;
  margin-top: 5px;
  color: #343a40;
}

.review-item .reviewer{
  width: 100px;
  height: 100px;
  border: 1px solid #cecece;
}


    </style>

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
                    <?php
                    $restid  = $_GET['restid'];
                    echo "<script>var rest_id = $restid;</script>";
                    $restname = $_GET['restname'];
                    $_SESSION['rest_id'] = $restid;
                    $_SESSION['rest_name'] = $restname;
                    include("connection.php");
                    $sql = "SELECT * FROM restaurant WHERE rest_id='$restid'";
                    $result = mysqli_query($con,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    echo "<li style='background-image: url(images/$row[rest_image]);'>";
                    mysqli_close($con);
                    ?>
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                               
                               <!-- Restaurant Name -->   
                                    <?php
                                    
                                    echo "<h1>".$_SESSION['rest_name']."</h1>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </aside>


<!-- Restaurant name & addr -->    

        <div class="colorlib-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="wrap-division">
                                    <div class="col-md-12 col-md-offset-0 heading2 animate-box">
                                        <?php
                                        
                                        echo "<h2>".$_SESSION['rest_name']."</h2>";
                                        include("connection.php");
                                        $restid=$_SESSION['rest_id'];
                                        $sql = "SELECT * FROM restaurant WHERE rest_id='$restid'";
                                        $result = mysqli_query($con,$sql);
                                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                        echo "<h4>".$row['rest_address']."</h4>";
                                        mysqli_close($con);
                                        ?>
                                    </div>

                                
                                    <!-- Nav -->                                    
                                    <div class="row">
                                      <div class="col-md-12 animate-box">
                                        <header class="static-header">
                                          <nav>
                                            <a href="#section1">Overview</a>
                                            <a href="#section2">Menu</a>
                                            <a href="#section3">Reviews</a>
                                            <a href="#section4"></a>
                                          </nav>
                                        </header>

                                    <!-- Overview - restaurant description -->   

                                      <div class="container__content">
                                        <div id="section1" class="section1">
                                            <h2>Overview</h2>
                                            <?php
                                            include("connection.php");
                                            $restid=$_SESSION['rest_id'];
                                            $sql = "SELECT * FROM restaurant WHERE rest_id='$restid'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                            echo "<p>".$row['rest_description']."</p>";
                                            mysqli_close($con);
                                            ?>
                                        </div>

                                        <!-- MENU -->   

                                        <div id="section2" class="section2">
                                            <?php
                                            $restid = $_SESSION['rest_id'];
                                            $restname = $_SESSION['rest_name'];
                                            echo "<h2><a href='menuPage.php?restid=$restid&restname=$restname'>Menu</a></h2>";

                                            include("connection.php");
                                            $restid=$_SESSION['rest_id'];
                                            $sql = "SELECT * FROM dish WHERE rest_id='$restid'";
                                            $result = mysqli_query($con,$sql);
                                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                                echo "
                                            <div class='row'>
                                                <div class='col-md-12 animate-box'>
                                                    <div class='room-wrap'>
                                                        <div class='row'>
                                                            <div class='col-md-10 col-sm-10'>
                                                                <h2>$row[dish_name]</h2>
                                                                <p>$row[dish_description]</p>
                                                            </div>
                                                            <div class='col-md-2 col-sm-2'>
                                                                <div class='desc'>
                                                                    <h2>$$row[dish_price]</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>";


                                            }
                                            mysqli_close($con);
                                            ?>
                                            
                                           <?php
                                           $restid = $_SESSION['rest_id'];
                                            $restname = $_SESSION['rest_name'];
                                            echo "<h4><a href='menuPage.php?restid=$restid&restname=$restname'>View Menu</a></h4>";
                                           ?>
                                    <br><br><br>
                                        <div id="section3" class="section3">
                                            <h2>Reviews</h2>
                                        </div>



<div class="row">
    <table width="100%">
      <div class="col-md-12 animate-box">
        <tr><td>
        <div class="">
          <form action="commentProcess.php" method="post" enctype="multipart/form-data">
          <fieldset>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="name">Your Full Name</label>
              <!-- <div class="col-md-10">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div> -->
              <h3><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"];?></h3>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Your E-mail</label>
              <!-- <div class="col-md-10">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div> -->
              <h3><?php echo $_SESSION["email"];?></h3>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your feedback here..." rows="5" cols="30"></textarea>
              </div>
            </div>

            <!-- Rating -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Your rating</label>
              <div class="col-md-10">
                <input id="star" value="0" type="number" name="rating" class="rating" min=0 max=5 step=0.5 data-size="xs" >
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-md" name="submit">Submit</button>
                <button type="reset" class="btn btn-default btn-md">Clear</button>
              </div>
            </div>

          </fieldset>
          </form>
        </div>
    </td>
    </tr>
    </div>
    </table>
</div>

<br><br><br>


<?php
    $restid = $_SESSION['rest_id'];
    $restname = $_SESSION['rest_name'];
    include("connection.php");
    $restid=$_SESSION['rest_id'];
    $sql = "SELECT * FROM comment WHERE rest_id='$restid'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        $sql_getuser = "SELECT * FROM users WHERE user_id='$row[user_id]'";
        $result_getuser = mysqli_query($con,$sql_getuser);
        $row_getuser = mysqli_fetch_array($result_getuser,MYSQLI_ASSOC);
        //$name=$row_getuser['user_lname'];
        echo "
<div class='row'>
<div class='reviews'>
  <div class='row blockquote review-item'>
    <div class='col-md-3 text-center'>
      <img class='rounded-circle reviewer' src='http://standaloneinstaller.com/upload/avatar.png'>
      <div class='caption'>
        <small>by <a href='#joe'>$row_getuser[user_lname]</a></small>
      </div>

    </div>
    <div class='col-md-9'>
     <h2>Rating: $row[cmnt_rating]/5.0</h2>
      <p class='review-text'>$row[cmnt_msg]</p>
    </div>                          
  </div>  
</div>
</div>
        ";
    }
mysqli_close($con);
?>

</div> <!-- end of section3 -->

</div>
</div>
</div>

       
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SIDEBAR-->
                    <div class="col-md-3">
                        <div class="sidebar-wrap">
                              <?php
                                echo"
                                <a href='bookingPage.php?restid=$restid&restname=$restname' class='btn btn-primary'>Book Now!</a>";
                                include("connection.php");
                                $sql_getfavorite = "SELECT * FROM favorite WHERE user_id='$_SESSION[user_id]' AND rest_id='$restid'";
                                $result_getfavorite = mysqli_query($con,$sql_getfavorite);
                                $row_getfavorite = mysqli_num_rows($result_getfavorite);
                                if($row_getfavorite==0){
                                  echo "<input type='button' value='Favorite' id='favorite' onclick='favoriteProcess()'>";
                                }
                                else if($row_getfavorite==1){
                                  echo "<input type='button' value='Unfavorite' id='favorite' onclick='favoriteProcess()'>";
                                }
                              ?>
                              <script>
                                function favoriteProcess(){
                                  var xhttp;
                                  xhttp = new XMLHttpRequest();
                                  xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                      resultText = this.responseText;
                                      if(document.getElementById("favorite").value=="Favorite"){
                                        document.getElementById("favorite").value = "Unfavorite";
                                      }
                                      else if(document.getElementById("favorite").value=="Unfavorite"){
                                        document.getElementById("favorite").value = "Favorite";
                                      }
                                    }
                                  };
                                  xhttp.open("GET", "favoriteProcess.php?user_id="+user_id+"&rest_id="+rest_id+"&favorite="+document.getElementById("favorite").value, false);
                                  xhttp.send();
                                }
                              </script>


                        </div>
                    </div>
                    <br><br><br>



          <div class="col-md-3">
            <div class="sidebar-wrap">
              <div class="side search-wrap animate-box">
                <h1 style='color:white;'>News</h1>
                <?php
                include("connection.php");
                $restis=$_SESSION['rest_id'];
                $sql = "SELECT * FROM news WHERE rest_id='$restid'";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  echo "<h1 style='color:white;'>- - - - - - - - -</h1>";
                  echo "<h4 style='color:white;'>".$row['news_type']."</h4>";
                  if($row['news_discount']!=0){
                    echo "<h3 style='color:red;'>".$row['news_discount']." % OFF</h3>";
                  }
                  echo "<h5 style='color:white;'>".$row['news_msg']."</h5>";


                }




                mysqli_close($con);
                ?>
                
              </div>
            </div>
          </div>
              



                    <!-- end side bar -->
                </div>
            </div>
        </div>

    
        <div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <h2>Sign Up for a Newsletter</h2>
                        <p>Sign up for our mailing list to get latest updates and offers.</p>
                        <form class="form-inline qbstp-header-subscribe">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>Tour Agency</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                        <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-2 colorlib-widget">
                        <h4>Book Now</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Flight</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Tour</a></li>
                                <li><a href="#">Car Rent</a></li>
                                <li><a href="#">Beach &amp; Resorts</a></li>
                                <li><a href="#">Cruises</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-2 colorlib-widget">
                        <h4>Top Deals</h4>
                        <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Edina Hotel</a></li>
                                <li><a href="#">Quality Suites</a></li>
                                <li><a href="#">The Hotel Zephyr</a></li>
                                <li><a href="#">Da Vinci Villa</a></li>
                                <li><a href="#">Hotel Epikk</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <h4>Blog Post</h4>
                        <ul class="colorlib-footer-links">
                            <li><a href="#">The Ultimate Packing List For Female Travelers</a></li>
                            <li><a href="#">How These 5 People Found The Path to Their Dream Trip</a></li>
                            <li><a href="#">A Definitive Guide to the Best Dining and Drinking Venues in the City</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                            <li><a href="#">yoursite.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
                            <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                        </p>
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

    <script>
    $(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });
    
});
    
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 200) {
        $(".fixed-header").slideDown();
    } else {
        $(".fixed-header").slideUp();
    }
})
</script>

<script>
    
    (function ($) {
    var DEFAULT_MIN = 0;
    var DEFAULT_MAX = 5;
    var DEFAULT_STEP = 0.5;

    var isEmpty = function (value, trim) {
        return typeof value === 'undefined' || value === null || value === undefined || value == []
            || value === '' || trim && $.trim(value) === '';
    };

    var validateAttr = function ($input, vattr, options) {
        var chk = isEmpty($input.data(vattr)) ? $input.attr(vattr) : $input.data(vattr);
        if (chk) {
            return chk;
        }
        return options[vattr];
    };

    var getDecimalPlaces = function (num) {
        var match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
        if (!match) {
            return 0;
        }
        return Math.max(0, (match[1] ? match[1].length : 0) - (match[2] ? +match[2] : 0));
    };

    var applyPrecision = function (val, precision) {
        return parseFloat(val.toFixed(precision));
    };

    // Rating public class definition
    var Rating = function (element, options) {
        this.$element = $(element);
        this.init(options);
    };

    Rating.prototype = {
        constructor: Rating,
        _parseAttr: function (vattr, options) {
            var self = this, $input = self.$element;
            if ($input.attr('type') === 'range' || $input.attr('type') === 'number') {
                var val = validateAttr($input, vattr, options);
                var chk = DEFAULT_STEP;
                if (vattr === 'min') {
                    chk = DEFAULT_MIN;
                }
                else if (vattr === 'max') {
                    chk = DEFAULT_MAX;
                }
                else if (vattr === 'step') {
                    chk = DEFAULT_STEP;
                }
                var final = isEmpty(val) ? chk : val;
                return parseFloat(final);
            }
            return parseFloat(options[vattr]);
        },
        /**
         * Listens to events
         */
        listen: function () {
            var self = this;
            self.$rating.on("click", function (e) {
                if (!self.inactive) {
                    w = e.pageX - self.$rating.offset().left;
                    self.setStars(w);
                    self.$element.trigger('change');
                    self.$element.trigger('rating.change', [self.$element.val(), self.$caption.html()]);
                }
            });
            self.$clear.on("click", function (e) {
                if (!self.inactive) {
                    self.clear();
                }
            });
            $(self.$element[0].form).on("reset", function (e) {
                if (!self.inactive) {
                    self.reset();
                }
            });
        },
        initSlider: function (options) {
            var self = this;
            if (isEmpty(self.$element.val())) {
                self.$element.val(0);
            }
            self.initialValue = self.$element.val();
            self.min = (typeof options.min !== 'undefined') ? options.min : self._parseAttr('min', options);
            self.max = (typeof options.max !== 'undefined') ? options.max : self._parseAttr('max', options);
            self.step = (typeof options.step !== 'undefined') ? options.step : self._parseAttr('step', options);
            if (isNaN(self.min) || isEmpty(self.min)) {
                self.min = DEFAULT_MIN;
            }
            if (isNaN(self.max) || isEmpty(self.max)) {
                self.max = DEFAULT_MAX;
            }
            if (isNaN(self.step) || isEmpty(self.step) || self.step == 0) {
                self.step = DEFAULT_STEP;
            }
            self.diff = self.max - self.min;
        },
        /**
         * Initializes the plugin
         */
        init: function (options) {
            var self = this;
            self.options = options;
            self.initSlider(options);
            self.checkDisabled();
            $element = self.$element;
            self.containerClass = options.containerClass;
            self.glyphicon = options.glyphicon;
            var defaultStar = (self.glyphicon) ? '\u2605' : '\u2605';
            self.symbol = isEmpty(options.symbol) ? defaultStar : options.symbol;
            self.rtl = options.rtl || self.$element.attr('dir');
            if (self.rtl) {
                self.$element.attr('dir', 'rtl');
            }
            self.showClear = options.showClear;
            self.showCaption = options.showCaption;
            self.size = options.size;
            self.stars = options.stars;
            self.defaultCaption = options.defaultCaption;
            self.starCaptions = options.starCaptions;
            self.starCaptionClasses = options.starCaptionClasses;
            self.clearButton = options.clearButton;
            self.clearButtonTitle = options.clearButtonTitle;
            self.clearButtonBaseClass = !isEmpty(options.clearButtonBaseClass) ? options.clearButtonBaseClass : 'clear-rating';
            self.clearButtonActiveClass = !isEmpty(options.clearButtonActiveClass) ? options.clearButtonActiveClass : 'clear-rating-active';
            self.clearCaption = options.clearCaption;
            self.clearCaptionClass = options.clearCaptionClass;
            self.clearValue = options.clearValue;
            self.$element.removeClass('form-control').addClass('form-control');
            self.$clearElement = isEmpty(options.clearElement) ? null : $(options.clearElement);
            self.$captionElement = isEmpty(options.captionElement) ? null : $(options.captionElement);
            if (typeof self.$rating == 'undefined' && typeof self.$container == 'undefined') {
                self.$rating = $(document.createElement("div")).html('<div class="rating-stars"></div>');
                self.$container = $(document.createElement("div"));
                self.$container.before(self.$rating);
                self.$container.append(self.$rating);
                self.$element.before(self.$container).appendTo(self.$rating);
            }
            self.$stars = self.$rating.find('.rating-stars');
            self.generateRating();
            self.$clear = !isEmpty(self.$clearElement) ? self.$clearElement : self.$container.find('.' + self.clearButtonBaseClass);
            self.$caption = !isEmpty(self.$captionElement) ? self.$captionElement : self.$container.find(".caption");
            self.setStars();
            self.$element.hide();
            self.listen();
            if (self.showClear) {
                self.$clear.attr({"class": self.getClearClass()});
            }
            self.$element.removeClass('rating-loading');
        },
        checkDisabled: function () {
            var self = this;
            self.disabled = validateAttr(self.$element, 'disabled', self.options);
            self.readonly = validateAttr(self.$element, 'readonly', self.options);
            self.inactive = (self.disabled || self.readonly);
        },
        getClearClass: function () {
            return this.clearButtonBaseClass + ' ' + ((this.inactive) ? '' : this.clearButtonActiveClass);
        },
        generateRating: function () {
            var self = this, clear = self.renderClear(), caption = self.renderCaption(),
                css = (self.rtl) ? 'rating-container-rtl' : 'rating-container',
                stars = self.getStars();
            css += (self.glyphicon) ? ((self.symbol == '\u2605') ? ' rating-gly-star' : ' rating-gly') : ' rating-uni';
            self.$rating.attr('class', css);
            self.$rating.attr('data-content', stars);
            self.$stars.attr('data-content', stars);
            var css = self.rtl ? 'star-rating-rtl' : 'star-rating';
            self.$container.attr('class', css + ' rating-' + self.size);

            if (self.inactive) {
                self.$container.removeClass('rating-active').addClass('rating-disabled');
            }
            else {
                self.$container.removeClass('rating-disabled').addClass('rating-active');
            }

            if (typeof self.$caption == 'undefined' && typeof self.$clear == 'undefined') {
                if (self.rtl) {
                    self.$container.prepend(caption).append(clear);
                }
                else {
                    self.$container.prepend(clear).append(caption);
                }
            }
            if (!isEmpty(self.containerClass)) {
                self.$container.removeClass(self.containerClass).addClass(self.containerClass);
            }
        },
        getStars: function () {
            var self = this, numStars = self.stars, stars = '';
            for (var i = 1; i <= numStars; i++) {
                stars += self.symbol;
            }
            return stars;
        },
        renderClear: function () {
            var self = this;
            if (!self.showClear) {
                return '';
            }
            var css = self.getClearClass();
            if (!isEmpty(self.$clearElement)) {
                self.$clearElement.removeClass(css).addClass(css).attr({"title": self.clearButtonTitle});
                self.$clearElement.html(self.clearButton);
                return '';
            }
            return '<div class="' + css + '" title="' + self.clearButtonTitle + '">' + self.clearButton + '</div>';
        },
        renderCaption: function () {
            var self = this, val = self.$element.val();
            if (!self.showCaption) {
                return '';
            }
            var html = self.fetchCaption(val);
            if (!isEmpty(self.$captionElement)) {
                self.$captionElement.removeClass('caption').addClass('caption').attr({"title": self.clearCaption});
                self.$captionElement.html(html);
                return '';
            }
            return '<div class="caption">' + html + '</div>';
        },
        fetchCaption: function (rating) {
            var self = this;
            var val = parseFloat(rating), css, cap;
            if (typeof(self.starCaptionClasses) == "function") {
                css = isEmpty(self.starCaptionClasses(val)) ? self.clearCaptionClass : self.starCaptionClasses(val);
            } else {
                css = isEmpty(self.starCaptionClasses[val]) ? self.clearCaptionClass : self.starCaptionClasses[val];
            }
            if (typeof(self.starCaptions) == "function") {
                var cap = isEmpty(self.starCaptions(val)) ? self.defaultCaption.replace(/\{rating\}/g, val) : self.starCaptions(val);
            } else {
                var cap = isEmpty(self.starCaptions[val]) ? self.defaultCaption.replace(/\{rating\}/g, val) : self.starCaptions[val];
            }
            var caption = (val == self.clearValue) ? self.clearCaption : cap;
            return '<span class="' + css + '">' + caption + '</span>';
        },
        getValueFromPosition: function (pos) {
            var self = this, precision = getDecimalPlaces(self.step),
                percentage, val, maxWidth = self.$rating.width();
            percentage = (pos / maxWidth);
            if (self.rtl) {
                val = (self.min + Math.floor(self.diff * percentage / self.step) * self.step);
            }
            else {
                val = (self.min + Math.ceil(self.diff * percentage / self.step) * self.step);
            }
            if (val < self.min) {
                val = self.min;
            }
            else if (val > self.max) {
                val = self.max;
            }
            val = applyPrecision(parseFloat(val), precision);
            if (self.rtl) {
                val = self.max - val;
            }
            return val;
        },
        setStars: function (pos) {
            var self = this, min = self.min, max = self.max, step = self.step,
                val = arguments.length ? self.getValueFromPosition(pos) : (isEmpty(self.$element.val()) ? 0 : self.$element.val()),
                width = 0, maxWidth = self.$rating.width(), caption = self.fetchCaption(val);
            width = (val - min) / max * 100;
            if (self.rtl) {
                width = 100 - width;
            }
            self.$element.val(val);
            width += '%';
            self.$stars.css('width', width);
            self.$caption.html(caption);
        },
        clear: function () {
            var self = this;
            var title = '<span class="' + self.clearCaptionClass + '">' + self.clearCaption + '</span>';
            self.$stars.removeClass('rated');
            if (!self.inactive) {
                self.$caption.html(title);
            }
            self.$element.val(self.clearValue);
            self.setStars();
            self.$element.trigger('rating.clear');
        },
        reset: function () {
            var self = this;
            self.$element.val(self.initialValue);
            self.setStars();
            self.$element.trigger('rating.reset');
        },
        update: function (val) {
            if (arguments.length > 0) {
                var self = this;
                self.$element.val(val);
                self.setStars();
            }
        },
        refresh: function (options) {
            var self = this;
            if (arguments.length) {
                var cap = '';
                self.init($.extend(self.options, options));
                if (self.showClear) {
                    self.$clear.show();
                }
                else {
                    self.$clear.hide();
                }
                if (self.showCaption) {
                    self.$caption.show();
                }
                else {
                    self.$caption.hide();
                }
            }
        }
    };

    //Star rating plugin definition
    $.fn.rating = function (option) {
        var args = Array.apply(null, arguments);
        args.shift();
        return this.each(function () {
            var $this = $(this),
                data = $this.data('rating'),
                options = typeof option === 'object' && option;

            if (!data) {
                $this.data('rating', (data = new Rating(this, $.extend({}, $.fn.rating.defaults, options, $(this).data()))));
            }

            if (typeof option === 'string') {
                data[option].apply(data, args);
            }
        });
    };

    $.fn.rating.defaults = {
        stars: 5,
        glyphicon: true,
        symbol: null,
        disabled: false,
        readonly: false,
        rtl: false,
        size: 'md',
        showClear: true,
        showCaption: true,
        defaultCaption: '{rating} Stars',
        starCaptions: {
            0.5: 'Half Star',
            1: 'One Star',
            1.5: 'One & Half Star',
            2: 'Two Stars',
            2.5: 'Two & Half Stars',
            3: 'Three Stars',
            3.5: 'Three & Half Stars',
            4: 'Four Stars',
            4.5: 'Four & Half Stars',
            5: 'Five Stars'
        },
        starCaptionClasses: {
            0.5: 'label label-danger',
            1: 'label label-danger',
            1.5: 'label label-warning',
            2: 'label label-warning',
            2.5: 'label label-info',
            3: 'label label-info',
            3.5: 'label label-primary',
            4: 'label label-primary',
            4.5: 'label label-success',
            5: 'label label-success'
        },
        clearButton: '<i class="glyphicon glyphicon-minus-sign"></i>',
        clearButtonTitle: 'Clear',
        clearButtonBaseClass: 'clear-rating',
        clearButtonActiveClass: 'clear-rating-active',
        clearCaption: 'Not Rated',
        clearCaptionClass: 'label label-default',
        clearValue: 0,
        captionElement: null,
        clearElement: null,
        containerClass: null
    };


    /**
     * Convert automatically number inputs with class 'rating'
     * into the star rating control.
     */
    $('input.rating').addClass('rating-loading');

    $(document).ready(function () {
        var $input = $('input.rating'), count = Object.keys($input).length;
        if (count > 0) {
            $input.rating();
        }
    });
}(jQuery));
</script>

    </body>
</html>


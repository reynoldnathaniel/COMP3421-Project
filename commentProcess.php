<?php

if(isset($_POST["submit"])) {
session_start();
  $message = $_POST["message"];
  $rating = $_POST["rating"];
  $restid = $_SESSION['rest_id'];
  $userid = $_SESSION['user_id'];
  if($message == "" || $rating == "" ){
    echo "<script type='text/javascript'>alert('Please fill in the missing fields.');window.location.replace(\"restaurantDetailPage.php\");</script>";
  }
  else{
    include("connection.php");
    mysqli_query($con,"
      INSERT INTO
      comment(cmnt_msg,cmnt_rating,rest_id,user_id)
      VALUES('$message','$rating','$restid','$userid')");
      echo "<script type='text/javascript'>alert('Thank you for reviewing');window.location.replace(\"profile.php\");</script>";
      mysqli_close($con);
  }
}
?>

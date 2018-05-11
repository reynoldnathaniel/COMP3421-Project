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
    $query = "SELECT * FROM restaurant WHERE rest_id='$restid'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $restname=$row['rest_name'];
    mysqli_query($con,"
      INSERT INTO
      comment(cmnt_msg,cmnt_rating,rest_id,user_id)
      VALUES('$message','$rating','$restid','$userid')");
      echo "<script type='text/javascript'>alert('Thank you for reviewing');window.location.replace(\"restaurantDetailPage.php?restid=$restid&restname=$restname\");</script>";
      mysqli_close($con);
  }
}
?>

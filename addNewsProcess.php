<?php
  session_start();
  $msg = $_POST["message"];
  $discount = $_POST["discount"];
  $type = $_POST["newstype"];

  if($msg == "" || $type == ""){
    echo "<script type='text/javascript'>alert('Please fill in the missing fields.');window.location.replace(\"addNews.php\");</script>";
  }
  else if($discount!=0&&$type!="Discount"){
    echo "<script type='text/javascript'>alert('Please fill in correct information.');window.location.replace(\"addNews.php\");</script>";
  }

  else if($discount==0&&$type=="Discount"){
    echo "<script type='text/javascript'>alert('Please fill in correct information.');window.location.replace(\"addNews.php\");</script>";
  }

  else{
    include("connection.php");
    $restid=$_SESSION["rest_id"];
  	mysqli_query($con,"
    INSERT INTO
    news(news_type,news_discount,news_msg,rest_id)
    VALUES('$type','$discount','$msg','$restid')");
    echo "<script type='text/javascript'>alert('News Added!');window.location.replace(\"viewNews.php\");</script>";
 
    mysqli_close($con);
  }
?>


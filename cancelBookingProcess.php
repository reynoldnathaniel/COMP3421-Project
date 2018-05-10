<?php
  if (isset($_POST['cancelBookingButton'])){
    session_start();
    $bookid = $_POST['bookid'];
    include("connection.php");
    $delete_book = "DELETE FROM booking WHERE book_id='$bookid'";
    if(mysqli_query($con,$delete_book)){
      if($_SESSION["user_type"]=='admin'||$_SESSION["user_type"]=='staff'){
        echo "<script type='text/javascript'>alert('booking record was deleted successfully');window.location.replace(\"viewBooking.php\");</script>";
      }
      else if($_SESSION["user_type"]=='customer'){
        echo "<script type='text/javascript'>alert('booking record was deleted successfully');window.location.replace(\"profile.php\");</script>";
      }
    }
    else{
        echo "<script type='text/javascript'>alert('Delete Failed!');window.location.replace(\"viewBooking.php\");</script>";
      }
    }

    mysqli_close($con);

?>


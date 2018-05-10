<?php
  if (isset($_POST['cancelBookingButton'])){
    $bookid = $_POST['bookid'];
    include("connection.php");
    $delete_book = "DELETE FROM booking WHERE book_id='$bookid'";
    if(mysqli_query($con,$delete_book)){
      echo "<script type='text/javascript'>alert('booking record was deleted successfully');window.location.replace(\"viewBooking.php\");</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Delete Failed!');window.location.replace(\"viewBooking.php\");</script>";
      }
    }

    mysqli_close($con);

?>


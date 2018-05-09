<?php
  if (isset($_POST['deleteRestaurantButton'])){
    $restid = $_POST['restid'];
    include("connection.php");
    $delete_rest = "DELETE FROM restaurant WHERE rest_id='$restid'";
    $delete_dish = "DELETE FROM dish WHERE rest_id='$restid'";
    $delete_staff = "DELETE FROM users WHERE rest_id='$restid'";
    if(mysqli_query($con,$delete_dish) && mysqli_query($con,$delete_staff)&&mysqli_query($con,$delete_rest)){
      echo "<script type='text/javascript'>alert('Restaurant record was deleted successfully');window.location.replace(\"viewRestaurant.php\");</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Delete Failed!');window.location.replace(\"viewRestaurant.php\");</script>";
      }
    }

    mysqli_close($con);

?>


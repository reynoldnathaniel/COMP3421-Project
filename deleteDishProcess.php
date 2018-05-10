<?php
session_start();
  if (isset($_POST['deleteDishButton'])){
    $dishid = $_POST['dishid'];
    include("connection.php");
    if(mysqli_query($con, "DELETE FROM dish WHERE dish_id='$dishid'")){
      echo "<script type='text/javascript'>alert('Dish record was deleted successfully');window.location.replace(\"viewDish.php\");</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('Delete Failed!');window.location.replace(\"viewDish.php\");</script>";
    }

    mysqli_close($con);




  }
?>


<?php
  if (isset($_POST['deleteStaffButton'])){
    $staffid = $_POST['staffid'];
    include("connection.php");
    if(mysqli_query($con, "DELETE FROM users WHERE user_id='$staffid'")){
      echo "<script type='text/javascript'>alert('Staff record was deleted successfully');window.location.replace(\"viewStaff.php\");</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('Delete Failed!');window.location.replace(\"viewStaff.php\");</script>";
    }

    mysqli_close($con);




  }
?>


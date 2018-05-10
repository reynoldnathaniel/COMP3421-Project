<?php
  session_start();
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $dateofbirth = $_POST["dateofbirth"];
  $id = $_SESSION["user_id"];
  if($firstname == $_SESSION["firstname"] && $lastname == $_SESSION["lastname"] && $email == $_SESSION["email"] && $phonenumber == $_SESSION["phone"] && $dateofbirth == $_SESSION["DOB"]){
    echo "<script type='text/javascript'>alert('You did not make any changes.');window.location.replace(\"editProfile.php\");</script>";
  }
  else{
    include("connection.php");
    mysqli_query($con,"
      UPDATE users 
      SET user_fname = '$firstname', user_lname = '$lastname', user_email = '$email', user_phone = '$phonenumber', user_DOB = '$dateofbirth'
      WHERE user_id = '$id'");
      echo "<script type='text/javascript'>alert('You have edited your profile');window.location.replace(\"profile.php\");</script>";
      mysqli_close($con);
      
      $_SESSION["firstname"] = $firstname;
      $_SESSION["lastname"] = $lastname;
      $_SESSION["email"] = $email;
      $_SESSION["phone"] = $phonenumber;
      $_SESSION["DOB"] = $dateofbirth;



  }
?>

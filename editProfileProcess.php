<?php

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $phonenumber = $_POST["phonenumber"];
  $dateofbirth = $_POST["dateofbirth"];
  // if($firstname == $_SESSION["firstname"] && $lastname == $_SESSION["lastname"] && $email == $_SESSION["email"] && $phonenumber == $_SESSION["phone"] && $dateofbirth == $_SESSION["DOB"]){
  //   echo "<script type='text/javascript'>alert('You did not make any changes.');window.location.replace(\"editProfile.php\");</script>";
  // }
  //else{
    include("connection.php");
    mysqli_query($con,"
      INSERT INTO
      users(user_email,user_fname,user_lname,user_phone,user_DOB)
      VALUES('$email','$firstname','$lastname','$phonenumber','$dateofbirth')");
      echo "<script type='text/javascript'>alert('You have edited your profile');window.location.replace(\"profile.php\");</script>";
      mysqli_close($con);
  //}
?>

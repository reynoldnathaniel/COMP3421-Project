<?php

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phonenumber = $_POST["phonenumber"];
  $gender = $_POST["gender"];
  $dateofbirth = $_POST["dateofbirth"];
  $usertype = $_POST["usertype"];
  if($firstname == "" || $lastname == "" || $email == "" || $password == "" || $phonenumber == "" || $gender == "" || $dateofbirth == "" || $usertype == ""){
    echo "<script type='text/javascript'>alert('Please fill in the missing fields.');window.location.replace(\"registrationPage.html\");</script>";
  }
  else{
    include("connection.php");
    $password = sha1($password);
    mysqli_query($con,"
      INSERT INTO
      users(user_email,user_fname,user_lname,user_gender,user_password,user_phone,user_DOB,user_type)
      VALUES('$email','$firstname','$lastname','$gender','$password','$phonenumber','$dateofbirth','$usertype')");
      echo "<script type='text/javascript'>alert('You have registered, please login again.');window.location.replace(\"loginPage.php\");</script>";
      mysqli_close($con);
  }
?>

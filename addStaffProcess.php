<?php
  $email = $_POST["email"];
  $password = $_POST["password"];
  $usertype = "staff";
  $restaurant = $_POST["restaurant_name"];
  if($email == "" || $password == "" || $restaurant == ""){
    echo "<script type='text/javascript'>alert('Please fill in the missing fields.');window.location.replace(\"registrationPage.html\");</script>";
  }
  else{
    include("connection.php");
    $user_password = sha1($password);
    $exist_restaurant = mysqli_query($con, "SELECT rest_id 	FROM restaurant WHERE rest_name='$restaurant'");
    if(mysqli_num_rows($exist_restaurant) != 0){
    	$rest_id = mysqli_fetch_array($exist_restaurant, MYSQLI_ASSOC);
    	mysqli_query($con, "INSERT INTO users(user_email, user_fname, user_lname, user_type, rest_id, user_password) VALUES('$email', '$restaurant', 'staff', '$usertype', '$rest_id[rest_id]', '$user_password')");
    	echo "<script type='text/javascript'>alert('You have registered, please login again.');window.location.replace(\"adminHomepage.php\");</script>";
    }
    else{
      echo "<script type='text/javascript'>alert('Your restaurant is not registered. Please register it first.');window.location.replace(\"addStaff.php\");</script>";
    }
    mysqli_close($con);
  }
?>


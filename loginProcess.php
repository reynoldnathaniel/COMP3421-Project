<?php
include("connection.php");
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$password = sha1($password);
$query = "SELECT fname,lname,gender,phone,DOB,user_type FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$_SESSION["firstname"] = $row["fname"];
$_SESSION["lastname"] = $row["lname"];
$_SESSION["gender"] = $row["gender"];
$_SESSION["phone"] = $row["phone"];
$_SESSION["DOB"] = $row["DOB"];
$_SESSION["user_type"] = $row["user_type"];
$rowcount = mysqli_num_rows($result);
if($rowcount == 0 || $email =="" || $password ==""){
  echo "<script type='text/javascript'>alert('Invalid username or password.');window.location.replace(\"loginPage.html\");</script>";
	session_unset();
  session_destroy();
}
echo "<script type='text/javascript'>window.location.replace(\"homepage.php\");</script>";
mysqli_close($con);
?>

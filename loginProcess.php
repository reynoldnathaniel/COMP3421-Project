<?php
include("connection.php");
session_start();
$email = $_POST["email"];
$password = $_POST["password"];
$password = sha1($password);
$query = "SELECT user_id,user_fname,user_lname,user_gender,user_phone,user_DOB,user_type,rest_id FROM users WHERE user_email='$email' AND user_password='$password'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$_SESSION["user_id"] = $row["user_id"];
$_SESSION["firstname"] = $row["user_fname"];
$_SESSION["lastname"] = $row["user_lname"];
$_SESSION["gender"] = $row["user_gender"];
$_SESSION["phone"] = $row["user_phone"];
$_SESSION["DOB"] = $row["user_DOB"];
$_SESSION["user_type"] = $row["user_type"];
$_SESSION["rest_id"] = $row["rest_id"];
$_SESSION["email"] = $email;
$rowcount = mysqli_num_rows($result);

if($rowcount == 0 || $email =="" || $password ==""){
  echo "<script type='text/javascript'>alert('Invalid username or password.');window.location.replace(\"loginPage.php\");</script>";
	session_unset();
  session_destroy();
}
if($_SESSION["user_type"]=="admin"){
	echo "<script type='text/javascript'>window.location.replace(\"adminHomepage.php\");</script>";
}
else if($_SESSION["user_type"]=="staff"){
	echo "<script type='text/javascript'>window.location.replace(\"staffHomepage.php\");</script>";
}
echo "<script type='text/javascript'>window.location.replace(\"index.php\");</script>";
mysqli_close($con);
?>

<?php
$favorite = $_REQUEST["favorite"];
$user_id = $_REQUEST["user_id"];
$rest_id = $_REQUEST["rest_id"];
if($favorite == "Favorite"){
	include("connection.php");

	$sql = "INSERT INTO favorite(rest_id,user_id) VALUES('$rest_id','$user_id')";
	mysqli_query($con,$sql);
	mysqli_close($con);
}
else if($favorite == "Unfavorite"){
	include("connection.php");

	$sql = "DELETE FROM favorite WHERE rest_id='$rest_id' AND user_id='$user_id'";
	mysqli_query($con,$sql);
	mysqli_close($con);
}
?>
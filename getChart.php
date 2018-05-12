<?php
include("connection.php");
$board=$_REQUEST["board"];
$rest_id = $_REQUEST["rest_id"];
if($board!=""){
	$text = "";
	$query1 = "SELECT * FROM booking WHERE rest_id='$rest_id'";
	$result1 = mysqli_query($con,$query1);
	while($row1=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
		$query2 = "SELECT user_gender,user_DOB FROM users WHERE user_id='$row1[user_id]'";
		$result2 = mysqli_query($con,$query2);
		$row2 = mysqli_fetch_array($result2);
		$text = "$row1[book_date]"."_"."$row1[book_time1]"."_"."$row1[book_time2]"."_"."$row2[user_gender]"."_"."$row2[user_DOB] ";
	}
	$text = rtrim($text," ");
	echo $text;
}

?>
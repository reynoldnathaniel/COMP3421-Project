<?php
include("connection.php");
$sql = "CREATE TABLE games(
		gameid int(5) NOT NULL,
		playerblue varchar(5) NOT NULL,
		playergreen varchar(5) NOT NULL,
		playerwinner varchar(5) NOT NULL,
		PRIMARY KEY (gameid))";
if(mysqli_query($con,$sql)===true){ echo "Success";}
	echo "lul";
?>
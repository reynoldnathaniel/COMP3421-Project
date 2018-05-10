<?php
session_start();
if(!isset($_SESSION["user_id"])){
	echo "<script type='text/javascript'>alert('Credentials Required.');window.location.replace(\"loginPage.php\");</script>";
}

?>
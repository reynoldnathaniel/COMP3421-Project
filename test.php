<?php
include("connection.php");
mysqli_query($con,"ALTER TABLE restaurant ADD rest_image varchar(50)");
?>
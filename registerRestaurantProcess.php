<?php
include("header.php");
$rest_name = $_POST["rest_name"];
$rest_address = $_POST["rest_address"];
$rest_region = $_POST["rest_region"];
$rest_type = $_POST["rest_type"];
$rest_opentime = $_POST["rest_opentime"];
$rest_closetime = $_POST["rest_closetime"];
$rest_seats = $_POST["rest_seats"];
$description = $_POST["description"];
if($rest_name == "" || $rest_address == "" || $rest_seats == ""){
	$uploadOk=0;
	echo "<script type='text/javascript'>alert('Fill in the missing fields!');window.location.replace(\"registerRestaurant.php\");</script>";

}
////////////////
if(!file_exists("restaurants/".$rest_name))
    mkdir("restaurants/".$rest_name,0777,false);

$target_dir = "restaurants/".$rest_name."/";
$target_file = $target_dir.basename($_FILES["restaurantImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["restaurantImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
//check size 5MB
if ($_FILES["restaurantImage"]["size"] > 5000000) {
    echo "<script type='text/javascript'>alert('File is more than 5MB!');window.location.replace(\"registerRestaurant.php\");</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Only JPG, JPEG, PNG & GIF files!');window.location.replace(\"registerRestaurant.php\");</script>";
    $uploadOk = 0;
}

if($uploadOk==0){
	echo "<script type='text/javascript'>alert('File is not uploaded!');window.location.replace(\"registerRestaurant.php\");</script>";
}
else{
	if (move_uploaded_file($_FILES["restaurantImage"]["tmp_name"], $target_file)) {
        echo "";
    } else {
        echo "<script type='text/javascript'>alert('Failed to upload image file!');window.location.replace(\"registerRestaurant.php\");</script>";
    }
}
$tmp_name = $_FILES["restaurantImage"]["name"];
$rest_seats = (int)$rest_seats;
////////////////

include("connection.php");
if($uploadOk==1)
{
    mysqli_query($con,"
  INSERT INTO
  restaurant(rest_name,rest_address,rest_region,rest_type,rest_opentime,rest_closetime,rest_seats,rest_image,rest_avg_rating,rest_description)
  VALUES('$rest_name','$rest_address','$rest_region','$rest_type','$rest_opentime','$rest_closetime','$rest_seats','$tmp_name','3','$description')");
    echo "<script type='text/javascript'>alert('Restaurant Added!');window.location.replace(\"adminHomepage.php\");</script>";
}
mysqli_close($con);
?>
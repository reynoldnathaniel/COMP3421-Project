<?php
include("header.php");

      $restname=$_POST["restname"];
      $restaddress=$_POST["restaddress"];
      $restregion=$_POST["restregion"];
      $resttype=$_POST["resttype"];
      $opentime=$_POST["opentime"];
      $closetime=$_POST["closetime"];
      $restseats=$_POST["restseats"];
      $description=$_POST["description"];

if($restname == "" || $restaddress == "" || $restregion == ""|| $resttype == ""|| $opentime == ""|| $closetime == ""|| $restseats == ""|| $description == ""){
	$uploadOk=0;
	echo "<script type='text/javascript'>alert('Fill in the missing fields!');window.location.replace(\"updateRestaurant.php\");</script>";
}

if(!file_exists("restaurants/".$restname))
    mkdir("restaurants/".$restname,0777,false);

$target_dir = "restaurants/".$restname."/";
$target_file = $target_dir.basename($_FILES["restImage"]["name"]);
$uploadOk = 1;
$filename = $_FILES["restImage"]["name"];
if(file_exists($target_file)){
    $target_file = $target_dir."0".basename($_FILES["restImage"]["name"]);
    $filename = "0".$filename;
}
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["restImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//check size 5MB
if ($_FILES["restImage"]["size"] > 5000000) {
    echo "<script type='text/javascript'>alert('File is more than 5MB!');window.location.replace(\"updateRestaurant.php\");</script>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Only JPG, JPEG, PNG & GIF files!');window.location.replace(\"updateRestaurant.php\");</script>";
    $uploadOk = 0;
}

if($uploadOk==0){
	echo "<script type='text/javascript'>alert('File is not uploaded!');window.location.replace(\"updateRestaurant.php\");</script>";
}
else{
	if (move_uploaded_file($_FILES["restImage"]["tmp_name"], $target_file)) {
        echo "";
    } else {
        echo "<script type='text/javascript'>alert('Failed to upload image file!');window.location.replace(\"updateRestaurant.php\");</script>";
    }
}
$tmp_name = $filename;
$restid=$_SESSION['restid'];

include("connection.php");
if($uploadOk==1)
{
    mysqli_query($con,"
  UPDATE restaurant
  SET rest_name = '$restname',rest_address='$restaddress',rest_region='$restregion',rest_type='$resttype',rest_opentime='$opentime',rest_closetime='$closetime',rest_seats='$restseats',rest_description='$description'
  WHERE rest_id='$restid' ");
    echo "<script type='text/javascript'>alert('Restaurant Updated!');window.location.replace(\"viewRestaurant.php\");</script>";
}
mysqli_close($con);

?>
<?php
include("header.php");
$dishname = $_POST["dishname"];
$description = $_POST["description"];
$dishprice = $_POST["price"];
$dishtype = $_POST["dishtype"];

if($dishname == "" || $dishprice == "" || $dishtype == ""){
	$uploadOk=0;
	echo "<script type='text/javascript'>alert('Fill in the missing fields!');window.location.replace(\"registerDish.php\");</script>";
}

if(!file_exists("dishes/".$dishname))
    mkdir("dishes/".$dishname,0777,false);

$target_dir = "dishes/".$dishname."/";
$target_file = $target_dir.basename($_FILES["dishImage"]["name"]);
$uploadOk = 1;
$filename = $_FILES["dishImage"]["name"];
if(file_exists($target_file)){
    $target_file = $target_dir."0".basename($_FILES["dishImage"]["name"]);
    $filename = "0".$filename;
}
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["dishImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//check size 5MB
if ($_FILES["dishImage"]["size"] > 5000000) {
    echo "<script type='text/javascript'>alert('File is more than 5MB!');window.location.replace(\"registerDish.php\");</script>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Only JPG, JPEG, PNG & GIF files!');window.location.replace(\"registerDish.php\");</script>";
    $uploadOk = 0;
}

if($uploadOk==0){
	echo "<script type='text/javascript'>alert('File is not uploaded!');window.location.replace(\"registerDish.php\");</script>";
}
else{
	if (move_uploaded_file($_FILES["dishImage"]["tmp_name"], $target_file)) {
        echo "";
    } else {
        echo "<script type='text/javascript'>alert('Failed to upload image file!');window.location.replace(\"registerDish.php\");</script>";
    }
}
$tmp_name = $filename;
$dishprice = (int)$dishprice;
$dishid=$_SESSION['dishid'];

include("connection.php");
if($uploadOk==1)
{
    mysqli_query($con,"
  UPDATE dish
  SET dish_name = '$dishname',dish_price='$dishprice',dish_type='$dishtype',dish_description='$description',dish_image='$tmp_name' 
  WHERE dish_id='$dishid' ");
    echo "<script type='text/javascript'>alert('Dish Updated!');window.location.replace(\"viewDish.php\");</script>";
}

?>
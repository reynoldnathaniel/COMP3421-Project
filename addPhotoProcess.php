<?php
include("header.php");

////////////////
$rest_name=$_SESSION['rest_name'];
$rest_id=$_SESSION['rest_id'];
$user_id=$_SESSION['user_id'];
if(!file_exists("gallery/".$rest_name))
    mkdir("gallery/".$rest_name,0777,false);

$target_dir = "gallery/".$rest_name."/";
$target_file = $target_dir.basename($_FILES["galleryImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["galleryImage"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
//check size 5MB
if ($_FILES["galleryImage"]["size"] > 5000000) {
    echo "<script type='text/javascript'>alert('File is more than 5MB!');window.location.replace(\"addPhoto.php?restid=$rest_id&restname=$rest_name\");</script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<script type='text/javascript'>alert('Only JPG, JPEG, PNG & GIF files!');window.location.replace(\"addPhoto.php?restid=$rest_id&restname=$rest_name\");</script>";
    $uploadOk = 0;
}

if($uploadOk==0){
	echo "<script type='text/javascript'>alert('File is not uploaded!');window.location.replace(\"addPhoto.php?restid=$rest_id&restname=$rest_name\");</script>";
}
else{
	if (move_uploaded_file($_FILES["galleryImage"]["tmp_name"], $target_file)) {
        echo "";
    } else {
        echo "<script type='text/javascript'>alert('Failed to upload image file!');window.location.replace(\"addPhoto.php?restid=$rest_id&restname=$rest_name\");</script>";
    }
}
$tmp_name = $_FILES["galleryImage"]["name"];
////////////////

include("connection.php");
if($uploadOk==1)                                //href='addPhoto.php?restid=$rest_id&restname=$rest_name'
{
    mysqli_query($con,"
  INSERT INTO
  photo(user_id,rest_id,photo_image)
  VALUES('$user_id','$rest_id','$tmp_name')");
    echo "<script type='text/javascript'>alert('Photo Added!');window.location.replace(\"addPhoto.php?restid=$rest_id&restname=$rest_name\");</script>";
}
mysqli_close($con);
?>
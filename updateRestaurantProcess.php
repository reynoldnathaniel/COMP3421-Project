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
	if($rest_name == ""){
		echo "<script type='text/javascript'>alert('You need to choose the restaurant name first!');window.location.replace(\"updateResturant.php\");</script>";
	}
	if(file_exists($_FILES["restaurantImage"]["name"])){
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
		        mysqli_query($con, "UPDATE restaurant SET rest_image = '$tmp_name' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
		    } else {
		        echo "<script type='text/javascript'>alert('Failed to upload image file!');window.location.replace(\"updateRestaurant.php\");</script>";
		    }
		}
	}
	if(isset($rest_address)){
		mysqli_query($con, "UPDATE resturant SET rest_address = '$rest_address' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	if(isset($rest_region)){
		mysqli_query($con, "UPDATE resturant SET rest_region = '$rest_region' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	if(isset($rest_type)){
		mysqli_query($con, "UPDATE resturant SET rest_type = '$rest_type' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	if(isset($rest_opentime)){
		mysqli_query($con, "UPDATE resturant SET rest_opentime = '$rest_opentime' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	if(isset($rest_closetime)){
		mysqli_query($con, "UPDATE resturant SET rest_closetime = '$rest_closetime' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	if(isset($rest_seats)){
		mysqli_query($con, "UPDATE resturant SET rest_seats = '$rest_seats' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	if(isset($description)){
		mysqli_query($con, "UPDATE resturant SET description = '$description' WHERE rest_id = SELECT rest_id WHERE rest_name = '$rest_name'");
	}
	mysqli_close($con);
?>
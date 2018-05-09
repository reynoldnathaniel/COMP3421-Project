<?php
include("connection.php");
$sql0 = "CREATE TABLE users(
		user_id int NOT NULL AUTO_INCREMENT,
		user_email varchar(50) NOT NULL,
		user_fname varchar(50),
		user_lname varchar(50),
		user_gender varchar(6),
		user_phone int(20),
		user_DOB varchar(10),
		user_type varchar(10) NOT NULL,
		rest_id int(5) DEFAULT -1,
		user_password varchar(50) NOT NULL,
		PRIMARY KEY (user_id))";

$sql1 = "CREATE TABLE restaurant(
		rest_id int(5) NOT NULL AUTO_INCREMENT,
		rest_avg_rating varchar(4),
		rest_name varchar(20) NOT NULL,
		rest_address varchar(300) NOT NULL,
		rest_region varchar(50),
		rest_type varchar(50),
		rest_opentime int(2),
		rest_closetime int(2),
		rest_seats int(3) NOT NULL,
		rest_description varchar(300),
		rest_image varchar(50),
		PRIMARY KEY (rest_id))";

$sql2 = "CREATE TABLE dish(
		dish_id int(5) NOT NULL AUTO_INCREMENT,
		dish_name varchar(50) NOT NULL,
		dish_price int(3) NOT NULL,
		dish_type varchar(20),
		rest_id int(5) NOT NULL,
		dish_description varchar(100),
		dish_image varchar(30),
		FOREIGN KEY (rest_id) REFERENCES restaurant(rest_id),
		PRIMARY KEY (dish_id)
		)";


$sql3 = "CREATE TABLE vacancy(
		rest_id int(5) NOT NULL,
		vacancy_date varchar(10) NOT NULL,
		vacancy_time int(2) NOT NULL,
		vacancy int(3) NOT NULL,
		FOREIGN KEY (rest_id) REFERENCES restaurant(rest_id),
		PRIMARY KEY (rest_id,vacancy_date,vacancy_time)
		
		
	)";
//
$sql4 = "CREATE TABLE booking(
		book_id int NOT NULL AUTO_INCREMENT,
		book_size int(2) NOT NULL,
		book_date varchar(10) NOT NULL,
		book_time int(2) NOT NULL,
		book_duration int(1),
		rest_id int(5) NOT NULL,
		user_id int(5) NOT NULL,
		PRIMARY KEY (book_id),
		FOREIGN KEY (rest_id) REFERENCES restaurant(rest_id),
		FOREIGN KEY (user_id) REFERENCES users(user_id)

	)";
//
$sql5 = "CREATE TABLE comment(
		cmnt_id int NOT NULL AUTO_INCREMENT,
		cmnt_msg varchar(300) NOT NULL,
		cmnt_rating int(1) NOT NULL,
		rest_id int(5) NOT NULL,
		user_id int(5) NOT NULL,
		FOREIGN KEY (rest_id) REFERENCES restaurant(rest_id),
		FOREIGN KEY (user_id) REFERENCES users(user_id),
		PRIMARY KEY (cmnt_id)

	)";

$sql6 = "CREATE TABLE news(
		news_id int NOT NULL AUTO_INCREMENT,
		news_type varchar(10),
		news_discount int(2),
		news_msg varchar(300) NOT NULL,
		rest_id int(5),
		PRIMARY KEY (news_id),
		FOREIGN KEY (rest_id) REFERENCES restaurant(rest_id)
	)";
//
$sql7 = "CREATE TABLE favorite(
		fav_id int NOT NULL AUTO_INCREMENT,
		rest_id int(5) NOT NULL,
		user_id int(5) NOT NULL,
		PRIMARY KEY (fav_id),
		FOREIGN KEY (rest_id) REFERENCES restaurant(rest_id),
		FOREIGN KEY (user_id) REFERENCES users(user_id)
	)";
if(
	mysqli_query($con,$sql0)===true &&
	mysqli_query($con,$sql7)===true &&
	mysqli_query($con,$sql5)===true &&
	mysqli_query($con,$sql4)===true
){ echo "Success";}
else echo "fail";
?>

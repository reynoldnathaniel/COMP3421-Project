<?php
include("connection.php");
$sql = "CREATE TABLE users(
		user_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		user_email varchar(50) NOT NULL, --also accountname
		user_fname varchar(50),
		user_lname varchar(50),
		user_gender varchar(6), --male/female
		user_phone int(20),
		user_DOB varchar(8), --19970527
		user_type varchar(8) NOT NULL, --customer/staff/admin
		rest_id int DEFAULT -1,
		user_password varchar(50) NOT NULL)

		CREATE TABLE dish(
		dish_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		dish_name varchar(50) NOT NULL,
		dish_price int(3) NOT NULL,
		dish_type varchar(20),
		rest_id int FOREIGN KEY REFERENCES restaurant(rest_id))

		CREATE TABLE restaurant(
		rest_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		rest_avg_rating varchar(4), --2.57
		rest_name varchar(20) NOT NULL,
		rest_address varchar(300) NOT NULL,
		rest_region varchar(50),
		rest_type varchar(50), --chinese/mexican/american
		rest_opentime int(2), --10
		rest_closetime int(2), --24
		rest_seats int(3) NOT NULL) --99

		CREATE TABLE vacancy(
		rest_id int FOREIGN KEY REFERENCES restaurant(rest_id) PRIMARY KEY,
		vacancy_date varchar(8) NOT NULL PRIMARY KEY,--20180505
		vacancy_time int(2) PRIMARY KEY, -- 0-24
		vacancy int(3) NOT NULL)

		CREATE TABLE booking(
		book_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		book_size int(2) NOT NULL, -- 0-10
		book_date varchar(8) NOT NULL,
		book_time int(2) NOT NULL,
		book_duration int(1), -- 2 for 2 hours
		rest_id int FOREIGN KEY REFERENCES restaurant(rest_id),
		user_id int FOREIGN KEY REFERENCES user(user_id))

		CREATE TABLE comment(
		cmnt_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		cmnt_msg varchar(300) NOT NULL,
		cmnt_rating int(1) NOT NULL, -- 0-5
		rest_id int FOREIGN KEY REFERENCES restaurant(rest_id),
		user_id int FOREIGN KEY REFERENCES user(user_id))

		CREATE TABLE news(
		news_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		news_type varchar(10), --discount/new course/other
		news_discount int(2), --30 for 30%off
		news_msg varchar(300) NOT NULL,
		rest_id int FOREIGN KEY REFERENCES restaurant(rest_id))

		CREATE TABLE favorite(
		fav_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		rest_id int FOREIGN KEY REFERENCES restaurant(rest_id),
		user_id int FOREIGN KEY REFERENCES user(user_id))";
if(mysqli_query($con,$sql)===true){ echo "Success";}
	echo "lul";
?>

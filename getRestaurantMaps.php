<?php
function getCoordinates($address){
 
	$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
	 
	$url = "https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=AIzaSyB-NlGrDie3iFGlmhn8jDARFDCFHTGEhno";
	 
	$response = file_get_contents($url);
	$json = json_decode($response,TRUE); //generate array object from the response from the web
	 
	return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
	 
}
include("connection.php");
$text="";
$sql1 = "SELECT * FROM restaurant";
$result1 = mysqli_query($con,$sql1);
while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
	$text = $text . $row1["rest_name"] . "_";
	$coordinates = getCoordinates($row1["rest_address"]);
	$text = $text . $coordinates . "?";
}
$text = rtrim($text,"-");
echo $text;
mysqli_close($con);
?>
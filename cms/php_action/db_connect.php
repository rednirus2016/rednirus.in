<?php 	

$localhost = "localhost";
$username = "newredni_cms";
$password = "newredni_cms";
$dbname = "newredni_cms";
$store_url = "https://www.rednirus.in/cms/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
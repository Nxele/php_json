<?php
include 'connection.php';

$data = json_decode(file_get_contents("php://input"));

$name = ($data->name);
$surname = ($data->surname);
$age = ($data->age);
$gander = ($data->gender);

/*$name = "Sizwe";
$surname = "Nxele";
$age = 23;
$gender = "Male";*/

$SQL = "INSERT INTO `android_tbl`( `user_name`, `user_surname`, `user_age`, `user_gender`) VALUES ('".$name."','".$surname."','".$age."','".$gender."')";

if($conn->query($SQL)==true){
  echo " New user added";
}else{
	echo " Failed to add a new user";
}
?>
<?php

$con = mysqli_connect('localhost','root','');
if ( !$con)
{
	echo 'Not connected to server';
}  
else{
	echo "connected to server";
}
if (!mysqli_select_db($con,'employee'))
{
	echo 'Database not selected';
}
if (isset($_POST['username']) && (isset($_POST['email'])) && (isset($_POST['password'])) ){
$Name = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$sql = "INSERT INTO members(username,email,password) VALUES ('$Name','$Email','$Password')";

if(!mysqli_query($con,$sql))
{
	echo "\nNot Inserted";
}
else
{
	echo "\nInserted";
}
}
header ("refresh:3;form.html") 
?>
	

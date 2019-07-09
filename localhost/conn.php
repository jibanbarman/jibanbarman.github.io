<?php

$con = mysqli_connect('localhost','root','');
if ( !$con)
{
	echo 'Not connected to server';
}
if (!mysqli_select_db($con,'employee'))
{
	echo 'Database not selected';
}

$Name = $_POST['username'];
$sql = "INSERT INTO members(Name) VALUES ('$Name')";

if(!mysqli_query($con,$sql))
{
	echo "Not Inserted";
}
else
{
	echo " inserted";
}
  
?>
	

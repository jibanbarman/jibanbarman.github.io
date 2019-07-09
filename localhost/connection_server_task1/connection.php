<?php

$con = mysqli_connect('localhost','root','');
if ( !$con)
{
	echo 'Not connected to server';
}  
else{
	echo "connected to server";
}
if (!mysqli_select_db($con,'my_db'))
{
	echo 'Database not selected';
}
else{
    echo "database selected";
}
$results=mysql_query ("SELECT Name FROM users");
while($result !=NUll)
{echo 'hii';}
if(!mysqli_query($con,$sql))
{
	echo "\nNot Inserted";
}
else
{
	echo "\nInserted";
}
 
?>
	
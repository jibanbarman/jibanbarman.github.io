<?php
$con = mysqli_connect('localhost','root','');
 

if ( !$con)
{
	echo 'Not connected to server';
}  
else{
	//echo "connected to server";
}
if (!mysqli_select_db($con,'my_db'))
{
	echo 'Database not selected';
}
else{
    echo "database selected";
}
<html>
    <a href="127_0_0_1.sql">   </a>
    </html>
?>
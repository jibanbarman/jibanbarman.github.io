<?
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
?>
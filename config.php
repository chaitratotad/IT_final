<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="chai1";

$link=mysqli_connect($servername,$username,$password,$dbname);
if(!$link)
{
die("connection failed:" .mysqli_connect_error());
}

if(mysqli_query($link,$sql)) {
echo "table employees created sucessfully";
}
else
{
echo "error creating table:".mysqli_error($link);
}
mysqli_close($link);
?>

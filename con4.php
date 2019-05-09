<?php
$link=mysqli_connect("localhost","root","root","chai1");
if(!$link)
{
die("connection failed:" .mysqli_connect_error());
}

$sql="delete from tab1 where firstname='vt'";
if(mysqli_query($link,$sql)) 
{
echo "record deleted sucessfully";
}
else
{
echo "error creating table:".mysqli_error($link);
}
mysqli_close($link);
?>

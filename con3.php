<?php
$link=mysqli_connect("localhost","root","root","chai1");
if(!$link)
{
die("connection failed:" .mysqli_connect_error());
}

$sql="update tab1 set age=28 where firstname='ram'";
if(mysqli_query($link,$sql)) 
{
echo "record updated sucessfully";
}
else
{
echo "error creating table:".mysqli_error($link);
}
mysqli_close($link);
?>

<?php
$link=mysqli_connect("localhost","root","root","chai1");
if(!$link)
{
die("connection failed:" .mysqli_connect_error());
}
$x=$_POST['fname'];
$y=$_POST['lname'];
$z=$_POST['age'];
$sql="insert into tab1(firstname,lastname,age) values('$x','$y','$z')";
if(mysqli_query($link,$sql)) 
{
echo "records inserted sucessfully";
}
else
{
echo "error creating table:".mysqli_error($link);
}
mysqli_close($link);
?>

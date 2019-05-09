<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="chai1";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die("connection failed:" .mysqli_connect_error());
}

$sql="create table employees(
id int(2) primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
email varchar(50)
)";

if(mysqli_query($conn,$sql)) {
echo "table employees created sucessfully";
}
else
{
echo "error creating table:".mysqli_error($conn);
}
mysqli_close($conn);
?>

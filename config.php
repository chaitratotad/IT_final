<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_database = "vote";
$con = mysqli_connect($mysql_hostname, $mysql_user, 
$mysql_password) 
or die("Could not connect database");
mysqli_select_db($con,$mysql_database) 
or die("Could not select database");
?>

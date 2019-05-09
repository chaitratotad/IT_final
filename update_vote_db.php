<?php
include('config.php');

$name = $_POST['candidate'];
echo $name."<br />";

 $query = "update candidate set vcount=vcount+1 where cid='$name'";

 mysqli_query($con,$query) or die("Error updating the vote");

 echo "Your vote is successful"."<br />";

?>



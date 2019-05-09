<?php
include('config.php');

$query = "select * from candidate";
//above assuming candidate table already exists

$result = mysqli_query($con,$query) or die("Error querying the database");
echo"fetching success";
echo '<form id="myform" action="update_vote_db.php" method="POST">';

while($row = mysqli_fetch_array($result))
{
	echo '<input type="radio" id="name1" name="candidate" 
         value="'. $row['cid']. '">'. $row['cname']. '</input><br />';
}
echo '<input type="submit" value="vote">';
echo '</form>';

?>





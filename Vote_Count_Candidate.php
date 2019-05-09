<?php
session_start();
include('config.php');
//$s=$_SESSION['user'];
$ert="select cid,cname,vcount from candidate";

if ($res = mysqli_query($con,$ert)) { 
    if (mysqli_num_rows($res) > 0) { 
	while ($row = mysqli_fetch_array($res)) { 
      echo "The Candidate ". $row['cname'] . " has secured:".
	  $row['vcount'] . " seats in the election";
	  } 
	}
        echo "</table>"; 
        mysqli_free_result($res); 
    } 
?>

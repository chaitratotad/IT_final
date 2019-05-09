<?php
session_start();
include('config.php');
//$s=$_SESSION['user'];
//echo $s;
$ert="select * from candidate";

if ($res = mysqli_query($con,$ert)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>CID</th>"; 
        echo "<th>CNAME</th>"; 
        echo "<th>vote_count</th>"; 
        echo "</tr>"; 
while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['cid']."</td>"; 
            echo "<td>".$row['cname']."</td>"; 
            echo "<td>".$row['vcount']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_result($res); 
    } 
}
?>

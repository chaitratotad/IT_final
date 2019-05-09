<?php
//session_start();
include('config.php');
$ert="select cid,cname,sum(vcount) as vc from candidate group by vcount;";

if ($res = mysqli_query($con,$ert)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>Candidate ID</th>"; 
        echo "<th>Candidate Name</th>"; 
        echo "<th>Vote Count</th>"; 
        echo "</tr>"; 
while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['cid']."</td>"; 
            echo "<td>".$row['cname']."</td>"; 
            echo "<td>".$row['vc']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
        mysqli_free_result($res); 
    } 
}
?>
<?php
$link=mysqli_connect("localhost","root","root","chai1");
if(!$link)
{
die("connection failed:" .mysqli_connect_error());
}

$sql="select * from tab1";
if($res=mysqli_query($link,$sql)) {
if(mysqli_num_rows($res)>0) {
echo "<table border=2>";
echo "<tr>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th>";
echo "<th>Age</th>";
echo "</tr>";

while($row=mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['age']."</td>";
echo "</tr>";
}
echo "</table>";
#mysqli_free_res($res);
}
else{
echo "No match";
}
}
else
{
echo "error creating table:".mysqli_error($link);
}
mysqli_close($link);
?>

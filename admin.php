<html>
<head>
<title>ADMIN PAGE</title>
</head>
<body><javascrit>
<form action="<?php $_PHP_SELF?>" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ID:<input type="text" name="cid"><br>
NAME:<input type="text" name="cname"><br>
<input  type="submit" name="save" value="SAVE CANDIDATE">
</form>
</body>
</html>

<?php
$link=mysqli_connect("localhost","root","root","votedb");
if(isset($_POST["cid"]) && isset($_POST["cname"]))
{
$cid=$_POST['cid'];
$cname=$_POST['cname'];


echo "$cid";
$sql="insert into candidate(indexx,cid,cname,vcount) values(1,'$cid','$cname',0)";
if($pik=mysqli_query($link,$sql))
echo "candidate added successfully";

$qwe="update login set profile=2 where uid='$cid'";
if($pik=mysqli_query($link,$qwe))
echo "updated login successfully";

}


?>

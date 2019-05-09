<?php
include('config.php');

if(isset($_POST['cid']) && isset($_POST['cname']))
{
$cid=$_POST['cid'];
$cname=$_POST['cname'];
   $sql= "insert into candidate(cid,cname,vcount)values
    ('$cid','$cname',0)";            
   if(mysqli_query($con, $sql)){
    echo "Candidate added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " 
                    . mysqli_error($con);
}
 $can= "update login set profile=2 where uid='$cid'";
if(mysqli_query($con,$can)){ 
    echo "login table updated successfully."; 
} else { 
    echo "ERROR: Could not able to execute $sql. "
. mysqli_error($con); 
                            
}  


}  
?>
<html>
<body>
    <form action="<?php $_PHP_SELF?>" method="POST">
	CID:&nbsp&nbsp<input type="text" name="cid" /><br/><br/>
	CNAME:&nbsp&nbsp<input type="text" name="cname" /><br/><br/>
         <input type="submit" value="save"/>
      </form>;
</body>
</html>




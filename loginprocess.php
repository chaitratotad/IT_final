<?php
session_start();

include('config.php');

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$uname=$_POST['uid'];
$pass=$_POST['password'];
$_SESSION['user']=$uname;

$sql = "SELECT * FROM login where UID='$uname'"; 
if ($res = mysqli_query($con, $sql)) 
{   
  if (mysqli_num_rows($res) > 0) 
{
    while ($row = mysqli_fetch_array($res)) 
    { 
           if($row['password']!=$pass) 
             echo"password id not matching";
           else
	{
      if((($row['profile']==0) || ($row['profile']==2))  && ($row['voted']!=0))
	  {
		// Candidate Login. Candidate Profile=0
	    header('location:Vote_Count_Candidate.php');
	  }
    if(($row['profile']==1) && ($row['voted']!=0))
	{
	  header('location:addcandidate.php');
	}
	/*if(($row['profile']==1))
	{
		// Admin Login. Admin Profile=1
		header('location:Vote_Count_Total.php');
	}*/
	if(($row['profile']==2) &&($row['voted']==0))
	{
		// Student Login. Student Profile=2
		$qwe="update login set voted=1 where UID='$uname'";
		mysqli_query($con,$qwe);
		header('location:votedb.php');
	}
	else
	{
		echo "you already voted.. Thank You!";
	}
       }//close else 
			
  }// while close
}//if close 
else { echo "wrong user name";}
}//top if close 
else echo "query can't execute";
        
        mysqli_free_result($res); 
}
?>

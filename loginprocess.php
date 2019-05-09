<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$uname=$_POST["uname"];
$pass=$_POST["pwd"];

#echo "$uname"."<br>";
#echo "$pass";

$con=mysqli_connect("localhost","root","root","votedb");
$query="select * from login where uid='$uname'";
if($res=mysqli_query($con,$query))
#die("error".mysqli_connect_error($con));
{
	if(mysqli_num_rows($res)>0)
	{
		while($row=mysqli_fetch_array($res))
		{
		if($row['password']!=$pass)
		echo "wrong password";
		else 
		{
			if($row['profile']==1)	
			{
			header("location:admin.php");
			}		

		}
		}echo "no rows affected";
	}echo "wrong username";
}
}
mysqli_close($con);
?>

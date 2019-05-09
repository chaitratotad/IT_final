<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0)
{
$allowed_ext=array("jpg"=> "image/jpg",
"jpeg"=> "image/jpeg",
"gif"=> "image/gif",
"png"=> "image/png");
$file_name=$_FILES["photo"]["name"];
$file_type=$_FILES["photo"]["type"];
$file_size=$_FILES["photo"]["size"];

$ext=pathinfo($file_name,PATHINFO_EXTENSION);
if(!array_key_exists($ext,$allowed_ext))
die("error:please select a valid file format.");

$maxsize=2*1024*1024;
if($file_size>$maxsize)
die("error:file size is larger than the allowed limit.");


if(in_array($file_type,$allowed_ext))
{
if(file_exists("/var/www/html/2016cse072/uploads/".$_FILES["photo"]["name"]))
echo $_FILES["photo"]["name"]."already exists.";
else
{
move_uploaded_file($_FILES['photo']['tmp_name'],"/var/www/html/2016cse072/uploads/".$_FILES['photo']['name']);
echo "your file was uploaded sucessfully.";
}
}
else
{
echo "error:please try again";
}
}
else
{
echo "error:".$_FILES["photo"]["error"];
}
}
?>

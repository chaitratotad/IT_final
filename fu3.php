<?php 

$link=mysqli_connect("localhost","root","root","chai1");

if(isset($_POST["submit"]))
{
$file=$_FILES["fileupload"]["name"];
move_uploaded_file($_FILES['fileupload']['tmp_name'],"/var/www/html/2016cse072/docs/".$_FILES['fileupload']['name']);
echo "Your file was uploaded sucessfully.";

$query=mysqli_query($link,"insert into fileupload(id,file) values('1','$file')");
}
?>

<html>
<title>FILE UPLOAD TO DATABASE</title>
<body>
<form action="" method="post" enctype="multipart/form-data">
<h2>Upload Files</h2>
<div>
Select the document to upload.<br><br>
Filename:<input type="file" name="fileupload" id="fileselect"><br><br>
<input type="submit" name="submit" value="UPLOAD"><br>
</div>
</form>
</body>
</html>





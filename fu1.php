<?php
if(isset($_POST["submit"]))
{
$file=$_FILES["fileupload"]["name"];
move_uploaded_file($_FILES['fileupload']['tmp_name'],"/var/www/html/2016cse072/docs/".$_FILES['fileupload']['name']);
echo "Your file was uploaded sucessfully.";
}
?>





<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post"  enctype="multipart/form-data">
Enter the Image Name:<input type="text" name="image_name" id="" /><br />

<input name="image" id="image" accept="image/jpg" type="file"><br /><br />
<input type="submit" value="submit" name="submit" />
</form>
<br /><br />
<!-- this form is user to display all the images-->
<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post"  enctype="multipart/form-data">
Retrive all the images:
<input type="submit" value="submit" name="retrive" />
</form>



<?php
/*CREATE TABLE  `images` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`));
) */

        $link=mysqli_connect("localhost", "root", "root","chai1");

//to retrive send the page to another page
if(isset($_POST['retrive']))
{
    header("location:search.php");

}

//to upload
if(isset($_POST['submit']))
{
if(isset($_FILES['image'])) {
        $name=$_POST['image_name'];
     //   $email=$_POST['mail'];
        $fp=addslashes(file_get_contents($_FILES['image']['tmp_name'])); //will store the image to fp
        }
                // our sql query
                $sql = "INSERT INTO images(name,image) VALUES('{$name}','{$fp}');";
                            mysqli_query($link,$sql) or die("Error in Query insert: " . mysqli_error($link));
} 
?>





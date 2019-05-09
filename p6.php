<html>
<body>
<form action="p6.php" method="post">
<?php 
$name=$email=$website=$comment=$gender="";

if($_SERVER["REQUEST_METHOD"]=="POST") {
$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$website=test_input($_POST["website"]);
$comment=test_input($_POST["comment"]);
$gender=test_input($_POST["gender"]);
}

function test_input($data) {
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>
 
Name:<input type="text" name="name" value="<?php echo $name;?>"><br>
E-mail:<input type="text" name="email" value="<?php echo $email;?>"><br>
Website:<input type="text" name="website" value="<?php echo $website;?>"><br>
Comment:<textarea name="comment" rows="5" cols="40"><?php echo $comment;?>
</textarea><br>

Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female

<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male

<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other

<input type="submit">


</form>


</body>
</html>

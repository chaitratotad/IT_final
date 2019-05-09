<?php
if(isset($_GET["name"]) || isset($_GET["age"])) {
echo "welcome"." ".$_GET["name"]."<br>";
echo "You are"." ".$_GET["age"]." "."years old";
exit();
}
?>
<html>
<body>
<form action="<?php $_PHP_SELF?>" method="GET">
Name:<input type="text" name="name"/>
Age:<input type="text" name="age"/><br><br>
<input type="submit"/>
</form>


<?php include("p.php");?>
<p>sgfdawehgjkbgjbghWIUFKABDKJHGKIVHJBJHVHJV</p>
</body>
</html>

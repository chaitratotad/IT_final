"Hello World" script in php<br/>
<html>
<head>
<title>hello world</title>
</head>
<body>
<?php echo "hello,world!<br/>";
echo "<br>";

$x=5;
$y=10;
function mytest(){
global $x,$y;
$y=$x+$y;
}
mytest();
echo "-------------------------------------<br>";
printf("answer:$y<br>");

echo "-------------------------------------<br>";
function mytest2(){
static $x=0;
echo $x."<br>";
$x++;
}
mytest2();
mytest2();
mytest2();

echo "-------------------------------------<br>";
define("MINSIZE",50);
echo MINSIZE."<br>";
echo constant("MINSIZE");
echo "<br>";

echo "-------------------------------------<br>";
echo "<br>";
$array=array(1,2,3,4,5);
foreach($array as $value) {
echo "Value is $value <br/>";
}

echo "-------------------------------------<br>";
$s1="Hello World";
$s2="1234";
echo $s1." ".$s2."<br>";

echo "-------------------------------------<br>";
?>

</body>
</html>

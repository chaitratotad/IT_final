<html>
<body>
<?php 


function addF($n) {
$n+=5;
}
function addS(&$n) {
$n+=6;
}

$orgn=10;
addF($orgn);
echo "original number is $orgn<br>";

addS($orgn);
echo "original number is $orgn<br>";
?>


</body>
</html>

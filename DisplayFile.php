<html>
<body>
<head>
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>
</head>

<?php
$link=mysqli_connect("localhost","root","root","chai1");

$query=mysqli_query($link,"SELECT file from fileupload where id='1'");

while($row=mysqli_fetch_array($query))
{
?>

File: <?php $cfile=$row['file'];
if($cfile=="" || $cfile=="NULL")
{
  echo "File NA";
}
else{?>
<a href="javascript:void(0);" onClick="popUpWindow('docs/<?php echo htmlentities($row['file']);?>');" title="View File">View File </a><br>
<?php } } ?>

</body>
</html>

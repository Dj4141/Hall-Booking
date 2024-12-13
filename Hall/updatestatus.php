<?php


include"connectnew.php";
$mob=$_GET['bid'];
echo $mob;
$rs=$conn->query("update booking set status='cancelled' where bid='$mob'");
if($rs)
{
	echo "<script type='text/javascript'>";
	echo "if(confirm('You cancelled your booking'))document.location='start.html';else document.location='start.html';";
	echo "</script>"; 

}
?>

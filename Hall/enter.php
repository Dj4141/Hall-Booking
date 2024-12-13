<?php
include "connectnew.php";
$un=$_POST['t1'];
$uid=$_POST['upass'];
$phn=$_POST['t2'];

$rs=$conn->query("select count(*) from college ");
$r=$rs->fetch_row();
//echo $r[0];
if($un!="" && $uid!="" && $phn!="")
	{
		$rs=$conn->query("insert into college values('$un','$uid','$phn')");
		if($rs)
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Now u can enter'))document.location='details.html';else document.location='details.html';";
			echo "</script>"; 
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Not Registered '))document.location='enter.html';else document.location='enter.html';";
			echo "</script>"; 


		}
	}
else
	{
		echo "<script type='text/javascript'>";
		echo "if(confirm('Fields Should not be empty'))document.location='enter.html';else document.location='enter.html';";
		echo "</script>"; 
	}
?>


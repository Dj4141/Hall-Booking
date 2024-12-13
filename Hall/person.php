<?php
include "connectnew.php";
$pn=$_POST['t1'];
$pm=$_POST['t2'];
$paddr=$_POST['t3'];
$pemail=$_POST['email'];
$pgender=$_POST['t5'];

$rs=$conn->query("select count(*) from Person where pmob='$pm'");
$r=$rs->fetch_row();
//echo $r[0];

if($r[0]==1)
{
	echo "<script type='text/javascript'>";
	echo "if(confirm('Mobile Number Already Exists'))document.location='person.html';else document.location='person.html';";
	echo "</script>"; 

}
else
{
	if($pn!="" && $pm!="" && $paddr!="" && $pemail!="" && $pgender!="")
	{
		$rs=$conn->query("insert into person values('$pn','$pm','$paddr','$pemail','$pgender')");
		if($rs)
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Information accepted'))document.location='booking.html';else document.location='booking.html';";
			echo "</script>"; 
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Information incomplete'))document.location='person.html';else document.location='person.html';";
			echo "</script>"; 


		}
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "if(confirm('Incomplete details'))document.location='person.html';else document.location='person.html';";
		echo "</script>"; 
	}

}


?>


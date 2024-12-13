<html>
<style>
body
		{
			background-image:url("img3.jpg");
			background-color:white;
			background-size:cover;
			width:80%;	
		}
</style>
</html>
<?php
include"connectnew.php";
echo"Name:".$_COOKIE['r1']."</br>";
echo"Mobile:".$_COOKIE['r2']."</br>";
echo"Address:".$_COOKIE['r3']."</br>";
echo"Email:".$_COOKIE['r4']."</br>";
echo"Gender:".$_COOKIE['r5']."</br>";
//echo"Booking date:".$_POST['t1']."</br>";
//echo"Enter time:".$_POST['t2']."</br>";
//echo"Exit time:".$_POST['t3']."</br>";
//echo"Event name:".$_POST['t4']."</br>";
//echo"Department:".$_POST['t5']."</br>";
//echo"Phone:".$_POST['t6']."</br>";
//echo"Status:".$_POST['t7']."</br>";


$bd=$_POST['t1'];
$ent=$_POST['t2'];
$ext=$_POST['t3'];
$en=$_POST['t4'];
$dept=$_POST['t5'];
$statu=$_POST['t6'];
$mob=$_POST['t7'];

$rs=$conn->query("select count(*) from booking where entrytime='$ent'");
//$rs->fetchinto($r);
//echo $r[0];

if($r[0]==1)
{
	echo "<script type='text/javascript'>";
	echo "if(confirm('Select another time'))document.location='booking3.php';else document.location='booking3.php';";
	echo "</script>"; 

}
else
{
	if($bd!="" && $ent!="" && $ext!="" && $en!="" && $dept!="" && $statu!="" && $mob!="")
	{
		$rs=$conn->query("insert into booking(bdate,entrytime,exittime,ename,department,status,pmob) values('$bd','$ent','$ext','$en','$dept','$statu','$mob')");
		if($rs)
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Hall booked successfully'))document.location='start.html';else document.location='start.html';";
			echo "</script>"; 
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Information incomplete'))document.location='booking.html';else document.location='booking.html';";
			echo "</script>"; 


		}
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "if(confirm('Incomplete details'))document.location='booking3.php';else document.location='booking3.php';";
		echo "</script>"; 
	}

}
?>
<html>
<input type=Submit value=Delete>
</html>

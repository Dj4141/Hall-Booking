<?php
include "connectnew.php";

$nm=$_POST['t1'];
$no=$_POST['t2'];
$valid=$_POST['t3'];
$cvv=$_POST['t4'];


if($nm=="" || $no=="" || $mmyy=="" || $cvv=="")
{		
$rs=$conn->query("insert into card values('$nm','$no','$valid ','$cvv')");
if($rs)
{
	echo "<script type='text/javascript'>";
        echo "if(confirm('Please enter the details'))document.location='credit.html';else document.location='credit.html';";
	echo "</script>"; 

}
}
else
{
	echo "<script type='text/javascript'>";
        echo "if(confirm('Payment Successfully done!!'))document.location='admin_login.html';else document.location='admin_login.html';";
	echo "</script>";
}

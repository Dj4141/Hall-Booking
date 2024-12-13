<?php
include "connectnew.php";

$nm=$_POST['t1']
$no=$_POST['t2'];
$mmyy=$_POST['t3'];
$cvv=$_POST['t4'];
$rs=$conn->query("select count(*) from card where Name='$nm' and cvv='$cvv'");
$r=$rs->fetch_row();
//echo $r[0];

if($nm=="" || $no=="" || $mmyy==""|| $cvv=="")
{
	echo "<script type='text/javascript'>";
        echo "if(confirm('Please enter the details'))document.location='card.html';else document.location='card.html';";
	echo "</script>"; 

}
else
{
	echo "<script type='text/javascript'>";
        echo "if(confirm('Payment Successfully done!!'))document.location='Login1.html';else document.location='Login1.html';";
	echo "</script>";
}

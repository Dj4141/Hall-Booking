<?php
include "connectnew.php";
$an=$_POST['t1'];
$am=$_POST['t2'];
$dob=$_POST['t3'];
$mail=$_POST['email'];
$auname=$_POST['un'];
$apass=$_POST['upass'];
$acpass=$_POST['ucpass'];
$gender=$_POST['t7'];

$rs=$conn->query("select count(*) from Admin where Amob='$am'");
$r=$rs->fetch_row();
//echo $r[0];

if($r[0]==1)
{
	echo "<script type='text/javascript'>";
	echo "if(confirm('Mobile Numbe Already Exists '))document.location='admin_reg.html';else document.location='admin_reg.html';";
	echo "</script>"; 

}
else
{
	if($an!="" && $am!="" && $dob!="" && $mail!="" && $auname!="" && $apass!="" && $apass==$acpass && $gender!="")
	{
		$rs=$conn->query("insert into Admin values('$am','$an','$dob','$mail','$gender','$auname','$apass')");
		if($rs)
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Registration Successful now you can login'))document.location='admin_login.html';else document.location='admin_login.html';";
			echo "</script>"; 
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Not Registered '))document.location='admin_reg.html';else document.location='admin_reg.html';";
			echo "</script>"; 


		}
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "if(confirm('Fields Should not be empty'))document.location='admin_reg.html';else document.location='admin_reg.html';";
		echo "</script>"; 
	}

}


?>


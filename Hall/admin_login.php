<?php
include "connectnew.php";

$a=$_POST['t1'];
$b=$_POST['t2'];

$rs=$conn->query("select count(*) from Admin where Auname='$a' and Aupass='$b'");
$r=$rs->fetch_row();
//echo $r[0];

if($r[0]==1)
{
	 echo "<script type='text/javascript'>";
         echo "if(confirm('Login Successfull'))document.location='index12.html';else document.location='index12.html';";
	echo "</script>"; 

}
else
{
	 echo "<script type='text/javascript'>";
        echo "if(confirm('Invalid username or password'))document.location='admin_login.html';else document.location='admin_login.html';";
	echo "</script>"; 
		
}

?>


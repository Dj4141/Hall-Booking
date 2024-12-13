<?php
include "connectnew.php";

$a=$_POST['t1'];
$b=$_POST['t2'];

$rs=$conn->query("select count(*) from college1 where Name='$a' and id='$b'");
$r=$rs->fetch_row();
//echo $r[0];

if($r[0]==1)
{
	 echo "<script type='text/javascript'>";
         echo "if(confirm('User Entered Succefully.'))document.location='details.html';else document.location='details.html';";
	echo "</script>"; 

}
else
{
	 echo "<script type='text/javascript'>";
        echo "if(confirm('Invalid user'))document.location='next1.html';else document.location='next1.html';";
	echo "</script>"; 
		
}

?>


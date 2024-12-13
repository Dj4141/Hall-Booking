<?php
include "connectnew.php";

$a=$_POST['t1'];

$rs=$conn->query("select count(*) from person where pmob='$a'");
//$r=$rs->fetch_row();
$r=$rs->fetch_row();
//echo $r[0];

if($r[0]==1)
{
	 echo "<script type='text/javascript'>";
         echo "if(confirm('Record found'))document.location='booking3.php';else document.location='booking3.php';";
	echo "</script>"; 

}
else
{
	 echo "<script type='text/javascript'>";
        echo "if(confirm('Record not found enter new record'))document.location='person.html';else document.location='person.html';";
	echo "</script>"; 
		
}

?>


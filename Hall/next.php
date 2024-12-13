<?php
include "connectnew.php";

$a=$_POST['t1'];
$b=$_POST['t2'];

$rs=$conn->query("select count(*) from college1 where Name=''");
$r=$rs->fetch_row();
//echo $r[0];


if($r[0]==1)
{
	echo "<script type='text/javascript'>";
	echo "if(confirm('User Already Exists.Please Login'))document.location='next1.html';else document.location='next1.html';";
	echo "</script>"; 

}
else
{
	if($a!="" && $b!="")
	{
		$rs=$conn->query("insert into college1 values('$a','$b')");
		if($rs)
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('User Accepted Successfull.Please Login'))document.location='next1.html';else document.location='next1.html';";
			echo "</script>"; 
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "if(confirm('Already Exists'))document.location='next.html';else document.location='next.html';";
			echo "</script>"; 


		}
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "if(confirm('Fields Should not be empty'))document.location='next.html';else document.location='next.html';";
		echo "</script>"; 
	}

}

/*
if($r[0]==1)
{
	 echo "<script type='text/javascript'>";
         echo "if(confirm('user accepted'))document.location='enter.html';else document.location='enter.html';";
	echo "</script>"; 

}
else
{
	 echo "<script type='text/javascript'>";
        echo "if(confirm('Invalid name or id'))document.location='next.html';else document.location='next.html';";
	echo "</script>"; 
		
}*/
?>
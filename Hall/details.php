<html><head>
<style type="text/css">
		body
		{
			background-image:url("img3.jpg");
			background-size:cover;
			width:80%;	
		}
</style></html>
<?php
include"connectnew.php";
$mob=$_POST['t1'];
$rs=$conn->query("select * from booking,person where person.pmob='$mob' and person.pmob=booking.pmob");

echo "<table border=1>
<tr><td>Booking id</td>
<td>Booking date</td>
<td>Entry time</td>
<td>Exit time</td>
<td>Department</td><td>Stauts</td><td>Mobile no</td><td>Cancel Booking?</td></tr>";

while($r=$rs->fetch_row())
{

	//foreach($r as $row);
	echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>";?>
	//<html><a href=updatestatus.php?bid=<?php echo $r[0];?>>Click</a></td></tr>"<?php
}

//$r[];
?>
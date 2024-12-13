<?php
include "DB.php";
$con=DB::connect("pgsql://postgres:nrc@localhost/Hall");
echo $conn;
?>


<?php

include"connectnew.php";

?>
<html>
<head>
<title>Booking Information</title>
<meta charset="utf-8">
<link rel="stylesheet"   type="text/css"  href="bootstrap.min.css" >
<link rel="stylesheet"   type="text/css"  href="bootstrap.min.js" >
<!--script src="bootstrap.min.js></script-->
<style>
body
{
	background-image:url("img3.jpg");
	background-size:cover;
	width:80%;
}
#form
			{				
				background:transparent;
				top:60px;
				left:85px;
				position:center;
				height: 700px;
				border:1px solid black;
				border-radius:1px;
				padding:40px 40px 40px 40px;
				max-width:1200px;
			}
		.registration
			{
				font-size:40px;
				font-family:Times New Roman;
				font-weight:700;
				border-bottom-style:;
			}
		.text
			{
				height:30px;
				background:transparent;
				color:black;
				font-size:16px;
			}
			
		label
			{
				font-size:25px;
			}
		span
			{
				font-size:15px;
			}
		.button
			{
				top:-50%;

			}	
		.btn-primary
			{
				
				border:1px solid #fff;
				padding:10px 40px;
				margin-right:15px;
				margin-left:10px;
				text-decoration:none;
				color:#fff;
			}
		.btn-danger
                        {
                              
				border:1px solid #fff;
				padding:10px 40px;
				margin-right:15px;
				margin-left:10px;
		
				text-decoration:none;
				color:#fff;
	                }
</style>

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
<form action=booking.php method=post>
       <h1><div class="form">
		<div class="col-md-6  col-md-offset-3" id="form">
			<center><b class="registration">Booking information</b></center>
				<form>
					<div class="form-group">
						<label>Booking date:</label>
						<input type="date" name="t1" id="t1" class="form-control text" placeholder="Select date">
</div>
					
					<div class="form-group">
                                                <label>Entry time:</label>
                                                <input type="time" name="t2" id="t2" class="form-control text" placeholder="Select time">
</div>	
					
					<div class="form-group">
                                                <label>Exit time:</label>
                                                <input type="time" name="t3" class="form-control text" placeholder="Select time">
</div>					
                                              
					<div class="form-group">
                                                <label>Event name:</label>
                                                <input type="text" name="t4" class="form-control text" placeholder="Enter event name" autocomplete="off">
</div>
					

					<div class="form-group">
                                          <label>Department:</label><br>
                                     	  <select name=t5 style="font-size:17px;">
						<option>computer science</option>
						<option>Arts</option>
						<option>commerce</option>
						<option>Biology</option>
						<option>Statistics</option>
						<option>Mathmatics</option>
						<option>English</option>
						<option>Electronics</option>
						<option>Geography</option>
						<option>Others</option>
					</select>
						
					<div class="form-group">
                                                <label>Status :</label>
                                                <input type="text" name="t6" class="form-control text" placeholder="Book or Cancel" autocomplete="off">
</div>
<div class="button">
				
					<div class="form-group">
                                                <label>Mobile no:</label>
                                                <input type="text" name="t7" class="form-control text" placeholder="Mobile no" autocomplete="off">
</div>
					<div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Register">
						 <input type="reset" class="btn btn-danger" value="Reset"></div></div>
		</h1>		</form>

</div>
</body>
</html>


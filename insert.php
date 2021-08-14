<?php
$con = mysqli_connect("localhost","root","");
 	if (!$con)
   	{  
		echo('Could not connect: ' . mysqli_error());
 	}

	if(!mysqli_select_db($con,'voting'))
	{
		echo "DB not Selected";
	}
	
	$fname = $_POST ['fname'];
	$lname = $_POST ['lname'];
	$dob = $_POST ['dob'];
	$mob = $_POST ['mob'];
	$adhar= $_POST ['adhar'];
	$email = $_POST ['email'];
	$pwd = $_POST ['pass'];
	$rpwd = $_POST ['rpass'];

	$sql = "INSERT INTO user_reg (fname,lname,dob,mob,adhar,email,pass,rpass) VALUES ('$fname','$lname','$dob','$mob','$adhar','$email','$pwd','$rpwd')";

	if(!mysqli_query($con,$sql))
	{
		echo "not inserted";
	}
	else 
	
	header("refresh:2; url=dashboard1.php");
	?>
	

<html>
<body>

<?php
	
	$con = mysql_connect("localhost","root","");
 	if (!$con)
   	{  
		die('Could not connect: ' . mysql_error());
 	}

	
	$sql = "CREATE DATABASE Database_DB";

	if(mysql_query($sql, $con))
	{
		echo "DATABASE my_data created successfully";
	}
	else
	{
		echo "DATABASE creation error:". mysql_error($con);
	}
	
	/*mysql_select_db("Database_DB", $con);
	$sql = "CREATE TABLE Registration
	(
		fname varchar(15),
		lname varchar(15),
		email varchar(25),
		password varchar(15),
		cpassword varchar(15),
		gender char(10)
		)";	
	
	mysql_query($sql,$con);
	echo "Table Created <br>";

	
		$fname = $_POST ['fname'];
		$lname = $_POST ['lname'];
		$email = $_POST ['email'];
		$password = $_POST ['password'];
		$cpassword = $_POST ['cpassword'];
		$gender = $_POST ['gender'];


	$sql = "INSERT INTO Registration values ('$fname', '$lname', '$email', '$password',  '$cpassword', '$gender')";

	$result = mysql_query($sql);
	echo "Registration successfully";
	mysql_close();*/
?>
</body>
</html>
	
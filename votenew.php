	
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
	
	$radio = $_POST ['vote'];

if($radio=="Shivsena")
{
	$sql = "INSERT INTO vote_count (shiv,bjp,cong,rash) VALUES ('$radio','-','-','-')";
}
else if($radio=="Bhajap")
{
	$sql = "INSERT INTO vote_count (shiv,bjp,cong,rash) VALUES ('-','$radio','-','-')";
}
else if($radio=="Congress")
{
	$sql = "INSERT INTO vote_count (shiv,bjp,cong,rash) VALUES ('-','-','$radio','-')";
}
else if($radio=="Rashtravadi Congress")
{
	$sql = "INSERT INTO vote_count (shiv,bjp,cong,rash) VALUES ('-','-','-','$radio')";
}
	if(!mysqli_query($con,$sql))
	{
		echo "not inserted";
	}
	else 
	
	echo"<script>alert('Your vote is successful');window.location='dashboard1.php'</script>";
	
	
?>
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

	$button=mysqli_real_escape_string($con,$_POST['button']);
?>
	<html>
<head>
<title>Result</title>

</head>
<body>
<form method="POST" action="">
<input type="submit" name="button" value="Shivsena" >
<?php
if($button=="Shivsena")
{
	$sql = $query = "SELECT count(shiv) as total from vote_count where shiv='Shivsena'";
	$result = mysqli_query($con, $query);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
}
?>
<br><br>
<input type="submit" name="button" value="Bhajap">
<?php
if($button=="Bhajap")
{
	$sql = $query = "SELECT count(bjp) as total from vote_count where bjp='Bhajap'";
	$result = mysqli_query($con, $query);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
}
?>
<br><br>
<input type="submit" name="button" value="Congress">
<?php
if($button=="Congress")
{
	$sql = $query = "SELECT count(cong) as total from vote_count where cong='Congress'";
	$result = mysqli_query($con, $query);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
}
?>
<br><br>
<input type="submit" name="button" value="Rashtravadi">

<?php
if($button=="Rashtravadi")
{
	$sql = $query = "SELECT count(rash) as total from vote_count where rash='Rashtravadi Congress'";
	$result = mysqli_query($con, $query);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
}
		
?>
<br><br>
	

</form>
</body>
</html>

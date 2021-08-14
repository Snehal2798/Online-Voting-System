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
	$query = "SELECT * FROM candidate";
$result = mysqli_query($con, $query);
	
		?>
	
<html>
	<head>
	<title>Candidate </title>
	</head>
	<body>
	<table border=1 align="center" >
	<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Position</th>
	<th>Party</th>
	</tr>
	<?php 
	
	while($rows=mysqli_fetch_array($result))
	{
		?>
		<tr>
		<td><?php echo $rows['fname'];?></td>
		<td><?php echo $rows['lname'];?></td>
		<td><?php echo $rows['position'];?></td>
		<td><?php echo $rows['party'];?></td>
		</tr>
		<?php
	}
	?>
	</table>
	</body>
	</html>

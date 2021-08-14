<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<?php
$con=mysqli_connect("localhost","root","","voting");
if(isset($_POST['submit'])){
	$username=mysqli_real_escape_string($con,$_POST['uname']);
	$password=mysqli_real_escape_string($con,$_POST['pwd']);
	
	if($username!="" && $password!=""){
		$sql="select * from admin2 where uname='$username' and pass='$password'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		
		$count=mysqli_num_rows($result);
		if($count==1){
			header ("location:admin2.php");
		}
		else echo "please check your username or password";
	}
}

?>
</head>
<body>
<center><h1><b>Admin Login</b></h1></center>
<div class ="form">
<form class="Voting" action="#" method="post">
<input type="text" name="uname" placeholder="User name"> 
<input type="password" placeholder="Password" name="pwd">
<input type="submit" name="submit" value="Login" id="button" >
</form>

</body>
</html>


<!DOCTYPE html>

<html>

<head>

<title>registration form creation</title>

<link rel="stylesheet" type="text/css" href="style2.css">

</head>

<body>

<h1>Registration form</h1>

<div class="register">

<form method="post" id="register" action="insert.php">

<label>First name:</label><br>

<input type="text" name="fname" id="name"

placeholder="Enter your first name" required><br><br>

<label>Last name:</label><br>

<input type="text" name="lname" id="name"

placeholder="Enter your last name" required><br><br>

<label>Enter Date of Birth:</label><br>

<input type="date_format" name="dob" id="name"

placeholder="Enter Date of birth" required><br><br>

<label>Mobile number:</label><br>

<select id="ph">

<option>+91</option>

</select>

<input type="number" name="mob" id="num"

placeholder="Enter your mobile number" maxlength="10" required><br><br>

<label>Aadhar card No:</label><br>

<input type="number" name="adhar" id="name"

placeholder="Enter aadhar card number" maxlength="12" required><br><br>

<label>Email:</label><br>

<input type="email" name="email" id="name"

placeholder="Enter your email" required><br><br>

<label>password:</label><br>

<input type="password" name="pass" id="name"

placeholder="Enter your first name" required><br><br>

<label>Re enter u r password:</label><br>

<input type="password" name="rpass" id="name"

placeholder="Enter your password" required><br><br>

<input type="Submit" name="Submit" value="Submit" id="sub" onclick="location.href('dashboard1.php');" value="Redirect">

</form>

</div>

</body>

</html>
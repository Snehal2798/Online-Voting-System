
<!DOCTYPE html>
<html>
<head>
<title>registration form creation</title>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<h1>Registration form</h1>
<div class="register">
<form method="post" id="register" action="candireg.php">
<label>first name:</label><br>
<input type="text" name="fname" id="name"
 placeholder="Enter your first name"><br><br>
 <label>Last name:</label><br>
 <input type="text" name="lname" id="name"
 placeholder="Enter your last name"><br><br>
 <label>Candidate Position :</label><br>
<select id="pos" name="position">
<option value="select">Select</option>
<option value="Vice-Secretary">Vice-Secretary</option>
<option value="President">President</option>
<option value="Secretary">Secretary</option>
</select><br><br>
<label>Candidate Party :</label><br>

<select id="party" name="party">
<option value="select">Select</option>
<option value="Shivsena">Shivsena</option>
<option value="BJP">BJP</option>
<option value="Congress">Congress</option>
<option value="Rashtravadi Congress">Rashtravadi Congress</option>
</select><br><br>
<br>
<input type="Submit" name="Submit" value="Submit" id="sub">
</form>
</div>
</body>
</html>


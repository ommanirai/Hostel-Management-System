<!DOCTYPE html>
<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Hostel Management System</h1>
<h2>Admin Login:</h2>
<form method="POST" action="checkadmin.php">
	Your Username or Email:
	<input type="email" name="email" placeholder="email"><br><br>
	Password:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	<input type="password" name="password" placeholder="password"><br><br>
	<div style="text-align: center;">
		<input type="submit" value="login">
	</div>
</form>
</body>
</html>
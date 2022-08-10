<?php
if(empty($_SESSION)){
	session_start();
}
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<h1 style="color:blue;">Change Password:</h1>
<div style="border:1px solid;">
	<div style="font-weight: bold; font-family:tahoma; color:white;height:50px;line-height: 50px; background-color: gray;">
		CHANGE YOUR PASSWORD</div><br><br>

<form method="POST" action="changepsw.php">
<div style="width: 200px;float: left;padding: 5px;">
Old Password:&emsp;&emsp;</div>
<input type="password" name="opassword" placeholder="Old Passwprd",required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
New Password:&emsp;&emsp;</div>
<input type="password" name="npassword" placeholder="New Password",required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Confirm Password: &emsp;&emsp;&emsp;</div>
<input type="password" name="cpassword" placeholder="Confirm Password",required><br><br>

<div style="text-align: center;">
<input type="reset" name="reset" value="Cancel">
<input type="submit" name="submit" value="Change Password">
</div>
</form>
</div>
<?php
}
else
{
		header("location:../index.php");
}
?>
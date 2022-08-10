<div>
		<h1 style="color:blue;font-weight: bold;">Student Registration:</h1>
		<form method="POST" action="regpost.php">
<div style="width: 200px;float: left;">
Registration No :</div>
<input type="text" name="regno" placeholder="Registration no." ,required><br><br>

<div style="width: 200px;float: left;">
First Name :&emsp;&emsp;</div>
 <input type="text" name="fname" placeholder ="First name",required, ><br><br>

<div style="width: 200px;float: left;">
Middle Name :&emsp;</div>
<input type="text" name="mname" placeholder="Middle name"><br><br>

<div style="width: 200px;float: left;">
Last Name :&emsp;&emsp;</div>
<input type="text" name="lname" placeholder="Last name" ,required><br><br>

<div style="width: 200px;float: left;">
Gender : &emsp;&emsp;</div>
<select name="gender"required>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select><br><br>

<div style="width: 200px;float: left;">
Contact No :&emsp;&emsp;</div>
<input type="text" name="contact" placeholder="Contact",required><br><br>

<div style="width: 200px;float: left;">
Email id: &emsp;&emsp;&emsp;</div>
<input type="email" name="email" placeholder="Email",required><br><br>

<div style="width: 200px;float: left;">
Password: &emsp;&emsp;&emsp;</div>
<input type="password" name="password" placeholder="Password",required><br><br>

<div style="width: 200px;float: left;">
Username:&emsp;&emsp;</div>
 <input type="text" name="username" placeholder ="Username",required, ><br><br>

<div style="text-align: center;">
	<input type="reset" name="cancel" value="Cancel">
<input type="submit" name="submit" value="Register"></div>
</form>
</div>
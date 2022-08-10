<?php

if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
	$user=$_SESSION['user'];
include"../library.php";
$mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_errno){
	echo"connection failed";
	exit();
} 
$sql="select * from registration where email='{$user}' LIMIT 1";
$result=$mysqli->query($sql);
while($rows=mysqli_fetch_assoc($result))
	{?>
<div style="border:1px solid;">
	<div style="font-weight: bold; font-family:tahoma; color:blue;height:50px;line-height: 50px; background-color: gray;">
		<?php echo $_SESSION['username'] ."'s Profile:";?></div><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Registration No :</div>
<input type="text" name="regno" value="<?php echo $rows['regNo']; ?>" placeholder="Registration no." ,required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
First Name :&emsp;&emsp;</div>
 <input type="text" name="fname" value="<?php echo $rows['firstName']; ?>"placeholder ="First Name",required, ><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Middle Name :&emsp;</div>
<input type="text" name="mname" value="<?php echo $rows['middleName']; ?>"placeholder="Middle Name"><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Last Name :&emsp;&emsp;</div>
<input type="text" name="lname" value="<?php echo $rows['lastName']; ?>"placeholder="Last Name" ,required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Gender : &emsp;&emsp;</div>
<select>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select><br><br> 

<div style="width: 200px;float: left;padding: 5px;">
Contact No :&emsp;&emsp;</div>
<input type="text" name="contact" value="<?php echo $rows['contact']; ?>"placeholder="Contact No.",required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Email id: &emsp;&emsp;&emsp;</div>
<input type="email" name="email" value="<?php echo $rows['email']; ?>"placeholder="Email",readonly><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Password: &emsp;&emsp;&emsp;</div>
<input type="password" name="password" value="<?php echo $rows['password']; ?>"placeholder="Password",readonly><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Username:&emsp;&emsp;</div>
<input type="text" name="username" value="<?php echo $rows['userName']; ?>"placeholder="Username",required><br><br>

<div style="text-align: center;">
<input type="submit" name="submit" value="Register"></div>
</div>
	<?php }
?>
<?php
}
else
{
		header("location:../index.php");
}
?>
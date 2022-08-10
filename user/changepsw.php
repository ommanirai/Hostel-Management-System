<?php
if(empty($_SESSION)){
	session_start();
}
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
	include"../library.php";
	$mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($mysqli->connect_errno)
	{
		echo"connection failed";
		exit();
	} 
	$oldpassword=$_POST['opassword'];
	$newpassword=$_POST['npassword'];
	$confirmpassword=$_POST['cpassword'];
	$username=$_SESSION['user'];
	$sql="select * from registration where email='{$username}' and password='{$oldpassword}'";
	$result=$mysqli->query($sql);
	$numrows=$result->num_rows;
	if($numrows<1)
	{
		$_SESSION['pg']="change-password";
		$_SESSION['msg']= "Old Password does not match!!";
		header("location:user-profile.php");
	}
	if($newpassword==$confirmpassword)
	{
		if(isset($_POST['submit']))
		{
			$sql1="update registration set password='{$newpassword}' where email='{$username}'";
			if($mysqli->query($sql1))
			{
				$_SESSION['msg']= "Password Changed Successfully!!";
				$_SESSION['pg']="change-password";
				header("location:user-profile.php");
			}
			else
			{
				//echo $sql;
				$_SESSION['msg']= "Password does not match!!";
				header("location:change-password.php");
			}
		}
	}
	else
	{
		$_SESSION['pg']="change-password";
		$_SESSION['msg']= "Old Password does not match!!";
		header("location:user-profile.php");
	}
 }
?>
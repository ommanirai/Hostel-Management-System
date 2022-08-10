<?php
session_start();
include"library.php";
$mysqli=new mysqli(localhost, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_errno)
	{
		echo"connection failed";
		exit();
	} 
	$reg_no=$_POST['regno'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$username=$_POST['username'];
	$date=date("Y/m/d") . ' | '. date("h:i:sa");
	if(isset($_POST['submit']))
		{
		$sql="insert into registration (regNo, firstName , middleName ,lastName ,gender ,contact ,email , password,createdDate,userName)
			values('{$reg_no}', '{$fname}' , '{$mname}' ,'{$lname}' ,'{$gender}','{$contact}' ,'{$email}' , '{$password}','{$date}','{$username}')";
			echo $sql;
		if($mysqli->query($sql))
		{
			$_SESSION['msg']= "record successfully saved";
			$_SESSION['pg']='user';
			header("location:index.php");
			}
			else
			{
			//echo $sql;
			$_SESSION['msg']= "record not saved";
			$_SESSION['pg']='user';
			header("location:index.php");
			}
		}
	
?>
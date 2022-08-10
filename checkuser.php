<?php
session_start();
include"library.php";
$mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_errno){
	echo"connection failed";
	exit();
} 
$sql="select * from registration where status='1'";
$result=$mysqli->query($sql);
$email=$_POST['email'];
$password=$_POST['password'];
	while($rows=mysqli_fetch_assoc($result)){
if($email==$rows['email'] && $password==$rows['password'])
{
	$_SESSION['abc']=$rows['level'];
	$_SESSION['user']=$rows['email'];
	$_SESSION['username']=$rows['userName'];
	header("location:user/user-index.php");
}
}
?>
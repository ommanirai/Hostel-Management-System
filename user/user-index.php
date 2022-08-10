<?php
session_start();
if(isset($_SESSION['abc'])){
    $abc=$_SESSION['abc'];
	  }
	  if($abc=='1'){
	  header("location:../admin/admin-profile.php");
	  }
	else if($abc=='2'){
    header("location:user-profile.php");
      }
else
{
  header("location:viewer-profile.php");
}
?>
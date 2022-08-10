<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <a href="#"><h2>Hostel Management System    <span style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php  
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg']; 
      } ?> </span></h2></a>
</header>

<section>
  <nav>
    <ul>
      <li><a href="index.php?mypage=reg">User Registration</a></li>
      <li><a href="index.php?mypage=User">User Login</a></li>
      <li><a href="index.php?mypage=admin">Admin Login</a></li>
    </ul>
  </nav>
  
  <article>
  <?php
      if(isset($_GET['mypage'])){
        $page=$_GET['mypage'];
        require("$page.php");
      }
      else
      {
        if(isset($_SESSION['pg'])){
          $page=$_SESSION['pg'];
          require("$page.php");
          unset($_SESSION['pg']);
        }
        else
        {
          require("user.php");  
        }        
      }
    ?>
  </article>
</section>

<footer>
  <h1>Feel free to contact our hostel for the services.</h1>
</footer>
</body>
</html>

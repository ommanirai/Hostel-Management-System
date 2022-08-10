<?php
session_start();
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
</head>
<body>
<header>
  <a href="#"><h2>Hostel Management System <span style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?php  
    if(isset($_SESSION['msg']))
      {
        echo $_SESSION['msg']; 
        unset($_SESSION['msg']);
      } ?> </span></h2></a>

  <div style="">
   <a href="../logout.php" style="background-color: brown;display: block;color: white;font-weight: bold;position: absolute;z-index: 2; width: 100px; border-radius: 5px; text-align: center;height: 30px;line-height: 30px;right: 10px;top:20px;">Log Out</a>
  </div>
</header>

<section>
  <nav>
    <ul>
      <li><a href="user-profile.php?mypage=dashboards">Dashboards</a></li>
      <li><a href="user-profile.php?mypage=my-profile">My Profile</a></li>
      <li><a href="user-profile.php?mypage=change-password">Change Password</a></li>
      <li><a href="user-profile.php?mypage=book-hostel">Book Hostel</a></li>
      <li><a href="user-profile.php?mypage=room-detail">Room Detail</a></li>
      <li><a href="user-profile.php?mypage=access-log">Access Log</a></li>
    </ul>
  </nav>
  
  <article>
    <?php
      if(isset($_GET['mypage']))
      {
        $page=$_GET['mypage'];
        require("$page.php");
      }
      else
      {
        if(isset($_SESSION['pg']))
        {
          $page=$_SESSION['pg'];
          require("$page.php");
          unset($_SESSION['pg']);
        }
      else
      {
        require("../wellcome.php");
      }
    }
    ?>
  </article>
</section>
<footer>
  <p>feel free to contact our hostel for the services.</p>
</footer>
</body>
</html>
<?php
}
else
{
    header("location:../index.php");
}
?>

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
  <a href="#"><h2>Hostel Management System</h2></a>
  <div style="">
   <a href="../logout.php" style="background-color: brown;display: block;color: white;font-weight: bold;position: absolute;z-index: 2; width: 100px; border-radius: 5px; text-align: center;height: 30px;line-height: 30px;right: 10px;top:20px;">Log Out</a>
  </div>
</header>

<section>
  <nav>
    <ul>
      <li><a href="admin-profile.php?mypage=dashboard">Dashboards</a></li>
      <li>Courses</a></li>
              <li><a href="admin-profile.php?mypage=add-courses">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Courses</a></li>
              <li><a href="admin-profile.php?mypage=manage-courses">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Courses</a></li>
      <li>Room</a></li>
              <li><a href="admin-profile.php?mypage=add-room">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Room</a></li>
              <li><a href="admin-profile.php?mypage=manage-room">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manage Rooms</a></li>
      <li><a href="admin-profile.php?mypage=studentreg">Student Registration</a></li>
      <li><a href="admin-profile.php?mypage=studentmgnt">Manage Students</a></li>
      <li><a href="admin-profile.php?mypage=useraccess">Users Access Logs</a></li>
    </ul>
  </nav>
  
  <article>
    <?php
      if(isset($_GET['mypage'])){
        $ourpage=$_GET['mypage'];
        require("$ourpage.php");
      }
      else
      {
        require("../wellcome.php");
      }
    ?>
  </article>
</section>
<footer>
  <p>feel free to contact our hostel for the services.</p>
</footer>
</body>
</html>

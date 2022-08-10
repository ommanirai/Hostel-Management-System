<?php
session_start();
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<h1 style="color:blue;">Add Courses:</h1>
<div style="border:1px solid;">
	<div style="font-weight: bold; font-family:tahoma; color:white;height:50px;line-height: 50px; background-color: gray;">
		ADD COURSES</div><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Course Code:&emsp;&emsp;</div>
<input type="text" name="coursecode" placeholder="Course Code",required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Course Name(Short) :&emsp;&emsp;</div>
<input type="text" name="coursename" placeholder="Course Name(Short)",required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Course Name(Full): &emsp;&emsp;&emsp;</div>
<input type="text" name="coursename" placeholder="Course Name(Full)",readonly><br><br>

<div style="text-align: center;">
<input type="submit" name="submit" value="Create Courses"></div>
</div>
<?php
}
else
{
		header("location:../index.php");
}
?>
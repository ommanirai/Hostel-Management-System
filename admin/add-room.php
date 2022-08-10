<?php
session_start();
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<h1 style="color:blue;">Add Room:</h1>
<div style="border:1px solid;">
	<div style="font-weight: bold; font-family:tahoma; color:white;height:50px;line-height: 50px; background-color: gray;">
		ADD A ROOM</div><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Select Seater: &emsp;&emsp;</div>
<select>
<option value="male">Single Seater</option>
<option value="female">Two Seater</option>
<option value="others">Three Seater</option>
<option value="female">Four Seater</option>
<option value="female">Five Seater</option>
</select><br><br> 

<div style="width: 200px;float: left;padding: 5px;">
Room No :&emsp;&emsp;</div>
<input type="text" name="roomno" placeholder="Room No.",required><br><br>

<div style="width: 200px;float: left;padding: 5px;">
Fee(Per Student): &emsp;&emsp;&emsp;</div>
<input type="text" name="feeperstudent" placeholder="Fee Per Student",readonly><br><br>

<div style="text-align: center;">
<input type="submit" name="submit" value="Create Room"></div>
</div>
<?php
}
else
{
		header("location:../index.php");
}
?>
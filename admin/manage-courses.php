<?php
session_start();
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<h1 style="color:blue;">Manage Courses:</h1>
<div style="border:1px solid;">
<div style="font-weight: bold; font-family:tahoma; color:white;height:50px;line-height: 50px; background-color: gray;">
		MANAGE COURSES</div>
<?php
include"../library.php";
$mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_errno){
	echo"connection failed";
	exit();
} 
$sql="select * from coursemgnt";
$result=$mysqli->query($sql);
$numrows=$result->num_rows;
if($numrows>0){ ?>
	<table border="1" width="100%" cellpadding="10" cellspacing="0">
		<tr>
			<th style="background-color:gray;">SNo.</th>
			<th style="background-color: gray;">Course Code</th>
			<th style="background-color:gray;">Course Name(Short)</th>
			<th style="background-color:gray;">Course Name(Full)</th>
			<th style="background-color:gray;">Registration Date</th>
		</tr>
	<?php
	while($rows=mysqli_fetch_assoc($result)){ 
		?>
		<tr>
		<td><?php echo $rows['sno.']; ?></td>
		<td><?php echo $rows['course code']; ?></td>
		<td><?php echo $rows['course name(short)']; ?></td>
		<td><?php echo $rows['course name(full)']; ?></td>
		<td><?php echo $rows['reg date']; ?></td>
		</tr>
		<?php
	}?>
	</table>
</div>
<?php }
}
else
{
header("location:../index.php");
}
?>

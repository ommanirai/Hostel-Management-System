<?php
session_start();
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<h1 style="color:blue;">Manage Rooms:</h1>
<div style="border:1px solid;">
<div style="font-weight: bold; font-family:tahoma; color:white;height:50px;line-height: 50px; background-color: gray;">
		ALL ROOM DETAIL</div>
<?php
include"../library.php";
$mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_errno){
	echo"connection failed";
	exit();
} 
$sql="SELECT * FROM `studentmgnt`";
$result=$mysqli->query($sql);
$numrows=$result->num_rows;
if($numrows>0){ ?>
	<table border="1" width="100%" cellpadding="10" cellspacing="0">
		<tr>
			<th style="background-color: gray;">SNo.</th>
			<th style="background-color: gray;">Student Name</th>
			<th style="background-color: gray;">Registration No.</th>
			<th style="background-color: gray;">Contact No.</th>
			<th style="background-color: gray;">Room No.</th>
			<th style="background-color: gray;">Seater</th>
			<th style="background-color: gray;">Staying From</th>
			<th style="background-color: gray;">Action</th>
		</tr>
	<?php
	while($rows=mysqli_fetch_assoc($result)){ 
		?>
		<tr>
		<td><?php echo $rows['sno.']; ?></td>
		<td><?php echo $rows['student name']; ?></td>
		<td><?php echo $rows['reg  no']; ?></td>
		<td><?php echo $rows['contact no']; ?></td>
		<td><?php echo $rows['room no']; ?></td>
		<td><?php echo $rows['seater']; ?></td>
		<td><?php echo $rows['staying from']; ?></td>
		<td><?php echo $rows['action']; ?></td>
		</tr>
		<?php
	}
	echo '</table>';
}?>
</div>
<?php
}
else
{
	header("location:../index.php");
}
?>
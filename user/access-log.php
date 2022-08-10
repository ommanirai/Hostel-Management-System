<?php
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
?>
<h1 style="color:blue;">Access Log:</h1>
<div style="border:1px solid; text-align: center;">
<div style="font-weight: bold; font-family:tahoma; color:white;height:50px;line-height: 50px; background-color: gray;">
		ACCESS LOG</div>
<?php
include"../library.php";
$mysqli=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($mysqli->connect_errno){
	echo"connection failed";
	exit();
} 
$sql="select * from useraccess";
$result=$mysqli->query($sql);
$numrows=$result->num_rows;
if($numrows>0){ ?>
	
	<table border="1" width="100%" cellpadding="10" cellspacing="0">
		<tr>
			<th style="background-color:gray;">SNo.</th>
			<th style="background-color:gray;">User ID</th>
			<th style="background-color:gray;">User Name</th>
			<th style="background-color:gray;">IP</th>
			<th style="background-color:gray;">City</th>
			<th style="background-color:gray;">Country</th>
			<th style="background-color:gray;">Login Time</th>
		</tr>
	<?php
	while($rows=mysqli_fetch_assoc($result)){ 
		?>
		<tr>
		<td><?php echo $rows['sno.']; ?></td>
		<td><?php echo $rows['user id']; ?></td>
		<td><?php echo $rows['user name']; ?></td>
		<td><?php echo $rows['ip']; ?></td>
		<td><?php echo $rows['city']; ?></td>
		<td><?php echo $rows['country']; ?></td>
		<td><?php echo $rows['login time']; ?></td>
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
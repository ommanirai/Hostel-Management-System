<?php
if(isset($_SESSION['user']) && strlen($_SESSION['user'])>0)
{
	?>
<h1>Registration</h1>
<div style="width:100%; height:2100px;background-color: gray; border: 1px solid;">
	<div style="background-color:#3e454c;padding: 8px; height: 40px; width: 100%; margin: auto;">FILL ALL INFO</div>
	<P style="padding: 10px; color:blue;">Room Related Info:</P>
	<div style="width: 200px;float: left;padding: 10px;">
	Room No :</div>
		<select>
			<option>Select Room No.</option>
			<option>101</option>
			<option>102</option>
			<option>103</option>
		</select><br><br>

	<div style="width: 200px; float:left; padding:10px;">
	Seater:&emsp;&emsp;</div>
	 <input type="text" name="seat" placeholder ="No. of Seat"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Fees Per Month:&emsp;</div>
	<input type="text" name="fees" placeholder="Per Month Fees"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Food Status:&emsp;&emsp;</div>
	 <input type="radio" name="Food" value="Food" style="width:10%;">Without Food(Rs.10000.00 per month)
	 <input type="radio" name="Food" value="Food" style="width:10%;">With Food(Rs.15000.00 per month)<br><br>
 
	<div style="width:200PX; float:left; padding:10px;"> 
	Stay From: &emsp;&emsp;</div>
	 <input type="date" style="width:500px;height:40px; border-radius: 5px;"> 
	 <br><br>
	
	<div style="width: 200px;float: left;padding: 10px;">
	Duration:&emsp;&emsp;</div>
		<select>
			<option>Select Duration In Month</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select><br><br>
	
	<div style="width: 200px;float: left;padding: 10px;">
	Total Amount:&emsp;</div>
	<input type="text" name="fees" placeholder="Per Month Fees"><br><br>

    <p style="padding: 10px; color:blue;">Personal Info:</p>
	<div style="width: 200px;float: left;padding: 10px;">
	Courses:&emsp;&emsp;</div>
		<select>
			<option>Select Courses</option>
			<option>Bachelor Of Engineering In Information Technology</option>
			<option>Bachelor Of Civil Engineering</option>
			<option>Bachelor Of Computer Engineering</option>
			<option>Bachelor of Electronics and Communication Engineering</option>
			<option>Bachelor Of Architect Engineering</option>
		</select><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Registration No :</div>
	<input type="text" name="regno" placeholder="Registration No."><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	First Name :&emsp;&emsp;</div>
	 <input type="text" name="fname" placeholder ="First Name"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Middle Name :&emsp;</div>
	<input type="text" name="mname" placeholder="Middle Name"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Last Name :&emsp;&emsp;</div>
	<input type="text" name="lname" placeholder="Last Name"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Gender : &emsp;&emsp;</div>
		<select name="gender">
			<option value="male">Gender</option>
		 	<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="others">Others</option>
		</select><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Contact No :&emsp;&emsp;</div>
	<input type="text" name="contact" placeholder="Contact No."><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Email id: &emsp;&emsp;&emsp;</div>
	<input type="email" name="email" placeholder="Email"><br><br>

	<div style="width:200px; float:left; padding:10px;">
	Emergency Contact: &emsp;&emsp;&emsp;</div>
	<input type="text" name="EmergencyContact" placeholder="Emergency Contact"><br><br>

	<div style="width:200px; float:left; padding:10px;">
	Guardian Name:&emsp;&emsp;</div>
	<input type="text" name="Guardianname" placeholder="Guardian Name"><br><br>

	<div style="width: 200px; float:left; padding:10px;">
	Guardian Relation: &emsp;&emsp;&emsp;</div>
	<input type="text" name="GuardianRelation" placeholder="Guardian Relation"><br><br>

    <div style="width: 200px; float:left; padding:10px;">
	Guardian Contact No: &emsp;&emsp;&emsp;</div>
	<input type="text" name="GuardianContactNo" placeholder="Guardian Contact No."><br><br>

	<div style="padding: 10px; color:blue;">Correspondense Address:</div>
	<div style="width: 200px;float: left;padding: 10px;">
	Addess: &emsp;&emsp;&emsp;</div>
	<input type="text" name="Address" placeholder="Address"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	City: &emsp;&emsp;&emsp;</div>
	<input type="text" name="City" placeholder="City"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	State: &emsp;&emsp;&emsp;</div>
	<input type="text" name="State" placeholder="State"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Pincode: &emsp;&emsp;&emsp;</div>
	<input type="text" name="Pincode" placeholder="Pincode"><br><br>

	<p style="padding: 10px; color:blue;"> Permanent Address:</p>
	<div style="width: 200px;float: left;padding: 10px;">
	Addess: &emsp;&emsp;&emsp;</div>
	<input type="text" name="Address" placeholder="Address"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	City: &emsp;&emsp;&emsp;</div>
	<input type="text" name="City" placeholder="City"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	State: &emsp;&emsp;&emsp;</div>
	<input type="text" name="State" placeholder="State"><br><br>

	<div style="width: 200px;float: left;padding: 10px;">
	Pincode: &emsp;&emsp;&emsp;</div>
	<input type="text" name="Pincode" placeholder="Pincode"><br><br>

	<div style="text-align: center;padding: 10px;">
		<input type="reset" name="cancel" value="Cancel">
	<input type="submit" name="submit" value="Register"></div>
</div>
<?php
}
else
{
		header("location:../index.php");
}
?>
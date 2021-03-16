<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table{height: 800px; width: 800px; background-color: lightgray; padding: 10px; border-radius: 30px;}
		.button{height: 50px; width: 200px; background-color: gray; color: white; font-size: 25px;}
		
	</style>
	
</head>
<body>
<div>
	<form action="registerphp.php" method="post"><center>
<table class="table">
	<tr>
		<h2><b>Donor Registration Form</b></h2></center>
	</tr>
	<tr><td>	Full Name</td>
<td><input type="text" name="firstname"></td></tr><tr><td>Last Name</td>
<td><input type="text" name="lastname"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Create Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td>
	Date of Birth</td>
		<td><input type="date" name="dob"></td>
	</tr>
	<tr>
		<td>Contact number</td>
		<td><input type="text" name="mobile"></td>
	</tr>
	<tr>
		<td>Blood Group</td>
		<td><select name="bg">
		<option>A+</option>
		<option>B+</option>
		<option>D</option>
		<option>B-</option>
		<option>O+</option>
		<option>A-</option>
	</select></td>
	</tr>
	<tr>
		<td>Address</td>
		<td><textarea name="address"></textarea></td>
	</tr>
	<tr>
		<td>Select City</td>
		<td><select name="city">
		<option>----</option>
		<option>indore</option>
		<option>jabalpur</option>
		<option>gwalier</option>
		<option>vidisha</option>
		<option>shihor</option>
	</select></td>
	</tr>
	<tr>
		<td>Select State</td>
		<td><select name="state">
		<option>---</option>
		<option>uttar pradesh</option>
		<option>maharshtra</option>
		<option>bihar</option>
		<option>patna</option>
		<option>chattishgadh</option>
	</select></td>
	</tr>
	<tr>
		<td>Select Country</td>
		<td><select name="country">
		<option>----</option>
		<option>america</option>
		<option>australiya</option>
		<option>urop</option>
		<option>pakistan</option>
		<option>bhutan</option>
		<option>india</option>
	</select></td>
	</tr>
	<tr>
		<td colspan="2"><center><input type="submit" name="" value="Ragister" class="button" class="button"></center></td>
		<td><a href="firstpage.php">goto homepage-..>></a></td>
		
	</tr>
</table></center>
	</form>

	
</div>
</body>
</html>

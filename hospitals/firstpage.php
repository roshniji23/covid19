<!DOCTYPE html>
<html>
<head>
	<style>
		.div1{height: 100%; width: 100%; }
		.div2{height: 100px; width: 100%; background-color: white; padding: 10px; line-height: 1.4; letter-spacing: 0.5rem; border-radius: 10px; position: fixed; }
		.div3{height: 700px; width: 100%; background-image: url(images/bhopal1.jpg); background-size: 100% 100%; animation: slider 9s infinite linear;}
		@keyframes slider {
0%{background-image: url(images/bhopal3.jpg);}
50%{background-image: url(images/bhopal2.jpg);}
		}
		.table{position: relative; top: 140px; padding: 20px;  width: 500px; }
		.table tr td{height: 50px; width: 100px;}
		.divji{height: 400px; width: 400px;  position: relative;  }
		a{background-color: white;}
		h2{letter-spacing: 0.5rem;}
	</style>
</head>
<body>
<div class="div1">
<div class="div2"><h1><center>Welcome To The City Of Lakes</center></h1></div>
<div class="div3">
	<form action="loginphp.php" method="post">
		
	<center><div class="divji">
	<table class="table">
		<tr >
			
				<td colspan="2px"><center><h2>login </h2></center></td>
					</tr>
		<tr>
			<td>username</td>
			<td><input type="email" name="username" placeholder=""></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password" placeholder=""></td>

		</tr>
		<tr >
			
				<td colspan="2px"><center><input type="submit" name="login"></center></td>
					</tr>
					<tr>
						<td colspan="2px">
							<center><a href="register.php">New User Register Here</a></center>
						</td>
					</tr>
	
	</table></div></center>
</div>


</div>
</body>
</html>
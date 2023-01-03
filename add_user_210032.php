<!DOCTYPE HTML>
<html>
<head>
	<title>Selfandy Pet Clinic</title>
	<link rel="stylesheet" href="style1.css"/>
</head>
<body>
	
	<div class="container">
		<div class="navbar">
			<div class="logo">
				<h1>Selfandy Pet Clinic</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home </a></li>
					<li><a href="read_pet_210032.php">Data Pets </a></li>
					<li><a href="read_doctors_210032.php">Data Doctors </a></li>
					<li><a href="read_user_210032.php">Data Users </a></li>
				</ul>
			</div>
		</div>

		<div class="container-content">
			<h3>Form Add User</h3>
			<form method="post" action="create_user_210032.php">
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username_210066" required></td>
					</tr>
					<!-- <tr>
						<td>Password</td>
						<td><input type="password" name="password_210032" required></td>
					</tr> -->
					<tr>
						<td>Usertype</td>
						<td>
							<input type="radio" name="usertype_210066" value="Staff" required>Staff
							<input type="radio" name="usertype_210066" value="Manager" required>Manager
						</td>
					</tr>
					<tr>
						<td>Fullname</td>
						<td><input type="text" name="fullname_210066" required></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="save" value="SAVE">
							<input type="reset" name="reset" value="RESET">
						</td>
					</tr>
				</table>	
			</form>
			<br>
			<p class="button"><a href="read_user_210032.php" class="btn-end" >Back</a></p>
		</div>
		
	</div>
</body>
</html>
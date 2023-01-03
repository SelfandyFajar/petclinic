<!DOCTYPE html>

<html>
<head>
    <title>Selfandy's Pet Clinic</title>
    <link rel="stylesheet" href="style1.css">
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
            <h3> Form Add Doctors </h3>
            <form method="post" action="create_doctors_210032.php">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="doctor_name_210032" required></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="doctor_gender_210032" value="Male" required> Male 
                            <input type="radio" name="doctor_gender_210032" value="Female" required> Female 
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea name="doctor_address_210032" required></textarea></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="number" name="doctor_phone_210032" required></td>
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
			<p class="button"><a href="read_doctors_210032.php" class="btn-end" >Back</a></p>  
        </div>
    </div>  
</body>
</html>
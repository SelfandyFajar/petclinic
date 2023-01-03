<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('please login first ! '); window.location.replace('form_login_210032.php');</script>";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selfandy's pet clinic</title>
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
					<?php if($_SESSION['usertype']=='Manager') { ?>
                        <li><a href="read_user_210032.php">Data Users </a></li>
                        <?php }?>
				</ul>
			</div>
		</div>

        <div class="container-content">
            <h3>Form Add Pet</h3>
            <form method="post" action="create_pet_210032.php">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="pet_name_210032" required></td>
                    </tr>

                    <tr>
                        <td>Type</td>
                        <td>
                            <select name="pet_type_210032" required>
                                <option value="">Choose</option>
                                <option value="Cat">Cat</option>
                                <option value="Dog">Dog</option>
                                <option value="Reptil">Reptil</option>
                                <option value="Bird">Bird</option>
                                <option value="Rodent">Rodent</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="pet_gender_210032" value="Male" required>Male 
                            <input type="radio" name="pet_gender_210032" value="Female" required>Female 
                        </td>
                    </tr>

                    <tr>
                        <td>Age (month)</td>
                        <td><input type="number" name="pet_age_210032" required></td>
                    </tr>

                    <tr>
                        <td>Owner</td>
                        <td><input type="text" name="pet_owner_210032" required></td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td><textarea name="pet_address_210032" required></textarea></td>
                    </tr>

                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="pet_phone_210032" required></td>
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
            <p><a href="read_pet_210032.php" class="btn-end">Back</a></p>
        </div>
    </div>
</body>
</html>
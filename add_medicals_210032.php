<!DOCTYPE html>

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
            <h3>Form Medicals</h3>
            <?php
                include "connection_210032.php";
                //make query dari id
                $querypet="SELECT * FROM pets_210032 WHERE pet_id_210032='$_GET[pet_id]'";
                //menjalankan query
                $pet= mysqli_query($db_connection,$querypet);
                //extrak hasil query
                $data1=mysqli_fetch_assoc($pet);

                $querydoc="SELECT * FROM doctors_210032";
                $doctors= mysqli_query($db_connection,$querydoc);

            ?>
            <table>
                <tr>
                    <td>Pet Id/Name</td>
                    <td>: <?=$data1['pet_id_210032']?> / <?=$data1['pet_name_210032']?> </td>
                </tr>
                <tr>
                    <td>Pet Type/Gender/Ages</td>
                    <td>: <?=$data1['pet_type_210032']?> / <?=$data1['pet_gender_210032']?> / <?=$data1['pet_age_210032']?> </td>
                </tr>
                <tr>
                    <td>Owner</td>
                    <td>: <?=$data1['pet_owner_210032']?> / <?=$data1['pet_address_210032']?> / <?=$data1['pet_phone_210032']?> </td>
                </tr>
            </table>  <hr>  
            <form method="post" action="create_medicals_210032.php">
                <table>
                    <tr>
                        <td>Doctor</td>
                        <td>
                            <select name="doctor_id_210032" required>
                                <option value="">Choose</option>
                                <?php foreach($doctors as $data2) : ?>
                                <option value="<?=$data2['doctor_id_210032']?>"><?=$data2['doctor_name_210032']?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Symptom</td>
                        <td><textarea name="symptom_210032" required></textarea></td>
                    </tr>

                    <tr>
                        <td>Diagnose</td>
                        <td><textarea name="diagnose_210032" required></textarea></td>
                    </tr>

                    <tr>
                        <td>Treatment</td>
                        <td><textarea name="treatment_210032" required></textarea></td>
                    </tr>
                    
                    <tr>
                        <td>Cost (Rp)</td>
                        <td><input type="number" name="cost_210032" required></input></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="save" value="SAVE">
                            <input type="reset" name="reset" value="RESET">
                            <input type="hidden" name="pet_id_210032" value="<?=$data1['pet_id_210032']?>">
                        </td>
                    </tr>
                </table>
            </form>
            <br>
            <p><a href="medicals_210032.php?pet_id=<?=$data1['pet_id_210032']?>" class="btn-end">Back</a></p>
        </div>
    </div>
    
    
</body>
</html>
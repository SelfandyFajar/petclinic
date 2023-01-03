<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h3>Medicals Records</h3>
            <?php
                include "connection_210032.php";
                //make query dari id
                $querypet="SELECT * FROM pets_210032 WHERE pet_id_210032='$_GET[pet_id]'";
                //menjalankan query
                $pet= mysqli_query($db_connection,$querypet);
                //extrak hasil query
                $data1=mysqli_fetch_assoc($pet);

                //query 1 tabel
                // $querymed="SELECT * FROM medicals_210032 WHERE pet_id_210032='$_GET[pet_id]'";

                //query 2 tabel
                $querymed="SELECT * FROM medicals_210032 AS m, doctors_210032 AS d WHERE m.pet_id_210032='$_GET[pet_id]' AND m.doctor_id_210032=d.doctor_id_210032 ";
                $medicals= mysqli_query($db_connection,$querymed);

            ?>
            <table style="padding-bottom: 10px;">
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
            </table>
            <p><a href="add_medicals_210032.php?pet_id=<?=$data1['pet_id_210032']?>" class="btn-end">Add new records </a></p>
            <br>
            <table class="table-content">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Symptom</th>
                    <th>Diagnose</th>
                    <th>Treatment</th>
                    <th>Cost (Rp)</th>
                </tr>

                <!-- will loop if the data not empty -->
                <?php
                if(mysqli_num_rows ($medicals) > 0) {
                    $i=1;
                    foreach ($medicals as $data2) :
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=date('D, d M Y H:i:s',strtotime($data2['mr_date_210032']))?></td>
                    <td><?=$data2['doctor_name_210032']?></td>
                    <td><?=$data2['symptom_210032']?></td>
                    <td><?=$data2['diagnose_210032']?></td>
                    <td><?=$data2['treatment_210032']?></td>
                    <td><?=$data2['cost_210032']?></td>
                </tr>
                <?php
                    endforeach;
                    } else {
                ?>
                <tr><td colspan="7" align='center'>No records!</td></tr>
                <?php } ?>
            </table>
            <br>
            <p><a href="read_pet_210032.php" class="btn-end">Back to pet list</a></p>
        </div>
    </div>
    
</body>
</html>
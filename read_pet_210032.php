<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('please login first ! '); window.location.replace('form_login_210032.php');</script>";
}
?>
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
					<?php if($_SESSION['usertype']=='Manager') { ?>
                        <li><a href="read_user_210032.php">Data Users </a></li>
                        <?php }?>
                    <?php
                    include "connection_210032.php";
                    $query = "SELECT * FROM users_210066 WHERE userid_210066= '$_SESSION[userid]'";
                    $user = mysqli_query($db_connection, $query); 
                    $data = mysqli_fetch_assoc($user);
                    ?>
                    <li>
                        <a href="change_photo_210032.php">
                        <img src="uploads/users/<?= $data['photo_210066']; ?>" class="profile">
                        </a>
                    </li>
                
				</ul>
			</div>
		</div>

        <div class="container-content">
            <h3 style="padding-bottom: 10px; padding-left: 10px;">Pets List</h3>
            <p><a href="add_pet_210032.php" class="btn-end">Add New Pet</a></p>
            <br>
            <table class="table-content">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Gender</th>
                    <th>Age (month)</th>
                    <th>Photo</th>
                    <th>Owner</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                    //call connection
                    include "connection_210032.php";
                    //make a sql query
                    $query = "SELECT * FROM pets_210032";
                    //run query
                    $pets = mysqli_query($db_connection, $query);

                    $i=1;
                    foreach ($pets as $data) :
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><a href="medicals_210032.php?pet_id=<?=$data['pet_id_210032']?>" class="btn-tbl"><?php echo $data['pet_name_210032']; ?></a></td>
                    <td><?php echo $data['pet_type_210032']; ?></td>
                    <td><?php echo $data['pet_gender_210032']; ?></td>
                    <td><?php echo $data['pet_age_210032']; ?></td>
                    <td>
                        <img class="profile" src="uploads/pets/<?php echo $data['pet_photo_210032']; ?>" width="50" height="50" ><br>
                        <a href="pet_photo_210032.php?id=<?=$data['pet_id_210032']?>"> Change Photo</a>
                    </td>
                    <td><?=  $data['pet_owner_210032']; ?></td>
                    <td><?=  $data['pet_address_210032']; ?></td>
                    <td><?=  $data['pet_phone_210032']; ?></td>
                    <td><a href="edit_pet_210032.php?id=<?=$data['pet_id_210032']?>" class="btn-end">Edit Pet</a></td>
                    <td><a href="delete_pet_210032.php?id=<?=$data['pet_id_210032']?>" onclick="return confirm('Are you sure?')" class="btn-del">Delete Pet</a></td>
                </tr>    
                <?php endforeach; ?>
            </table>
            <br>
                <p><a href="index.php" class="btn-end">Back</a></p>  
        </div>
    </div>      
</body>

</html>
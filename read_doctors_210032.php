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
            <h3 style="padding-bottom: 10px; padding-left: 10px;">Doctors List</h3>
            
            <p><a href="add_doctors_210032.php" class="btn-end">Add New Doctors</a></p>
            <br>
            <table class="table-content">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Photo</th>
                    <?php if($_SESSION['usertype']=='Manager') { ?>
                    <th colspan="2">Action</th>
                    <?php }?>
                </tr>
                <?php
                    //call connection
                    include "connection_210032.php";
                    //make a sql query
                    $query = "SELECT * FROM doctors_210032";
                    //run query
                    $doctors = mysqli_query($db_connection, $query);

                    $i=1;
                    foreach ($doctors as $data) :
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['doctor_name_210032']; ?></td>
                    <td><?php echo $data['doctor_gender_210032']; ?></td>
                    <td><?=  $data['doctor_address_210032']; ?></td>
                    <td><?=  $data['doctor_phone_210032']; ?></td>
                    <td align="center"><img class="profile" src="uploads/doctors/<?php echo $data['doctor_photo_210032']; ?>" width="50" height="50" ></td>
                    <?php if($_SESSION['usertype']=='Manager') { ?>
                    <td><p><a href="edit_doctors_210032.php?id=<?=$data['doctor_id_210032']?>" class="btn-end">Edit doctors</a></p></td>
                    <td><p><a href="delete_doctors_210032.php?id=<?=$data['doctor_id_210032']?>"onclick= "return confirm('Are you sure?')" class="btn-del">Delete doctors</a></p></td>
                    <?php }?>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
            <p><a href="index.php" class="btn-end">Back</a></p>
        </div>

    </div>
    

</body>

</html>
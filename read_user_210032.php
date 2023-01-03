<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('please login first ! '); window.location.replace('form_login_210032.php');</script>";
}
if($_SESSION['usertype'] != 'Manager') {
    echo "<script>alert('Access forbidden !');window.location.replace('index.php');</script>";
}
?>
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
					<?php if($_SESSION['usertype']=='Manager') { ?>
                        <li><a href="read_user_210032.php">Data Users </a></li>
                        <?php }?>
                    
				</ul>
			</div>
		</div>

        <div class="container-content">
            <h3 style="padding-bottom: 10px; padding-left:10px;">Users List</h3>
            <p><a href="add_user_210032.php" class="btn-end">Add New User</a></p>
            <br>
            <table class="table-content" >
                <tr>
                    <th>No</th>
                    <th>Photo</th>
                    <th>UserName</th>
                    <!-- <th>Password</th> -->
                    <th>UserType</th>
                    <th>FullName</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php
                    //call connection
                    include "connection_210032.php";
                    //make a sql query
                    $query = "SELECT * FROM users_210066";
                    //run query
                    $pets = mysqli_query($db_connection, $query);

                    $i=1;
                    foreach ($pets as $data) :
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['username_210066']; ?></td>
                    <td>
                        <img src="uploads/users/<?php echo $data['photo_210066']; ?>" width="50" height="50" ><br>
                        <a href="photo_210066.php?id=<?=$data['userid_210066']?>"> Change Photo</a>
                    </td>
                    <!-- <td><?php echo $data['password_210066']; ?></td> -->
                    <td><?php echo $data['usertype_210066']; ?></td>
                    <td><?php echo $data['fullname_210066']; ?></td>
                    <td><p><a href="edit_user_210032.php?id=<?=$data['userid_210066']?>" class="btn-end">Edit User</a></p></td>
                    <td><p><a href="delete_user_210032.php?id=<?=$data['userid_210066']?>"onclick= "return confirm('Are you sure?')" class="btn-del">Delete User</a></p></td>
                    <td><p><a href="reset_pw.php?id=<?=$data['userid_210066'];?>&type=<?=$data['usertype_210066'];?>" onclick="return confirm('Are you sure reset the password?')" class="btn-end">Reset Password</a></p></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
                <p><a href="index.php" class="btn-end">Back Home</a></p>
        </div>
    </div>
    

</body>

</html>
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
</head>
<body>
    <h1>Selfandy's Pet Clinic</h1>
    <h3> Form Edit Doctors </h3>
    <?php
        include "connection_210032.php";
        //make query dari id
        $query="SELECT * FROM doctors_210032 WHERE doctor_id_210032='$_GET[id]'";
        //menjalankan query
        $doctor= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="update_doctors_210032.php" enctype="multipart/form-data">
        <table>
        <tr>
                <td>Name</td>
                <td><input type="text" name="doctor_name_210032"value="<?=$data['doctor_name_210032']?>" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_210032" value="Male"<?=($data['doctor_gender_210032']=='Male')?'checked':'';?> required> Male 
                    <input type="radio" name="doctor_gender_210032" value="Female"<?=($data['doctor_gender_210032']=='Female')?'checked':'';?> required> Female 
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="doctor_address_210032" required><?=$data['doctor_address_210032']?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="doctor_phone_210032"value="<?=$data['doctor_phone_210032']?>" required></td>
            </tr>

            <tr>
                <td>Photo</td>
                <td><img src="uploads/doctors/<?= $data['doctor_photo_210032']; ?>" width="30%"></td>
            </tr>

            <tr>
                <td></td>
                <td> <input type="file" name="new_photo_210032" ></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="doctor_photo_210032" value="<?= $data['doctor_photo_210032']; ?>" />
                    <input type="hidden" name="doctor_id_210032" value="<?=$data['doctor_id_210032']?>">
                </td>
            </tr>
        </table>
    </form>  
    <p><a href="read_doctors_210032.php">Cancel</a></p>  
</body>
</html>
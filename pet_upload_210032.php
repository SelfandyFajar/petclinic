<?php
if(isset($_POST['upload'])) {
    include "connection_210032.php";

    $folder = 'uploads/pets/';
    if(move_uploaded_file($_FILES['new_photo_210032']['tmp_name'], $folder . $_FILES['new_photo_210032']['name'])) {

        $photo=$_FILES['new_photo_210032']['name'];

        $query="UPDATE pets_210032 SET pet_photo_210032='$photo' WHERE pet_id_210032='$_POST[pet_id_210032]'";

        $upload=mysqli_query($db_connection,$query);

        if($upload) {
            if ($_POST['pet_photo_210032'] !== 'default.png') unlink($folder . $_POST['pet_photo_210032']);

            echo "<script>alert('Change Photo Successed !');window.location.replace('read_pet_210032.php');</script>";
        } else {

            echo "<script>alert('Change Photo Failed !');window.location.replace('pet_photo_210032.php?id=$_POST[pet_id_210032]');</script>";
        }
    } else {
        echo "<script>alert('Upload Photo Failed !');window.location.replace('pet_photo_210032.php?id=$_POST[pet_id_210032]');</script>";
    }
}
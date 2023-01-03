<?php
   if (isset($_POST['save'])){
      include "connection_210032.php";
   
      $query = "UPDATE doctors_210032 SET
               doctor_name_210032 = '$_POST[doctor_name_210032]',
               doctor_gender_210032 = '$_POST[doctor_gender_210032]',
               doctor_address_210032 = '$_POST[doctor_address_210032]',
               doctor_phone_210032 = '$_POST[doctor_phone_210032]'
               WHERE doctor_id_210032 = '$_POST[doctor_id_210032]'
               ";
   
      $update = mysqli_query($db_connection, $query);
   
      }
   ?>
   <?php
   if(isset($_POST['save'])) {          //check variable POST from FORM
    include "connection_210032.php";    //call connection
    
    $folder = 'uploads/doctors/';           //target folder for upload
    if(move_uploaded_file($_FILES['new_photo_210032']['tmp_name'], $folder . $_FILES['new_photo_210032']['name'])) {
        
        $photo=$_FILES['new_photo_210032']['name'];

        $query="UPDATE doctors_210032 SET doctor_photo_210032='$photo' WHERE doctor_id_210032='$_POST[doctor_id_210032]'";

        $upload=mysqli_query($db_connection,$query);
        
        if($upload) {
            if ($_POST['doctor_photo_210032'] !== 'default.png') unlink($folder . $_POST['doctor_photo_210032']);

            echo "<script>alert('Change Photo Successed !');window.location.replace('read_doctors_210032.php');</script>";
        } else {

            echo "<script>alert('Change Photo Failed !');window.location.replace('read_doctors_210032.php?id=$_POST[doctor_id_210032]');</script>";
        }
    } else {
        // echo "<script>alert('Upload Photo Failed !');window.location.replace('read_doctors_210032.php?id=$_POST[doctor_id_210032]');</script>";
    }
}
?>
   <!--<p><a href="read_doctor_210036.php">BACK TO DOCTOR LIST</p> -->>
   <!-- <script>window.location.replace("read_doctors_210032.php");</script> -->


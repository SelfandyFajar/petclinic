<?php
    // echo $_POST['doctors_name_210032'] . "<br>";
    // echo $_POST['doctors_gender_210032'] . "<br>";
    // echo $_POST['doctors_address_210032'] . "<br>";
    // echo $_POST['doctors_phone_210032'] . "<br>";
    if(isset($_POST['save'])){
        //Call Connection php mysql
        include "connection_210032.php";
    
        // sql query INSERT INTO VALUES
        $query = "INSERT INTO doctors_210032(doctor_name_210032, doctor_gender_210032, doctor_address_210032, doctor_phone_210032)
        VALUES ('$_POST[doctor_name_210032]',' $_POST[doctor_gender_210032]',' $_POST[doctor_address_210032]',' $_POST[doctor_phone_210032]')";
    
        //run query
        $create = mysqli_query($db_connection, $query);
    
        if($create){
            //echo"<p>Pet add successfully !</p>";
            echo"<script> alert('Doctor add succesfully !'); </script>";
        }else{
            //echo"<p>Pet add failed !</p>";
            echo"<script> alert('Doctor add failed !'); </script>";
        }
    
    }
    ?>
    <!-- <p><a href="read_pet_210032.php">Back To Pets List</a></p> -->
    <script>window.location.replace("read_doctors_210032.php");</script>
?>

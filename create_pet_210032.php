<?php

    if(isset($_POST['save'])){
        //Call Connection php mysql
        include "connection_210032.php";
    
        // sql query INSERT INTO VALUES
        $query = "INSERT INTO pets_210032(pet_name_210032, pet_type_210032, pet_gender_210032,pet_age_210032, pet_owner_210032, pet_address_210032, pet_phone_210032)
        VALUES ('$_POST[pet_name_210032]',' $_POST[pet_type_210032]',' $_POST[pet_gender_210032]',' $_POST[pet_age_210032]',' $_POST[pet_owner_210032]',' $_POST[pet_address_210032]',' $_POST[pet_phone_210032]')";
    
        //run query
        $create = mysqli_query($db_connection, $query);
    
        if($create){
            //echo"<p>Pet add successfully !</p>";
            echo"<script> alert('pet add succesfully !'); </script>";
        }else{
            //echo"<p>Pet add failed !</p>";
            echo"<script> alert('pet add failed !'); </script>";
        }
    
    }
    ?>
    <!-- <p><a href="read_pet_210032.php">Back To Pets List</a></p> -->
    <script>window.location.replace("read_pet_210032.php");</script>
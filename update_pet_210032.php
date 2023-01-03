<?php
//check variable POST from form"
if(isset($_POST['save'])){
    //Call Connection php mysql
    include "connection_210032.php";

    // sql query set where
    $query = "UPDATE pets_210032 SET
            pet_name_210032 = '$_POST[pet_name_210032]',
            pet_type_210032 = '$_POST[pet_type_210032]',
            pet_gender_210032 = '$_POST[pet_gender_210032]',
            pet_age_210032 = '$_POST[pet_age_210032]',
            pet_owner_210032 = '$_POST[pet_owner_210032]',
            pet_address_210032 = '$_POST[pet_address_210032]',
            pet_phone_210032 = '$_POST[pet_phone_210032]'
            WHERE pet_id_210032 = '$_POST[pet_id_210032]'";
    //run query
    $update = mysqli_query($db_connection, $query);

    if($update){
        //echo"<p>Pet add successfully !</p>";
        echo"<script> alert('pet update succesfully !'); </script>";
    }else{
        //echo"<p>Pet add failed !</p>";
        echo"<script> alert('pet update failed !'); </script>";
    }

}
?>
<!-- <p><a href="read_pet_210032.php">Back To Pets List</a></p> -->
<script>window.location.replace("read_pet_210032.php");</script>
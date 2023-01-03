<?php
//check variable POST from form"
if(isset($_GET['id'])){
    //Call Connection php mysql
    include "connection_210032.php";

    // sql query deleete from where
    $query = " DELETE FROM doctors_210032 WHERE doctor_id_210032 = '$_GET[id]'";
    //run query
    $delete = mysqli_query($db_connection, $query);

    if($delete){
        //echo"<p>Pet add successfully !</p>";
        echo"<script> alert('pet delete succesfully !'); </script>";
    }else{
        //echo"<p>Pet add failed !</p>";
        echo"<script> alert('pet delete failed !'); </script>";
    }

}
?>
<!-- <p><a href="read_pet_210066.php">Back To Pets List</a></p> -->
<script>window.location.replace("read_doctors_210032.php");</script>
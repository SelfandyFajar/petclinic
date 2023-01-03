<?php
//check variable POST from form"
if(isset($_POST['save'])){
    //Call Connection php mysql
    include "connection_210032.php";

    //create default password_200035
    $password = password_hash($_POST['usertype_210066'], PASSWORD_DEFAULT);

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO users_210066(username_210066, password_210066, usertype_210066, fullname_210066)
    VALUES ('$_POST[username_210066]',' $password',' $_POST[usertype_210066]',' $_POST[fullname_210066]')";

    //run query
    $create = mysqli_query($db_connection, $query);

    if($create){
        //echo"<p>Pet add successfully !</p>";
        echo"<script> alert('user add succesfully !'); </script>";
    }else{
        //echo"<p>Pet add failed !</p>";
        echo"<script> alert('user add failed !'); </script>";
    }

}
?>
<!-- <p><a href="read_pet_210066.php">Back To Pets List</a></p> -->
<script>window.location.replace("read_user_210032.php");</script>
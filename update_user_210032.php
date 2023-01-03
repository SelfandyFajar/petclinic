<?php
//check variable POST from form"
if(isset($_POST['save'])){
    //Call Connection php mysql
    include "connection_210032.php";

    // sql query set where
    $query = "UPDATE users_210066 SET
            username_210066 = '$_POST[username_210066]',
            password_210066 = '$_POST[password_210066]',
            usertype_210066 = '$_POST[usertype_210066]',
            fullname_210066 = '$_POST[fullname_210066]'
            WHERE userid_210066 = '$_POST[userid_210066]'";
    //run query
    $update = mysqli_query($db_connection, $query);

    if($update){
        //echo"<p>Pet add successfully !</p>";
        echo"<script> alert('user update succesfully !'); </script>";
    }else{
        //echo"<p>Pet add failed !</p>";
        echo"<script> alert('user update failed !'); </script>";
    }

}
?>
<!-- <p><a href="read_pet_210066.php">Back To Pets List</a></p> -->
<script>window.location.replace("read_user_210032.php");</script>
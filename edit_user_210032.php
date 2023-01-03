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
    <h1> Selfandy's Pet Clinic</h1>
    <h3> Form Edit user </h3>
    <?php
        include "connection_210032.php";
        //make query dari id
        $query="SELECT * FROM users_210066 WHERE userid_210066='$_GET[id]'";
        //menjalankan query
        $user= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($user);
    ?>
    <form method="post" action="update_user_210032.php">
        <table>
            <tr>
                <td>UserName</td>
                <td><input type="text" name="username_210066"value="<?=$data['username_210066']?>" required></td>
            </tr>
            
            <tr>
                <td>UserType</td>
                <td>
                    <input type="radio" name="usertype_210066" value="Staff"<?=($data['usertype_210066']=='Staff')?'checked':'';?> required> Staff |
                    <input type="radio" name="usertype_210066" value="Manager"<?=($data['usertype_210066']=='Manager')?'checked':'';?> required> Manager 
                </td>
            </tr>
            <tr>
                <td>FullName</td>
                <td><input type="text" name="fullname_210066"value="<?=$data['fullname_210066']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="userid_210066" value="<?=$data['userid_210066']?>">
                </td>
            </tr>
        </table>
    </form>  
    <p><a href="read_user_210032.php">Cancel</a></p>  
</body>
</html>
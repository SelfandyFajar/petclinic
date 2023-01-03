<!DOCTYPE html>
<html>

<head>
    <title>Selfandy Pet Clinic</title>
</head>

<body>
    <h1>Selfandy Pet Clinic</h1>
    <h3> Form Reset Password user </h3>
    <?php
        include "connection_210032.php";
        //make query dari id
        $query="SELECT * FROM users_210066 WHERE userid_210066='$_GET[id]'";
        //menjalankan query
        $user= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($user);
    ?>
    <form method="post" action="reset_pw.php">
        <table>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="password_210066" required></td>
            </tr>
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
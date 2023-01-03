<?php
		session_start();
		//call connection
		include "connection_210032.php";
		
		//query select
		$query = "SELECT * FROM users_210066 WHERE userid_210066= '$_SESSION[userid]'";
		
		//run query
		$user=mysqli_query($db_connection,$query);
		
		//extract data
		$data=mysqli_fetch_assoc($user);
	?>
<!doctype html>
<html>
<head>
    <title>Selfandy's Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body>
    <h1>Selfandy Pet Clinic</h1>
    <h3>Change Photo</h3>
<div>
		<form method="POST" action="user_upload_210032.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="uploads/users/<?= $data['photo_210066'] ?>" width="30%"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_210032"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <input type="submit" name="upload" value="upload">
                    <input type="hidden" name="photo_210066" value="<?= $data['photo_210066'] ?>" />
                    <input type="hidden" name="userid_210066" value="<?= $data['userid_210066'] ?>" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">CANCEL</a></p>
</div>
</body>
</html>
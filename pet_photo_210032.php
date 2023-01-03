<!DOCTYPE html>
<html>
<head>
    <title>Selfandy's Pet Clinic</title>
</head>
<body>
    <h1>Selfandy Pet Clinic</h1><hr>
    <h3>Change Pet Photo</h3>
    <?php 
      //call connection php mysql
      include "connection_210032.php";

      //make query SELECT FROM WHERE
      $query="SELECT * FROM pets_210032 WHERE pet_id_210032='$_GET[id]'";

      //run query
      $pet=mysqli_query($db_connection,$query);

      //extract data from query result
      $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="pet_upload_210032.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td></td>
                <td><img src="uploads/pets/<?=$data['pet_photo_210032']; ?>" width="100" height="100"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td>: <input type="file" name="new_photo_210032" required /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                   <input type="submit" name="upload" value="UPLOAD" />
                   <input type="hidden" name="pet_photo_210032" value="<?=$data['pet_photo_210032']?>" />
                   <input type="hidden" name="pet_id_210032" value="<?=$data['pet_id_210032']?>" />
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_pet_210032.php">CANCEL</a></p>
</body>
</html>
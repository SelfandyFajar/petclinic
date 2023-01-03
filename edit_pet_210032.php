<!DOCTYPE html>

<html>
<head>
    <title>Selfandy's Pet Clinic</title>
</head>
<body>
    <h1>Selfandy's Pet Clinic</h1>
    <h3> Form Edit Pet </h3>
    <?php
        include "connection_210032.php";
        //make query dari id
        $query="SELECT * FROM pets_210032 WHERE pet_id_210032='$_GET[id]'";
        //menjalankan query
        $pet= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet_210032.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_210032" value="<?=$data['pet_name_210032']?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_210032" value="<?=$data['pet_type_210032']?>" required>
                        <option value="">Choose</option>
                        <option value="Cat" <?=($data['pet_type_210032']=='Cat')?'selected':'';?>>Cat</option>
                        <option value="Dog" <?=($data['pet_type_210032']=='Dog')?'selected':'';?>>Dog</option>
                        <option value="Reptil" <?=($data['pet_type_210032']=='Reptil')?'selected':'';?>>Reptil</option>
                        <option value="Bird" <?=($data['pet_type_210032']=='Bird')?'selected':'';?>>Bird</option>
                        <option value="Rodent" <?=($data['pet_type_210032']=='Rodent')?'selected':'';?>>Rodent</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_210032" value="Male"<?=($data['pet_gender_210032']=='Male')?'checked':'';?> required> Male 
                    <input type="radio" name="pet_gender_210032" value="Female"<?=($data['pet_gender_210032']=='Female')?'checked':'';?> required> Female 
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="pet_age_210032" value="<?=$data['pet_age_210032']?>"required></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="pet_owner_210032"value="<?=$data['pet_owner_210032']?>" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="pet_address_210032"required><?=$data['pet_address_210032']?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="pet_phone_210032"value="<?=$data['pet_phone_210032']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="pet_id_210032" value="<?=$data['pet_id_210032']?>">
                </td>
            </tr>
        </table>
    </form>  
    <p><a href="read_pet_210032.php">Cancel</a></p>  
</body>
</html>
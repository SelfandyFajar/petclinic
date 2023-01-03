<?php
if(isset($_POST['upload'])) {
	include "connection_210032.php";
	
	$folder = 'uploads/users/';
	if(move_uploaded_file($_FILES['new_photo_210032']['tmp_name'], $folder . $_FILES['new_photo_210032']['name'])) {
		
		$photo=$_FILES['new_photo_210032']['name'];
		$query="UPDATE users_210066 SET photo_210066='$photo' WHERE userid_210066='$_POST[userid_210066]'";
		$upload=mysqli_query($db_connection,$query);
		
		if($upload) {
			if($_POST['photo_210066'] !== 'default.png') unlink($folder . $_POST['photo_210066']);
			echo "<script>alert('Change Photo Success !');window.location.replace('index.php');</script>";
		} else {
			echo "<script>alert('Change Photo Failed !');window.location.replace('change_photo_210032.php?id=$_POST[userid_210032]');</script>";
		}
	} else {
		echo "<script>alert('Upload Photo Successed !');window.location.replace('change_photo_210032.php?id=$_POST[userid_210032]');</script>";
	}
}
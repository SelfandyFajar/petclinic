<?php
if (isset($_GET['id'])) {
	include "connection_210032.php";
	$password = password_hash($_GET ['type'], PASSWORD_DEFAULT);
	$query="UPDATE users_210066 SET password_210066='$password' where userid_210066='$_GET[id]'";
	$update=mysqli_query($db_connection,$query);
	if($update){
		echo"<script>alert('Reset password successed !')</script>";
	}else{
		echo"<script>alert('Reset password failed !')</script>";
	}
}
?>
<script>window.location.replace("read_user_210032.php");</script>
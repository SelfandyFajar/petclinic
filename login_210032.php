<?php
session_start(); //start session
if(isset($_POST['login'])) { //check post variable
	include "connection_210032.php"; //call connection
	
	//make query based on username
	$query="SELECT * FROM users_210066 WHERE username_210066='$_POST[username_210066]'";
	
	//run query 
	$login=mysqli_query($db_connection,$query);
	
	if(mysqli_num_rows($login) > 0) {
		$user=mysqli_fetch_assoc($login);
		if(password_verify($_POST['password_210066'], $user['password_210066'])) {
			
		$_SESSION['login']=TRUE;
		$_SESSION['userid']=$user['userid_210066'];
		$_SESSION['username']=$user['username_210066'];
		$_SESSION['password']=$user['password_210066'];
		$_SESSION['usertype']=$user['usertype_210066'];
		$_SESSION['fullname']=$user['fullname_210066'];
		
		echo "<script>alert('login success !');window.location.replace('index.php');</script>";
		} else {
			echo "<script>alert('login failed, wrong password !');window.location.replace('form_login_210032.php');</script>";
		}
		}else {
			echo "<script>alert('login failed, user not found !');window.location.replace('form_login_210032.php');</script>";
	}
}
?>
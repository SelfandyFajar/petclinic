<?php
$db_host="localhost"; //database server name
$db_username="root"; //database username
$db_password=""; //database password kT4A@%_<G9shB9_6
$db_name="petclinic"; //database name

//connectio to mysql, if error will stop program (die)
$db_connection = mysqli_connect($db_host,$db_username,$db_password) or die;

//select database
mysqli_select_db($db_connection,$db_name);
?>
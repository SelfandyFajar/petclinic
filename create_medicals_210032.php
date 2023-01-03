<?php
if(isset($_POST['save'])) { //chech variable POST from FORM
    include "connection_210032.php"; //call connection php mysql

//sql query INSERT INTO SET
$query = "INSERT INTO medicals_210032 SET
            pet_id_210032    = '$_POST[pet_id_210032]',
            doctor_id_210032 = '$_POST[doctor_id_210032]',
            symptom_210032   = '$_POST[symptom_210032]',
            diagnose_210032  = '$_POST[diagnose_210032]',
            treatment_210032 = '$_POST[treatment_210032]',
            cost_210032      = '$_POST[cost_210032]'";

// run query
$create = mysqli_query($db_connection, $query);

if($create) { //check if query TRUE/success
    // echo "<p>Medical updated successfully !</p>"; // success msg (html version)
    echo "<script> alert ('Medical added successfully !'); </script>"; //success msg (javascript version)
} else {
    // echo "<p>Medical updated failed !</p>"; // fail msg (html version)
    echo "<script> alert ('Medical add failed !'); </script>"; //fail msg (javascript version)
    }   
}
?>
<!-- <p><a href="read_doctor_210032.php">BACK TO DOCTORS LIST</a></p> -->
<script>window.location.replace("medicals_210032.php?pet_id=<?=$_POST['pet_id_210032'];?>");</script>
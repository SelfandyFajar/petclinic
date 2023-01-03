<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['login'])){
    echo "<script>alert('please login first ! '); window.location.replace('form_login_210032.php');</script>";
}
?>
<html>
<head>
    <title>Selfandy's Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
			<div class="logo">
				<h1>Selfandy Pet Clinic</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">Home </a></li>
					<li><a href="read_pet_210032.php">Data Pets </a></li>
					<li><a href="read_doctors_210032.php">Data Doctors </a></li>
					<li><a href="read_user_210032.php">Data Users </a></li>
                    <?php
                    include "connection_210032.php";
                    $query = "SELECT * FROM users_210066 WHERE userid_210066= '$_SESSION[userid]'";
                    $user = mysqli_query($db_connection, $query); 
                    $data = mysqli_fetch_assoc($user);
                    ?>
                    <li>
                        <a href="change_photo_210032.php">
                        <img src="uploads/users/<?= $data['photo_210066']; ?>" class="profile">
                        </a>
                    </li>
				</ul>
			</div>
		</div>

        <div class="container-content">
            <h1>Monthiy Report</h1><hr>
            <br>
            <?php 
            $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
            $year = date('Y');
            ?>
            
            <form>
                <p>Select
                <select name="month" required>
                        <option value="">Month</option>
                        <?php for($m=1;$m<=12;$m++) { ?>
                        <option value="<?=$m?>"><?=$months[$m-1]?></option>
                        <?php } ?>
                    </select>
                    <select name="year" required>
                        <option value="">Year</option>
                        <?php for($y=0;$y<=2;$y++) { ?>
                        <option value="<?=$year-$y?>"><?=$year-$y?></option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="View Report">
                </p>
            </form>
            <br>
            <?php
            if(isset($_GET['year'])) {
                include 'connection_210032.php';
                //$query="SELECT * FROM medicals_210032";
                $query="SELECT m.mr_date_210032, d.doctor_name_210032, p.pet_name_210032, p.pet_owner_210032, m.cost_210032 FROM medicals_210032 AS m, doctors_210032 AS d, pets_210032 AS p WHERE m.doctor_id_210032=d.doctor_id_210032 AND m.pet_id_210032=p.pet_id_210032 AND MONTH(m.mr_date_210032)='$_GET[month]' AND YEAR(m.mr_date_210032)='$_GET[year]'";
                $report=mysqli_query($db_connection,$query);
            ?>
            <h4>Report periode <?=$months[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
            <br>
            <table class="table-content">
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Doctor</th>
                    <th>Pet</th>
                    <th>Owner</th>
                    <th>Pay (Rp)</th>
                </tr>
                <?php
                if(mysqli_num_rows($report) > 0) {
                    $i=1; $total=0;
                    foreach($report as $data) :
                        $total=$total+$data['cost_210032']
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?=$data['mr_date_210032']?></td>
                    <td><?=$data['doctor_name_210032']?></td>
                    <td><?=$data['pet_name_210032']?></td>
                    <td><?=$data['pet_owner_210032']?></td>
                    <td><?=$data['cost_210032']?></td>
                </tr>
                <?php endforeach; ?>
                <tr><th colspan="7" align="right">Total : Rp. <?=$total?></th></tr>
                <?php } else { ?>
                <tr><td colspan="7" align="center">No record !</td></tr>
                <?php } ?>
            </table>
            <?php } ?>
            <br>
            <p><a href="index.php" class="btn-end">Back to Home</a></p>
        </div>

    </div>
    
</body>
</html>
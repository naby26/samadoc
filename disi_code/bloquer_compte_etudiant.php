<?php
 session_start();
 $con = mysqli_connect("localhost","root","","samadoc");

$username = $_POST['username_etudiant'];
$status = $_POST['status'];

//echo $username."<br>".$password_modif."<br>".$status;

$requete = mysqli_query($con,"UPDATE sd_etudiant SET status='$status' WHERE username = '$username'");

mysqli_close($con);

?>
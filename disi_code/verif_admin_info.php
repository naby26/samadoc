<?php
   session_start();
   $username = $_SESSION['username'];
   $con = mysqli_connect("localhost","root","","samadoc");

    $username_admin = $_POST['username_admin'];
    $firstname_admin = $_POST['firstname_admin'];
    $lastname_admin = $_POST['lastname_admin'];

    $username_en_cour = $_SESSION['username'];


    $requete = mysqli_query($con,"UPDATE sd_etudiant SET username ='$username_admin',firstname='$firstname_admin',lastname='$lastname_admin' WHERE username='$username_en_cour'");
  echo "YES";
    mysqli_close($con);
?>
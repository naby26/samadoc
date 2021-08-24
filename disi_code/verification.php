<?php

    $password=$_POST['password'];
    $username=$_POST['username'];
    $bdd = mysqli_connect("localhost", "root","", "samadoc");
    $reponse = mysqli_query($bdd,"SELECT * FROM sd_etudiant WHERE password='$password' and username='$username'");

    $nb=mysqli_num_rows($reponse);
    
    if($nb!=0){
        include ("http://localhost/samadoc/accueil/");
    }
    else{
        include("http://localhost/samadoc/connexion/");
    }


?>
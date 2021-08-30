<?php
    session_start();

    $password=$_POST['password'];
    $username=$_POST['username'];
    $bdd = mysqli_connect("localhost", "root","", "samadoc");
    $reponse = mysqli_query($bdd,"SELECT * FROM sd_etudiant WHERE password='$password' and username='$username'");

    $nb=mysqli_num_rows($reponse);
    
    $tab = mysqli_fetch_array($reponse);
    if($nb!=0){

        $_SESSION['username']= $username;
        $_SESSION['firstname']= $tab['firstname'];
        $_SESSION['lastname']= $tab['lastname'];
        $_SESSION['niveau']= $tab['niveau'];
        $_SESSION['licence']= $tab['licence'];
        $_SESSION['mail']= $tab['mail'];


        if($password == 'passer@123'){
        include("http://localhost/samadoc/changer-mot-de-passe/");
        }
        else{
        include ("http://localhost/samadoc/accueil/");
        }
     }
    else{
        include("http://localhost/samadoc/connexion/");
     }


?>
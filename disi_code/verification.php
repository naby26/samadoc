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
        $_SESSION['status']= $tab['status'];
     
    echo$tab['status'];

        if($tab['status']== 2){
            $_SESSION['notif']="Votre compte est inactif \n veillez vous signaler au pres de l'administrateur";
            header("location: http://localhost/samadoc/");
        }
        else{

        if($password == 'passer@123'){
        // unset($_SESSION['message_erreur']);
        $_SESSION['notif']= "Veiller changer votre mot de passe par defaut pour des raisons de securite";
        header("location: http://localhost/samadoc/changer-mot-de-passe/");
        }
        else{
            // unset($_SESSION['message_erreur']);
        header("location: http://localhost/samadoc/accueil/");
        $_SESSION['val']=0;
        }
       }
      }
    else{
        $_SESSION['notif']="Mot de passe et/ou INE invalide";
        header("location: http://localhost/samadoc/");
     }


?>
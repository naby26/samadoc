<?php
$passwordactuel =$_POST['password'];
$newpassword = $_POST['newpassword'];
$confpassword = $_POST['confnewpassword'];

// on se connecte à notre base
$base = mysqli_connect ("localhost", "root", "","samadoc");
//mysqli_select_db ( $base,"samadoc") ; 

$reponse = mysqli_query($base,"SELECT * FROM sd_etudiant WHERE password='$passwordactuel' and username='N00473E20181'");

$nb=mysqli_num_rows($reponse);

if($nb!=0){



if($newpassword==$confpassword){

	// lancement de la requête
	$sql = "UPDATE sd_etudiant SET password ='$newpassword' WHERE username='N00473E20181'";
	$reponse2=mysqli_query($base,$sql);
      include("http://localhost/samadoc/accueil/");
        }
        else{
           include("http://localhost/samadoc/changer-mot-de-passe/");
        }
	}
	else{
		include("http://localhost/samadoc/changer-mot-de-passe/");
	}
	// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
	//mysqli_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());


	// on ferme la connexion à la base
	mysqli_close($base);


?>

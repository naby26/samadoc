<?php

$id_doc = $_GET['get_id'];
$auteur = $_GET['auteur'];


$con = mysqli_connect("localhost","root","","samadoc");

$req_nom_doc = mysqli_query($con,"SELECT * FROM sd_document WHERE id='$id_doc'");
$tab_nom_doc = mysqli_fetch_array($req_nom_doc);
$nom_doc = $tab_nom_doc['nom'];

$req_supp = mysqli_query($con,"DELETE FROM sd_document WHERE id='$id_doc'");

$req_nom_auteur = mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username='$auteur'");
$tab_nom_auteur = mysqli_fetch_array($req_nom_auteur);



$nom = $tab_nom_auteur['firstname'].' '.$tab_nom_auteur['lastname'];


$requete = mysqli_query($con,"INSERT INTO sd_corbeille VALUES('$nom_doc','$nom','$auteur')");


$repertoire = opendir("sd_repertoire") ;
copy('sd_repertoire/'.$nom_doc,'sd_corbeille/'.$nom_doc);
unlink('sd_repertoire/'.$nom_doc);
closedir($repertoire);


header('location: http://localhost/samadoc/profil-utilisateur/');


?>
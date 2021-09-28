<?php
session_start();

$licence = $_SESSION['licence'];

$con = mysqli_connect("localhost","root","","samadoc");
$req = mysqli_query($con,"SELECT * FROM sd_structure WHERE licence_sigle='$licence'");
$tab = mysqli_fetch_array($req);


$UFR=$_POST['ufr'];
$Departement=$_POST['departement'];
$Licence=$_POST['licence'];
$Niveau=$_POST['niveau'];
$Nature=$_POST['nature'];
$Module=$_POST['module'];
$Annee=$_POST['annee'];
$auteur=$_SESSION['username'];

$nom_doc=$Nature."_".$Module."_".$Licence."_".$Niveau."_".$Annee;



if(!empty($_FILES)){
    $verification = mysqli_query($con,"SELECT * FROM sd_document  WHERE nom='$nom_doc'");
    $nbre_de_fois=mysqli_num_rows($verification); 
     

?>
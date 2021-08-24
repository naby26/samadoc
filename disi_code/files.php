<?php

$UFR=$_POST['ufr'];
$Departement=$_POST['departement'];
$Licence=$_POST['licence'];
$Niveau=$_POST['niveau'];
$Nature=$_POST['nature'];
$Module=$_POST['module'];
$Annee=$_POST['annee'];

echo $UFR;
echo $Departement;
echo $Licence;
echo $Niveau;
echo $Nature;
echo $Module;
echo $Annee;

$con = mysqli_connect("localhost","root","","samadoc");
if(!empty($_FILES)){
    $file_name = $_FILES['fichier']['name'];
    $file_size = $_FILES['fichier']['size'];
    $file_path = $_FILES['fichier']['tmp_name'];
    $gate = 'sd_repertoire/'.$file_name;
    if(move_uploaded_file($file_path,$gate)){
        $req = mysqli_query($con,"INSERT INTO sd_document VALUES('$file_name','$file_size','$UFR','$Departement','$Licence','$Niveau','$Nature','$Module','$Annee')");
    }

}
?>


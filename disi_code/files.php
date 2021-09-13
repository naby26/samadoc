<?php
session_start();

$UFR=$_POST['ufr'];
$Departement=$_POST['departement'];
$Licence=$_POST['licence'];
$Niveau=$_POST['niveau'];
$Nature=$_POST['nature'];
$Module=$_POST['module'];
$Annee=$_POST['annee'];
$auteur=$_SESSION['username'];

$nom=$Nature."_".$Module."_".$Licence."_".$Niveau."_".$Annee;
// $index=1;
// $nom=$nom."_".$index;
// echo $nom;

$con = mysqli_connect("localhost","root","","samadoc");


if(!empty($_FILES)){
    $verification = mysqli_query($con,"SELECT * FROM sd_document  WHERE nom LIKE '%$nom%'");
    $nombre=mysqli_num_rows($verification);  //On cherche combien de fichiers ont le meme nom

//     // Si aucun fichier n'a le meme nom
    if($nombre==0){
        $index=1;
        $nom=$nom."_".$index;
        $file_exname=$_FILES['fichier']['name'];
        $extension=strrchr($file_exname,".");
        $file_name=$nom.$extension;
        $file_size = $_FILES['fichier']['size'];
        $file_path = $_FILES['fichier']['tmp_name'];
        $gate = 'sd_repertoire/'.$file_name;
        if(move_uploaded_file($file_path,$gate)){
            $req = mysqli_query($con,"INSERT INTO sd_document VALUES('$file_name','$file_size','$UFR','$Departement','$Licence','$Niveau','$Nature','$Module','$Annee','$auteur')");
            // $renommage = rename('sd_repertoire/'.$file_name, 'sd_repertoire/'.$file_name);
           
        }
        
    }
        
//     // S'il existe déjà un fichier ayant ce nom
        elseif($nombre!==0){
        $index=1; 
        // $tab_verification=mysqli_fetch_array($verification);
        while($tab_verification=mysqli_fetch_array($verification)){
          $taille=$tab_verification['taille'];
          $file_size=$_FILES['fichier']['size'];
            if(($taille)== ($file_size)){
                $index=0;
                break;

            }
            else{
                
                $index=$index+1; 
              
            }
        }
        if($index!==0){
          $nom=$nom."_".$index;
          $file_exname=$_FILES['fichier']['name'];
          $extension=strrchr($file_exname,".");
          $file_name=$nom.$extension;
          $file_size = $_FILES['fichier']['size'];
          $file_path = $_FILES['fichier']['tmp_name'];
          $gate = 'sd_repertoire/'.$file_name;
          if(move_uploaded_file($file_path,$gate)){
              $req = mysqli_query($con,"INSERT INTO sd_document VALUES('$file_name','$file_size','$UFR','$Departement','$Licence','$Niveau','$Nature','$Module','$Annee','$auteur')");
              }
        }

        elseif($index==0){
            header('Location:http://localhost/samadoc/ajout-de-documents/');
            exit();
        }


    } 


    }
header('Location:http://localhost/samadoc/document/');
exit();

?>


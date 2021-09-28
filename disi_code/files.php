<?php
session_start();

$licence = $_SESSION['licence'];

$con = mysqli_connect("localhost","root","","samadoc");
$req = mysqli_query($con,"SELECT * FROM sd_structure WHERE licence_sigle='$licence'");
$tab = mysqli_fetch_array($req);

$UFR=$tab['ufr'];
$Departement=$tab['departement'];
$Licence=$licence;
$Niveau=$_POST['niveau'];
$Nature=$_POST['nature'];
$Module=$_POST['module'];
$Annee=$_POST['annee'];
$auteur=$_SESSION['username'];

$nom=$Nature."_".$Module."_".$Licence."_".$Niveau."_".$Annee;

$con = mysqli_connect("localhost","root","","samadoc");

$index=0;
if(!empty($_FILES)){
    $verification = mysqli_query($con,"SELECT * FROM sd_document  WHERE nom LIKE '%$nom%'");
    $nombre=mysqli_num_rows($verification);  //On cherche combien de fichiers ont le meme nom

//   $format_posssible= array('.pdf','.PDF','.docx','.DOCX','.csv','.xlsx','.xlsm','.ppt','.pptx','.PPT','.PPTX','jpg','png');

//     // Si aucun fichier n'a le meme nom
    if($nombre==0){
        echo "yes";
        $index=1;
        $nom=$nom."_".$index;
        $file_exname=$_FILES['fichier']['name'];
        $extension=strrchr($file_exname,".");
        $file_name=$nom.$extension;
        $file_size = $_FILES['fichier']['size'];
        $file_path = $_FILES['fichier']['tmp_name'];
        $gate ='sd_repertoire/'.$file_name;
        if(move_uploaded_file($file_path,$gate)){
            $req = mysqli_query($con,"INSERT INTO sd_document VALUES(null,'$file_name','$file_size','$UFR','$Departement','$Licence','$Niveau','$Nature','$Module','$Annee','$auteur')");
            
        }
    }
    }
        
// //     // S'il existe déjà un fichier ayant ce nom
//         elseif($nombre!==0){
//         $index=1; 
//         // $tab_verification=mysqli_fetch_array($verification);
//         while($tab_verification=mysqli_fetch_array($verification)){
//           $taille=$tab_verification['taille'];
//           $file_size=$_FILES['fichier']['size'];
//             if(($taille)== ($file_size)){
//                 $index=0;
//                 break;

//             }
//             else{
                
//                 $index=$index+1; 
              
//             }
//         }
//         if($index!==0){
//           $nom=$nom."_".$index;
//           $file_exname=$_FILES['fichier']['name'];
//           $extension=strrchr($file_exname,".");
//           $file_name=$nom.$extension;
//           $file_size = $_FILES['fichier']['size'];
//           $file_path = $_FILES['fichier']['tmp_name'];
//           $gate = 'sd_repertoire/'.$file_name;
//           if(move_uploaded_file($file_path,$gate)){
//               $req = mysqli_query($con,"INSERT INTO sd_document VALUES('$file_name','$file_size','$UFR','$Departement','$Licence','$Niveau','$Nature','$Module','$Annee','$auteur')");
//               }
//         }

//         elseif($index==0){
//             header('Location:http://localhost/samadoc/ajout-de-documents/');
//             exit();
//         }


//     } 


//     }
// header('Location:http://localhost/samadoc/document/');
// exit();

?>


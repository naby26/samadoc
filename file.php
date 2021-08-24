<?php
$con = mysqli_connect("localhost","root","","samadoc");
if(!empty($_FILES)){
    $file_name = $_FILES['fichier']['name'];
    $file_size = $_FILES['fichier']['size'];
    $file_path = $_FILES['fichier']['tmp_name'];
    $gate = 'sd_repertoire/'.$file_name;
    if(move_uploaded_file($file_path,$gate)){
        $req = mysqli_query($con,"INSERT INTO test VALUES($file_name,$file_path)");
    }

}
?>



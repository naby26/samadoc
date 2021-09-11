<?php
/*template name:profil administrateur*/
session_start();
$con = mysqli_connect("localhost","root","","samadoc");



if(isset($_POST['bouton_supprimer'])){


    $choix_doc = $_SESSION['choix_doc'] ;
    $ine = $_SESSION['auteur'] ;
 
  $requete = mysqli_query($con,"DELETE FROM sd_document WHERE nom='$choix_doc'"); 
    $requete = mysqli_query($con,"INSERT INTO sd_corbeille VALUES('$choix_doc','','$ine')"); 

    $repertoire = opendir("disi_code/sd_repertoire") ;
    copy('disi_code/sd_repertoire/'.$choix_doc,'disi_code/sd_corbeille/'.$choix_doc);
    unlink('disi_code/sd_repertoire/'.$choix_doc);
    closedir($repertoire);

}


$username = $_SESSION['username'];
$requete_user= mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username ='$username'");
$tab_user = mysqli_fetch_array($requete_user);

/* statistique des document de la licence agrotic */
$req_agrotic =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='agrotic'");
$solution_agrotic = mysqli_num_rows($req_agrotic); 

/* statistique des document de la licence agrotic */
$req_mpi =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='mpi'");
$solution_mpi = mysqli_num_rows($req_mpi); 

/* statistique des document de la licence agrotic */
$req_mop =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='mop'");
$solution_mop = mysqli_num_rows($req_mop); 

/* statistique des document de la licence agrotic */
$req_asph =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='asph'");
$solution_asph = mysqli_num_rows($req_asph); 

/* statistique des document de la licence agrotic */
$req_cd =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='cd'");
$solution_cd = mysqli_num_rows($req_cd); 

/* statistique des document de la licence agrotic */
$req_agroforesterie =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='agroforesterie'");
$solution_agroforesterie = mysqli_num_rows($req_agroforesterie); 

/* statistique des document de la licence agrotic */
$req_foresterie =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='foresterie'");
$solution_foresterie = mysqli_num_rows($req_foresterie); 

/* statistique des document de la licence agrotic */
$req_pp =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='pp'");
$solution_pp = mysqli_num_rows($req_pp); 

/* statistique des document de la licence agrotic */
$req_abe =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='abe'");
$solution_abe = mysqli_num_rows($req_abe); 

/* statistique des document de la licence agrotic */
$req_phtp =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='phtp'");
$solution_phtp = mysqli_num_rows($req_phtp); 

/* statistique des document de la licence agrotic */
$req_dl =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='dl'");
$solution_dl = mysqli_num_rows($req_dl); 

/* statistique des document de la licence agrotic */
$req_edd =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='edd'");
$solution_edd = mysqli_num_rows($req_edd); 

/* statistique des document de la licence agrotic */
$req_tc =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='tc'");
$solution_tc = mysqli_num_rows($req_tc); 

/* statistique des document de la licence agrotic */
$req_agap =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='agap'");
$solution_agap = mysqli_num_rows($req_agap); 

/* statistique des document de la licence agrotic */
$req_zsa =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='zsa'");
$solution_zsa = mysqli_num_rows($req_zsa); 

/* statistique des document de la licence agrotic */
$req_qdaoa =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='qdaoa'");
$solution_qdaoa = mysqli_num_rows($req_qdaoa); 

/* statistique des document de la licence agrotic */
$req_aquaculture =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='aquaculture'");
$solution_aquaculture = mysqli_num_rows($req_aquaculture); 

/* statistique des document de la licence agrotic */
$req_peche =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='peche'");
$solution_peche = mysqli_num_rows($req_peche); 

/* statistique des document de la licence agrotic */
$req_nsa =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='nsa'");
$solution_nsa = mysqli_num_rows($req_nsa); 

/* statistique des document de la licence agrotic */
$req_nhd =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='nhd'");
$solution_nhd = mysqli_num_rows($req_nhd); 

/* statistique des document de la licence agrotic */
$req_ahsha =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='ahsha'");
$solution_ahsha = mysqli_num_rows($req_ahsha); 

/* statistique des document de la licence agrotic */
$req_agroequipement =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='agroequipement'");
$solution_agroequipement = mysqli_num_rows($req_agroequipement); 

/* statistique des document de la licence agrotic */
$req_erf =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='erf'");
$solution_erf = mysqli_num_rows($req_erf); 

/* statistique des document de la licence agrotic */
$req_trana =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='trana'");
$solution_trana = mysqli_num_rows($req_trana); 

/* statistique des document de la licence agrotic */
$req_tar =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='tar'");
$solution_tar = mysqli_num_rows($req_mpi); 

/* statistique des document de la licence agrotic */
$req_nrg =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='nrg'");
$solution_nrg = mysqli_num_rows($req_nrg); 

/* statistique des document de la licence agrotic */
$req_ptmc =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='ptmc'");
$solution_ptmc = mysqli_num_rows($req_ptmc); 

/* statistique des document de la licence agrotic */
$req_meaa =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='meaa'");
$solution_meaa = mysqli_num_rows($req_meaa); 

/* statistique des document de la licence agrotic */
$req_egfr =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='egfr'");
$solution_egfr = mysqli_num_rows($req_egfr); 

/* statistique des document de la licence agrotic */
$req_cpaf =mysqli_query($con,"SELECT * FROM `sd_document` WHERE licence='cpaf'");
$solution_cpaf = mysqli_num_rows($req_cpaf); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    section.box_main{
        display: grid;
        grid-template-columns:20% 80%;
        grid-template-areas: "slider conteneur";
    }
    div.box_slider{
        grid-area: slider;
        padding: 1em;
        background-color: rgb(68, 68, 68);
        display: flex;
        flex-direction: column;
        gap:0 3em;
       
    }
    div.parametre{
        margin-top: 8em;
        display: flex;
        flex-direction: column;
        gap: 2em 0;
        align-items: center;
        background-color: rgba(0,0,0,0.2);
        padding: 2em 0;
    }
    div.parametre span{
        color: white;
        font-size: larger;
        padding-bottom: 3px;
        border-bottom: 3px solid white;
        border-radius: 0 0 10px 10px;
    }

    a.menu_parametre{
        transition: all 1s;
        text-decoration: none;
    }
    a.menu_parametre:hover{
        transform: scale(1.5);
        transition: all 1s;
    }
    div.box_slider a#bouton_retour{
        transition: all 1s;
    }
    div.box_slider a#bouton_retour:hover{
        transform: scale(1.05);
        transition: all 1s;
    }
    div.box_slider img.logo_ussein{
          width:100%;
          height:120px;
     }
     div.box_slider img.logo_dashboard{
        width:100%;
          height:60px;
     }
    
    div.box_conteneur{
        grid-area: conteneur; 
        display:flex;
        flex-direction: column; 
    }
    div.entete_conteneur{
        background-color:  rgb(230, 230, 230);
        width:100%;
        padding: 2em;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        box-shadow: 5px 5px 10px gray;
        z-index: 100;
        position:fixed;
        border-bottom: 2px solid blue;
    }
    div.entete_conteneur span#Dashbord{
        text-align:center ;
        color:blue;
        font-size: xx-large;
        text-shadow: 0 0 5px brown;
        float: left;
    }
    div.entete_conteneur div.avatar_admin{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;  
    }
    
    div.entete_conteneur div.image_profile{
      
      width: 50px; height: 50px;
      background-size: cover;
      background-position:center;
      <?php
        
        if(isset($_POST['bouton_Enregistrer'])){

            $username_admin = $_POST['username_admin'];
            $firstname_admin = $_POST['firstname_admin'];
            $lastname_admin = $_POST['lastname_admin'];

            $username_en_cour = $_SESSION['username'];

            //echo $username."<br>".$password_modif."<br>".$status;

            $requete = mysqli_query($con,"UPDATE sd_etudiant SET username ='$username_admin',firstname='$firstname_admin',lastname='$lastname_admin' WHERE username='$username_en_cour'");

        }

         
        
        if(isset($_POST['valider_profil'])){


            //var_dump($_FILES);
            
            //$con = mysqli_connect("localhost","root","","samadoc");
            if(!empty($_FILES)){
            
                $image_name = $_FILES['image']['name'];
                $format_possible = array('.png','.jpg','.ico','.jpeg');
                $format = strrchr($image_name,".");
            //$image_size = $_FILES['image']['size'];
                $image_path = $_FILES['image']['tmp_name'];
                
                $gate = 'disi_code/sd_avatar_user/'.$image_name;
            
                if(move_uploaded_file($image_path,$gate)){
                    $photo = $_SESSION['username'].$format;
                    $requete_img = mysqli_query($con,"UPDATE sd_etudiant SET photo ='$photo' WHERE username='$username'");
            
                    $nom_image = $_SESSION['username'];
                    $repertoire = 'disi_code/sd_avatar_user';
                    $acces_repertoire = opendir($repertoire);
                         while($images = readdir($acces_repertoire)){
                              if(strpos($images, $nom_image)) {
                                  //unlink('disi_code/sd_avatar_user/'.$images);
                                 echo "image trouver est un format png";
                              }
                            }
                         closedir( $acces_repertoire);
                
                         
                    $renommage = rename('disi_code/sd_avatar_user/'.$image_name,'disi_code/sd_avatar_user/'.$photo);
              //      echo "profile envoyer";
                   
                 }
            
            }
             }
      

             $con = mysqli_connect("localhost","root","","samadoc");

             $username = $_SESSION['username'];
             $requete_user= mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username ='$username'");
             $tab_user = mysqli_fetch_array($requete_user);
      ?>

      
      background-image: url("http://localhost/samadoc/disi_code/sd_avatar_user/<?php echo $tab_user['photo']; ?>");
      border-radius: 50%;
      
  }
    p#nomutilisateur{
        color:blue;
        font-size: x-large;
    }
  div.ecran_conteneur{
   padding: 12em 3em 3em 4em;
   display: flex;
   flex-direction: column;
   gap: 2em;
  }
   
  div.case_suppression{
    display: flex;
      flex-direction: column;
      border: 2px solid rgb(70, 70, 70); 
      margin-bottom:1em;
  }
  div.contenu_suppression{
       display: flex;
       padding:2em 1em;
      justify-content: center;
      gap:0 4em;
  }
  @media(max-width: 900px){
    div.contenu_suppression{
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap:2em;
  }
  }
  span#suppression_doc{
    text-align: center;
      width:100%;
      padding: 5px;
      background-color: rgb(70, 70, 70);
      color:white;
      font-size: x-large;
  }
  

  div.case_etudiant{ width:100%;
      display: flex;
      flex-direction: column;
      border: 2px solid rgb(70, 70, 70);
  }
  span#modifier_etudiant{
    text-align: center;
      width:100%;
      padding: 5px;
      background-color: rgb(70, 70, 70);
      color:white;
      font-size: x-large;
  }
 div.contenu_etudiant form{
      display: flex;
      justify-content: center;
      flex-direction: column;
      gap:1em 0;
      padding: 2em;
 }
div.contenu_etudiant input,select{
    width: 100%;
    height: 3em;
    border-radius: 10px;
    outline: none;
}
div.contenu_etudiant input[type="submit"]{
    background-color: rgb(70, 70, 70);
    color:white;
    font-size: large;
}

  div.case_modif{
      width:100%;
      display: flex;
      flex-direction: column;
      border: 2px solid rgb(70, 70, 70);
  }
  div.contenu_profil form{
      display: flex;
      justify-content: center;
      gap:0 4em;
  }
  @media(max-width: 900px){
    div.contenu_profil{
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap:2em;
  }
  }
  span#modifier_profil{
      text-align: center;
      width:100%;
      padding: 5px;
      background-color: rgb(70, 70, 70);
      color:white;
      font-size: x-large;
  }
  div.modif_avatar{
      background-color: white;
      padding: 2em ;
      display: flex;
      align-items: center;
      flex-direction: column;
      gap:2em 0;
      width:100%;
  }
  div.modif_avatar img#avatar{
        width: 200px; height: 200px;
        border-radius: 50%;
    }
  div.modif_avatar input[type="submit"]{
    background-color: rgb(70, 70, 70);
      color:white;
      font-size:large;
      width: 100%;
      height:3em;
      border-radius: 10px;
  }
  div.info_name{
      padding: 2em; 
      display: flex;
      flex-direction: column;
      gap:1em 0;
      width:100%;
  }
  div.info_name input{
      width: 100%;
      height:3em;
      border-radius: 10px;
      outline: none;
  }
  div.info_name input[type="submit"]{
      background-color: rgb(70, 70, 70);
      color:white;
      font-size:large;
  }
  div.case{
      width:100%;
      display: flex;
      flex-direction: column;
      border: 2px solid rgb(0, 110, 255);
  }
  div.case span.titre{
      text-align: center;
      width:100%;
      padding: 5px;
      background-color: rgb(0, 110, 255);
      color:white;
      font-size: x-large;
  }
  div.case div.contenu{
      padding: 2em;
      display: flex;
      flex-wrap:wrap ;
      justify-content: center;
      gap: 3em 3em;
  }
  div.contenu div.contenu_licence{
      background-color: white;
      padding: 1em 2em;
      box-shadow: 2px 2px 6px gray;
      width: 100%;
      text-align: center;
      transition: all 1s;
  }
  div.contenu div.contenu_licence:hover{
      transform:scale(1.05);
      transition: all 1s;
  }
  a{
      text-decoration: none;
      color: rgb(0, 110, 255);
      font-size: x-large;
  }
  details{
      margin-bottom:1em;
  }
  details summary{
      background-color: gray;
      padding: 3px;
      font-size: x-large;
  }
  fieldset{
      padding: 2em;
  }
  div.info_doc{
      border: 1px solid gray;
      height: 100vh;
      width:100%;
      margin: 1em;
  }
  div.bloc_choix_doc{
      display:flex;
      flex-direction:column;
  }

  div.bloc_choix_doc input{
      width:100%;
      height:3em;
      color:white;
      font-size:larger;
      background-color:rgb(70, 70, 70);
      margin-top:1em;
      border-radius: 10px;
  }
  
</style>

<body>
    <!-- definition du section principale qui comportera un slider un header et box main qui affichera les differentes departements --> 
     <section class="box_main">

        <!-- debut du code pour le slider -->
        <div class="box_slider">
            <a href="http://localhost/samadoc/accueil/?preview_id=58&preview_nonce=a992e3ccc0&preview=true" id="bouton_retour"><img src="https://img.icons8.com/ios/50/000000/import.png" title="retour" /></a>
            <img src="http://localhost/samadoc/disi_code/ussein.ico" alt="" class="logo_ussein">

            <div class="parametre">
                <span>Autre parametrage</span>
            <a href="#"  class="menu_parametre"><img src="https://img.icons8.com/external-vitaliy-gorbachev-flat-vitaly-gorbachev/58/000000/external-password-internet-security-vitaliy-gorbachev-flat-vitaly-gorbachev.png" title="Changer mot de passe" alt="icon passord"/></a>
            <a href="http://localhost/samadoc/wp-admin/index.php" class="menu_parametre"><img src="https://img.icons8.com/color/48/000000/dashboard-layout.png" alt="icon dasboard" title="+ de parametre"  /></a>
            </div>
        </div>
        <!-- fin du code pour le slider -->

        <!-- debut du code pour le conteneur -->
        <div class="box_conteneur">

            <!-- debut du code pour l'entete du conteneur -->
            <div class="entete_conteneur">
                <span id="Dashbord"><h2>Dashbord Admin</h2></span>
                <div class="avatar_admin">
                <div class="image_profile"></div>
                <p id="nomutilisateur"> <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?> </p>
                </div>
            </div>
            <!-- fin du code pour l'entete du conteneur -->

             <!-- debut du code pour l'ecran (affichage) du conteneur -->
            <div class="ecran_conteneur">




  <!--     ***************    Suppression de document    ******************     
  <details>
                <summary> Parametre de suppression </summary> -->  
                 <!-- debut du code pour la case -->
                 <div class="case_suppression">
                     <span id="suppression_doc"> SUPPRIMER DOCUMENT</span>
 
                     <!-- debut du code pour le contenu de la case -->
                     <div class="contenu_suppression">
 
                         <!-- debut du code pour le box-licence du contenu de la case -->

                        
                     
                         
                      <div class="bloc_choix_doc">

                        <fieldset>
                        <legend>CHOISIR DOCUMENT</legend>
                        <form method="POST">
                        <select name="document">
                        <option>Aucun</option>

                        <optgroup label="LICENCE AGROTIC">

                        <?php
                         while($tab_agrotic=mysqli_fetch_array($req_agrotic)){ 
                         ?>
     
                             <option> <?php echo $tab_agrotic['nom'] ; ?> </option>
     
                             <?php
                             }
                         ?>
                         </optgroup>

                         <optgroup label="LICENCE MPI">

                        <?php
                         while($tab_mpi=mysqli_fetch_array($req_mpi)){ 
                             ?>
                             
                             <option> <?php echo $tab_mpi['nom'] ; ?> </option>
     
                             <?php
                             }
                         ?>
                            </optgroup>

                            <optgroup label="LICENCE M-O-P">

                           <?php
                            while($tab_mop=mysqli_fetch_array($req_mop)){ 
                                ?>
                                
                                <option> <?php echo $tab_mop['nom'] ; ?> </option>

                                <?php
                                }
                            ?>
                               </optgroup>

                               <optgroup label="LICENCE A-S-P-H">

<?php
 while($tab_asph=mysqli_fetch_array($req_asp)){ 
     ?>
     
     <option> <?php echo $tab_asph['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    <optgroup label="LICENCE C-D">

<?php
 while($tab_cd=mysqli_fetch_array($req_cd)){ 
     ?>
     
     <option> <?php echo $tab_cd['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    <optgroup label="Agroforesterie">

<?php
 while($tab_agroforesterie=mysqli_fetch_array($req_agroforesterie)){ 
     ?>
     
     <option> <?php echo $tab_agroforesterie['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    <optgroup label="LICENCE Foresterie">

<?php
 while($tab_foresterie=mysqli_fetch_array($req_foresterie)){ 
     ?>
     
     <option> <?php echo $tab_foresterie['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    <optgroup label="LICENCE P-P">

<?php
 while($tab_pp=mysqli_fetch_array($req_pp)){ 
     ?>
     
     <option> <?php echo $tab_pp['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE A-B-E">

<?php
 while($tab_abe=mysqli_fetch_array($req_abe)){ 
     ?>
     
     <option> <?php echo $tab_abe['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE P-H-T-P">

<?php
 while($tab_phtp=mysqli_fetch_array($req_phtp)){ 
     ?>
     
     <option> <?php echo $tab_phtp['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE D-L">

<?php
 while($tab_dl=mysqli_fetch_array($req_dl)){ 
     ?>
     
     <option> <?php echo $tab_dl['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE E-D-D">

<?php
 while($tab_edd=mysqli_fetch_array($req_edd)){ 
     ?>
     
     <option> <?php echo $tab_edd['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    <optgroup label="LICENCE T-C">

<?php
 while($tab_tc=mysqli_fetch_array($req_tc)){ 
     ?>
     
     <option> <?php echo $tab_tc['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    <optgroup label="LICENCE A-G-A-P">

<?php
 while($tab_agap=mysqli_fetch_array($req_agap)){ 
     ?>
     
     <option> <?php echo $tab_agap['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE Z-S-A">

<?php
 while($tab_zsa=mysqli_fetch_array($req_zsa)){ 
     ?>
     
     <option> <?php echo $tab_zsa['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE Q-D-A-O-A">

<?php
 while($tab_qdaoa=mysqli_fetch_array($req_qdaoa)){ 
     ?>
     
     <option> <?php echo $tab_qdaoa['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE Aquaculture">

<?php
 while($tab_aquaculture=mysqli_fetch_array($req_aquaculture)){ 
     ?>
     
     <option> <?php echo $tab_aquaculture['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>



    <optgroup label="LICENCE Peche">

<?php
 while($tab_peche=mysqli_fetch_array($req_peche)){ 
     ?>
     
     <option> <?php echo $tab_peche['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


    
    <optgroup label="LICENCE N-S-A">

<?php
 while($tab_nsa=mysqli_fetch_array($req_nsa)){ 
     ?>
     
     <option> <?php echo $tab_nsa['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE N-H-D">

<?php
 while($tab_nhd=mysqli_fetch_array($req_nhd)){ 
     ?>
     
     <option> <?php echo $tab_nhd['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE A-H-S-H-A">

<?php
 while($tab_ahsha=mysqli_fetch_array($req_ahsha)){ 
     ?>
     
     <option> <?php echo $tab_ahsha['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE Agro-equipement">

<?php
 while($tab_agroequipement=mysqli_fetch_array($req_agroequipement)){ 
     ?>
     
     <option> <?php echo $tab_agroequipement['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE E-R-F">

<?php
 while($tab_erf=mysqli_fetch_array($req_erf)){ 
     ?>
     
     <option> <?php echo $tab_erf['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE T-R-A-N-A">

<?php
 while($tab_trana=mysqli_fetch_array($req_trana)){ 
     ?>
     
     <option> <?php echo $tab_trana['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE T-A-R">

<?php
 while($tab_tar=mysqli_fetch_array($req_tar)){ 
     ?>
     
     <option> <?php echo $tab_tar['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>
    

    
    <optgroup label="LICENCE N-R-G">

<?php
 while($tab_nrg=mysqli_fetch_array($req_nrg)){ 
     ?>
     
     <option> <?php echo $tab_nrg['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


       
    <optgroup label="LICENCE P-T-M-C">

<?php
 while($tab_ptmc=mysqli_fetch_array($req_ptmc)){ 
     ?>
     
     <option> <?php echo $tab_ptmc['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


   
    <optgroup label="LICENCE M-E-A-A">

<?php
 while($tab_meaa=mysqli_fetch_array($req_meaa)){ 
     ?>
     
     <option> <?php echo $tab_meaa['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


   
    <optgroup label="LICENCE E-G-F-R">

<?php
 while($tab_egfr=mysqli_fetch_array($req_egfr)){ 
     ?>
     
     <option> <?php echo $tab_egfr['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


   
    <optgroup label="LICENCE C-P-A-F">

<?php
 while($tab_cpaf=mysqli_fetch_array($req_cpaf)){ 
     ?>
     
     <option> <?php echo $tab_cpaf['nom'] ; ?> </option>

     <?php
     }
 ?>
    </optgroup>


                         </select>
                         <input type="submit" value="Valider" name="valider_doc">
                         </form>
                         </fieldset>
                         </div>


                         <?php
                          $doc_select ="";
                        if(isset($_POST['valider_doc'])){
                         $doc_select = $_POST['document'];
                          if( $doc_select == "Aucun"){
                              ?>
                              <div class="Affichage_doc">
                               <?php echo "pas de document selectionneer ou choisit" ?>
                              </div>

                              <?php
                          }
                          else{
                             $req_nom_doc =mysqli_query($con,"SELECT * FROM `sd_document` WHERE nom='$doc_select'"); 

                             $tab_pdf = array('.pdf','.PDF');
                             $tab_word = array('.docx','.DOCX');
                             $tab_excel = array('.csv','.xlsx','.xlsm');
                              $tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');
                             $icone="";
                             ?>
                             <div class="Affichage_doc">
                          <?php
                             while($table = mysqli_fetch_array($req_nom_doc)){
    
                                 $format = strrchr($table['nom'],'.');
                                 if(in_array($format,$tab_pdf)){
                                    $icone = "http://localhost/samadoc/wp-content/uploads/2021/09/file_type_pdf_icon_1302741.png";
                                }
                                if(in_array($format,$tab_word)){
                                    $icone = "http://localhost/samadoc/wp-content/uploads/2021/09/2048px-.docx_icon.svg1_.png";
                                }
                                if(in_array($format,$tab_excel)){
                                    $icone = "http://localhost/samadoc/wp-content/uploads/2021/09/519281.png";
                                }
                                if(in_array($format,$tab_ppt)){
                                    $icone = "http://localhost/samadoc/wp-content/uploads/2021/09/1200px-.pptx_icon_2019.svg1_.png";
                                }
                                  
                                  $_SESSION['choix_doc'] = $table['nom'];
                                  $_SESSION['auteur'] = $table['auteur'];
                              ?>
                              <style>
                              .div_doc{
                              background-color:rgba(0,0,0,0,1);
                              display:inline-flex;
                              justify-content:space-evenly;
                              flex-wrap:nowrap;
                               border:outset 3px;
                              margin-bottom: 10px;
                              padding:10px 20px 10px 0px;
                          }
                                img#icone_doc:hover{
                                    transform: scale(1.1);
                                }    
                          
                              	div.div_input input {
                                   background-color: rgb(70,70,70);
                                   color:white;
                                   font-size:large;
                                   width:100%;
                                   padding:3px;
                                   border-radius:5px;
                                  }  
                              .div_label1{
                                  overflow-wrap: break-word;
                                  width: 150px;height:188px;
                              } 
        
                              </style>
    
    
                              <form method="POST">
    
                              <div class="div_doc">
                                      <div class="div_img">
                                      <a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" >
                                           <img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto">
                                      </a>
                                      </div>
                                      <div class="div_label">
                                          <label >UFR: </label> <?php echo $table['ufr'];?><br>
                                          <label >Nature: </label> <?php echo $table['nature'];?><br>
                                          <label >Module: </label> <?php echo $table['module'];?><br>
                                          <label >Niveau: </label> <?php echo $table['niveau'];?><br>
                                          <label >Année: </label> <?php echo $table['annee'];?><br>
                                      </div>
                                      <div class="div_input">
                                     <input type="submit" value="Supprimer" name="bouton_supprimer">
                
                                      </div>
    
    
                              </div>

                              </form>
                          
                              <?php
        
                              }

                           }

                     }
                     ?>
                          
                       
 
                          <!-- fin du code pour le box-licence du contenu de la case -->
 
 
                     </div>
                     <!-- fin du code pour le contenu de la case -->
 
                 </div>
                 <!-- fin du code pour la case 
             </details> -->







                 <!--     ***************    MODIFICATION DU PROFIL ADMIN    ******************      -->
               <details>
               <summary> Parametre profil</summary>
                <!-- debut du code pour la case -->
                <div class="case_modif">
                    <span id="modifier_profil"> MODIFICATION DE VOTRE PROFIL</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu_profil"> 
                    
                    
                    
                        



                        <!-- debut du code pour le box-licence du contenu de la case -->
                        <form method="POST" enctype="multipart/form-data">
                            <div class="modif_avatar">
                                <input type="file" name="image">
                                <img src="http://localhost/samadoc/disi_code/sd_avatar_user/<?php echo $tab_user['photo']; ?>" alt="photo profil" id="avatar">
                                <input type="submit" value="Valider" name="valider_profil">
                            </div>
                            
                            <div class="info_name">
                                <input type="text" name="username_admin"  value="<?php echo $_SESSION['username']; ?>" />
                                <input type="text" name="firstname_admin"  value="<?php echo $_SESSION['firstname']; ?>" />
                                <input type="text" name="lastname_admin" placeholder="Nom" value="<?php echo $_SESSION['lastname']; ?>" />
                                
                                <input type="submit" value="Enregistrer" id="enregistrer" name="bouton_Enregistrer">   
                            </div>
                            </form>
                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                  

                </div>
                <!-- fin du code pour la case -->
            </details> 



           


             <!--     ***************   Blocage de compte etudiant   ******************      -->

            <details>
                <summary> Parametre Etudiant </summary>
                 <!-- debut du code pour la case -->
                 <div class="case_etudiant">
                     <span id="modifier_etudiant"> BLOQUER COMPTE ETUDIANT</span>
 
                     <!-- debut du code pour le contenu de la case -->
                     <div class="contenu_etudiant">
 
                         <!-- debut du code pour le box-bloquer etudiant du contenu de la case -->
                     
                             <form method="POST">
                                 <input type="text" name="username_etudiant" placeholder="Nom utilisateur">
                                 <input type="text" name="password_de_blocage" placeholder="Modifier mot de passe">
                                 <label for="statut">Statut : </label>
                                 <select name="status" id="statut">
                                     <option value="0">etudiant</option>
                                     <option value="1">administrateur</option>
                                     <option value="2">bloquer</option>
                                 </select>
                             
                                 
                                 <input type="submit" value="Executer" id="enregistrer" name="bouton_Executer">   
                            </form>
                            
 
                          <!-- fin du code pour le box-bloquer etudiant du contenu de la case -->
                          <?php
                            if(isset($_POST['bouton_Executer'])){

                                $username = $_POST['username_etudiant'];
                                $password_modif = $_POST['password_de_blocage'];
                                $status = $_POST['status'];

                                //echo $username."<br>".$password_modif."<br>".$status;

                                $requete = mysqli_query($con,"UPDATE sd_etudiant SET password ='$password_modif',status='$status' WHERE username = '$username'");

                            }


                           
                          ?>

 
 
                     </div>
                     <!-- fin du code pour le contenu de la case -->
 
                 </div>
                 <!-- fin du code pour la case -->
             </details> 

            
     <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement Math-Informatique</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="http://localhost/samadoc/agrotic/">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1> <?php echo $solution_agrotic ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/mpi/">
                            <div class="contenu_licence">
                            <span>Licence M-P-I</span>
                            <p><h1> <?php echo $solution_mpi ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->


                <!--     ***************    DEPARTEMENT   HGRMER   ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement HGRMER</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence A-H-S-H-A</span>
                           <p><h1> <?php echo $solution_ahsha ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence Agro-Equipement</span>
                            <p><h1> <?php echo $solution_agroequipement ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="">
                            <div class="contenu_licence">
                            <span>Licence E-R-F</span>
                            <p><h1> <?php echo $solution_erf ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->
         


                <!--     ***************    DEPARTEMENT   STA    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement STA</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence T-R-A-N-A</span>
                           <p><h1> <?php echo $solution_trana ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence T-A-R</span>
                            <p><h1> <?php echo $solution_tar ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->



                <!--     ***************    DEPARTEMENT   APV    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre">Departement APV</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agroforesterie</span>
                           <p><h1> <?php echo $solution_agroforesterie ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence P-P</span>
                            <p><h1> <?php echo $solution_pp ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="">
                           <div class="contenu_licence">
                           <span>Licence A-B-E</span>
                           <p><h1> <?php echo $solution_abe ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence P-H-T-P</span>
                            <p><h1> <?php echo $solution_phtp ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT   STE   ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement STE</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Z-S-A</span>
                           <p><h1> <?php echo $solution_zsa ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence Q-D-A-O-A</span>
                            <p><h1> <?php echo $solution_qdaoa ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT   GRHPA    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement GRHPA</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Aquaculture</span>
                           <p><h1>  <?php echo $solution_aquaculture ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence Peche</span>
                            <p><h1>  <?php echo $solution_peche ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT  NA   ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre">Departement NA</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence N-S-A</span>
                           <p><h1> <?php echo $solution_nsa ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence N-H-D</span>
                            <p><h1> <?php echo $solution_nhd ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT  THRG   ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre">Departement THRG</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence N-R-G</span>
                           <p><h1> <?php echo $solution_nrg ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence P-T-M-C</span>
                            <p><h1> <?php echo $solution_ptmc ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->





                <!--     ***************    DEPARTEMENT   SEGC    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement SEGC</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence M-E-A-A</span>
                           <p><h1> <?php echo $solution_meaa ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence E-G-F-R</span>
                            <p><h1> <?php echo $solution_egfr ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="">
                            <div class="contenu_licence">
                            <span>Licence C-P-A-F</span>
                            <p><h1> <?php echo $solution_cpaf ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>


                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->





                <!--     ***************    DEPARTEMENT   EBDD   ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement EBDD</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence D-L</span>
                           <p><h1> <?php echo $solution_dl ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence E-D-D</span>
                            <p><h1> <?php echo $solution_edd ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="">
                           <div class="contenu_licence">
                           <span>Licence T-C</span>
                           <p><h1> <?php echo $solution_tc ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence A-G-A-P</span>
                            <p><h1> <?php echo $solution_agap ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>


                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->





                <!--     ***************    DEPARTEMENT   SS   ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement SS</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence M-O-P</span>
                           <p><h1> <?php echo $solution_mop ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence A-S-P-H</span>
                            <p><h1> <?php echo $solution_asph ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="">
                            <div class="contenu_licence">
                            <span>Licence C-D</span>
                            <p><h1> <?php echo $solution_cd ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->


        

            </div>
            <!-- fin du code pour l'ecran (affichage) du conteneur -->

        </div>
     <!-- Fin du code pour le conteneur -->
    </section>

</body>
</html>
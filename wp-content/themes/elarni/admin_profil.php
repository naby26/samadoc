<?php
/*template name:profil administrateur*/
session_start();
$con = mysqli_connect("localhost","root","","samadoc");

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

    }
    div.box_conteneur{
        display:flex;
        flex-direction: column;
        margin:0 10%; 
    }
    div.entete_conteneur{
        background-color:  rgb(230, 230, 230);
        width:100%;
        padding: 2em ;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        box-shadow: 5px 5px 10px gray;
        z-index: 100;
        position:fixed;
        border-bottom: 2px solid blue;
    }
    div.entete_gauche{
          display : inline-flex;
          gap:0 2em;
    }
    div.entete_conteneur span#Dashbord{
        text-align:center ;
        color:rgb(10, 107, 49);
        font-size: xx-large;
        text-shadow: 0 0 5px rgb(141,54,20);
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
      border: 2px solid rgb(10, 107, 49); 
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
      background-color: rgb(10, 107, 49);
      color:white;
      font-size: x-large;
  }
  

  div.case_etudiant{ width:100%;
      display: flex;
      flex-direction: column;
      border: 2px solid rgb(10, 107, 49);
  }
  span#modifier_etudiant{
    text-align: center;
      width:100%;
      padding: 5px;
      background-color: rgb(10, 107, 49);
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
    text-indent:1em;
}
div.contenu_etudiant input[type="submit"]{
    background-color: rgb(10, 107, 49);
    color:white;
    font-size: large;
}

  div.case_modif{
      width:100%;
      display: flex;
      flex-direction: column;
      border: 5px solid rgb(10, 107, 49);
  }
  div.contenu_profil {
      display: flex;
      justify-content: center;
      gap:0 2em;
    

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
      background-color: rgb(10, 107, 49);
      color:white;
      font-size: x-large;
  }
  form{
      width:100%;
  }
 
 div.modif_avatar{
      background-color: white;
      display: flex;
      align-items: center;
      flex-direction: column;
      gap:2em 0;
      width:100%;
      padding: 2em;
  }
  div.separateur{
      width:5em;
      height:auto;
      background-color:rgb(10, 107, 49);
  }
  div.modif_avatar img#avatar{
        width: 200px; height: 200px;
        border-radius: 50%;
    }
  div.modif_avatar input[type="submit"]{
    background-color: rgb(10, 107, 49);
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
      text-indent: 1em;
  }
  div.info_name input[type="submit"]{
      margin-top :2em;
      background-color: rgb(10, 107, 49);
      color:white;
      font-size:large;
  }
  div.case{
      width:100%;
      display: flex;
      flex-direction: column;
      border: 2px solid rgb(10, 107, 49);
  }
  div.case span.titre{
      text-align: center;
      width:100%;
      padding: 5px;
      background-color:rgb(10, 107, 49);
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
      background-color:rgb(10, 107, 49);
      margin-top:1em;
      border-radius: 10px;
  }
 
</style>

<body>

    <div class="entete_conteneur">
        <div class="entete_gauche">
            <a href="http://localhost/samadoc/accueil/" id="bouton_retour"><img src="https://img.icons8.com/ios/50/000000/import.png" title="retour" /></a>
            <span id="Dashbord"><h2>Dashbord Admin</h2></span>
        </div>
        <div class="entete_centre">
        </div>
        <div class="avatar_admin">
            <div class="image_profile"></div>
            <p id="nomutilisateur"> <?php echo $tab_user['firstname']." ".$tab_user['lastname']; ?> </p>
        </div>
    </div>
            <!-- fin du code pour l'entete du conteneur -->
            <div class="main">
        <!-- debut du code pour le conteneur -->
    <div class="box_conteneur">



             <!-- debut du code pour l'ecran (affichage) du conteneur -->
            <div class="ecran_conteneur">
 
                  
                 <!--     ***************    MODIFICATION DU PROFIL ADMIN    ******************      -->
                <!-- debut du code pour la case -->
                <div class="case_modif">
                    <span id="modifier_profil"> MODIFICATION DE VOTRE PROFIL</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu_profil"> 
                    

                        <!-- debut du code pour le box-licence du contenu de la case -->
                        <form method="POST" class="1" action="http://localhost/samadoc/disi_code/verif_admin_profil.php" enctype="multipart/form-data" >
                            <div class="modif_avatar">
                                <input type="file" name="image">
                                <img src="http://localhost/samadoc/disi_code/sd_avatar_user/<?php echo $tab_user['photo']; ?>" alt="photo profil" id="avatar">
                                <input type="submit" value="Valider" >
                            </div>
                        </form> 
                         <div class="separateur"></div>
                        <form method="POST" class="2" action="http://localhost/samadoc/disi_code/verif_admin_info.php">   
                            <div class="info_name">
                                <input type="text" name="username_admin"  value="<?php echo $tab_user['username']; ?>" />
                                <input type="text" name="firstname_admin"  value="<?php echo $tab_user['firstname']; ?>" />
                                <input type="text" name="lastname_admin" placeholder="Nom" value="<?php echo $tab_user['lastname']; ?>" />
                                
                                <input type="submit" value="Enregistrer" id="enregistrer" >   
                            </div>
                        </form>
                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->

                <details>
                <summary> Parametre Etudiant </summary>
                 <!-- debut du code pour la case -->
                 <div class="case_etudiant">
                     <span id="modifier_etudiant"> BLOQUER COMPTE ETUDIANT</span>
 
                     <!-- debut du code pour le contenu de la case -->
                     <div class="contenu_etudiant">
 
                         <!-- debut du code pour le box-bloquer etudiant du contenu de la case -->
                     
                             <form method="POST" action="http://localhost/samadoc/disi_code/bloquer_compte_etudiant.php">
                                 <input type="text" name="username_etudiant" placeholder="Nom utilisateur">
                                 <label for="statut">Statut : </label>
                                 <select name="status" id="statut">
                                     <option value="0">Actif</option>
                                     <option value="2">Inactif</option>
                                 </select> 
                                 <input type="submit" value="Executer" id="enregistrer" name="bouton_Executer">   
                            </form>
                      </div> 
                      </div>     
                      </details>    



                         
     <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement Math-Informatique</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "agrotic" ?>">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1> <?php echo $solution_agrotic ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "mpi" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "ahsiha" ?>">
                           <div class="contenu_licence">
                           <span>Licence A-H-S-I-H-A</span>
                           <p><h1> <?php echo $solution_ahsha ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "agroequipement" ?>">
                            <div class="contenu_licence">
                            <span>Licence Agro-Equipement</span>
                            <p><h1> <?php echo $solution_agroequipement ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "erf" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "trana" ?>">
                           <div class="contenu_licence">
                           <span>Licence T-R-A-N-A</span>
                           <p><h1> <?php echo $solution_trana ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "tar" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "agroforesterie" ?>">
                           <div class="contenu_licence">
                           <span>Licence Agroforesterie</span>
                           <p><h1> <?php echo $solution_agroforesterie ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "pp" ?>">
                            <div class="contenu_licence">
                            <span>Licence P-P</span>
                            <p><h1> <?php echo $solution_pp ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "abe" ?>">
                           <div class="contenu_licence">
                           <span>Licence A-B-E</span>
                           <p><h1> <?php echo $solution_abe ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "phtp" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "zsa" ?>">
                           <div class="contenu_licence">
                           <span>Licence Z-S-A</span>
                           <p><h1> <?php echo $solution_zsa ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "qdaoa" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "aquaculture" ?>">
                           <div class="contenu_licence">
                           <span>Licence Aquaculture</span>
                           <p><h1>  <?php echo $solution_aquaculture ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "peche" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "nsa" ?>">
                           <div class="contenu_licence">
                           <span>Licence N-S-A</span>
                           <p><h1> <?php echo $solution_nsa ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "nhd" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "nrg" ?>">
                           <div class="contenu_licence">
                           <span>Licence N-R-G</span>
                           <p><h1> <?php echo $solution_nrg ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "ptmc" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "meaa" ?>">
                           <div class="contenu_licence">
                           <span>Licence M-E-A-A</span>
                           <p><h1> <?php echo $solution_meaa ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "egfr" ?>">
                            <div class="contenu_licence">
                            <span>Licence E-G-F-R</span>
                            <p><h1> <?php echo $solution_egfr ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "cpaf" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "dl" ?>">
                           <div class="contenu_licence">
                           <span>Licence D-L</span>
                           <p><h1> <?php echo $solution_dl ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "edd" ?>">
                            <div class="contenu_licence">
                            <span>Licence E-D-D</span>
                            <p><h1> <?php echo $solution_edd ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "tc" ?>">
                           <div class="contenu_licence">
                           <span>Licence T-C</span>
                           <p><h1> <?php echo $solution_tc ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "agap" ?>">
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

                       <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "mop" ?>">
                           <div class="contenu_licence">
                           <span>Licence M-O-P</span>
                           <p><h1> <?php echo $solution_mop ; ?> </h1></p>
                           <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "asph" ?>">
                            <div class="contenu_licence">
                            <span>Licence A-S-P-H</span>
                            <p><h1> <?php echo $solution_asph ; ?> </h1></p>
                            <img src="https://img.icons8.com/material-two-tone/24/000000/file.png"/>
                            </div>
                         </a>

                         <a href="http://localhost/samadoc/page-de-suppression/?nom_licence=<?php echo "cd" ?>">
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
    </div>
    </div>

</body>

<footer>
    <?php get_footer(); ?>
    </footer>
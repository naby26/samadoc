<?php
/*template name:profil administrateur*/
session_start();
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
      background-image: url("http://localhost/samadoc/disi_code/sd_avatar_user/profil_samadoc.png");
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
 div.contenu_etudiant{
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
    background-color: gray;
    color:white;
    font-size: large;
}

  div.case_modif{
      width:100%;
      display: flex;
      flex-direction: column;
      border: 2px solid rgb(70, 70, 70);
  }
  div.contenu_profil{
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
  }
  a{
      text-decoration: none;
      color: rgb(0, 110, 255);
      font-size: x-large;
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


                 <!--     ***************    MODIFICATION DU PROFIL ADMIN    ******************      -->
               <details>
               <summary> Parametre profile</summary>
                <!-- debut du code pour la case -->
                <div class="case_modif">
                    <span id="modifier_profil"> MODIFICATION DE VOTRE PROFIL</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu_profil">

                        <!-- debut du code pour le box-licence du contenu de la case -->
                    
                            <div class="modif_avatar">
                                <input type="file" name="image">
                                <img src="http://localhost/samadoc/disi_code/sd_avatar_user/profil_samadoc.png" alt="photo profil" id="avatar">
                                <input type="submit" value="Valider">
                            </div>
                            <div class="info_name">
                                <input type="text" name="username" placeholder="Nom utilisateur" value="<?php $_SESSION['username'] ?>">
                                <input type="text" name="username" placeholder="Prenom" value="<?php $_SESSION['firstname'] ?>">
                                <input type="text" name="username" placeholder="Nom" value="<?php $_SESSION['lastname'] ?>">
                                
                                <input type="submit" value="Enregistrer" id="enregistrer">   
                            </div>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->
            </details> 



             <!--     ***************    Suppression de document    ******************      -->
             <details>
                <summary> Parametre de suppression </summary>
                 <!-- debut du code pour la case -->
                 <div class="case_modif">
                     <span id="modifier_profil"> Supprimer document</span>
 
                     <!-- debut du code pour le contenu de la case -->
                     <div class="contenu_profil">
 
                         <!-- debut du code pour le box-licence du contenu de la case -->
                     
                             <div class="modif_avatar">
                            <fieldset>
                                <legend><strong>ETAPE-1 : </strong>CHOISIR DEPARTEMENT</legend>
                                <select name="" id="">
                                    <option>MI</option>
                                    <option>STA</option>
                                    <option>HGRMER</option>
                                    <option>STE</option>
                                    <option>APV</option>
                                    <option>NA</option>
                                    <option>GRHPA</option>
                                    <option>SEGC</option>
                                    <option>THRG</option>
                                    <option></option>
                                    <option>SJP</option>
                                </select>
                            </fieldset>

                             
                            <fieldset>
                                <legend><strong>ETAPE-2 : </strong>CHOISIR LA LICENCE</legend>
                             <select name="" id="">
                                <option>aucun</option>
                                <option>nom licence</option>
                            </select>
                        </fieldset>
                              
                            <fieldset>
                                <legend><strong>ETAPE-3 : </strong>CHOISIR LE DOCUMENT</legend>
                            <select name="" id="">
                                <optgroup label="licence-1">
                                <option>document en l1</option>
                            </optgroup>
                                <optgroup label="licence-2">
                                <option>document en l2</option>
                            </optgroup>
                                <optgroup label="licence-1">
                                    <option>document en l3</option>  
                                </optgroup>
                            </select>
                            <br><br>
                            <input type="submit" value="Supprimer">
                        </fieldset>
                            
                        </div>
                             <div class="info_doc">
                                 <h2>ZONE D'AFFICHAGE DU DOCUMENT</h2>
                             </div>
 
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
                     
                             
                                 <input type="text" name="username_etudiant" placeholder="Nom utilisateur">
                                 <input type="text" name="password_de_blocage" placeholder="Prenom">
                                 <label for="statut">Statut : </label>
                                 <select name="status" id="statut">
                                     <option value="0">etudiant</option>
                                     <option value="1">administrateur</option>
                                     <option value="2">bloquer</option>
                                 </select>
                                 
                                 <input type="submit" value="Executer" id="enregistrer">   
                            
 
                          <!-- fin du code pour le box-bloquer etudiant du contenu de la case -->
 
 
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
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="http://localhost/samadoc/mpi/">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->


                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement HGRMER</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->
         


                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement STA</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->



                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre">Departement APV</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement STE</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement GRHPA</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre">Departement NA</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->




                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre">Departement THRG</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->





                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement SEGC</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->





                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> Departement SJP</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
                            </div>
                         </a>

                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                </div>
                <!-- fin du code pour la case -->





                <!--     ***************    DEPARTEMENT   MI    ******************      -->

               
                <!-- debut du code pour la case -->
                <div class="case">
                    <span class="titre"> FULL METAL</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu">

                        <!-- debut du code pour le box-licence du contenu de la case -->

                       <a href="">
                           <div class="contenu_licence">
                           <span>Licence Agrotic</span>
                           <p><h1>100</h1></p>
                           <img src="" alt="">
                           </div>
                        </a>

                        <a href="">
                            <div class="contenu_licence">
                            <span>Licence MPI</span>
                            <p><h1>200</h1></p>
                            <img src="" alt="">
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
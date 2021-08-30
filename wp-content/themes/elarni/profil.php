<?php
/*
Template name: Profil_Admin
*/
get_header();

//Connexion à la base de données 
$bdd = mysqli_connect("localhost", "root","", "samadoc");
$username = $_SESSION['username'];
$reponse = mysqli_query($bdd,"SELECT * FROM sd_etudiant WHERE username='$username'");
$table = mysqli_fetch_array($reponse); 
mysqli_close($bdd);
?>

<style>
    .body_admin{
        display: grid;
        grid-template-rows: auto auto;
    }
    .body_contenu{
        padding: 10px;
        display: grid;
        grid-template-columns: 300px auto;
    }
    .body_contenu .info_admin .avatar_admin{
        padding: 5;
        margin: 5;
        justify-content: center;
    }
    .body_contenu .info_admin .avatar_admin div input[type=submit]{
        width: 100px;
        font-size: small;
        justify-content: center;
    }
    .body_contenu .info_admin .avatar_admin .avatar_submit{
        display: inline-flex;
    }
    /*.contenu_admin{
        display: grid;
        grid-template-columns: auto auto;
    }*/
    .avatar_img{
        justify-content: center;
    }
    .para_avatar{
        text-align: center;padding-top: 10px;border: 1px solid;background:beige;
    }
    .avatar_img .para_avatar img{
        border-radius: 50%;
        background-color: darkgrey;
    }
    .fieldset_contenu legend h1{
        color: black;
    }
    .fieldset_contenu{
        padding-left: 5%;
    }
    .avatar_admin_div{
        background-color:rgba(0, 0, 0, 0.3);
        padding: 5%;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 3;
    }

    @media(max-width:810px){
        .body_contenu{
        padding: 10px;
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: auto auto;
    }
    }

</style>



<div class="body_admin" style="border:1px solid">
    <div class="nav_admin" style="border:1px solid">
        <nav class="nav_menu" style="border:1px solid">
            <!-- Navigateur -->            
                        
                        <!-- **Header** -->
                        <header id="header">

                            <div class="container"><?php
                                /**
                                 * elearni_header hook.
                                 * 
                                 * @hooked elearni_vc_header_template - 10
                                 *
                                 */
                                do_action( 'elearni_header' ); ?>
        </div>
    </header><!-- **Header - End ** -->

        </nav>
    </div>
    <div class="body_contenu" style="border:1px solid">
        <div class="info_admin" style="border:1px solid">
                <!-- Information Login -->
                <div class="avatar_admin_div" >
                    <div class="avatar_img">
                        <p class="para_avatar">
                        <img src="http://localhost/samadoc/wp-content/uploads/2021/08/profil.png" alt="photo de profil" width="100px" height="100px"><br>
                        <label ><?php echo $table['firstname'];?></label><br>
                        <label ><?php echo $table['lastname'];?></label><br>
                        </p>
                    </div>
                    <div class="avatar_submit">
                        <input type="file" name="avatar_admin" id="avatar_admin" style="display: none;">
                        <label for="avatar_admin">Charger Votre Image</label>
                        <input type="submit" value="Valider">
                    </div>
                    <div class="details">
                        <details>
                            <summary>Plus d'info</summary>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis consequatur ipsum dolor officia tempora harum, numquam fuga corrupti inventore iusto odio, dicta impedit eaque?
                        </details>
                    </div>
                </div>
        </div>
        <div class="contenu_admin" style="border:1px solid">
                <!-- Contenu de Admin -->
                <form method="post">
                    <fieldset style="border: 1px solid;" class="fieldset_contenu">
                        <legend><h1>Filtre Supression</h1></legend>
                        <p>
                        <input type="radio" name="ufr_radio" value="SFI" id="SFI">
                        <label for="SFI">UFR SFI</label>
                        <input type="radio" name="ufr_radio" value="SAEPAN" id="SAEPAN">
                        <label for="SAEPAN">UFR SAEPAN</label>
                        <input type="radio" name="ufr_radio" value="SJET" id="SJET">
                        <label for="SJET">UFR SJET</label>
                        <input type="radio" name="ufr_radio" value="SES" id="SES">
                        <label for="SES">UFR SES</label><br>
                        <input type="submit" value="Filtrer">
                        </p>
                    </fieldset>
                </form>
                    <?php
                        if(!$_POST['ufr_radio']){
                            echo "";
                        }
                            elseif($_POST['ufr_radio'] == "SFI"){?>
                                    <form method="post">
                                        <fieldset style="border: 1px solid;" class="fieldset_contenu">
                                            <legend><h1>Filtre Supression</h1></legend>
                                            <p>
                                            <input type="radio" name="dept_radio" value="HGRMER" id="HGRMER">
                                            <label for="HGRMER">Dept HGRMER</label>
                                            <input type="radio" name="dept_radio" value="STA" id="STA">
                                            <label for="STA">Dept STA</label>
                                            <input type="radio" name="dept_radio" value="MI" id="MI">
                                            <label for="MI">Dept MI</label><br>
                                            <input type="submit" value="Filtrer">
                                            </p>
                                        </fieldset>
                                    </form>

                           <?php }
                           elseif($_POST['ufr_radio'] == "SES"){?>
                            <form method="post">
                                <fieldset style="border: 1px solid;" class="fieldset_contenu">
                                    <legend><h1>Filtre Supression</h1></legend>
                                    <p>
                                    <input type="radio" name="dept_radio" value="EBDD" id="EBDD">
                                    <label for="EBDD">Dept EBDD</label>
                                    <input type="radio" name="dept_radio" value="SS" id="SS">
                                    <label for="SS">Dept SS</label><br>
                                    <input type="submit" value="Filtrer">
                                    </p>
                                </fieldset>
                            </form>

                            <?php }
                            elseif($_POST['ufr_radio'] == "SAEPAN"){?>
                                <form method="post">
                                    <fieldset style="border: 1px solid;" class="fieldset_contenu">
                                        <legend><h1>Filtre Supression</h1></legend>
                                        <p>
                                        <input type="radio" name="dept_radio" value="STE" id="STE">
                                        <label for="STE">Dept STE</label>
                                        <input type="radio" name="dept_radio" value="AN" id="AN">
                                        <label for="AN">Dept AN</label>
                                        <input type="radio" name="dept_radio" value="GRHPA" id="GRHPA">
                                        <label for="GRHPA">Dept GRHPA</label>
                                        <input type="radio" name="dept_radio" value="APV" id="APV">
                                        <label for="APV">Dept APV</label><br>
                                        <input type="submit" value="Filtrer">
                                        </p>
                                    </fieldset>
                                </form>

                                <?php }
                                elseif($_POST['ufr_radio'] === "SJET"){?>
                                    <form method="post">
                                        <fieldset style="border: 1px solid;" class="fieldset_contenu">
                                            <legend><h1>Filtre Supression</h1></legend>
                                            <p>
                                            <input type="radio" name="dept_radio" value="THGR" id="THGR">
                                            <label for="THGR">Dept THGR</label>
                                            <input type="radio" name="dept_radio" value="SJP" id="SJP">
                                            <label for="SJP">Dept SJP</label>
                                            <input type="radio" name="dept_radio" value="SEGC" id="SEGC">
                                            <label for="SEGC">Dept SEGC</label><br> 
                                            <input type="submit" value="Filtrer">
                                            </p>
                                        </fieldset>
                                    </form>

                                    <?php }
                                 
                    $con = mysqli_connect("localhost","root","","samadoc");
                    $requete = mysqli_query($con,"SELECT * FROM sd_document");

                    $tab_pdf = array('.pdf','.PDF');
                    $tab_word = array('.docx','.DOCX');
                    $tab_excel = array('.csv','.xlsx','.xlsm');
                    $tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');
                    $icone="";

                    while($table = mysqli_fetch_array($requete)){

                        $format = strrchr($table['document_name'],'.');
                        if(in_array($format,$tab_pdf)){
                            $icone = "http://localhost/samadoc/wp-content/uploads/2021/08/pdf.png";
                        }
                        if(in_array($format,$tab_word)){
                            $icone = "http://localhost/samadoc/wp-content/uploads/2021/08/doc.png";
                        }
                        if(in_array($format,$tab_excel)){
                            $icone = "http://localhost/samadoc/wp-content/uploads/2021/08/xls.png";
                        }
                        if(in_array($format,$tab_ppt)){
                            $icone = "http://localhost/samadoc/wp-content/uploads/2021/08/ppt.png";
                        }
                    ?>
                    <style>
                        .div_doc{
                    display:inline-flex;
                    justify-content:space-evenly;
                    flex-wrap:nowrap;
                    border:outset 2px;
                    margin-bottom: 15px;
                }
                        .div_input{
                            border: 1px solid;
                            margin-left: 25px;
                            margin-right: 10px;
                            display: block;
                            justify-content: center;
                        }
                        #img_doc{
                            transition: 0.5s;
                        }
                        #img_doc:hover{
                            transform: scale(1.3);
                            transition: 0.5s;
                        }
                        
                    </style>


                    

                    <div class="div_doc">
                            <div class="div_img">
                                <p>
                                    <?php echo $_SESSION['Username']; ?>
                                </p>
                            <a href="http://localhost/samadoc/disi_code/files/<?php echo $table['document_name']; ?>" >
                                <img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto" id="img_doc">
                            </a>
                            </div>
                            <div class="div_label">
                                <label >Licence: </label> <?php echo $table['licence'];?><br>
                                <label >Nature: </label> <?php echo $table['nature'];?><br>
                                <label >Module: </label> <?php echo $table['module'];?><br>
                                <label >Niveau: </label> <?php echo $table['niveau'];?><br>
                                <label >Année: </label> <?php echo $table['annee'];?><br>
                            </div>
                             <div class="div_input">
                                <a download="<?php echo $table['document_name']; ?>" href="http://localhost/samadoc/disi_code/files/<?php echo $table['document_name']; ?>"><input type="submit" value="Télécharger"></a>
                            </div>


                    </div>

                    <?php
                    
                    }
                    mysqli_close($con);?>

    <!-- fin Conteneur Ajout --> 
        </div>
    </div>
</div>


<?php get_footer(); ?>
<?php

//session_start();
/* template name: profile_utilisateur*/

get_header();

$con = mysqli_connect("localhost","root","","samadoc");
  
$ine = $_SESSION['username'];
$requete1= mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username = '$ine'");
$tab1 = mysqli_fetch_array($requete1);
?>

 <!---   *** CODE CSS ***   --> 


<section class="body_principale">

<section class="navigateur">
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
</section>


<style>
.body_principale{
    display:flex;
    flex-direction: column;
}

    section.user_profile{
        display:grid;
        grid-template-columns: 1fr 3fr ;
        grid-template-areas:"box_profile box_document";
    }
    div.bloc_profile{
        background-color:rgba(0,0,0,0.6);
        grid-area:box_profile;
        display:flex;
        flex-direction:column;
        align-items: center;
        justify-content:space-between;
        padding:20px;
    }
    div.bloc_document{
        grid-area:box_document;
        background-color:rgba(0,0,0,0.2);
        
    }
    
    .bloc_avatar{
        display:flex;
        flex-direction:column;
        margin-bottom:30px;
    }
    .bloc_avatar img{
    width:200px ; height:auto  ;  
    border-radius: 50%;
    box-shadow: 5px 5px 5px black;
    }
    .bloc_avatar p{
        font-size:xx-large;
        color:white;
    }


.changer_avatar {
   display:inline-flex;
   justify-content:space-between;
   align-items:center;
   margin-bottom:30px
}
.changer_avatar .image_profile{
   display:none;
}
.changer_avatar label{
    width:auto; height:30px;
    background-color:rgb(0, 0, 0, 0.3);
    text-align:center;
    color:white;
    padding:1em;
}

.changer_avatar #bouton_valider {
    width:auto; height:30px;
    background-color:rgb(11, 223, 194);
    border-radius:10px;
}
footer details{
    color:white;
    font-size:large;
}

.changer_password a{
    width:auto; height:50px;
    background-color:rgb(0, 0, 0, 0.3);;
    text-align:center;
    padding:1em;
    text-decoration:none;
    margin-bottom:30px;
}

.supp_doc{
    width:100%;
    padding:1em;
    display:inline-flex;
    align-items:center;
    border: 1px solid ;
    background-color: rgba(0,0,0,0.3);
    margin:2em 0;
}
.supp_doc label{
    color:white;
    font-weight:bold;
}
       
.supp_doc select#choix_doc{
           width:100%; height:auto;
            text-align:center;
       }
       .supp_doc input#supp_doc{
        width:6em; height:2em;   
        background-color: rgba(0,0,0,0.4);
        color:white;
       }


</style>


 <!---   *** CODE POUR L'AFFICHAGE DU BOX PROFILE (AVATAR ET SUPPRESSION)  ***   --> 

<section class="user_profile" >
<div class="bloc_profile">

    <div class="changer_avatar">
        <form  method="POST" enctype="multipart/form-data">
        <input type="file" class="image_profile" name="image" id="image">
        <label for="image">Changer votre profil</label>
        <input type="submit" value="Valider" id="bouton_valider" name="bouton_valider">
        </form>
    </div>       
    
    <div class="bloc_avatar">
        <img src="http://localhost/samadoc/disi_code/sd_avatar_user/<?php echo $tab1['photo']; ?>" alt="" >
       <p> <?php echo $_SESSION['firstname']." ".$_SESSION['lastname']; ?> </p>
    </div>
    
    <div class="changer_password">
    <a href="http://localhost/samadoc/changer-mot-de-passe/">Changer mot de passe</a>
    </div>



    <?php
 if(isset($_POST['bouton_valider'])){


//var_dump($_FILES);

//$con = mysqli_connect("localhost","root","","samadoc");
if(!empty($_FILES)){

    $image_name = $_FILES['image']['name'];
    $format_possible = array('.png','.jpg','.ico','.jpeg');
    $format = strrchr($image_name,".");
//$image_size = $_FILES['fichier']['size'];
    $image_path = $_FILES['image']['tmp_name'];
    
    $gate = 'disi_code/sd_avatar_user/'.$image_name;

    if(move_uploaded_file($image_path,$gate)){
        $photo = $_SESSION['username'].$format;
        $requete_img = mysqli_query($con,"UPDATE sd_etudiant SET photo ='$photo'");

        
        $repertoire = 'disi_code/sd_avatar_user';
        $acces_repertoire = opendir($repertoire);
             while($images = readdir($acces_repertoire)){
                  if($images == $_SESSION['username'].'png') {
                      unlink('disi_code/sd_avatar_user/'.$images);
                  }
                  elseif($images ==$_SESSION['username'].'jpg'){
                      unlink('disi_code/sd_avatar_user/'.$images);
                  }
                  elseif($images ==$_SESSION['username'].'ico'){
                      unlink('disi_code/sd_avatar_user/'.$images);
                  }
             }
             closedir( $acces_repertoire);
    
             
        $renommage = rename('disi_code/sd_avatar_user/'.$image_name,'disi_code/sd_avatar_user/'.$photo);
  //      echo "profile envoyer";
       
     }

}
 }
?>



   
 <!---   *** CODE PHP ET HTML (SELECTEUR DE DOCUMENT POUR LA SUPPRESSION)  ***   --> 
    <div class="supp_doc">
    <label> Supprimer document <label><br><br>
    <?php
	$con = mysqli_connect("localhost","root","","samadoc");
  
     $ine = $_SESSION['username'];
    $requete = mysqli_query($con,"SELECT * FROM sd_document WHERE auteur='$ine'");
    $requete1= mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username = '$ine'");
    $tab1 = mysqli_fetch_array($requete1);
    ?>
    
    <form method="POST">
    <select name="choix_doc" id="choix_doc">
    <option> Aucun </option>
    <?php 
    while( $tab = mysqli_fetch_array($requete)){
        ?>
        <option > <?php echo $tab['nom']; ?> </option>
        <?php
    }
    ?>
    </select><br><br>

    
    <input type="submit" value="supprimer" name="supprimer" id="supp_doc"> 
    </form>

 <!---   *** CODE PHP POUR L'ACTION DU BOUTON DE SUPPRESSION (redirection du fichier supprimer dans le fichier corbeille) ***   -->  

    <?php
    $nom_auteur= $tab1['firstname']." ".$tab1['lastname'];
    if(isset($_POST['supprimer'])){
        $choix_doc = $_POST['choix_doc'];
        $requete = mysqli_query($con,"DELETE FROM sd_document WHERE nom='$choix_doc'"); 
        $requete = mysqli_query($con,"INSERT INTO sd_corbeille VALUES('$choix_doc','$nom_auteur','$ine')"); 

        $repertoire = opendir("disi_code/sd_repertoire") ;
        copy('disi_code/sd_repertoire/'.$choix_doc,'disi_code/sd_corbeille/'.$choix_doc);
        unlink('disi_code/sd_repertoire/'.$choix_doc);
        closedir($repertoire);
      //  mysqli_close($con);
      // header('location: http://localhost/samadoc/wp-content/themes/elarni/profile_user.php');
    }

    ?>    
    </div>
     
     <footer>
    <details>
        <summary>autres informations</summary>
        <p>
       <label>Licence : </label> <?php echo $_SESSION['licence']."<br>"; ?>
       <label>Niveau : </label> <?php echo $_SESSION['niveau']."<br>";  ?>
       <label>Mail : </label> <?php echo $_SESSION['mail']."<br>";  ?>
        </p>
    </details> 
    </footer>

</div>


 <!---   *** CODE html (BOX OU LES DOCUMENTS INSERER PAR L'ETUDIANT SONT LISTES PHYSIQUEMENT EN FONCTION DE LEURS FORMATS) ***   --> 

<div class="bloc_document">

<?php
$con = mysqli_connect("localhost","root","","samadoc");
$nom = $_SESSION['username'];

$requete = mysqli_query($con,"SELECT * FROM sd_document WHERE auteur = '$nom'");
$requete2 = mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username = '$nom'");

$tab2 = mysqli_fetch_array($requete2);

$tab_pdf = array('.pdf','.PDF');
$tab_word = array('.docx','.DOCX');
$tab_excel = array('.csv','.xlsx','.xlsm');
$tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');
$icone="";

while($table = mysqli_fetch_array($requete)){

    $format = strrchr($table['nom'],'.');
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
margin-bottom: 10px;
padding:8px 10px 0 0;
}
    .div_img img{width:200px; height:auto;}
    .div_img img:hover{ transform:scale(1.1);}

    span.info_pofile_user{
        font-size:x-large;
    }
</style>

<div class="div_doc">
        <div class="div_img">
        <a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" >
            <img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc">
        </a>
        </div>
        <div class="div_label">
            <label >Licence: <span class="info_pofile_user"> </label> <?php echo $table['licence'];?> </span> <br>
            <label >Nature: <span class="info_pofile_user"> </label> <?php echo $table['nature'];?> </span> <br>
            <label >Module: <span class="info_pofile_user"> </label> <?php echo $table['module'];?> </span> <br>
            <label >Document: <span class="info_pofile_user"> </label> <?php echo $table['nom'];?> </span> <br>
            <label >Auteur:  <span class="info_pofile_user"></label> <?php echo $tab2['firstname']." ".$tab2['lastname']; ?> </span> <br>
        </div>
       
</div>
<?php
}
mysqli_close($con);
//header('location: http://localhost/samadoc/disi_code/suppression_doc_pour_user.php');

?>

</div>
</section>
</section>
<?php
get_footer();?>
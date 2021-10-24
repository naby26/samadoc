<?php
/* template name:doc_supp_par_admin */

$licence = $_GET['nom_licence'];
session_start();
$con = mysqli_connect("localhost","root","","samadoc");

$information = mysqli_query($con,"SELECT * FROM sd_structure  WHERE licence_sigle='$licence'");
$tab_structure=mysqli_fetch_array($information);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
		div.fichier{
            width:40%;
	        display:flex;
            gap:1em;
	        border:outset 4px;
	        margin-bottom: 10px;
            padding:1em;
            background-color:rgb(248, 248, 248);
                   }

        div.info_du_fichier{
            display:flex;
            flex-direction:column;
            width:100%;
        }
	    span.titre{
            font-size:large;
            font-weight:normal;
        }
        label.info{
             font-weight:bold;
        }
        a.bouton_supprimer{
            text-decoration:none;
            font-size:large;
            background-color:rgb(10,107,49);
            width:100%;
            padding:0.5em 1em;
            color:white;
            border:2px outset rgb(10,107,49);
        }
        div.image_du_fichier{
            width:100%;
        }

	</style>

<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    body{
        padding: 4em 10%;
        display:flex;
        flex-direction : column;
        gap:4em;
        }
    div.blog_info{
        display:flex;
        gap:0 1em;
        padding:1em 2em;
        background-color:white;
        box-shadow: 0 0 10px gray;
        border-left:2px solid rgb(10,107,49);
        border-right:2px solid rgb(10,107,49);
        border-top:2em solid rgb(10,107,49);
        border-bottom:2em solid rgb(10,107,49) ;
        border-radius: 1em;
    }
    div.etudiant_image_profil{
        display:flex;
        flex-direction:column;
        gap:1em 0;
        align-items:center;
        width:35%;
        background-color:white;
        box-shadow: 0 0 10px gray;
        padding: 0.5em 2.5em;
    }
    input[type=file]{
        width:100%;
    }
    img{
        width:80%;
        height:150px;
    }
    input[type=submit]{
        padding:0.4em 2em;
        background-color: rgb(10,107,49);
        font-size: large;
        color:white;
        width:100%;
    }
    div.info_etudiant{
         display:flex;
         gap:0 1em;
         background-color:white;
         box-shadow: 0 0 10px gray;
         justify-content: center;
         padding:1em;
         width:65%;
    }
    div.info{
        display:flex;
        flex-direction:column;
        gap:1em 0;
        width:100%;
    }
    label.blog_insigne{
        padding:0.5em;
        text-align: center;
        font-size:large;
        border:1px solid;
        color:rgb(10,107,49);
        border:1px solid rgb(10,107,49);
        border-radius:5px;
    }
    span.insigne{
        color:rgb(10,107,49);
        font-size: large;
        font-weight: bold;
    }


    @media(max-width: 800px){

        div.blog_info_etudiant{
        display:flex;
        gap:1em;
        padding:1em 2em;
        margin:1em 2em;
        background-color:white;
        box-shadow: 0 0 10px gray;
        border-left:1.5px solid rgb(10,107,49);
        border-right:1.5px solid rgb(10,107,49);
        border-top:2em solid rgb(10,107,49);
        border-bottom:2em solid rgb(10,107,49) ;
        border-radius: 1em;}
    
        div.etudiant_image_profil{
        display:flex;
        flex-direction:column;
        gap:0.5em 0;
        align-items:center;
        width:35%;
        background-color:white;
        box-shadow: 0 0 10px gray;
        padding: 0.5em 1em;
    }
    div.info_etudiant{
         display:flex;
         flex-direction:column;
         align-items:center;
         gap:1em 0;
         background-color:white;
         box-shadow: 0 0 10px gray;
         /* justify-content: center; */
         padding:1em;
         width:100%;
    }
    div.fichier{
            width:100%;
	        display:flex;
            gap:1em;
	        border:outset 4px;
	        margin-bottom: 10px;
            padding:1em;
            background-color:rgb(248, 248, 248);
    }

    }

    @media(max-width: 600px){
        div.blog_info_etudiant{
        display:flex;
        flex-wrap: wrap;
        gap:1em 0;
        padding:1em 2em;
        margin:1em 2em;
        background-color:white;
        box-shadow: 0 0 10px gray;
        border-left:1.5px solid rgb(10,107,49);
        border-right:1.5px solid rgb(10,107,49);
        border-top:2em solid rgb(10,107,49);
        border-bottom:2em solid rgb(10,107,49) ;
        border-radius: 1em;
        }

       div.etudiant_image_profil{
        display:flex;
        flex-direction:column;
        gap:0.5em 0;
        align-items:center;
        width:100%;
        background-color:white;
        box-shadow: 0 0 10px gray;
        padding: 0.5em 2.5em;
    }

    div.contenu_blog_document{
    width:100%;
    display:flex;
    flex-wrap:wrap;
    gap:2em 2em;
    flex-wrap:wrap;
    justify-content: center;
    padding: 2%;
}

    div.info_etudiant{
         display:flex;
         gap:1em 0;
         background-color:white;
         box-shadow: 0 0 10px gray;
         justify-content: center;
         padding:1em;
         width:100%;
    }
  
}

div.blog_document{
    display:flex;
    flex-direction: column;
    border: 2px solid rgb(10,107,49);

   
}
span#titre_blog_document{
    background-color: rgb(10,107,49);
    padding:1% 0;
    width:100%;
    color: white;
    font-size: x-large;
    font-weight: bold;
    text-align: center;
}
div.contenu_blog_document{
    width:100%;
    display:flex;
    gap:2em 2em;
    flex-wrap:wrap;
    justify-content: center;
    padding: 2%;
}

p.notif{
    color:rgb(141,54,20);
    font-size:large;
}

section.programme{
        display: grid;
        grid-template-rows: auto auto auto;
        padding: 0;
        margin: 0;
		width:100% ;
    }
 div.corps_programme{
        display: flex;
		flex-direction:column;
		gap:2em 0;
		margin:2% 10%;
 } 
 
 div.footer_programme{
     width:100%;
 }
 div.entete{
     padding: 1em;
     background-color: rgb(10,107,49);
     display: flex;
     flex-direction :column;
     align-items: center;
     gap:1em;
 }
 div.entete h1,h2{
     color:white;
 }
 h2#notif{
     color:black;
 }
   
</style>


<body>
   
     
  <div class="entete">
        <h1> <?php echo $tab_structure['ufr'] ?> </h1>
        <h2> <?php echo $tab_structure['departement'] ?> </h2>
        <h2> <?php echo $tab_structure['licence'] ?> </h3>
  </div>


    <div class="blog_info"> 
                    
       



    <?php


// $ine = $_SESSION['username'];
// $requete1= mysqli_query($con,"SELECT * FROM sd_etudiant WHERE username = '$ine'");

$requete = mysqli_query($con,"SELECT * FROM sd_document WHERE licence='$licence'");
$nbr_doc = mysqli_num_rows($requete);

$tab_pdf = array('.pdf','.PDF');
$tab_word = array('.docx','.DOCX');
$tab_excel = array('.csv','.xlsx','.xlsm');
$tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');

?>

   
    <div class="contenu_blog_document">
 
      <?php

if($nbr_doc !==0){
        while($tab = mysqli_fetch_array($requete)){

            $format = strrchr($tab['nom'],'.');
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
        ?>
            
       

            <div class="fichier">
			<div class="image_du_fichier">
			<a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $tab['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="icone_du_fichier" title="<?php echo $tab['nom'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="info_du_fichier">
				<label class="info"> Licence : <span class="titre"><?php echo $tab['licence']; ?> </span> </label>
				<label class="info"> Nature :  <span class="titre"><?php echo $tab['nature'];  ?> </span> </label>
				<label class="info"> Module :  <span class="titre"><?php echo $tab['module'];  ?> </span> </label>
				<label class="info"> Niveau :  <span class="titre"><?php echo $tab['niveau'];  ?> </span> </label>
				<label class="info"> Année :   <span class="titre"><?php echo $tab['annee'];   ?> </span> </label>
			</div>
			<div class="bouton_supp">
				<a href="http://localhost/samadoc/disi_code/supp_doc_par_admin.php?get_id=<?php echo $tab['id']?>" class="bouton_supprimer">Supprimer</a>
			</div>

	       </div>

        <?php
        }
    }
    else{
        ?>
              <h2 id="notif">Cette licence ne comporte aucun document enregistrer.</h2>
        <?php
    }
      ?>
        
    </div>
        <!-- fin du code pour le contenu de la case -->  

</div>
    <!-- fin du code pour la case -->


</body>
</html>
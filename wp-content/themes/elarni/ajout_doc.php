<?php  
/* template name:ajout_de_document */
get_header();
session_start();

$licence = $_SESSION['licence'];

$con = mysqli_connect("localhost","root","","samadoc");
$req = mysqli_query($con,"SELECT * FROM sd_structure WHERE licence_sigle='$licence'");
$tab = mysqli_fetch_array($req);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de document</title>
</head>

<style>
*{
    margin:0;
    padding:0;
}
div.corps{
   margin:2% 10%;
   margin-top:5%;
   padding:1em;
  
}
div.blog_ajout_doc{
    display:flex;
    flex-direction:column;
    gap:1em 0;
    align-items:center;
    padding:1em 2em;
    background-color:rgb(250, 250, 250); 
    box-shadow: 0 0 10px gray;
    border-radius:2em;
    border-top:2em solid rgb(10,107,49);
    border-bottom:2em solid rgb(10,107,49);
    border-left:2px solid rgb(10,107,49);
    border-right:2px solid rgb(10,107,49);
}
div.blog_info{
    display:flex;
    flex-direction:column;
    gap:1em 0;
  
    width:100%;
}
label{
    font-size:large;
    font-weight:bold;
    color:rgb(10,107,49);
}
span.info{
    padding:0.5em;
    border-radius:30px 0 0 0 ;
    font-size:large;
    border: 2px solid rgb(202, 202, 202);
    width:100%;
    color:gray;
}
img.logo_ajout_doc{
    width:150px;
    height:150px;
    border-radius:50%;
    border:8px solid rgb(10,107,49);
    background-color:rgb(132,181,39);
}
input[type=submit]{
    width:100%;
    margin-top:2em;
}
</style>

<body>

    <div class="entete">
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
    </div>

 
    <div class="corps">
       <form action="http://localhost/samadoc/disi_code/files.php" enctype="multipart/form-data" method="POST">
        
     <div class="blog_ajout_doc">
         <img src="http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN-LOGO-e1632675134890.png" alt="" class="logo_ajout_doc">
            <div class="blog_info">
                <label for="ufr">UFR</label>
                <span class="info"><?php echo $tab['ufr']; ?></span>
            </div>

            <div class="blog_info">
               <label for="departement">Departement</label>
               <span class="info"><?php echo $tab['departement']; ?></span>
            </div>

            <div class="blog_info">
               <label for="licence">Licence</label>
               <span class="info"><?php echo $licence; ?></span>
            </div>

            <div class="blog_info">
                <label for="niveau">Niveau</label>
                <select name="niveau" id="niveau">
                    <option value="L1">licence1</option>
                    <option value="L2">licence2</option>
                    <option value="L3">licence3</option>                 
                </select>
            </div>

            <div class="blog_info">
                <label for="nature">Nature</label>
                <select name="nature" id="nature">
                    <option value="cours">Cours</option>
                     <option value="td">TP</option>
                    <option value="td">TD</option>
                    <option value="devoir">Devoir</option>
                    <option value="examen">examen</option>
                    <option value="correction_td">Correction TD </option>
                    <option value="correction_devoir">Correction devoir </option>
                    <option value="correction_examen">Correction examen </option>                   
                </select>
            </div>
            
            <div class="blog_info">
                <label for="module">Module</label>
                <input type="text" name="module" id="module" required>
            </div>

            <div class="blog_info">
                <label for="date">Annnée</label>
                <input type="text" name="annee" id="date" placeholder="2020/2021" required>
            </div>

            <div class="blog_info">
                <label for="fichier">Document</label>
                <input name="fichier" type="file" id="fichier" required>
            </div>
                
                <input type="submit" value="ajouter fichier">
            
        </div>

      </form>

    </div>
    <div class="footer_document">
        <?php get_footer();?>
    </div>
</body>
</html>
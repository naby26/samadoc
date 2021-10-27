<?php
/*
Template name: Accueil
*/
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https : //fonts.googleapis.com/css2? family= Carattere & display=swap" rel="stylesheet">


    <link
  rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
  crossorigin="anonymous"
  >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/2.0.0/scrollReveal.min.js">
    <title>Document</title>
    <style>
        .stat{
            background-color:rgb(10,107,49);
             
        }
        h3{
            color:white;
             
        }
        .btn{
      background-color:rgb(10,107,49);
      border:rgb(10,107,49);
    }
    .btn:hover{
      background-color:rgb(132, 181, 39);
    }
    .card:hover{
			/* border: 3px solid rgb(10,107,49); */
			transition: 0.5s;
			transform: scale(1.05);

		}
        .presentation{
            font-family: 'Carattere', cursive;
            font-size:20px;
            background-color:rgb(10,107,49);
            color:white;
        }
        .img-banner{
            width: auto;

        }
		div#popup{

display:flex;
flex-wrap:wrap;
gap:2em;
background-color: rgb(240,240,240);
box-shadow: 0 0 10px gray;
padding:1em 2em;
border-radius:1em;
border-top: 2px solid rgb(10,107,49);
border-bottom:2px solid rgb(10,107,49);
border-right: 1em solid rgb(10,107,49);
border-left: 1em solid rgb(10,107,49);
animation: popup 8s ;
margin:0 30%;
justify-content: space-evenly;
z-index:900em;
}
img#image_profil_user{
 width: 150px;
 height:150px;
 border-radius:50%;
}
div.droite , div.gauche{
 display:flex;
 flex-direction: column;
 align-items: center;
}
label#nom{
font-size: x-large;
text-shadow:0 0 10px rgb(10,107,49);
color:white;
font-weight: bolder;
}
p#suite{
font-size:large;
color:black;
font-weight: bolder;
}

@keyframes popup {
0%{
	transform: translateY(-100%);
}
50%{
	transform: translateY(100%); 
}
100%{
		transform: translateY(-200%);
}

}

    </style>
</head>
<?php
$username=$_SESSION['username'];
$bdd = mysqli_connect("localhost", "root","", "samadoc");
$reponse = mysqli_query($bdd,"SELECT * FROM sd_etudiant WHERE username='$username'");
$tab_image = mysqli_fetch_array($reponse);
$con = mysqli_connect("localhost","root","","samadoc");
$requete1 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SFI'");
$requete2 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SEAPAN'");
$requete3 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SES'");
$requete4 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SJET'");

$table1 = mysqli_num_rows($requete1);
$table2 = mysqli_num_rows($requete2);
$table3 = mysqli_num_rows($requete3);
$table4 = mysqli_num_rows($requete4);

mysqli_close($con);


           

$con = mysqli_connect("localhost","root","","samadoc");
$information = mysqli_query($con,"SELECT * FROM sd_structure  ");
$tab_structure=mysqli_fetch_array($information);
$ufr=$tab_structure['ufr_sigle'];
$liste_depte=  mysqli_query($con,"SELECT DISTINCT ufr_sigle,ufr FROM sd_structure");

?>



<body>


	<div class="nav_accueil">
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

    <div class="container ">
	<?php 

		// if( $_SESSION['val'] == 0){ ?>

		<!-- // 	<div id="popup">
		// 		<div class="gauche">
		// 			<img id="image_profil_user" src="http://localhost/samadoc/disi_code/sd_avatar_user/<?php echo $tab_image['photo']; ?>" alt="">
		// 		</div>
		// 		<div class="droite">
		// 			<h2 id="">BIENVENUE</h2>
		// 			<label id="nom"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'] ;?></label>
		// 			<p id="suite"> dans SAMADOC</p>
		// 		</div>
		// 	</div> -->

		<!-- // 	<script> -->
		<!-- // 	setTimeout(function(){
		// 	var popup = document.getElementById('popup');
		// 	popup.style.visibility="hidden";
		// 	},6000); -->
			
		<!-- // 	</script> -->
			
		
		 

            
        <div class="row shadow mx-2 p-0 my-1 "  >
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100 img-banner" src="http://localhost/samadoc/wp-content/uploads/2021/10/banner-samadoc.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/10/banner-samadoc.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/10/banner-samadoc.png" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mx-2 my-1 border-2 presentation  text-justify font-italic shadow px-2">
            <p>
                Vue les difficultés qu'affrontent les étudiants pour accéder à des documents et pire pour les nouveaux étudiants qui ont du mal à 
                avoir un apercu sur le travail qui les attendent, nous avons mis en place SAMADOC.
                Samadoc est comme une bibliothèque numérique où les documents, tous fournis par les étudiants, sont biens gardés et bien arrangés.
                Tout étudiant peut ajouter et télécharger des documents provenant de n'importe qu'elle licence.

            </p>
        </div>


        <div class="row shadow  mx-2 my-1  text-center stat">
            <div class="col-12 font-weight-bold stats  mt-1 mx-2"> <h3> STATISTIQUES</h3> 
			</div>
            <div class="col-md-6 col-lg-3 col-sm-12 my-1 " >
                <div class="card">
                    <div id="carouselExampleSlidesOnly" class="carousel slide card-img-top " data-ride="carousel">
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SAEPAN.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SAEPAN.png" alt="Second slide">
                                </div>
                            
                        </div>
                    </div>
                    <div class="card-body text-center text-md-left">
                        <h5 class="card-title text-center mt-0">UFR SAEPAN</h5>
                        <p class="card-text">Départements</p>
                        <p class="card-text">Licences</p>
                        <p class="card-text"><?php echo $table2;?> Documents</p>
                        <a href="http://localhost/samadoc/ufr-SAEPAN" class="btn btn-primary">voir documents</a>
                    </div>
                </div>

            </div>
               
			<div class="col-md-6 col-lg-3 col-sm-12 my-1 " >
                <div class="card">
                    <div id="carouselExampleSlidesOnly" class="carousel slide card-img-top " data-ride="carousel">
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SFI.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SFI.png" alt="Second slide">
                                </div>
                            
                        </div>
                    </div>
                    <div class="card-body text-center text-md-left">
                        <h5 class="card-title text-center mt-0">UFR SEJP</h5>
                        <p class="card-text">Départements</p>
                        <p class="card-text">Licences</p>
                        <p class="card-text"><?php echo $table4;?> Documents</p>
                        <a href="http://localhost/samadoc/ufr-SEJP" class="btn btn-primary">voir documents</a>
                    </div>
                </div>

            </div>
			<div class="col-md-6 col-lg-3 col-sm-12 my-1 " >
                <div class="card">
                    <div id="carouselExampleSlidesOnly" class="carousel slide card-img-top " data-ride="carousel">
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SEGCSJP.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SEGCSJP.png" alt="Second slide">
                                </div>
                            
                        </div>
                    </div>
                    <div class="card-body text-center text-md-left">
                        <h5 class="card-title text-center mt-0">UFR SSE</h5>
                        <p class="card-text">Départements</p>
                        <p class="card-text">Licences</p>
                        <p class="card-text"><?php echo $table3;?> Documents</p>
                        <a href="http://localhost/samadoc/ufr-sse" class="btn btn-primary">voir documents</a>
                    </div>
                </div>

            </div>
			<div class="col-md-6 col-lg-3 col-sm-12 my-1 " >
                <div class="card">
                    <div id="carouselExampleSlidesOnly" class="carousel slide card-img-top " data-ride="carousel">
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SFI.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SFI.png" alt="Second slide">
                                </div>
                            
                        </div>
                    </div>
                    <div class="card-body text-center text-md-left">
                        <h5 class="card-title text-center mt-0">UFR SFI</h5>
                        <p class="card-text">Départements</p>
                        <p class="card-text">Licences</p>
                        <p class="card-text"><?php echo $table1;?> Documents</p>
                        <a href="http://localhost/samadoc/ufr-sfi" class="btn btn-primary">voir documents</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
</body>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





</html>

 

	<div class="footer_accueil">
        <?php get_footer(); ?>
	</div>




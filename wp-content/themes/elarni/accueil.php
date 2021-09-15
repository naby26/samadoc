<?php
/*
Template name: Accueil
*/
get_header();
?>

<?php        
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
	?>


<style>


    .body_accueil{
        display: grid;
        grid-template-rows: auto auto auto;
        padding: 0;
        margin: 0;
		width:100% ;
    }
    .corps_accueil{
		display: flex;
		flex-direction:column;
		gap:2em 0;
		margin:2% 10%;

    }
    .stat{
			display: inline-flex;
			justify-content: space-between;
			padding: 5%;
			background-color:white;
			box-shadow:3px 3px 9px rgb(10,107,49);
			/* background-image: linear-gradient(to right, rgb(132,181,39), rgb(192,206,0)); */
			border: 2px solid rgb(10,107,49);
			gap: 0px 10px;
			width:100%;
		}
		.stat_ufr{
			padding: 3%;
			background-color: rgba(10,107,49,0.8);
			width: 100%;
			overflow-wrap:break-word;
			
		}
		.valeur{
			font-size: xx-large;
			color:white;
			text-align: center;
		}
		.p_valeur{
			display: flex;
		}
		.presentation_general{
			font-family: 'Times New Roman', Times, serif;
			font-size:large;

		}

		.presentation_ufr{
			display:flex;

		}
		.container{
			display:flex;
			align-items:center;
		}
		
		.description_img{
			text-align: center;
		}
		.img_presentation{
			border: 3px solid rgb(132, 181, 39);
			margin: 2px;
			margin-top: 25px;
			transition: 0.5s;
			width: 25%;
			background-color: rgba(255,255,255,1);
			
		}

		.img_presentation:hover{
			border: 3px solid rgb(10,107,49);
			transition: 0.5s;
			transform: scale(1.1);

		}
		.princi_text{
			text-align: justify;
		}

		@media(max-width: 900px){
			.stat{
				display:grid;
				grid-template-columns:auto auto;
				gap: 1em 1em;
				
			}


			.presentation_ufr{
				display:flex;
				flex-direction:column;
				align-items:center;
			}
			.img_presentation{
				width: 100%;
				/* text-align:justify; */

			}
			.img_presentation img{
				width:100%;
			}
			.description_img{
				text-align:justify;
				margin:2% 5%;

			}
		}

		.profil_info{
			position: fixed;
			bottom: 65px;
			left: 65px;
			background-color: #6a7df1;
			display: none;
		}

		.profil_info:hover{
			display: inline-block;
		}

</style>




<div class="body_accueil">


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


    <div class="corps_accueil">

			<section class="stat">
				<div class="stat_ufr">
					<p class="nom_ufr">UFR SEAPAN</p>
					<p class="p_valeur"><span class='valeur'><?php echo $table2;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
				</div>
				<div class="stat_ufr">
					<p class="nom_ufr">UFR SFI</p>
					<p class="p_valeur"><span class='valeur'><?php echo $table1;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
				</div>
			
				<div class="stat_ufr">
					<p class="nom_ufr">UFR SES</p>
					<p class="p_valeur"><span class='valeur'><?php echo $table3;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
				</div>
				<div class="stat_ufr">
					<p class="nom_ufr">UFR SJET  </p>
					<p class="p_valeur"><span class='valeur'><?php echo $table4;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
				</div>
			</section>
	
			<section class="presentation_general">
				<h1>Présentation</h1>

				<p class="princi_text">
				Les étudiants de la première promotion de l’USSEIN avaient des difficultés de se documenter sur les cours, examen et devoir de leurs spécialités, c’est dans ce sillage qu’ils ont eu l’idée de réaliser un projet intitulé Samadoc.
		     Samadoc est une plateforme web conçue par des jeunes étudiants(es) stagiaires de la DISI(Direction Informatique du Système d’Information) de l’université du Sine Saloum d’EL-HADJI IBRAHIMA NIASS DE KAOLACK, elle est accessible pour tous les étudiants de l’USSEIN. L’objectif de cette plateforme est de créer un univers d’échange et de partage de document pour les étudiants, ces derniers n’auront  plus besoin de photocopier  parce que tous leurs documents seront sous forme électronique plus facile à garder que les documents sur papier. L’étudiant peut ajouter, visualiser ou télécharger des documents mais aussi il a le droit de supprimer les documents qu’il a ajouté. Les nouveaux orientés n’auront pas de surprises lors des premières évaluations grâce à la plateforme ils verront les examens et devoirs des années précédentes .Tout étudiant qui le souhaite peux enrichir ses connaissances parce qu’il a accès  aux autres documents des autres licences.
					</p>
			</section>


			<section class="presentation_ufr">
					<div class="img_presentation">
						<img src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SAEPAN.png" alt="Mon Logo" width="500px" height="auto">
						<p class="description_img">
						UFR SCIENCES AGRONOMIQUES, ELEVAGE, PECHE-AQUACULTURE ET NUTRITION est composée de quatre départements dont Département Agronomie et Production Végétale qui contient 6licences, Département Sciences et Techniques d’Elevage qui contient 2licences,  Département Gestion des Ressources Halieutiques, Pêche et Aquaculture qui contient 2licences  et Département Nutrition Alimentation qui contient 2licences.
						</P>
					</div>
					<div class="img_presentation">
						<img src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SFI.png" alt="Mon Logo" width="500px" height="auto">
						<p class="description_img">
						UFR SCIENCES FONDAMENTALES ET DE L’INGENIEUR est composée de trois départements dont Département Mathématiques, Physiques et Informatique qui contient 2licences, Département Hydraulique, Génie Rural, Machinisme et Energies Renouvelables qui contient 3licences et Département Sciences et Technologies Alimentaires qui contient 2licences.
						</P>
					</div>
					<div class="img_presentation">
						<img src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SEGCSJP.png" alt="Mon Logo" width="500px" height="auto">
						<p class="description_img">
						UFR SCIENCES ECONOMIQUES-JURIDIQUES ET POLITIQUES est composée de trois départements dont Département Tourisme, Hôtellerie, Restauration et Gastronomie qui contient 2licences, Département Sciences Economiques de Gestion et Commerce qui contient 3licences et Département Science Juridique et Politique qui contient 2licences.
					</p>
					</div>
					<div class="img_presentation">
						<img src="http://localhost/samadoc/wp-content/uploads/2021/08/UFR SSE.png" alt="Mon Logo" width="500px" height="auto">
						<p class="description_img">
						UFR SCIENCES SOCIALES ET ENVIRONNEMENTALES est composée de deux départements dont Département Science Sociale qui contient 4licences, Département Environnement, Biodiversité et Développement Durable qui contient 4licences.
						</p>
					</div>
			</section>
    </div>

	<div class="footer_accueil">
        <?php get_footer(); ?>
	</div>

</div>


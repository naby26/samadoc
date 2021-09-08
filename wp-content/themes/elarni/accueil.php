<?php
/*
Template name: Accueil
*/
get_header();
?>


<style>
    .body_accueil{
        display: grid;
        grid-template-rows: auto auto auto;
        padding: 0;
        margin: 0;
    }
    .corps_accueil{
        display: grid;
    }
    .stat{
			display: inline-flex;
			justify-content: space-between;
			padding: 50px;
			background-image: linear-gradient(to right, #00eda4, #6a7df1);
			border: 1px inset rgb(6,6,48);
			gap: 0px 10px;
			margin-top: 50px;
			margin-left: 120px;
		}
		.stat_ufr{
			padding: 30px;
			background-color: rgba(0, 0, 0, 0.3);
			
		}
		.valeur{
			font-size: xx-large;
			color:white;
			text-align: center;
		}
		.p_valeur{
			display: flex;
		}
		.presentation{
			margin-top: 45px;
			margin-left: 45px;
		}
		.contain_img_presentation{
			display: flex;
			justify-content: space-between;
			
		}
		.description_img{
			text-align: center;
		}
		.img_presentation{
			border: 2px outset #00eda4;
			margin: 2px;
			margin-top: 25px;
			transition: 0.5s;
			width: 25%;
			background-color: rgba(255,255,255,1);
			
		}
		.img_presentation:hover{
			border: 2px outset #6a7df1;
			transition: 0.5s;
			transform: scale(1.1);
		}
		.princi_text{
			text-align: justify;
		}
		@media(max-width: 770px){
			.stat{
				display: block;
				direction: column;
				size: auto;
			}
			.stat_ufr{
				margin-bottom: 5px;
				size: auto;
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
        .sidebar_accueil p{
            text-align: center;
            background-color: antiquewhite;
            padding-top: 5px;
        }
        .sidebar_accueil{
            padding: 25px;
            border-right: 2px solid;
            background-color: grey;
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
        <!-- <div class="sidebar_accueil">
                <p>
                    <img src="http://localhost/samadoc/wp-content/uploads/2021/08/profil.png" alt="Photo Profil" class="profil_accueil" width="75px" height="75px">
                    <?php
                    echo "<br>";
                    echo $_SESSION['firstname']."<br>";
                    echo $_SESSION['lastname']."<br>";
                    ?>
                    <a href="http://localhost/samadoc/disi_code/deconnexion.php">Se Déconnecter</a>
                </p>
        </div> -->
        <div class="container_accueil">
            <!-- Partie contenu d'Accueil -->

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

	<div class="profil_info">
		<?php
		echo $_SESSION['firstname']."<br>".$_SESSION['lastname'];
		?>
	</div>
	<section class="stat">
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SFI</p>
			<p class="p_valeur"><span class='valeur'><?php echo $table1;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SEAPAN</p>
			<p class="p_valeur"><span class='valeur'><?php echo $table2;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SES</p>
			<p class="p_valeur"><span class='valeur'><?php echo $table3;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SJET</p>
			<p class="p_valeur"><span class='valeur'><?php echo $table4;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
	</section>
	
	<section class="presentation">
		<h1>Présentation</h1>

		<p class="princi_text">
		Les étudiants de la première promotion de l’USSEIN avaient des difficultés de se documenter sur les cours, examen et devoir de leurs spécialités, c’est dans ce sillage qu’ils ont eu l’idée de réaliser un projet intitulé Samadoc.
Samadoc est une plateforme web conçue par des jeunes étudiants(es) stagiaires de la DISI(Direction Informatique du Système d’Information) de l’université du Sine Saloum d’EL-HADJI IBRAHIMA NIASS DE KAOLACK, elle est accessible pour tous les étudiants de l’USSEIN. L’objectif de cette plateforme est de créer un univers d’échange et de partage de document pour les étudiants, ces derniers n’auront  plus besoin de photocopier  parce que tous leurs documents seront sous forme électronique plus facile à garder que les documents sur papier. L’étudiant peut ajouter, visualiser ou télécharger des documents mais aussi il a le droit de supprimer les documents qu’il a ajouté. Les nouveaux orientés n’auront pas de surprises lors des premières évaluations grâce à la plateforme ils verront les examens et devoirs des années précédentes .Tout étudiant qui le souhaite peux enrichir ses connaissances parce qu’il a accès  aux autres documents des autres licences.
              </p>
		<div class="contain_img_presentation">
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
		</div>
	</section>
        </div>

    </div>

    <div class="footer_accueil">
        <?php get_footer(); ?>
    </div>
</div>
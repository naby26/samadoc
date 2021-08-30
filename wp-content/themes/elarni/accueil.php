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
        grid-template-columns: 300px auto;
    }
    .stat{
			display: inline-flex;
			justify-content: space-between;
			padding: 50px;
			background-image: linear-gradient(to right, #00eda4, #6a7df1);
			border: 1px inset rgb(6,6,48);
			gap: 0px 10px;
			margin-top: 50px;
			margin-left: 80px;
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
		.bouton_ajout{
			height: 50px;
			width: 50px;
			background-image: linear-gradient(to right, #00eda4, #6a7df1);
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			position:fixed;
			left: 20px;
			bottom: 20px;
			cursor: pointer;
			transition: 0.4s all;
		}
		.profil_info{
			position: fixed;
			bottom: 65px;
			left: 65px;
			background-color: #6a7df1;
			display: none;
		}
		.icone_ajout{
			width: 30px;
		}
		.bouton_ajout:hover{
			transform: scale(1.5);
			transition: 0.4s all;
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
        <div class="sidebar_accueil">
                <p>
                    <img src="http://localhost/samadoc/wp-content/uploads/2021/08/profil.png" alt="Photo Profil" class="profil_accueil" width="75px" height="75px">
                    <?php
                    echo "<br>";
                    echo $_SESSION['firstname']."<br>";
                    echo $_SESSION['lastname']."<br>";
                    ?>
                    <a href="http://localhost/samadoc2/disi_code/deconnexion.php">Se Déconnecter</a>
                </p>
        </div>
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
	<a href="http://localhost/samadoc/ajout-de-documents/" class="bouton_ajout">
		<img src="http://localhost/samadoc/wp-content/uploads/2021/08/profil.png" class="icone_ajout" title="Ajouter un Document">
	</a>
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
		<p>
			<?php 
				echo $_SESSION['username']."<br>";
				echo $_SESSION['firstname']."<br>";
				echo $_SESSION['lastname']."<br>";
				echo $_SESSION['email']."<br>";
			?>
		</p>
		<p class="princi_text">
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ipsam quam reprehenderit culpa iusto molestias quia ea provident quo, obcaecati rem vitae perspiciatis repellendus, voluptates aperiam. Itaque, esse inventore? Dolorem cum, error sed officiis minima labore quae iure consequuntur quam, a id dolorum ullam minus, quo soluta autem rem nobis distinctio asperiores numquam deserunt maxime temporibus animi. Corrupti voluptatem, unde similique doloremque odio consectetur officiis adipisci, commodi illum expedita modi enim sunt cupiditate, praesentium hic. Laborum aperiam illo voluptatibus odit sit quam nam nulla dolores impedit in esse eveniet adipisci quia eius, recusandae obcaecati id reprehenderit voluptatum quidem dignissimos deleniti fuga dolor at! Perferendis eius vero necessitatibus cumque pariatur iure suscipit ducimus distinctio. Repellat voluptates reiciendis perferendis officia iure. Rerum eaque nihil magnam reprehenderit totam. Dolores sint deserunt unde iusto cupiditate qui aut illo, necessitatibus autem tenetur quam ullam id similique, velit natus minus! Hic dignissimos animi ipsam minus dolorum? Tempora, laboriosam debitis ullam distinctio, consequatur quasi ab deserunt mollitia ad, commodi assumenda dolore accusantium! Cupiditate, ducimus expedita doloribus corporis alias quas odio natus rerum fugiat, facere dolorum perspiciatis magnam eaque ab ad unde? Consectetur, ducimus. Voluptatem ipsum eligendi deserunt numquam sunt sequi, impedit quisquam exercitationem aperiam esse. Accusantium nisi repellat eligendi? Officia aliquid voluptates suscipit iusto ducimus! Harum laudantium debitis, voluptate ab repudiandae officiis assumenda beatae deserunt reprehenderit dolorem similique non sapiente nulla molestias ratione! Libero nisi ducimus praesentium ratione ex, sequi tempore. Possimus, saepe suscipit repellendus dolores magnam similique dolore quaerat? Veniam quis dolore alias eligendi harum recusandae aspernatur. Numquam ipsum velit magni!
		</p>
		<div class="contain_img_presentation">
			<div class="img_presentation">
				<img src="http://localhost/samadoc/wp-content/uploads/2021/08/default1.png" alt="Mon Logo" width="300px" height="auto">
				<p class="description_img">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aspernatur consectetur veritatis, sunt vero fugiat non necessitatibus distinctio, assumenda eveniet eos nobis perferendis eaque recusandae.
				</p>
			</div>
			<div class="img_presentation">
				<img src="http://localhost/samadoc/wp-content/uploads/2021/08/default1.png" alt="Mon Logo" width="300px" height="auto">
				<p class="description_img">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aspernatur consectetur veritatis, sunt vero fugiat non necessitatibus distinctio, assumenda eveniet eos nobis perferendis eaque recusandae.
				</p>
			</div>
			<div class="img_presentation">
				<img src="http://localhost/samadoc/wp-content/uploads/2021/08/default1.png" alt="Mon Logo" width="300px" height="auto">
				<p class="description_img">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aspernatur consectetur veritatis, sunt vero fugiat non necessitatibus distinctio, assumenda eveniet eos nobis perferendis eaque recusandae.
				</p>
			</div>
			<div class="img_presentation">
				<img src="http://localhost/samadoc/wp-content/uploads/2021/08/default1.png" alt="Mon Logo" width="300px" height="auto">
				<p class="description_img">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aspernatur consectetur veritatis, sunt vero fugiat non necessitatibus distinctio, assumenda eveniet eos nobis perferendis eaque recusandae.
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
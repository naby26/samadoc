<?php
session_start();
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'ELEARNI_THEME_DIR', get_template_directory() );
define( 'ELEARNI_THEME_URI', get_template_directory_uri() );


if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'ELEARNI_THEME_NAME', $themeData->get('Name'));
	define( 'ELEARNI_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( ELEARNI_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/

if( !defined( 'CS_OPTION' ) ) {
	define( 'CS_OPTION', '_elearni_cs_options' );
}

require_once ELEARNI_THEME_DIR .'/cs-framework/cs-framework.php';

if( !defined( 'CS_ACTIVE_TAXONOMY' ) ) { 
	define( 'CS_ACTIVE_TAXONOMY',   false );
}

if( !defined( 'CS_ACTIVE_SHORTCODE' ) ) {
	define( 'CS_ACTIVE_SHORTCODE',  false );
}
if( !defined( 'CS_ACTIVE_CUSTOMIZE' ) ) {
	define( 'CS_ACTIVE_CUSTOMIZE',  false );
}

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function elearni_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'ELEARNI_LANG_DIR', ELEARNI_THEME_DIR. '/languages' );
load_theme_textdomain( 'elearni', ELEARNI_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function elearni_admin_scripts() {
	wp_enqueue_style('elearni-admin', ELEARNI_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'elearni_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( ELEARNI_THEME_DIR .'/framework/register-functions.php' );

// Header -----------------------------------------------------------------------
require_once( ELEARNI_THEME_DIR .'/framework/register-head.php' );

// Hooks ------------------------------------------------------------------------
require_once( ELEARNI_THEME_DIR .'/framework/register-hooks.php' );

// Post Functions ---------------------------------------------------------------
require_once( ELEARNI_THEME_DIR .'/framework/register-post-functions.php' );
new elearni_post_functions;

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'elearni_widgets_init' );
function elearni_widgets_init() {
	require_once( ELEARNI_THEME_DIR .'/framework/register-widgets.php' );
}

// Plugins ---------------------------------------------------------------------- 
require_once( ELEARNI_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( ELEARNI_THEME_DIR .'/framework/woocommerce/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( elearni_plugin_is_active( 'wp-store-locator/wp-store-locator.php' ) ){
	require_once( ELEARNI_THEME_DIR .'/framework/register-storelocator.php' );
}

// Reservation Module -----------------------------------------------------------
if(class_exists('DTDoctorAddon'))
	require_once( ELEARNI_THEME_DIR .'/framework/register-reservation.php' );
	
// Register Templates -----------------------------------------------------------
require_once( ELEARNI_THEME_DIR .'/framework/register-templates.php' );

// Register Gutenberg -----------------------------------------------------------
require_once( ELEARNI_THEME_DIR .'/framework/register-gutenberg-editor.php' );
//function stage(){
//	$con=mysqli_connect("localhost","root","","samadoc");
//	$req=mysqli_query($con,"SELECT * FROM sd_document");
//	$table=mysqli_fetch_array($req);
//	echo $table["document"]."<br>";
//  }
//  add_shortcode("test","stage");


//-----------------Afficher Document----------------------------------------

function afficher_doc(){
	
	$con = mysqli_connect("localhost","root","","samadoc");
	$requete = mysqli_query($con,"SELECT * FROM sd_document");

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
}
		
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto">
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
			<a download="<?php echo $table['nom']; ?>" href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" ><input type="submit" value="Télécharger"></a>
			</div>


	</div>

	<?php
	
	}
	mysqli_close($con);	
	
	
}

add_shortcode("afficher_doc","afficher_doc");

//--------------------------------Affichage document ufr--------------------------



function afficher_doc_ufr(){
	$con = mysqli_connect("localhost","root","","samadoc");
	$requete = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SFI'");

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
	background-color:rgba(0,0,0,0,1);
	display:inline-flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 3px;
	margin-bottom: 10px;
	padding:10px 20px 10px 0px;
}
      img#icone_doc:hover{
		  transform: scale(1.1);
	  }    

	/*	.div_input{
			display: block;
			justify-content: center;
		}    */
	.div_label1{
		overflow-wrap: break-word;
		width: 150px;height:188px;
	} 
	
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >UFR: </label> <?php echo $table['ufr'];?><br>
				<label >Nature: </label> <?php echo $table['nature'];?><br>
				<label >Module: </label> <?php echo $table['module'];?><br>
				<label >Niveau: </label> <?php echo $table['niveau'];?><br>
				<label >Année: </label> <?php echo $table['annee'];?><br>
			</div>
			<div class="div_input">
			<a download="<?php echo $table['nom']; ?>" href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" ><input type="submit" value="Télécharger"></a>
			
			</div>


	</div>

	<?php
	
	}

	mysqli_close($con);

}

add_shortcode('afficher_doc_ufr','afficher_doc_ufr');

//--------------Affichage Doc Dept--------------------------------------------

function afficher_doc_dept(){
	$con = mysqli_connect("localhost","root","","samadoc");
	$requete = mysqli_query($con,"SELECT * FROM sd_document WHERE departement='MI'");

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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Département: </label> <?php echo $table['departement'];?><br>
				<label >Nature: </label> <?php echo $table['nature'];?><br>
				<label >Module: </label> <?php echo $table['module'];?><br>
				<label >Niveau: </label> <?php echo $table['niveau'];?><br>
				<label >Année: </label> <?php echo $table['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php
	
	}

	mysqli_close($con);

}

add_shortcode('afficher_doc_dept','afficher_doc_dept');


//------------------------Affichage Doc Licence----------------------------------------

function afficher_doc_licence(){
	$con = mysqli_connect("localhost","root","","samadoc");
	$requete = mysqli_query($con,"SELECT * FROM sd_document WHERE licence='MPI'");

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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto">
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
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php
	
	}

	mysqli_close($con);

}

add_shortcode('afficher_doc_licence','afficher_doc_licence');

//-----------------------------------------------------filtre_niveau_etudiant-----------------------------
function filtre_niveau_etudiant(){
	$con = mysqli_connect("localhost","root","","samadoc");
	$requete1 = mysqli_query($con,"SELECT * FROM sd_document WHERE niveau='L1'");
	$requete2 = mysqli_query($con,"SELECT * FROM sd_document WHERE niveau='L2'");
	$requete3 = mysqli_query($con,"SELECT * FROM sd_document WHERE niveau='L3'");
	
	$table1 = mysqli_fetch_array($requete1);
	$table2 = mysqli_fetch_array($requete2);
	$table3 = mysqli_fetch_array($requete3);

	$variable_session_etudiant="";

	$tab_pdf = array('.pdf','.PDF');
	$tab_word = array('.docx','.DOCX');
	$tab_excel = array('.csv','.xlsx','.xlsm');
	$tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');
	$icone="";

	if($variable_session_etudiant='L1'){
		while($table1){
			$format = strrchr($table1['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table1['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table1['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table1['licence'];?><br>
				<label >Nature: </label> <?php echo $table1['nature'];?><br>
				<label >Module: </label> <?php echo $table1['module'];?><br>
				<label >Niveau: </label> <?php echo $table1['niveau'];?><br>
				<label >Année: </label> <?php echo $table1['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}
		while($table2){
			$format = strrchr($table2['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table2['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table2['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table2['licence'];?><br>
				<label >Nature: </label> <?php echo $table2['nature'];?><br>
				<label >Module: </label> <?php echo $table2['module'];?><br>
				<label >Niveau: </label> <?php echo $table2['niveau'];?><br>
				<label >Année: </label> <?php echo $table2['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}
		while($table3){
			$format = strrchr($table3['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table3['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table3['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table3['licence'];?><br>
				<label >Nature: </label> <?php echo $table3['nature'];?><br>
				<label >Module: </label> <?php echo $table3['module'];?><br>
				<label >Niveau: </label> <?php echo $table3['niveau'];?><br>
				<label >Année: </label> <?php echo $table3['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}

	}
	if($variable_session_etudiant='L2'){
		while($table2){
			
			$format = strrchr($table2['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table2['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table2['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table2['licence'];?><br>
				<label >Nature: </label> <?php echo $table2['nature'];?><br>
				<label >Module: </label> <?php echo $table2['module'];?><br>
				<label >Niveau: </label> <?php echo $table2['niveau'];?><br>
				<label >Année: </label> <?php echo $table2['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}
		while($table1){
			
			$format = strrchr($table1['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table1['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table1['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table1['licence'];?><br>
				<label >Nature: </label> <?php echo $table1['nature'];?><br>
				<label >Module: </label> <?php echo $table1['module'];?><br>
				<label >Niveau: </label> <?php echo $table1['niveau'];?><br>
				<label >Année: </label> <?php echo $table1['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}
		while($table3){
			
			$format = strrchr($table3['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table3['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table3['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table3['licence'];?><br>
				<label >Nature: </label> <?php echo $table3['nature'];?><br>
				<label >Module: </label> <?php echo $table3['module'];?><br>
				<label >Niveau: </label> <?php echo $table3['niveau'];?><br>
				<label >Année: </label> <?php echo $table3['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}

	}
	if($variable_session_etudiant='L2'){
		while($table2){
			
			$format = strrchr($table2['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table2['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table2['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table2['licence'];?><br>
				<label >Nature: </label> <?php echo $table2['nature'];?><br>
				<label >Module: </label> <?php echo $table2['module'];?><br>
				<label >Niveau: </label> <?php echo $table2['niveau'];?><br>
				<label >Année: </label> <?php echo $table2['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}

	}
	if($variable_session_etudiant='L3'){
		while($table3){
			
			$format = strrchr($table3['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table3['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table3['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table3['licence'];?><br>
				<label >Nature: </label> <?php echo $table3['nature'];?><br>
				<label >Module: </label> <?php echo $table3['module'];?><br>
				<label >Niveau: </label> <?php echo $table3['niveau'];?><br>
				<label >Année: </label> <?php echo $table3['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php
			

		}
		while($table2){
			
			$format = strrchr($table2['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table2['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table2['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table2['licence'];?><br>
				<label >Nature: </label> <?php echo $table2['nature'];?><br>
				<label >Module: </label> <?php echo $table2['module'];?><br>
				<label >Niveau: </label> <?php echo $table2['niveau'];?><br>
				<label >Année: </label> <?php echo $table2['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}
		while($table1){
			
			$format = strrchr($table1['nom'],'.');
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
	display:flex;
	justify-content:space-evenly;
	flex-wrap:nowrap;
	border:outset 2px;
	margin-bottom: 10px;
}
		.div_input{
			display: block;
			justify-content: center;
		}
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/files/<?php echo $table1['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table1['description'];?>" width="200px" height="auto">
			</a>
			</div>
			<div class="div_label">
				<label >Licence: </label> <?php echo $table1['licence'];?><br>
				<label >Nature: </label> <?php echo $table1['nature'];?><br>
				<label >Module: </label> <?php echo $table1['module'];?><br>
				<label >Niveau: </label> <?php echo $table1['niveau'];?><br>
				<label >Année: </label> <?php echo $table1['annee'];?><br>
			</div>
			<div class="div_input">
				<input type="submit" value="Télécharger">
			</div>


	</div>

	<?php

		}

	}
}

add_shortcode('filtre_niveau_etudiant','filtre_niveau_etudiant');



function acceuil(){


	$con = mysqli_connect("localhost","root","","samadoc");
	$requete1 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SFI'");
	$requete2 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SEAPAN'");
	$requete3 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SES'");
	$requete4 = mysqli_query($con,"SELECT * FROM sd_document WHERE ufr='SJET'");
	
	$table1 = mysqli_num_rows($requete1);
	$table2 = mysqli_num_rows($requete2);
	$table3 = mysqli_num_rows($requete3);
	$table4 = mysqli_num_rows($requete4);

	echo $_SESSION['username'];
	?>
	<style>
		.stat{
			display: flex;
			justify-content: space-between;
			padding: 50px;
			background-image: linear-gradient(to right, #00eda4, #6a7df1);
			border: 1px inset rgb(6,6,48);
			margin-left: 45px;
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
			
		}
		.img_presentation:hover{
			border: 4px outset #6a7df1;
			transition: 0.2s;
		}
		.princi_text{
			text-align: justify;
		}
	</style>

	<section class="stat">
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SFI</p>
			<p class="p_valeur"><span class='valeur'><?php echo $table1;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SEAPAN </p>
			<p class="p_valeur"><span class='valeur'><?php echo $table2;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SES </p>
			<p class="p_valeur"><span class='valeur'><?php echo $table3;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
		<div class="stat_ufr">
			<p class="nom_ufr">UFR SJET </p>
			<p class="p_valeur"><span class='valeur'><?php echo $table4;?></span><img src="http://localhost/samadoc/wp-content/uploads/2021/08/doc.png" alt="DOCUMENT" width="150px" height="150px"></p>
		</div>
	</section>

	<section class="presentation">
		<h1>Présentation</h1>
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
	<?php

}

add_shortcode('acceuil','acceuil');


// Résultat de recherches et affichages

function resultat_recherche(){
	// session_start();

	$recherche=$_GET['recherche'];


 $recherche = htmlspecialchars($recherche); //pour sécuriser le formulaire contre les intrusions html
 $recherche = trim($recherche); //pour supprimer les espaces dans la requête de l'internaute
 $recherche = strip_tags($recherche); //pour supprimer les balises html dans la requête


$bdd = mysqli_connect("localhost", "root","", "samadoc");
    $reponse = mysqli_query($bdd,"SELECT * FROM sd_document WHERE nom LIKE '%$recherche%' ");

    $nb=mysqli_num_rows($reponse);
    echo "le nombre de résultat est ".$nb; ?> <br> <?php

$tab_pdf = array('.pdf','.PDF');
	$tab_word = array('.docx','.DOCX');
	$tab_excel = array('.csv','.xlsx','.xlsm');
	$tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');
	$icone="";

	while($table = mysqli_fetch_array($reponse)){

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
                display: inline-flex;
                justify-content:space-evenly;
                flex-wrap:nowrap;
                border:outset 2px;
                margin-bottom: 15px;
                border-radius: 20px;
                box-shadow: 2px 2px 3px black;
            }
      img#icone_doc:hover{
		  transform: scale(1.1);
	  }    

	.div_label1{
		overflow-wrap: break-word;
		width: 150px;height:188px;
	}
    .image_bloc{
        width:200px;
        height:auto;
    } 
	
	</style>


	

	<div class="div_doc">
			<div class="div_img">
			<a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" >
				<img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc">
			</a>
			</div>
			<div class="div_label">
				<label >UFR: </label> <?php echo $table['ufr'];?><br>
				<label >Nature: </label> <?php echo $table['nature'];?><br>
				<label >Module: </label> <?php echo $table['module'];?><br>
				<label >Niveau: </label> <?php echo $table['niveau'];?><br>
				<label >Année: </label> <?php echo $table['annee'];?><br>
			</div>
			<div class="div_input">
			<a download="<?php echo $table['nom']; ?>" href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" ><input type="submit" value="Télécharger"></a>
			
			</div>


	</div>

	<?php
	
	}

	mysqli_close($bdd);

}
add_shortcode('resultat_recherche','resultat_recherche');


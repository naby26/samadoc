<?php
/*
Template name: Document_licence
*/
get_header();
?>
<style>


a.active{
    font-size:x-large;
    text-decoration:none;
    color:rgb(10,107,49);
    text-align:center;
    padding:0.5em 1em;
    margin:2px;
    background-color:white;
    border:2px solid rgb(10,107,49);
    border-radius:10px;
}
a.active:hover{
    font-size:x-large;
    text-decoration:none;
    color:white;
    text-align:center;
    padding:1px 1em;
    margin:2px;
    background-color:rgb(10,107,49);
    border:2px solid rgb(10,107,49);
    border-radius:5px;
}


                .icone_ajout{
                        width: 30px;
                    }
                    .bouton_ajout:hover{
                        transform: scale(3.5);
                        transition: 0.4s all;
                    }
                    .bouton_ajout{
                        border-radius: 50%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        position:fixed;
                        right: 90px;
                        bottom: 90px;
                        cursor: pointer;
                        transition: 0.4s all;
                        transform: scale(2.5);
                        z-index: 999;
                    }

                    .div_doc{
                display: inline-flex;
                justify-content:space-evenly;
                flex-wrap:nowrap;
                border:outset 2px;
                margin-bottom: 15px;
                border-radius: 20px;
                box-shadow: 2px 2px 3px black;
            }
                    .div_input{
                        margin-left: 25px;
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
                    /* .div_document_contenu{
                        display: grid;
                        grid-template-columns: auto auto;
                    } */
                    .body_document{
                        display: grid;
                        grid-template-rows: auto auto auto;
                    }
                    .corps_document{
                        display: flex;
                        flex-direction:column;
                        align-items:center;
                        margin:2% 10%;
                        
                        gap: 2em 0;
                        
                    }
                    .contenu_document{
                        display: grid;
                        grid-template-columns: 48% 48%;
                        justify-content: space-between;
                        /* padding:2em; */
                        /* box-shadow:2px 2px 10px grey; */
                        width:100%;
                        background-color: white ;

                    }
                    .sidebar_info_document p{
                        text-align: center;
                        background-color: antiquewhite;
                        padding-top: 5px;
                    }
                    .sidebar_menu{
                    padding:1em 2em;
                    box-shadow: 2px 2px 10px grey;
                    width:100%;
                   
                    
                    background: rgb(10,107,49);

                    }
                    label.ufr_actuel{
                        font-size: x-large;
                        color: white ; 
                    }

                    .details_sidebar{
                        font-size: large;
                    }
                    .details_sidebar p{
                        padding-left: 30px;
                    }

                    div.bloc_ufr{
                        display:flex;
                        flex-direction:column;
                        gap:1em 0;
                        width: 100%;
                       
                    }

                    label.ufr_actuel{
                        text-align: center;
                        
                        /* text-shadow: 0px 0px 2px brown; */
                    }


                    div.lien_departement{
                        display:flex;
                        justify-content:space-around;
                        width: 100%;
                        /* border:1px solid; */
                        
                    }
                    a.lien_dept{
                        border:1px solid white;
                        padding: 1px 1em;
                        background-color:rgb(132,181,39);
                        color:white;

                    }
                    .bloc_ufr a{
                        text-align:center;
                        
                    }
                    .bloc_ufr a :hover{
                        cursor:pointer;
                    }


                    @media(max-width:800px){
                        .contenu_document{
                            display: grid;
                            grid-template-columns: auto;
                            justify-content: center;
                        }
                    }
                    @media(max-width:500px){
                        .div_doc{
                            display: grid;
                            grid-template-columns: auto;
                        }
                    }
                    @media(max-width:555px){
                        .corps_document{
                            display: grid;
                            grid-template-columns: auto;
                        }
                    }
                   
                </style>



<div class="body_document">
    <div class="nav_document">
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
    <a href="http://localhost/samadoc/ajout-de-documents/" class="bouton_ajout">
		<img src="https://img.icons8.com/ios-glyphs/480/000000/add--v2.png" class="icone_ajout" title="Ajouter un Document">
	</a>
    <div class="corps_document">
        <!-- <div class="sidebar_document"> -->
            <div class="sidebar_menu">
            <?php 
            $page = get_the_title();
                $licence_page =$page;
             // $licence_page=strtolower($licence_page);
                $licence_page=trim($licence_page);
                $_SESSION['nom_page']=$licence_page; //recupérer le nom page

                $con = mysqli_connect("localhost","root","","samadoc");
                $information = mysqli_query($con,"SELECT * FROM sd_structure  WHERE licence_sigle='$licence_page'");
             $tab_structure=mysqli_fetch_array($information);
            $licence=$tab_structure['licence_sigle'];
            $liste_depte=  mysqli_query($con,"SELECT DISTINCT ufr_sigle, departement_sigle, licence_sigle, licence FROM sd_structure WHERE licence_sigle='$licence' ");
            
           ?>
            <div class="bloc_ufr">
                <a href="http://localhost/samadoc/ufr-<?php echo $tab_dept['ufr_sigle']; ?>"><label class="ufr_actuel" > <?php echo $tab_structure['ufr']; ?></label></a>
                    <a href="http://localhost/samadoc/dept-<?php echo $tab_dept['departement_sigle']; ?>"><label class="ufr_actuel" > <?php echo $tab_structure['departement']; ?></label></a>
                 
                 <label class="ufr_actuel" > <?php echo $tab_structure['licence']; ?></label>

                
            </div>
           
                    
            </div>
            

        <!-- </div> -->
        <div class="contenu_document">
        <?php
                    
                    ?><?php
                    mysqli_close($con);

                    $per_page_record = 10;       
                    if (isset($_SESSION['page'])) {    
                        $page=(int)$_SESSION['page'];
                        unset($_SESSION['page']);
                    }    
                    else {    
                    $page=1;    
                    }    
                    $start_from = ($page-1) * $per_page_record;     
                    
                    $con = mysqli_connect("localhost","root","","samadoc");
                    $query = "SELECT * FROM sd_document WHERE licence='$licence_page' LIMIT $start_from, $per_page_record";     
                    $rs_result = mysqli_query ($con, $query);


                    $tab_pdf = array('.pdf','.PDF');
                    $tab_word = array('.docx','.DOCX');
                    $tab_excel = array('.csv','.xlsx','.xlsm');
                    $tab_ppt = array('.ppt','.pptx','.PPT','.PPTX');
                    $icone="";
                    if($nbr_doc !==0){
                    while($table = mysqli_fetch_array( $rs_result)){

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
                        
                        <div class="div_doc">
                                <div class="div_img">
                                <a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" >
                                    <img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto" id="img_doc">
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
                                    <a download="<?php echo $table['nom']; ?>" href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>"><input type="submit" value="Télécharger"></a>
                                </div>
                            </div>

                        <?php
                        
                        }}else{?>
                                <label>Cette UFR ne comporte aucun document enregistrer. </label><br>
                                <label>Veuillez en <a href="http://localhost/samadoc/ajout-de-documents/">ajouter un !</a></label>
                        <?php }
                        ?>
        </div>

        </div>
      

         <!-- PARTI DE PAGINATION -->
<div class="pagination">       
    
    <?php  
                        
        $con = mysqli_connect("localhost","root","","samadoc");
        $query = "SELECT COUNT(*) FROM sd_document WHERE licence='$licence_page'";     
        $rs_result = mysqli_query($con, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = (int)$row[0];
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a class ='active' href='http://localhost/samadoc/disi_code/licence_pagination.php?page=".($page-1)."'> Precedant </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class ='active' href='http://localhost/samadoc/disi_code/licence_pagination.php?page=".$i."'>".$i." </a>";
                                               
          }               
          else  {   
              $pagLink .= "<a class ='active' href='http://localhost/samadoc/disi_code/licence_pagination.php?page=".$i."'>".$i." </a>";     
          }   
        }     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a class ='active' href='http://localhost/samadoc/disi_code/licence_pagination.php?page=".($page+1)."'>  Suivant </a>";   
        } 
        ?>
         

</div>

    <div class="footer_document">
        <?php get_footer();?>
    </div>
</div>
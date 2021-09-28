<?php
/*
Template name: Document_resultat_recherche
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

a.active:active{
    font-size:x-large;
    text-decoration:none;
    color:white;
    text-align:center;
    padding:1px 1em;
    margin:2px;
    background-color:rgb(192,206,0);
    border:2px solid rgb(10,107,49);
    border-radius:5px;
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

                    span{
                        color: white;
                        font-size: large;
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

    <div class="corps_document">
        <!-- <div class="sidebar_document"> -->
            <div class="sidebar_menu">
            <?php 
        $recherche=$_GET['recherche'];
        $recherche = htmlspecialchars($recherche); //pour sécuriser le formulaire contre les intrusions html
        $recherche = trim($recherche); //pour supprimer les espaces dans la requête de l'internaute
        $recherche = strip_tags($recherche); //pour supprimer les balises html dans la requête

            

                $con = mysqli_connect("localhost","root","","samadoc");
                $information = mysqli_query($con,"SELECT * FROM sd_document WHERE nom LIKE '%$recherche%' ");
             $tab_structure=mysqli_fetch_array($information);
             $resultat=mysqli_num_rows($information);

           ?>
            <div class="bloc_ufr">
           
                  
                  <div class="lien_departement">
                      <span> Nombre de reponse: <?php echo  $resultat; ?></span>
                 
                  </div>
               

            </div>
           
                    
            </div>
            

        <!-- </div> -->
        <div class="contenu_document">
        <?php
                        
                    mysqli_close($con);
                    $per_page_record = 2;       
                    if (isset($_SESSION['page'])) {    
                        $page=(int)$_SESSION['page'];
                        unset($_SESSION['page']);
                    }    
                    else {    
                    $page=1;    
                    }    
                    $start_from = ($page-1) * $per_page_record;     
                    
                    $con = mysqli_connect("localhost","root","","samadoc");
                    $query = "SELECT * FROM sd_document WHERE nom LIKE '%$recherche%'  LIMIT $start_from, $per_page_record";     
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
                                    <label >nom: </label> <?php echo $table['nom'];?><br>
                                    <!-- <label >Nature: </label> <?php echo $table['nature'];?><br>
                                    <label >Module: </label> <?php echo $table['module'];?><br>
                                    <label >Niveau: </label> <?php echo $table['niveau'];?><br>
                                    <label >Année: </label> <?php echo $table['annee'];?><br> -->
                                </div>
                                <div class="div_input">
                                    <a download="<?php echo $table['nom']; ?>" href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>"><input type="submit" value="Télécharger"></a>
                                </div>
                            </div>

                        <?php
                        
                        }}else{?>
                                <label>Aucun document trouvé. </label><br>
                              
                        <?php }
                        ?>
        </div>
      

    </div>
         <!-- PARTI DE PAGINATION -->
        <div class="pagination">       
            
            <?php  
                                
                $con = mysqli_connect("localhost","root","","samadoc");
                $query = "SELECT * FROM sd_document WHERE nom LIKE '%$recherche%'";     
                $rs_result = mysqli_query($con, $query);     
                $row = mysqli_fetch_row($rs_result);     
                $total_records = (int)$row[0];
                
            echo "</br>";     
                // Number of pages required.   
                $total_pages = ceil($total_records / $per_page_record);     
                $pagLink = "";       
            
                if($page>=2){   
                    echo "<a href='http://localhost/samadoc/disi_code/resultat_recherche_pagination.php?page=".($page-1)."'> Prev </a>";   
                }       
                        
                for ($i=1; $i<=$total_pages; $i++) {   
                if ($i == $page) {   
                    $pagLink .= "<a class = 'active' href='http://localhost/samadoc/disi_code/resultat_recherche_pagination.php?page=".$i."'>".$i." </a>";
                                                    
                }               
                else  {   
                    $pagLink .= "<a href='http://localhost/samadoc/disi_code/resultat_recherche_pagination.php?page=".$i."'>".$i." </a>";     
                }   
                }     
                echo $pagLink;   
        
                if($page<$total_pages){   
                    echo "<a href='http://localhost/samadoc/disi_code/resultat_recherche_pagination.php?page=".($page+1)."'>  Next </a>";   
                } 
                ?>
                

        </div>

    <div class="footer_document">
        <?php get_footer();?>
    </div>
</div>
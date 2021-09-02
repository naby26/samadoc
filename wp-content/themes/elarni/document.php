<?php
/*
Template name: Document
*/
get_header();
?>
<style>


                    .icone_ajout{
                        width: 30px;
                    }
                    .bouton_ajout:hover{
                        transform: scale(3.5);
                        transition: 0.4s all;
                    }
                    .bouton_ajout{
                        /* height: 50px;
                        width: 50px; */
                        /* background-image: linear-gradient(to right, #00eda4, #6a7df1); */
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
                        display: grid;
                        grid-template-columns: 1fr 4fr;
                    }
                    .contenu_document{
                        display: grid;
                        grid-template-columns: auto auto;
                        justify-content: space-around;
                    }
                    .sidebar_info_document p{
                        text-align: center;
                        background-color: antiquewhite;
                        padding-top: 5px;
                    }
                    .sidebar_document{
                        padding: 25px;
                        border-right: 2px solid;
                        background-color:  rgb(147, 201, 248);
                    }
                    .details_sidebar{
                        font-size: large;
                    }
                    .details_sidebar p{
                        padding-left: 30px;
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
        <div class="sidebar_document">
            <div class="sidebar_menu">
                    <details class="details_sidebar">
                        <summary>Dept MI</summary>
                        <p>
                            <a href="#">MPI</a><br>
                            <a href="#">AgroTic</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept HGRMER</summary>
                        <p>
                            <a href="#"> AHSIHA</a><br>
                            <a href="#">AgroEquipements</a>
                            <a href="#">ERF</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept STA</summary>
                        <p>
                            <a href="#"> TRANA</a><br>
                            <a href="#">TAR</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept APV</summary>
                        <p>
                            <a href="#">PHTP</a><br>
                            <a href="#">ABE</a>
                            <a href="#">AgroForesterie</a>
                            <a href="#">PSP</a><br>
                            <a href="#">PP</a>
                            <a href="#">Foresterie</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept STE</summary>
                        <p>
                            <a href="#">ZSA</a><br>
                            <a href="#">QDAOA</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept GRHPA</summary>
                        <p>
                            <a href="#">Aquaculture</a><br>
                            <a href="#">Pêche</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept NA</summary>
                        <p>
                            <a href="#">NSA</a><br>
                            <a href="#">NHD</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept THRG</summary>
                        <p>
                            <a href="#">NSA</a><br>
                            <a href="#">NHD</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept SEGC</summary>
                        <p>
                            <a href="#">EGFR</a><br>
                            <a href="#">MEAA</a>
                            <a href="#">CPAF</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept SJP</summary>
                        <p>
                            <a href="#">DEF</a><br>
                            <a href="#">AAM</a>
                        </p>
                    </details>
                    <details class="details_sidebar">
                        <summary>Dept MI</summary>
                    </details>
            </div>
            

        </div>
        <div class="contenu_document">
        <?php  
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
                        
                        <div class="div_doc">
                                <div class="div_img">
                                <a href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>" >
                                    <img src="<?php echo $icone; ?>" alt="fichier PDF" class="image_bloc" title="<?php echo $table['description'];?>" width="200px" height="auto" id="img_doc">
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
                                    <a download="<?php echo $table['nom']; ?>" href="http://localhost/samadoc/disi_code/sd_repertoire/<?php echo $table['nom']; ?>"><input type="submit" value="Télécharger"></a>
                                </div>
                            </div>

                        <?php
                        
                        }
                        mysqli_close($con);?>
        </div>
      

    </div>

    <div class="footer_document">
        <?php get_footer();?>
    </div>
</div>
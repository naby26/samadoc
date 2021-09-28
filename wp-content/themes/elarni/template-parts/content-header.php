<style>
/* .page-id-58{
        margin:0%;
    } */


.dt-no-header-builder-content{
    display: flex;
    align-items:center;
}

.rdp{
    display:flex;
    float:right;
    position: relative;
    right: 0;
    bottom:-0.6rem;
    font-size:large;
    gap: 2em;
    
}

.search-module{
    width:100%;
}

    .ul1{
        float: right;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .ul1 li{
        display:inline-block;
    }
    .ul1 li img {
        width:50px;height:auto;
        border-radius: 50%;
    }
 
     img.image{
        width:150px;
        height:100px;
    
    } 


</style>




<div class="dt-no-header-builder-content dt-no-header-elearni">



    <div class="no-header-top">
        <span><?php //echo get_bloginfo( 'description', 'display' ); ?></span>
    </div>

            

    <div class="no-header">
        <div class="no-header-logo-wrapper">
            <div class="dt-logo-container logo-align-left">
                <?php
                if( class_exists( 'Kirki' ) ) { 
                    $use_logo = (int) get_theme_mod( 'use-custom-logo', elearni_defaults('use-custom-logo') );
                    $url      = get_theme_mod( 'custom-logo', elearni_defaults('custom-logo') );

                    if( !empty( $use_logo ) && !empty( $url ) ) {?>
                        <a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
                            <img class="normal_logo" src="<?php echo esc_url( $url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name') ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name') ); ?>"/>
                        </a><?php
                    }

                    if( empty( $use_logo ) ){?>
                        <div class="logo-title">
                            <h1 id="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('title'); ?>"><?php bloginfo('title'); ?></a></h1>
                        </div><?php
                    }
                } else { ?>
                    <a  rel="home">
                         <img class="image" src="http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN-LOGO-e1632675134890.png" <?php //echo ELEARNI_THEME_URI.'/images/logo.png'; ?>    alt="Logo USSEIN" title="Universite du Sine Saloum"/>  
                    </a><?php
                } ?>
            </div>    
        </div> 
        <!-- href="<?php echo esc_url( home_url('/') ); ?>" -->
        <div class="no-header-menu dt-header-menu" data-menu="dummy-menu">
            <?php
                $args = array(
                    'theme_location' => 'main-menu',
                    'container_class' => 'menu-container',
                    'items_wrap' => '<ul id="%1$s" class="%2$s" data-menu="dummy-menu"> <li class="close-nav"></li> %3$s </ul> <div class="sub-menu-overlay"></div>',
                    'menu_class' => 'dt-primary-nav',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'fallback_cb' => '',
					'walker' => new DTWPHeaderMenuWalker					
                );

                if (class_exists('DTCorePlugin')) {
                    $args['walker'] = new DTHeaderMenuWalker;
                }

                wp_nav_menu( $args );
            ?>
        </div>





        <!-- Mobile Menu -->
        <div class="mobile-nav-container mobile-nav-offcanvas-right" data-menu="dummy-menu">
            <div class="menu-trigger menu-trigger-icon" data-menu="dummy-menu"><i></i><span><?php esc_html_e('Menu', 'elearni'); ?></span></div>
            <div class="mobile-menu" data-menu="dummy-menu"></div>
            <div class="overlay"></div>
        </div>
        <!-- Mobile Menu -->
      
        <div class="alignright search-module simple-header-search input_recherche">
                         <?php get_search_form( true ); ?>  
                    </div>

            

       
    </div>
</div>
<div class="rdp">
                    <div>
                        <a href="http://localhost/samadoc/disi_code/deconnexion.php">Déconnexion</a>
                    </div>
                    <div class="profil">
                    <?php 
                    if($_SESSION['status']==0){
                    ?>
                    <a href="http://localhost/samadoc/profil-utilisateur/"><img src="https://img.icons8.com/fluency/48/000000/user-male-circle.png" title="Mon profil" alt=" " width="50px"/></a>
                    <?php }
                    else { ?>
                     <a href="http://localhost/samadoc/profil-administrateur/"><img src="https://img.icons8.com/fluency/48/000000/user-male-circle.png" title="Mon profil" alt=" " width="50px"/></a>
                    <?php } ?>
                    </div>

            </div>

 <!-- <ul class="ul1">
                    <li id="li1"> <a href="http://localhost/samadoc/profil-utilisateur/"><img src="https://img.icons8.com/fluency/48/000000/user-male-circle.png" title="Mon profil" alt=" " width="50px"/></a></li>
                    </ul>   -->
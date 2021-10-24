
<style>
    #logo_ussein{
    width: 100%;
    padding:0px;    
    }
    #logo_ussein img{
        padding: 0px;
    }

</style>
<div class="dt-no-header-builder-content dt-no-header-elearni ">

    <!-- <div class="no-header-top"> -->
        <!-- <span><?php echo get_bloginfo( 'description', 'display' ); ?></span> -->
    <!-- </div> -->

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
                    <a id="logo_ussein" rel="home">
                         <img class="image" src="http://localhost/samadoc/wp-content/uploads/2021/09/USSEIN-LOGO-e1632675134890.png" <?php //echo ELEARNI_THEME_URI.'/images/logo.png'; ?>    alt="Logo USSEIN" title="Universite du Sine Saloum"/>  
                    </a>
                    <?php
                } ?>
            </div>    
        </div> 

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

        <div class="alignright search-module simple-header-search">
            <?php get_search_form( true ); ?>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

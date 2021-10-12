<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>

<style>
    .error404{
        background-image: url(http://localhost/samadoc/disi_code/ussein);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body <?php body_class(); ?>>

<div class="wrapper <?php echo esc_attr($type); ?>" style="<?php echo esc_attr($style); ?>">
	<div class="container">
        <div class="center-content-wrapper">
            <div class="center-content"><?php
                $pageid = cs_get_option( 'notfound-pageid' );
                if( cs_get_option( 'enable-404message' ) && !empty($pageid) ):
                    $page = get_post( $pageid, ARRAY_A );
					$content = do_shortcode( stripslashes( $page['post_content'] ) );
					echo elearni_wp_kses( $content );
                elseif( cs_get_option( 'enable-404message' ) ):
					echo '<div class="error-box square"><div class="error-box-inner"><h3>'.esc_html__('Oops!', 'elearni').'</h3><h2></h2><h4>'.esc_html__('Page Introuvable', 'elearni').'</h4></div></div>';
					echo '<div class="dt-sc-hr-invisible-xsmall"></div>';
					echo '<p>'.esc_html__(".", "elearni").'</p>';
					echo '<div class="dt-sc-hr-invisible-xsmall"></div>';
                    echo '<a class="dt-sc-button filled small" target="_blank" href="'.esc_url(home_url('/')).'">'.esc_html__('Accueil','elearni').'</a>';
                endif; ?>
            </div>
        </div>
    </div>    
</div>
<?php wp_footer(); ?>
</body>
</html>
<style>
    .dt-sc-button{
        width:50%;
        border-radius: 25px;
        font-size: 50px;
        
    }
    .dt-sc-button:hover{
        background: rgb(10, 107, 49);
           transform:scale(1.4);
            color: white;
            transition: 1s;
			background:rgb(141, 54, 20)
    }
</style>
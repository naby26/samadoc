<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

	<?php if( is_sticky( $post_ID ) ) echo '<span class="sticky-post">'.esc_html__('Featured', 'elearni').'</span>'; ?>
	<h1><a href="<?php echo get_permalink( $post_ID );?>" title="<?php printf(esc_attr__('Permalink to %s','elearni'), the_title_attribute('echo=0'));?>"><?php the_title();?></a></h1>
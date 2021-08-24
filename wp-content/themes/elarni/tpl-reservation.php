<?php
/*
Template Name: Reservation Template
*/
get_header();

    $settings = get_post_meta($post->ID,'_tpl_default_settings',TRUE);
    $settings = is_array( $settings ) ?  array_filter( $settings )  : array();

    $global_breadcrumb = cs_get_option( 'show-breadcrumb' );

    $header_class = '';
    if( !$settings['enable-sub-title'] || !isset( $settings['enable-sub-title'] ) ) {
        if( isset( $settings['show_slider'] ) && $settings['show_slider'] ) {
            if( isset( $settings['slider_type'] ) ) {
                $header_class =  $settings['slider_position'];
            }
        }
    }
    
    if( !empty( $global_breadcrumb ) ) {
        if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {
            $header_class = isset( $settings['breadcrumb_position'] ) ? $settings['breadcrumb_position'] : '';
		}
	}?>

<!-- ** Header Wrapper ** -->
<div id="header-wrapper" class="<?php echo esc_attr($header_class); ?>">

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

    <!-- ** Slider ** -->
    <?php
        if( !$settings['enable-sub-title'] || !isset( $settings['enable-sub-title'] ) ) {
            if( isset( $settings['show_slider'] ) && $settings['show_slider'] ) {
                if( isset( $settings['slider_type'] ) ) {
                    if( $settings['slider_type'] == 'layerslider' && !empty( $settings['layerslider_id'] ) ) {
                        echo '<div id="slider">';
                        echo '  <div id="dt-sc-layer-slider" class="dt-sc-main-slider">';
                        echo    do_shortcode('[layerslider id="'.$settings['layerslider_id'].'"/]');
                        echo '  </div>';
                        echo '</div>';
					} elseif( $settings['slider_type'] == 'revolutionslider' && !empty( $settings['revolutionslider_id'] ) ) {
                        echo '<div id="slider">';
                        echo '  <div id="dt-sc-rev-slider" class="dt-sc-main-slider">';
                        echo    do_shortcode('[rev_slider '.$settings['revolutionslider_id'].'/]');
                        echo '  </div>';
                        echo '</div>';
					} elseif( $settings['slider_type'] == 'customslider' && !empty( $settings['customslider_sc'] ) ) {
                        echo '<div id="slider">';
                        echo '  <div id="dt-sc-custom-slider" class="dt-sc-main-slider">';
                        echo    do_shortcode( $settings['customslider_sc'] );
                        echo '  </div>';
                        echo '</div>';
					}
                }
            }
        }
    ?><!-- ** Slider End ** -->

    <!-- ** Breadcrumb ** -->
    <?php
        # Global Breadcrumb
        if( !empty( $global_breadcrumb ) ) {
            if( isset( $settings['enable-sub-title'] ) && $settings['enable-sub-title'] ) {
                $breadcrumbs = array();
                $bstyle = elearni_cs_get_option( 'breadcrumb-style', 'default' );

                if( $post->post_parent ) {
                    $parent_id  = $post->post_parent;
                    $parents = array();

                    while( $parent_id ) {
                        $page = get_page( $parent_id );
                        $parents[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
                        $parent_id  = $page->post_parent;
                    }

                    $parents = array_reverse( $parents );
                    $breadcrumbs = array_merge_recursive($breadcrumbs, $parents);
                }

                $breadcrumbs[] = the_title( '<span class="current">', '</span>', false );
                $style = elearni_breadcrumb_css( $settings['breadcrumb_background'] );

                elearni_breadcrumb_output ( the_title( '<h1>', '</h1>',false ), $breadcrumbs, $bstyle, $style );
            }
        }
    ?><!-- ** Breadcrumb End ** -->                
</div><!-- ** Header Wrapper - End ** -->

<!-- **Main** -->
<div id="main">

    <!-- ** Container ** -->
    <div class="container"><?php
        $page_layout  = array_key_exists( "layout", $settings ) ? $settings['layout'] : "content-full-width";
        $layout = elearni_page_layout( $page_layout );
        extract( $layout );

        if ( $show_sidebar ) {
            if ( $show_left_sidebar ) {
                $sticky_class = ( array_key_exists('enable-sticky-sidebar', $settings) && $settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : '';?>
                
                <!-- Secondary Left -->
                <section id="secondary-left" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class );?>"><?php
                    elearni_show_sidebar( 'page', $post->ID, 'left' ); ?></section><!-- Secondary Left End --><?php
            }
        }?>

        <!-- Primary -->
        <section id="primary" class="<?php echo esc_attr( $page_layout );?>"><?php
            if( have_posts() ) {
                while( have_posts() ) {
                    the_post();
                    get_template_part( 'framework/loops/content', 'page' );
                }
            }

            if( isset($_REQUEST['action'] ) ):
                if( $_REQUEST['action'] === "success" ):
                    $successmsg = cs_get_option('success_message');
                    $successmsg = isset($successmsg) ? '<div class="dt-sc-success-box">'.$successmsg.'</div>' : '';
                    echo do_shortcode( $successmsg );

                    $page_id = $post->ID;
                    $page_link = get_page_link($page_id);
                    esc_html_e("<p>To continue or make another one, please click this button</p>",'elearni');
                    echo do_shortcode('[dt_sc_button title="Back to Reservation" size="medium" link="url:'.rawurlencode($page_link).'" style="bordered" /]');
                elseif( $_REQUEST['action'] === "error" ):
                    $errormsg = cs_get_option('error_message');
                    $errormsg = isset($errormsg) ? '<div class="dt-sc-error-box">'.$errormsg.'</div>' : '';
                    echo do_shortcode( $errormsg );
                endif;
            else:

                $staffids = isset($_REQUEST['staffids']) ? $_REQUEST['staffids'] : '';
                $serviceids = isset($_REQUEST['serviceids']) ? $_REQUEST['serviceids'] : '';

                $time_format = get_option( 'time_format' );
                $fetch_start_time = isset($_REQUEST['start-time']) ? date($time_format, strtotime($_REQUEST['start-time'])) : date($time_format, strtotime('8:00 am'));
                $fetch_end_time = isset($_REQUEST['end-time']) ? $_REQUEST['end-time'] : '';?>

                    <input type="hidden" id="hidden-end-time" name="hidden-end-time" value="<?php echo esc_attr($fetch_end_time); ?>">

                    <div class="column dt-sc-one-half first">
                        <h5><?php esc_html_e('Available Services','elearni');?></h5>
                        <select name="services" class="dt-select-service">
                            <option value=""><?php esc_html_e('Select','elearni');?></option><?php
                            $services_args = array('post_type'=>'dt_services', 'posts_per_page'=>'-1', 'suppress_filters' => false );
                            if($serviceids != '') {
                                $serviceids_arr = explode(',', $serviceids);
                                $services_args['post__in'] = $serviceids_arr;
                            }

                            $cp_services = get_posts( $services_args );
                            if( $cp_services ) {
                                foreach( $cp_services as $cp_service ) {
                                    $id = $cp_service->ID; 
                                    $title = $cp_service->post_title; ?>
                                    <option value="<?php echo esc_attr($id); ?>" <?php if(isset($_REQUEST['services'])) echo selected($_REQUEST['services'], $id, false); ?>><?php echo esc_html($title); ?></option><?php
                                }
                            }?>
                        </select>
                    </div>

                    <div class="column dt-sc-one-half">
                        <h5><?php esc_html_e('Staffs','elearni');?></h5>
                        <select name="staff" class="dt-select-staff">
                            <option value=""><?php esc_html_e('Select','elearni');?></option><?php
                            $staffs_args = array( 'post_type' => 'dt_staffs',
                                'posts_per_page' => '-1',
                                'meta_query'=>array() );

                            if($staffids != '') {
                                $staffids_arr = explode(',', $staffids);
                                $staffs_args['post__in'] = $staffids_arr;
                            }

                            if(isset($_REQUEST['services'])) {
                                $staffs_args['meta_query'][] = array(
                                    'key'     => '_services',
                                    'value'   =>  $_REQUEST['services'],
                                    'compare' => 'LIKE'
                                );
                            }

                            $cp_staffs = get_posts( $staffs_args );
                            if( $cp_staffs ) {
                                foreach( $cp_staffs as $cp_staff ) {
                                    $id = $cp_staff->ID;
                                    $title = $cp_staff->post_title; ?>
                                    <option value="<?php echo esc_attr($id); ?>" <?php if(isset($_REQUEST['staff'])) echo selected($_REQUEST['staff'], $id, false); ?>><?php echo esc_html($title); ?></option><?php
                                }
                            }?>
                        </select>
                    </div>

                    <div class="dt-sc-hr-invisible-small"> </div>
                    <div class="dt-sc-clear"> </div>
                    <div class="dt-sc-title with-right-border-decor"><h3><?php esc_html_e('Time','elearni');?></h3></div>
                    <div class="dt-sc-hr-invisible-very-small"> </div>
                    <div class="dt-sc-clear"> </div>

                    <div class="column dt-sc-one-fourth first">
                        <h5><?php esc_html_e('I am available on','elearni');?></h5>
                        <p class="form-calender-icon"><input type="text" id="datepicker" name="date" value="<?php if(isset($_REQUEST['date'])) echo esc_attr($_REQUEST['date']); else echo date('Y-m-d'); ?>"/></p>
                    </div>

                    <div class="column dt-sc-three-fourth">

                        <div class="column dt-sc-one-half first">
                            <h5><?php esc_html_e('Start :','elearni');?></h5><?php
                                $time_format = get_option( 'time_format' ); 
                                $fetch_start_time = isset($_REQUEST['start-time']) ? date($time_format, strtotime($_REQUEST['start-time'])) : date($time_format, strtotime('8:00 am'));
                                $fetch_end_time = isset($_REQUEST['end-time']) ? date($time_format, strtotime($_REQUEST['end-time'])) : date($time_format, strtotime('11:00 pm'));
                                $selected = 'selected="selected"'; ?>
                            <select name="start-time" class='start-time'>
                                <option value="00:00" <?php if( $fetch_start_time == date($time_format, strtotime('12:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('12:00 am')); ?></option>    
                                <option value="01:00" <?php if( $fetch_start_time == date($time_format, strtotime('1:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('1:00 am')); ?></option>
                                <option value="02:00" <?php if( $fetch_start_time == date($time_format, strtotime('2:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('2:00 am')); ?></option>
                                <option value="03:00" <?php if( $fetch_start_time == date($time_format, strtotime('3:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('3:00 am')); ?></option>
                                <option value="04:00" <?php if( $fetch_start_time == date($time_format, strtotime('4:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('4:00 am')); ?></option>
                                <option value="05:00" <?php if( $fetch_start_time == date($time_format, strtotime('5:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('5:00 am')); ?></option>
                                <option value="06:00" <?php if( $fetch_start_time == date($time_format, strtotime('6:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('6:00 am')); ?></option>
                                <option value="07:00" <?php if( $fetch_start_time == date($time_format, strtotime('7:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('7:00 am')); ?></option>
                                <option value="08:00" <?php if( $fetch_start_time == date($time_format, strtotime('8:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('8:00 am')); ?></option>
                                <option value="09:00" <?php if( $fetch_start_time == date($time_format, strtotime('9:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('9:00 am')); ?></option>
                                <option value="10:00" <?php if( $fetch_start_time == date($time_format, strtotime('10:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('10:00 am')); ?></option>
                                <option value="11:00" <?php if( $fetch_start_time == date($time_format, strtotime('11:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('11:00 am')); ?></option>
                                <option value="12:00" <?php if( $fetch_start_time == date($time_format, strtotime('12:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('12:00 pm')); ?></option>
                                <option value="13:00" <?php if( $fetch_start_time == date($time_format, strtotime('1:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('1:00 pm')); ?></option>
                                <option value="14:00" <?php if( $fetch_start_time == date($time_format, strtotime('2:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('2:00 pm')); ?></option>
                                <option value="15:00" <?php if( $fetch_start_time == date($time_format, strtotime('3:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('3:00 pm')); ?></option>
                                <option value="16:00" <?php if( $fetch_start_time == date($time_format, strtotime('4:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('4:00 pm')); ?></option>
                                <option value="17:00" <?php if( $fetch_start_time == date($time_format, strtotime('5:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('5:00 pm')); ?></option>
                                <option value="18:00" <?php if( $fetch_start_time == date($time_format, strtotime('6:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('6:00 pm')); ?></option>
                                <option value="19:00" <?php if( $fetch_start_time == date($time_format, strtotime('7:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('7:00 pm')); ?></option>
                                <option value="20:00" <?php if( $fetch_start_time == date($time_format, strtotime('8:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('8:00 pm')); ?></option>
                                <option value="21:00" <?php if( $fetch_start_time == date($time_format, strtotime('9:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('9:00 pm')); ?></option>
                                <option value="22:00" <?php if( $fetch_start_time == date($time_format, strtotime('10:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('10:00 pm')); ?></option>
                                <option value="23:00" <?php if( $fetch_start_time == date($time_format, strtotime('11:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('11:00 pm')); ?></option>
                            </select>
                        </div>

                        <div class="column dt-sc-one-half">
                            <h5><?php esc_html_e('End :','elearni');?></h5>
                            <select name="end-time" class='end-time'>
                                <option value="09:00" <?php if( $fetch_end_time == date($time_format, strtotime('9:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('9:00 am')); ?></option>    
                                <option value="10:00" <?php if( $fetch_end_time == date($time_format, strtotime('10:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('10:00 am')); ?></option>  
                                <option value="11:00" <?php if( $fetch_end_time == date($time_format, strtotime('11:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('11:00 am')); ?></option>  
                                <option value="12:00" <?php if( $fetch_end_time == date($time_format, strtotime('12:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('12:00 pm')); ?></option>
                                <option value="13:00" <?php if( $fetch_end_time == date($time_format, strtotime('1:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('1:00 pm')); ?></option>    
                                <option value="14:00" <?php if( $fetch_end_time == date($time_format, strtotime('2:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('2:00 pm')); ?></option>    
                                <option value="15:00" <?php if( $fetch_end_time == date($time_format, strtotime('3:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('3:00 pm')); ?></option>    
                                <option value="16:00" <?php if( $fetch_end_time == date($time_format, strtotime('4:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('4:00 pmm')); ?></option>
                                <option value="17:00" <?php if( $fetch_end_time == date($time_format, strtotime('5:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('5:00 pm')); ?></option>    
                                <option value="18:00" <?php if( $fetch_end_time == date($time_format, strtotime('6:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('6:00 pm')); ?></option>    
                                <option value="19:00" <?php if( $fetch_end_time == date($time_format, strtotime('7:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('7:00 pm')); ?></option>    
                                <option value="20:00" <?php if( $fetch_end_time == date($time_format, strtotime('8:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('8:00 pm')); ?></option>
                                <option value="21:00" <?php if( $fetch_end_time == date($time_format, strtotime('9:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('9:00 pm')); ?></option>    
                                <option value="22:00" <?php if( $fetch_end_time == date($time_format, strtotime('10:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('10:00 pm')); ?></option> 
                                <option value="23:00" <?php if( $fetch_end_time == date($time_format, strtotime('11:00 pm')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('11:00 pm')); ?></option> 
                                <option value="23:59" <?php if( $fetch_end_time == date($time_format, strtotime('12:00 am')) ){ echo esc_attr( $selected ); } ?>><?php echo date($time_format, strtotime('12:00 am')); ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="dt-sc-clear"></div>

                    <p class="aligncenter"><a href="#" class="dt-sc-button medium bordered show-time"><?php esc_html_e('Show Time','elearni');?></a></p>

                    <div class="dt-sc-hr-invisible-large"> </div>
                    <div class="dt-sc-clear"> </div> 
                    <div class="available-times"></div>

                    <div id="personalinfo" class="personal-info" style="display:none;">
                        <div class="dt-sc-title with-right-border-decor"><h3><?php esc_html_e('Personal Info','elearni');?></h3></div>
                        <div class="dt-sc-hr-invisible-very-small"> </div>
                        <div class="dt-sc-clear"> </div>

                        <div class="column dt-sc-one-half first">
                            <p><input type="text" name="name" value="<?php if(isset($_REQUEST['cli-name'])) echo esc_attr($_REQUEST['cli-name']); ?>" placeholder="<?php esc_attr_e('Name:','elearni');?>"></p>
                        </div>
                        <div class="column dt-sc-one-half">
                            <p><input type="email" name="email" value="<?php if(isset($_REQUEST['cli-email'])) echo esc_attr($_REQUEST['cli-email']); ?>" required placeholder="<?php esc_attr_e('Email:','elearni');?>"></p>
                        </div>
                        <div class="column dt-sc-one-half first">
                            <p><input type="text" name="phone" value="<?php if(isset($_REQUEST['cli-phone'])) echo esc_attr($_REQUEST['cli-phone']); ?>" required placeholder="<?php esc_attr_e('Phone:','elearni');?>"></p>
                        </div>
                        <div class="column dt-sc-one-half">
                            <div class="choose-payment" style="display:none;"><?php
                                $payatarrival = cs_get_option('enable-pay-at-arrival');
                                $paypal = cs_get_option('enable-paypal');?>
                                <select name="payment_type">
                                    <option value=""><?php esc_html_e('Choose Payment','elearni');?></option>
                                    <?php if( !empty($payatarrival) ): ?>
                                        <option value="local"><?php esc_html_e('Pay At Arrival','elearni');?></option>
                                    <?php endif;?>
                                    <?php if( !empty($paypal) ): ?>
                                        <option value="paypal"><?php esc_html_e('Pay with Paypal','elearni');?></option>
                                    <?php endif;?>
                                </select>
                            </div>
                        </div>
                        <textarea name="note" placeholder="<?php esc_attr_e('Note:','elearni');?>"><?php if(isset($_REQUEST['cli-msg'])) echo esc_attr($_REQUEST['cli-msg']); ?></textarea><?php
                            $temp = $ctemp = rand(3212, 8787);
                            $temp = str_split($temp, 1);?>

                        <div class="column dt-sc-one-half first">
                            <p><input type="text" name="captcha" required  placeholder="<?php esc_attr_e('Captcha','elearni');?>"></p>
                            <input type="hidden" name="hiddencaptcha" readonly="readonly" value="<?php echo esc_attr($ctemp);?>"/>
                        </div>

                        <div class="column dt-sc-one-half">
                            <p><span class="dt-sc-captcha">
                                <?php echo esc_html($temp[0]);?>
                                <sup><?php echo esc_html($temp[1]);?></sup>
                                <?php echo esc_html($temp[2]);?>
                                <sub><?php echo esc_html($temp[3]);?></sub>
                            </span></p>
                        </div>
                    </div>

                    <div class="dt-sc-clear"> </div>

                    <p class="aligncenter"><a href="#" class="dt-sc-button medium bordered schedule-it" style="display:none;"><?php esc_html_e('Schedule It', 'elearni'); ?></a></p>
                <?php
            endif;?>
        </section><!-- Primary End --><?php

        if ( $show_sidebar ) {
            if ( $show_right_sidebar ) {
                $sticky_class = ( array_key_exists('enable-sticky-sidebar', $settings) && $settings['enable-sticky-sidebar'] == 'true' ) ? ' sidebar-as-sticky' : '';?>

                <!-- Secondary Right -->
                <section id="secondary-right" class="secondary-sidebar <?php echo esc_attr( $sidebar_class.$sticky_class );?>"><?php
                    elearni_show_sidebar( 'page', $post->ID, 'right' ); ?></section><!-- Secondary Right End --><?php
            }
        }?>
    </div>
    <!-- ** Container End ** -->
    
</div><!-- **Main - End ** -->    
<?php get_footer(); ?>
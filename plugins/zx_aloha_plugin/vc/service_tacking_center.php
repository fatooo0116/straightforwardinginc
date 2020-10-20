<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function service_tracking_center(){
    vc_map(
        array(
            'name'            => __('Service Tracking Center', 'psky'),
            'base'            => 'service_tracking_center',
            "category" => array('STRIGHT'),
            //  "icon" => plugins_url('../img/slider.png', __FILE__),
            /*
            'content_element' => true,
            'show_settings_on_create' => false,
            "js_view" => 'VcColumnView',
            */
            "params" => array(              

                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title_top",
                    "value" => __( "", "my-text-domain" ),
                    "admin_label" => true,
                ),  





                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title1",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page1"
                ), 
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Content", "my-text-domain" ),
                    "param_name" => "content1",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page1"
                ), 
                array(
                  "type" => "attach_image",
                  "holder" => "div",
                  "class" => "",
                  "heading" => __("Image", 'psky'),
                  "param_name" => "cimg1",
                  "group" => "page1"
                )  
                              
                                                               
            )
        )
    );
}
add_action( 'vc_before_init', 'service_tracking_center' );







/*
 *  ShortCode
 *
 * */
function service_tracking_center_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title_top'=>'',
       
        'title1'=>'',
        'content1' => '',        
        'cimg1'=>'',

        'title2'=>'',
        'content2' => '',        
        'cimg2'=>'',

        'title3'=>'',
        'content3' => '',        
        'cimg3'=>'',

        'title4'=>'',
        'content4' => '',        
        'cimg4'=>'',
        
        'title5'=>'',
        'content5' => '',        
        'cimg5'=>'', 

    ), $atts ) );

   
    $all_link = vc_build_link( $all_link);
    $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
        <section  id="service_tracking_center" class="">     
            <div class="header box_width">
                <h3><?php echo $title; ?></h3>
                <div class="subtitle"><?php echo $subtitle; ?></div>
            </div>       
            
            <div class="inner    box_width">
                    <div class="item">
                        <h4><span><?php echo $b_title1; ?></span></h4>
                        <div class="content">
                            <?php echo $b_cont1; ?>
                        </div>    
                    </div>

                    <div class="item">
                        <h4><span><?php echo $b_title2; ?></span></h4>
                        <div class="content">
                        <?php echo $b_cont2; ?>
                        </div>    
                    </div>
                    
                    <div class="item">
                        <h4><span><?php echo $b_title3; ?></span></h4>
                        <div class="content">
                        <?php echo $b_cont3; ?>
                        </div>    
                    </div>                    
            </div>
        </section>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'service_tracking_center', 'service_tracking_center_fun' );

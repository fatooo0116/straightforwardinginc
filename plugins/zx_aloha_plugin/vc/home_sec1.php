<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function home_sec1(){
    vc_map(
        array(
            'name'            => __('Home Section1', 'psky'),
            'base'            => 'home_sec1',
            "category" => array('STRIGHT'),
            //  "icon" => plugins_url('../img/slider.png', __FILE__),
            /*
              'content_element' => true,
              'show_settings_on_create' => false,
              "js_view" => 'VcColumnView',
            */
            "params" => array(
              
              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Privacy Top Title", "my-text-domain" ),
                "param_name" => "p_top_title",
                "value" => __( "", "my-text-domain" ),
              ),

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Privacy Top Content", "my-text-domain" ),
                "param_name" => "p_top_content",
                "value" => __( "", "my-text-domain" ),
              ),   
              
              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Right Image", 'psky'),
                "param_name" => "rimg",
                "admin_label" => true,
              ),              
              
              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Background Image", 'psky'),
                "param_name" => "bkimg",
                "admin_label" => true,
              ),               
              
            )
        )
    );
}
add_action( 'vc_before_init', 'home_sec1' );







/*
 *  ShortCode
 *
 * */
function home_sec1_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'p_top_title'=>'',
        'p_top_content'=>'',
        'rimg'=>'',
        'bkimg'=>''
        
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 
    // $href = vc_build_link( $mlink);
    $bkimg = wp_get_attachment_image_src( $bkimg, 'full');
    $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
      <div id="home_sec1">
        
        <h1>Beside and Beyond</h1>
       <h4>More than providing shipping service,<br/>
we are your in-house logistics management team and we help you to go beyond.</h4>

        <div class="inner inner_bk"   >
        
        </div>        
      </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'home_sec1', 'home_sec1_fun' );

<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function why_sec3(){
    vc_map(
        array(
            'name'            => __('Why Section3', 'psky'),
            'base'            => 'why_sec3',
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
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title",
                "value" => __( "", "my-text-domain" ),
              ),

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Small Title", "my-text-domain" ),
                "param_name" => "stitle",
                "value" => __( "", "my-text-domain" ),
              ),   
              
              array(
                "type" => "attach_images",
                "holder" => "div",
                "class" => "",
                "heading" => __("Slider Image", 'psky'),
                "param_name" => "rimgs",
                "admin_label" => true,
              ),              
              
              array(
                "type" => "textarea",
                "holder" => "div",
                "class" => "",
                "heading" => __("Content", 'psky'),
                "param_name" => "content1",
                "admin_label" => true,
              ),               
              
            )
        )
    );
}
add_action( 'vc_before_init', 'why_sec3' );







/*
 *  ShortCode
 *
 * */
function why_sec3_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title'=>'',
        'stitle'=>'',
        'rimgs'=>'',
        'content1'=>''
        
    ), $atts ) );

    $rimgs = explode(',',$rimgs);

    ob_start();
    ?>
      <div id="why_sec3">
          <h3><?php echo $title; ?></h3>
          <h4><?php echo $stitle; ?></h4>
          <div class="inner">
              <div class="slider  owl-carousel">
              <?php 
                    foreach( $rimgs as $image_id ){
                      $images = wp_get_attachment_image_src( $image_id, 'full' );
                      echo' <div class="aloha_slide"><img src="'. $images[0] .'" alt="" data-mce-src="'. $images[0] .'"></div>';
                    }                
                ?>
              </div>
          </div>
          <div class="content"><?php  echo $content1 ?></div>
      </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'why_sec3', 'why_sec3_fun' );

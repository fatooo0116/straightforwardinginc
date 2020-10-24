<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function why_sec4(){
    vc_map(
        array(
            'name'            => __('Why Section4', 'psky'),
            'base'            => 'why_sec4',
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
                "param_name" => "title1",
                "value" => __( "", "my-text-domain" ),
              ),

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Small title", "my-text-domain" ),
                "param_name" => "stitle",
                "value" => __( "", "my-text-domain" ),
              ),   

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content1",
                "value" => __( "", "my-text-domain" ),
              ), 
              
            
              
              array(
                "type" => "attach_images",
                "holder" => "div",
                "class" => "",
                "heading" => __("Slider Images", 'psky'),
                "param_name" => "bkimgs",
                "admin_label" => true,
              ),               
              
            )
        )
    );
}
add_action( 'vc_before_init', 'why_sec4' );







/*
 *  ShortCode
 *
 * */
function why_sec4_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title1'=>'',
        'stitle'=>'',
        'content1'=>'',        
        'bkimgs'=>''
        
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 
    // $href = vc_build_link( $mlink);
    // $bkimg = wp_get_attachment_image_src( $bkimg, 'full');
    // $rimg = wp_get_attachment_image_src( $rimg, 'full');


    $image_ids=explode(',',$bkimgs);
 

    ob_start();
    ?>
      <div id="why_sec4" class="wave_bk">
       
        <div class="inner  box_width  clearfix">

            <div class="left">
              <div class="slider">
                <?php 
                    foreach( $image_ids as $image_id ){
                      $images = wp_get_attachment_image_src( $image_id, 'full' );
                      echo' <div class="aloha_slide"><img src="'. $images[0] .'" alt="" data-mce-src="'. $images[0] .'"></div>';
                    }                
                ?>
              </div>              
            </div>

            <div class="right  infobox">
               <h3><?php  echo $title1; ?></h3>
               <h4><?php  echo $stitle; ?></h4>
              <div class="content">a1a1
                <?php  echo $content1; ?>
              </div>              
            </div>

        </div>        
      </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'why_sec4', 'why_sec4_fun' );

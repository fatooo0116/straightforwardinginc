<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function why_sec1(){
    vc_map(
        array(
            'name'            => __('Why Section1', 'psky'),
            'base'            => 'why_sec1',
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
                "heading" => __( "Video Link", "my-text-domain" ),
                "param_name" => "video_link",
                "value" => __( "", "my-text-domain" ),
              ),  
              

              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Image", 'psky'),
                "param_name" => "bkimg1",                 
                "group" => "Air"              
              ),  

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Small Title", "my-text-domain" ),
                "param_name" => "small_title",
                "value" => __( "", "my-text-domain" ),
              ),   
              
              
              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content1",
                "value" => __( "", "my-text-domain" ),
              ),  
              
            )
        )
    );
}
add_action( 'vc_before_init', 'why_sec1' );







/*
 *  ShortCode
 *
 * */
function why_sec1_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title'=>'',
        'small_title'=>'',
        'bkimg1'=>'',
        'video_link'=>'',
        'content1'=>'',                
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 
    // $href = vc_build_link( $mlink);
    $bkimg1 = wp_get_attachment_image_src( $bkimg1, 'full');
    // $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
      <div id="why_sec1">
        <div class="mask"></div>
       <h3><?php echo $title; ?></h3>
        <div class="inner  box_width  clearfix">
          <div  class=" video  js-modal-btn "   data-video-id="<?php echo $video_link; ?>">          
          <?php 
            if($bkimg1[0]){
              echo '<img src="'.$bkimg1[0].'">';
            }
          ?>
          </div>        
          <div class="text"> 
            <h4><?php echo $small_title; ?></h4>
            <div class="content">
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
add_shortcode( 'why_sec1', 'why_sec1_fun' );

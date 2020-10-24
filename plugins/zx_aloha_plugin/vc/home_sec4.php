<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function home_sec4(){
    vc_map(
        array(
            'name'            => __('Home Section4', ''),
            'base'            => 'home_sec4',
            "category" => array('STRIGHT'),
            //  "icon" => plugins_url('../img/slider.png', __FILE__),
            /*
              'content_element' => true,
              'show_settings_on_create' => false,
              "js_view" => 'VcColumnView',
            */
            "params" => array(

              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Background Image", 'psky'),
                "param_name" => "bkimg",
                "admin_label" => true,   
                "group" => "left"             
              ),   

              
              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title1",
                "value" => __( "", "my-text-domain" ),
                "group" => "right"
              ),

              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Small Title", "my-text-domain" ),
                "param_name" => "small_title",
                "value" => __( "", "my-text-domain" ),
                "group" => "right"
              ),

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content1",
                "value" => __( "", "my-text-domain" ),
                "group" => "right"
              ),   
                                    
               
              
              array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __( "Read More", "my-text-domain" ),
                "param_name" => "btn_link",
                "value" => __( "", "my-text-domain" ),
                "group" => "right"
              ),  


              
            )
        )
    );
}
add_action( 'vc_before_init', 'home_sec4' );







/*
 *  ShortCode
 *
 * */
function home_sec4_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title1'=>'',
        'small_title'=>'',
        'content1'=>'',        
        'bkimg'=>'',
        'btn_link'=>'',        
        
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 

    $href = vc_build_link( $mlink);
    $bkimg = wp_get_attachment_image_src( $bkimg, 'full');
    // $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
      <div id="home_sec4">
        <div class="inner">
              <div class="left">
                <?php  if($bkimg[0]){ ?>
                    <img src="<?php echo $bkimg[0]; ?>" />
                <?php } ?>
              </div>
              <div class="right">
                  <h3><?php echo $title1; ?></h3>
                  <h4><?php echo $small_title; ?></h4>
                  <div class="content1">
                    <?php  echo $content1; ?>
                  </div>
                  <a href="<?php  echo $$href['url']; ?>"   target="<?php  echo $$href['target']; ?>"   title="<?php  echo $$href['title']; ?>"  class="button">Learn More</a>
              </div>
        </div>    
      </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'home_sec4', 'home_sec4_fun' );

<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function home_sec6(){
    vc_map(
        array(
            'name'            => __('Home Section6', ''),
            'base'            => 'home_sec6',
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
                "param_name" => "title1",
                "value" => __( "", "my-text-domain" ),
                "group"=>"top"
              ),

              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content1",
                "value" => __( "", "my-text-domain" ),
                "group"=>"top"
              ),   
              
              
              array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __( "Read More", "my-text-domain" ),
                "param_name" => "btn_link",
                "value" => __( "", "my-text-domain" ),
                "group"=>"top"
              ),              

              
              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Background Image", 'psky'),
                "param_name" => "bkimg",
                "admin_label" => true,
                "group"=>"top"
              ),    
              
              
              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title2",
                "value" => __( "", "my-text-domain" ),
                "group"=>"bottom"
              ),

              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content2",
                "value" => __( "", "my-text-domain" ),
                "group"=>"bottom"
              ),

              
            )
        )
    );
}
add_action( 'vc_before_init', 'home_sec6' );







/*
 *  ShortCode
 *
 * */
function home_sec6_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title1'=>'',
        'content1'=>'',        
        'bkimg'=>'',
        'btn_link'=>'',
        'title2'=>'',
        'content2'=>''
        
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 

    $href = vc_build_link( $mlink);
    $bkimg = wp_get_attachment_image_src( $bkimg, 'full');
    $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
      <div id="home_sec6">

          <div class="top_section"  >
              <div class="inner"  style="background-image:url(<?php  echo $bkimg[0]; ?>)" >

                <div class="text_area">
                  <h3><?php echo $title1; ?></h3>
                  <div class="content1">
                      <?php echo $content1; ?>
                  </div>
                  <a href="<?php echo $href['url']; ?>" class="btn_link  button">Read More</a>
                </div>
              </div>
          </div>

          <div class="bottom_section">
              <h4><?php echo $title2; ?></h4>
              <div class="content2">
                <?php echo $content2;  ?>
              </div>
          </div>       
      </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'home_sec6', 'home_sec6_fun' );

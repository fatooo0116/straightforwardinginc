<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function home_sec3(){
    vc_map(
        array(
            'name'            => __('Home Section3', 'psky'),
            'base'            => 'home_sec3',
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
                "param_name" => "btitle",
                "admin_label" => true, 
                "value" => __( "", "my-text-domain" ),                
              ),

              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Small Title", "my-text-domain" ),
                "param_name" => "small_title",
                "value" => __( "", "my-text-domain" ),                
              ),




              /*  Air */
              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title1",
                "value" => __( "", "my-text-domain" ), 
                "admin_label" => true,     
                "group" => "Air"            
              ),
              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content1",
                "value" => __( "", "my-text-domain" ),   
                "group" => "Air"             
              ),          
              array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __( "Read More Link", "my-text-domain" ),
                "param_name" => "mlink1",
                "value" => __( "", "my-text-domain" ),   
                "group" => "Air"             
              ),                                              
              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Image", 'psky'),
                "param_name" => "bkimg1",                 
                "group" => "Air"              
              ),    
              
              /*  Ocean  */
              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title2",
                "value" => __( "", "my-text-domain" ), 
                "admin_label" => true,     
                "group" => "Ocean"            
              ),
              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content2",
                "value" => __( "", "my-text-domain" ),   
                "group" => "Ocean"             
              ),          
              array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __( "Read More Link", "my-text-domain" ),
                "param_name" => "mlink2",
                "value" => __( "", "my-text-domain" ),   
                "group" => "Ocean"              
              ),                                              
              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Image", 'psky'),
                "param_name" => "bkimg2",                 
                "group" => "Ocean"                 
              ),  
              
              /*  Land */
              array(
                "type" => "textfield",
                "class" => "",
                "heading" => __( "Title", "my-text-domain" ),
                "param_name" => "title3",
                "value" => __( "", "my-text-domain" ), 
                "admin_label" => true,     
                "group" => "Land"            
              ),
              array(
                "type" => "textarea",
                "class" => "",
                "heading" => __( "Content", "my-text-domain" ),
                "param_name" => "content3",
                "value" => __( "", "my-text-domain" ),   
                "group" => "Land"                
              ),          
              array(
                "type" => "vc_link",
                "class" => "",
                "heading" => __( "Read More Link", "my-text-domain" ),
                "param_name" => "mlink3",
                "value" => __( "", "my-text-domain" ),   
                "group" => "Land"                
              ),                                              
              array(
                "type" => "attach_image",
                "holder" => "div",
                "class" => "",
                "heading" => __("Image", 'psky'),
                "param_name" => "bkimg3",                 
                "group" => "Land"                 
              ),                
              
              
            )
        )
    );
}
add_action( 'vc_before_init', 'home_sec3' );







/*
 *  ShortCode
 *
 * */
function home_sec3_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'btitle' => '',
        'small_title' =>'',

        'title1'=>'',
        'content1'=>'',          
        'mlink1'=>'',
        'bkimg1'=>'',    

        'title2'=>'',
        'content2'=>'',          
        'mlink2'=>'',
        'bkimg2'=>'', 
        
        'title3'=>'',
        'content3'=>'',          
        'mlink3'=>'',
        'bkimg3'=>''       
        
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 
    $mlink1 = vc_build_link( $mlink1);
    $mlink2 = vc_build_link( $mlink2);
    $mlink3 = vc_build_link( $mlink3);

    $bkimg1 = wp_get_attachment_image_src( $bkimg1, 'full');
    $bkimg2 = wp_get_attachment_image_src( $bkimg2, 'full');
    $bkimg3 = wp_get_attachment_image_src( $bkimg3, 'full');
   //  $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
      <div id="home_sec3">
        <div class="inner">
            <div class="left">
                    <h3><?php echo $btitle; ?></h3>
                    <h4><?php echo $small_title; ?></h4>

                    <div class="tab">
                        <div class="header">
                          <ul>
                            <li class="active"><a href="#">Air</a></li>
                            <li><a href="#">Ocean</a></li>
                            <li><a href="#">Land</a></li>
                          </ul>
                        </div>
                        <div class="item_content  active ">
                            <h3><?php echo $title1; ?></h3>
                            <div class="content">
                              <?php echo $content1; ?>
                            </div>
                            <a href="<?php echo $mlink1['url']; ?>"  class="button"  >Read More</a>
                        </div>

                        <div class="item_content">
                            <h3><?php echo $title2; ?></h3>
                            <div class="content">
                              <?php echo $content2; ?>
                            </div>
                            <a href="<?php echo $mlink2['url']; ?>"  class="button"  >Read More</a>
                        </div>

                        <div class="item_content">
                            <h3><?php echo $title3; ?></h3>
                            <div class="content">
                              <?php echo $content3; ?>
                            </div>
                            <a href="<?php echo $mlink3['url']; ?>"  class="button"  >Read More</a>
                        </div>                                                
                    </div>
            </div>

            <div class="right">
                    <div class="image_slider">                        
                            <?php  if($bkimg1[0]){ ?>
                              <div class="item active  sh">
                                <img src="<?php echo $bkimg1[0]; ?>" />
                              </div>
                            <?php }?>

                            <?php  if($bkimg2[0]){ ?>
                              <div class="item">
                                <img src="<?php echo $bkimg2[0]; ?>" />
                              </div>
                            <?php }?>
                            
                            <?php  if($bkimg3[0]){ ?>
                              <div class="item">
                                <img src="<?php echo $bkimg3[0]; ?>" />
                              </div>
                            <?php }?>                            
                        </div>
                    </div>
            </div>
        </div>        
      </div>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'home_sec3', 'home_sec3_fun' );

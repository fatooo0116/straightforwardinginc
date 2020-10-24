<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function service_page_feature(){
    vc_map(
        array(
            'name'            => __('Service Page Feature', 'psky'),
            'base'            => 'service_page_feature',
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
                    "type" => "textarea",
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
                ),
                
                
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title2",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page2"
                ), 
                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Content", "my-text-domain" ),
                    "param_name" => "content2",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page2"
                ), 
                array(
                  "type" => "attach_image",
                  "holder" => "div",
                  "class" => "",
                  "heading" => __("Image", 'psky'),
                  "param_name" => "cimg2",
                  "group" => "page2"
                ),         
                
                
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title3",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page3"
                ), 
                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Content", "my-text-domain" ),
                    "param_name" => "content3",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page3"
                ), 
                array(
                  "type" => "attach_image",
                  "holder" => "div",
                  "class" => "",
                  "heading" => __("Image", 'psky'),
                  "param_name" => "cimg3",
                  "group" => "page3"
                ),                    
                         
                
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title4",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page4"
                ), 
                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Content", "my-text-domain" ),
                    "param_name" => "content4",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page4"
                ), 
                array(
                  "type" => "attach_image",
                  "holder" => "div",
                  "class" => "",
                  "heading" => __("Image", 'psky'),
                  "param_name" => "cimg4",
                  "group" => "page4"
                ),        
                
                
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title5",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page5"
                ), 
                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Content", "my-text-domain" ),
                    "param_name" => "content5",
                    "value" => __( "", "my-text-domain" ),
                    "group" => "page5"
                ), 
                array(
                  "type" => "attach_image",
                  "holder" => "div",
                  "class" => "",
                  "heading" => __("Image", 'psky'),
                  "param_name" => "cimg5",
                  "group" => "page5"
                ),                 

                                                               
            )
        )
    );
}
add_action( 'vc_before_init', 'service_page_feature' );







/*
 *  ShortCode
 *
 * */
function service_page_feature_fun( $atts, $content = null ) {
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

    $cimg1 = wp_get_attachment_image_src( $cimg1, 'full');
    $cimg2 = wp_get_attachment_image_src( $cimg2, 'full');
    $cimg3 = wp_get_attachment_image_src( $cimg3, 'full');
    $cimg4 = wp_get_attachment_image_src( $cimg4, 'full');
    $cimg5 = wp_get_attachment_image_src( $cimg5, 'full');

    ob_start();
    ?>
        <section  id="service_page_feature" >    
         
            <div class="inner">

                <div class="left">
                    <h3><?php echo $title_top; ?></h3>
                    <div class="text_slider">
                        <?php  if($title1){ ?>
                            <div class="item  ">
                                <h4><?php echo $title1; ?></h4>
                                <div class="content">
                                    <?php echo $content1; ?>
                                </div>
                            </div>
                        <?php } ?>

                        <?php  if($title2){ ?>
                            <div class="item ">
                                <h4><?php echo $title2; ?></h4>
                                <div class="content">
                                    <?php echo $content2; ?>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <?php  if($title3){ ?>
                            <div class="item">
                                <h4><?php echo $title3; ?></h4>
                                <div class="content">
                                    <?php echo $content3; ?>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <?php  if($title4){ ?>
                            <div class="item">
                                <h4><?php echo $title4; ?></h4>
                                <div class="content">
                                    <?php echo $content4; ?>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <?php  if($title5){ ?>
                            <div class="item">
                                <h4><?php echo $title5; ?></h4>
                                <div class="content">
                                    <?php echo $content5; ?>
                                </div>
                            </div>
                        <?php } ?>                    
                    </div>
                </div>
            
                <div class="right">
                    <div class="img_slider">
                        <?php if($cimg1[0]){ ?>
                            <div  class="item"><img src="<?php echo $cimg1[0]; ?>" /></div>
                        <?php } ?>

                        <?php if($cimg2[0]){ ?>
                            <div  class="item"><img src="<?php echo $cimg2[0]; ?>" /></div>
                        <?php } ?>                    

                        <?php if($cimg3[0]){ ?>
                            <div  class="item"><img src="<?php echo $cimg3[0]; ?>" /></div>
                        <?php } ?>

                        <?php if($cimg4[0]){ ?>
                            <div  class="item"><img src="<?php echo $cimg4[0]; ?>" /></div>
                        <?php } ?>

                        <?php if($cimg5[0]){ ?>
                            <div  class="item"><img src="<?php echo $cimg5[0]; ?>" /></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'service_page_feature', 'service_page_feature_fun' );

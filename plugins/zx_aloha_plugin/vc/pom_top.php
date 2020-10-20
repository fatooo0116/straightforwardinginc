<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function pom_top(){
    vc_map(
        array(
            'name'            => __('POM Top', 'psky'),
            'base'            => 'pom_top',
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
                    "param_name" => "rimg",
                    "admin_label" => true,
                  ),  


                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Title", "my-text-domain" ),
                    "param_name" => "title",
                    "value" => __( "", "my-text-domain" ),
                    "admin_label" => true,
                ),  

                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "SubTitle", "my-text-domain" ),
                    "param_name" => "subtitle",
                    "value" => __( "", "my-text-domain" ),
                    "admin_label" => true,
                ), 

                array(
                    "type" => "textarea",
                    "class" => "",
                    "heading" => __( "Content", "my-text-domain" ),
                    "param_name" => "content1",
                    "value" => __( "", "my-text-domain" ),
                    "admin_label" => true,
                ),  

                array(
                    "type" => "vc_link",
                    "class" => "",
                    "heading" => __( "Button Link", "my-text-domain" ),
                    "param_name" => "all_link",
                    "value" => __( "", "my-text-domain" ),
                    "admin_label" => true,
                ),      
                
 
                                                               
            )
        )
    );
}
add_action( 'vc_before_init', 'pom_top' );







/*
 *  ShortCode
 *
 * */
function pom_top_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'rimg'=>'',
        'title'=>'',
        'subtitle'=>'',
        'content1'=>'',
        'all_link' => '',
        
    ), $atts ) );

   
    $all_link = vc_build_link( $all_link);
    $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
        <section  id="pom_top" class="">     
            <div class="bkimg" style="background-image:url(<?php echo $rimg[0]; ?>)"></div>       
            <div class="inner  contact_section  box_width">

                <div class="main_text">
                    <h3><?php echo $title; ?></h3>
                    <h4><?php echo $subtitle; ?></h4>
                    <div class="content">
                        <?php echo $content1; ?>
                    </div>
                    
                    <a href="<?php echo $all_link['url']; ?>"  title="<?php echo $all_link['title']; ?>"   target="<?php echo $all_link['target']; ?>" class="button">Discover Why SFI</a>
                </div>

            </div>
        </section>
    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'pom_top', 'pom_top_fun' );

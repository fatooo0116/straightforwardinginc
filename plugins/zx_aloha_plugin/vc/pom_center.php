<?php

// don't load directly
if (!defined('ABSPATH')) die('-1');



function pom_center(){
    vc_map(
        array(
            'name'            => __('POM Center', 'psky'),
            'base'            => 'pom_center',
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
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Benefit1 Title", "my-text-domain" ),
                    "param_name" => "b_title1",
                    "value" => __( "", "my-text-domain" ),
                    "group"=>"item1",
                    "admin_label" => true,
                ), 
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Benefit1 Content", "my-text-domain" ),
                    "param_name" => "b_cont1",
                    "value" => __( "", "my-text-domain" ),
                    "group"=>"item1",
                    "admin_label" => true,
                ), 


                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Benefit2 Title", "my-text-domain" ),
                    "param_name" => "b_title2",
                    "value" => __( "", "my-text-domain" ),
                    "group"=>"item2",
                    "admin_label" => true,
                ), 
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Benefit2 Content", "my-text-domain" ),
                    "param_name" => "b_cont2",
                    "value" => __( "", "my-text-domain" ),
                    "group"=>"item2",
                    "admin_label" => true,
                ), 
                
                
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Benefit3 Title", "my-text-domain" ),
                    "param_name" => "b_title3",
                    "value" => __( "", "my-text-domain" ),
                    "group"=>"item3",
                    "admin_label" => true,
                ), 
                array(
                    "type" => "textfield",
                    "class" => "",
                    "heading" => __( "Benefit3 Content", "my-text-domain" ),
                    "param_name" => "b_cont3",
                    "value" => __( "", "my-text-domain" ),
                    "group"=>"item3",
                    "admin_label" => true,
                ),                 
                                                               
            )
        )
    );
}
add_action( 'vc_before_init', 'pom_center' );







/*
 *  ShortCode
 *
 * */
function pom_center_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(
        // 'button_text' => '',
        'title'=>'',
        'subtitle'=>'',

        'b_title1'=>'',
        'b_cont1' => '',
        
        'b_title2'=>'',
        'b_cont2' => '',

        'b_title3'=>'',
        'b_cont3' => '',
    ), $atts ) );

   
    $all_link = vc_build_link( $all_link);
    $rimg = wp_get_attachment_image_src( $rimg, 'full');

    ob_start();
    ?>
        <section  id="pom_center" class="">     
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
add_shortcode( 'pom_center', 'pom_center_fun' );

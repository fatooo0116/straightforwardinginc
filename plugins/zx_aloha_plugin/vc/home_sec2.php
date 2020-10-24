<?php
/*   Home Sec4  */
// don't load directly
if (!defined('ABSPATH')) die('-1');



function home_sec2(){
    vc_map(
        array(
            'name'            => __('Home Section2', 'psky'),
            'base'            => 'home_sec2',
            "category" => array('STRIGHT'),
            'as_parent'               => array('only' => 'home_sec2_item'),
            //  "icon" => plugins_url('../img/slider.png', __FILE__),
            /*
            'content_element' => true,
            'show_settings_on_create' => false,
            "js_view" => 'VcColumnView',
            */
            'content_element' => true,
            'show_settings_on_create' => false,
            "js_view" => 'VcColumnView',
            "params" => array(              

              array(
                "type" => "textarea",
                "holder" => "div",
                "class" => "",
                "heading" => __("Title"),
                "param_name" => "title",
                "admin_label" => true,                
             ),       

                          
            )
        )
    );
}
add_action( 'vc_before_init', 'home_sec2' );







/*
 *  ShortCode
 *
 * */
function home_sec2_fun( $atts, $content = null ) {
    extract( shortcode_atts( array(          
        'title' =>'', 
        
         
    ), $atts ) );

    // $contact = rawurldecode( base64_decode($atts['contact'])); 
    // $ipc_bk_img = wp_get_attachment_image_src( $pc_bk_img, 'full');    
    // $pic = wp_get_attachment_image_src( $bkimg, 'full');
    // $pic  = wp_get_attachment_image( $bkimg, 'full');
    // $pcimg  = wp_get_attachment_image( $pcimg, 'full');
    // $btn_link = vc_build_link( $btn_link);
    // $bkimg1 = wp_get_attachment_image_src( $bkimg1, 'full');    
    // $xlink = vc_build_link( $xlink);
    // $pic = wp_get_attachment_image_src( $bkimg, 'full');
    // $picx = wp_get_attachment_image( $bkimg, 'full');
    // $picmb = wp_get_attachment_image_src( $bkmbimg, 'full');
    // $picmbx = wp_get_attachment_image( $bkmbimg, 'full');


    ob_start();
    ?>

    <div id="home_sec2"  class="<?php echo $box_style; ?>">
        <h3><?php   echo $title; ?></h3>
        <div class="inner" >                        
                <?php  echo do_shortcode($content);  ?>            
      	</div>  
    </div>

    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}
add_shortcode( 'home_sec2', 'home_sec2_fun' );








function home_sec2_item(){
  vc_map(
      array(
          'name'            => __('home_sec2 Item', ''),
          'base'            => 'home_sec2_item',
        //  'description'     => __( '分隔區塊', 'eslite' ),
          "category" => array('STRIGHT'),
      //  "icon" => plugins_url('../img/slider.png', __FILE__),
          'as_child'        => array('only' => 'home_sec2'),
          'content_element' => true,
          'params'          => array(

            array(
              "type" => "attach_image",
              "holder" => "div",
              "class" => "",
              "heading" => __("Image", 'psky'),
              "param_name" => "cimg",
              "admin_label" => true,
            ),

            array(
              "type" => "textarea",
              "holder" => "div",
              "class" => "",
              "heading" => __("Title", 'psky'),
              "param_name" => "title",
              "admin_label" => false,
              "value" => array(''),
              // "description" => __("Enter your content.", 'vc_extend')
            ),            


            array(
              "type" => "textarea",
              "holder" => "div",
              "class" => "",
              "heading" => __("Content", 'psky'),
              "param_name" => "content1",
              "admin_label" => false,
              "value" => array(''),
              // "description" => __("Enter your content.", 'vc_extend')
          ),
  

      
 
          
          ),
      )
  );
}
add_action( 'vc_before_init', 'home_sec2_item' );




/**
 *  Item ShortCode
 *
 */
function home_sec2_item_fun( $atts, $content = null ){
  extract(
      shortcode_atts(
          array(                
              'cimg'=>'',
              'title'=>'',
              'content1'=>'',              
          ), $atts
      )
  );

  $cimg = wp_get_attachment_image_src( $cimg, 'full');
 
  $href = vc_build_link( $mlink);
  ob_start();
  ?>

      <div class="leader_box">
          <div class="binner">                        
              <div class="pic"  >                
                <?php  if($cimg[0]){ ?>
                  <img src="<?php echo $cimg[0]; ?>" style="" />
                <?php } ?>
              </div>
              <div class="text">
                <h3>
                  <?php echo $title; ?>              
                </h3>
                <div class="content1"><?php echo $content1; ?></div>
              </div>
          </div>
      </div>

  <?php
  $output = ob_get_contents();
  ob_end_clean();
  return $output;

}
add_shortcode( 'home_sec2_item', 'home_sec2_item_fun' );







// A must for container functionality, replace Wbc_Item with your base name from mapping for parent container
if(class_exists('WPBakeryShortCodesContainer')){
  class WPBakeryShortCode_home_sec2 extends WPBakeryShortCodesContainer {
  }
}

// Replace Wbc_Inner_Item with your base name from mapping for nested element
if(class_exists('WPBakeryShortCode')){
  class WPBakeryShortCode_home_sec2_item extends WPBakeryShortCode {

  }
}

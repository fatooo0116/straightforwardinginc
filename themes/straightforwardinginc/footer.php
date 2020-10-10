<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bluextrade
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
				<div class="footer_top"> 	
					<div class="footer_menu pull-left">	

						<div class="footer-group">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer1") ) : ?>
							<?php endif;?>
						</div>			
						<div class="footer-group">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer2") ) : ?>
							<?php endif;?>
						</div>		
						<div class="footer-group">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer3") ) : ?>
							<?php endif;?>
						</div>	
						<div class="footer-group">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer4") ) : ?>
							<?php endif;?>
						</div>	
						<div class="footer-group">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer5") ) : ?>
							<?php endif;?>
						</div>																										
					</div>
					<div class="footer_info pull-right">
						<div class="footer-group">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer-info") ) : ?>
							<?php endif;?>
						</div>																			
					</div>
			</div>



			<!-- ###########       footer_bottom    ############  -->
			<div class="footer_bottom">
				<div class="bottom_right_nav">
					<?php
						echo '<ul>';
						echo '<li><a>Copyright '.date('Y').' STRAIGHT FORWARDING .INC</a></li>';

						$args = array(
							'order'                  => 'ASC',
							'orderby'                => 'menu_order',
							'post_type'              => 'nav_menu_item',
							'post_status'            => 'publish',
							'output'                 => ARRAY_A,
							'output_key'             => 'menu_order',
							'nopaging'               => true,
							'update_post_term_cache' => false );

							$menu_items = wp_get_nav_menu_items("footer_bottom", $args );

							$item_html= '';
							$mobile_item_html= '';
							$parent_id=0;
							$current = false;

							// print_r($menu_items);

							/*
							foreach( $menu_items as $menu ){								
								echo '<li><a href="'.$menu->url.'">'.$menu->title.'</a></li>';
							}
							*/
							
							echo '<li><a href="'.home_url('/privacy-policy/').'">Privacy Policy</a></li>';							
							echo '</ul>';


					?>				
				</div>

				<div id="menu_sns">
					<ul>
							<?php  
								$optionfb = get_option('ddg_option_fb');
								if($optionfb){
							 ?>
								<li><a href="<?php echo $optionfb; ?>" class="fb"></a></li>
							<?php } ?>
							<?php  
								$optiontw = get_option('ddg_option_ttw');
								if($optiontw){
							 ?>
								<li><a href="<?php echo $optiontw; ?>" class="tw"></a></li>
							<?php } ?>	
							<?php  
								$optionig = get_option('ddg_option_ig');
								if($optionig){
							 ?>
								<li><a href="<?php echo $optionig; ?>" class="ig"></a></li>
							<?php } ?>	
					</ul>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>

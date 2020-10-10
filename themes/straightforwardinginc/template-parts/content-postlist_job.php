<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package straightforwardinginc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('list_news'); ?>>
	<div class="date">
		<?php  echo get_the_date('Y/m/d');?>
	</div>
	<div class="main_news">
		<div class="cats">
			<?php 
				$terms = get_the_terms(get_the_ID(),'job_type');
				foreach($terms as $tm){
					echo '<a href="'.get_term_link($tm->term_id).'">'.$tm->name.'</a>';
				}
			?>		
		</div>
		<h3><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo get_the_title(); ?></a></h3>
		<div class="post_excerpt">
			<?php
				the_excerpt();
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package straightforwardinginc
 */

get_header();
?>
	<div class="breadcrumb">
		Index/ news/
	</div>
	<main id="single_blog" >
		<div class="left"> 
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'straightforwardinginc' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'straightforwardinginc' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			/*
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			*/

		endwhile; // End of the loop.
		?>

		<a href="#" class="button" >Back To News</a>

		</div>
		<div class="right">
			<h3>Recommended news</h3>
			<?php  // get_sidebar(); ?>
			<?php 
				$post1 = get_post_meta( get_the_ID(), '_my_meta_value_key', true );
				$post2 = get_post_meta( get_the_ID(), '_my_meta_value_key2', true );
				$post3 = get_post_meta( get_the_ID(), '_my_meta_value_key3', true );	
				
				$terms1 = get_the_category($post1);
				$tpl1 = array();
				foreach($terms1 as $term1){
					$tpl1[] ='<a href="'.get_term_link($term1->term_id).'">'.$term1->name.'</a>'; 
				}

				$terms2 = get_the_category($post2);
				$tpl2 = array();
				foreach($terms2 as $term2){
					$tpl2[] ='<a href="'.get_term_link($term2->term_id).'">'.$term2->name.'</a>'; 
				}

				$terms3 = get_the_category($post3);
				$tpl3 = array();
				foreach($terms3 as $term3){
					$tpl3[] ='<a href="'.get_term_link($term3->term_id).'">'.$term3->name.'</a>'; 
				}
								
			?>
			<ul>
				<?php  if($post1){ ?>
					<li>
						<div class="relative_post">
							<div class="meta"><?php echo get_the_date('Y / m / d',$post1)." ".implode(',',$tpl1); ?> </div>
							<h4><a href="<?php  echo get_the_permalink($post1);    ?>" ><?php echo get_the_title($post1); ?></a></h4>
						</div>
					</li>	
				<?php } ?>

				<?php  if($post2){ ?>
					<li>
						<div class="relative_post">
							<div class="meta"><?php echo get_the_date('Y / m / d',$post2)." ".implode(',',$tpl2); ?> </div>
							<h4><a href="<?php  echo get_the_permalink($post2);    ?>" ><?php echo get_the_title($post2); ?></a></h4>
						</div>
					</li>	
				<?php } ?>

				<?php  if($post3){ ?>
					<li>
						<div class="relative_post">
							<div class="meta"><?php echo get_the_date('Y / m / d',$post3)." ".implode(',',$tpl3); ?> </div>
							<h4><a href="<?php  echo get_the_permalink($post3);    ?>" ><?php echo get_the_title($post3); ?></a></h4>
						</div>
					</li>	
				<?php } ?>			
			</ul>
		</div>

	</main><!-- #main -->

<?php
get_footer();

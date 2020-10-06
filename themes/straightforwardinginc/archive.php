<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package straightforwardinginc
 */

get_header();
?>

	<main id="archive_page" class="site-main">

		

			<header class="page-header">
				<?php
				 the_archive_title( '<h1 class="page-title">', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
				<h2>Get the updates from the market</h2>
				<p>Ocean and air freight rates and trends; weekly trucking and customs news</p>
			</header><!-- # page-header -->


			
			<div id="hot_news">
				<h3>Hot news</h3>

				<?php         
        		$sticky = get_option( 'sticky_posts' );
       
				$i==0;
				foreach($sticky as $ipost){
						$xpost = get_post($ipost);
						$ximg = get_the_post_thumbnail_url($xpost);
						$class='pic1';
						if($i%2==0){ $class='pic2'; }
						if($i%3==0){ $class='pic3'; }
						$i++;	
						?>

							<div class="news_item  <?php echo $class; ?>">
								<div class="header">
									<div class="date"><?php echo get_the_date('Y / m / d',$ipost); ?></div>
									<div class="cat"> 
										<?php 
											$terms = get_the_category($ipost);
											foreach($terms as $tm){
												echo '<a href="'.get_term_link($tm->term_id).'">'.$tm->name.'</a>';
											}
										?>	
									</div>
								</div>
								<div class="main">
									<h3><a href="<?php  echo get_the_permalink($ipost);;  ?>"><?php echo $xpost->post_title;  ?></a></h3>
									<p>
										<?php the_excerpt();  ?>
									</p>
									<a href="<?php  echo get_the_permalink($ipost);;  ?>" class="button hwt">Read More</a>
								</div>
							</div><!-- item -->							

						<?php
						}
					?>
			</div>




			<div id="main_list">
				<div id="post_cat">
					<div class="inner">
						<?php  
							$allcats = get_categories(); 
							foreach($allcats as $cat){
								?>
									<a href="<?php echo get_term_link($cat->term_id); ?>" class="term_link ">
										<?php echo $cat->name; ?>
									</a>
								<?php
							}
						?>
					</div>
				</div>	

				<div class="list">
					
				<?php 

					$args = array(
						'post_type' => array('post'),
						'post_status' => array(  'publish'),
						'posts_per_page' => 10,
						'ignore_sticky_posts' => true,
						'post__not_in' =>$sticky,
						'order' => 'DESC',
						'orderby' => 'date'
					);


					$the_query = new WP_Query($args); 
					

					// The Loop
					if ( $the_query->have_posts() ) {


					while ( $the_query->have_posts() ) {
						$the_query->the_post();

						get_template_part( 'template-parts/content', 'postlist');

					}

					?>
						<div class="pagination">
						<?php
						//	if(function_exists(custom_pagination)) {
								custom_pagination($the_query->max_num_pages,"",$paged);
						//	}
						?>
						</div>
					<?php

					} else {
						// no posts found
					}

					
					/* Restore original Post Data */
					wp_reset_postdata();         
					
				?>
				
				</div>				
			</div><!-- main list -->

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

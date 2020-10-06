<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package straightforwardinginc
 */

get_header();
?>

	<main id="primary" class="site-main">
			<div id="tpl_404" class="center"> 
				<img src="http://www.straightforwardinginc.com/wp-content/uploads/2020/09/pic-404.svg" alt="404-images" />
			
					<h3>We’re sorry, something went wrong.</h3>
					<p>The page you are looking for might have been removed, had its name <br/>changes, or is temporarily unavailable.<br/> 
May the force be with you!</p>
					<a href="<?php echo home_url('/'); ?>"  class="button" >Go Back</a>
			</div>

	</main><!-- #main -->

<?php
get_footer();

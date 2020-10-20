<?php
/**
 * straightforwardinginc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package straightforwardinginc
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.2' );
}

if ( ! function_exists( 'straightforwardinginc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function straightforwardinginc_setup() {




		
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on straightforwardinginc, use a find and replace
		 * to change 'straightforwardinginc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'straightforwardinginc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'straightforwardinginc' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'straightforwardinginc_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);


		register_sidebar( array(
			'name'          => esc_html__( 'Footer1', 'gofreight' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'gofreight' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	
		register_sidebar( array(
			'name'          => esc_html__( 'Footer2', 'gofreight' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'gofreight' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	
		register_sidebar( array(
			'name'          => esc_html__( 'Footer3', 'gofreight' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'gofreight' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	
		register_sidebar( array(
			'name'          => esc_html__( 'Footer4', 'gofreight' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'gofreight' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer5', 'gofreight' ),
			'id'            => 'footer-5',
			'description'   => esc_html__( 'Add widgets here.', 'gofreight' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );	

		register_sidebar( array(
			'name'          => esc_html__( 'Footer-info', 'gofreight' ),
			'id'            => 'footer-info',
			'description'   => esc_html__( 'Add widgets here.', 'gofreight' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );

	}
endif;
add_action( 'after_setup_theme', 'straightforwardinginc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function straightforwardinginc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'straightforwardinginc_content_width', 640 );
}
add_action( 'after_setup_theme', 'straightforwardinginc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function straightforwardinginc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'straightforwardinginc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'straightforwardinginc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'straightforwardinginc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function straightforwardinginc_scripts() {


		// wp_enqueue_style( 'bluextrade-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bluextrade-style', get_template_directory_uri().'/assets/dist/css/main.css',array(),rand(10,990000),'all');
	wp_enqueue_script( 'bluextrade-script', get_template_directory_uri() . '/assets/dist/js/script.js', array('jquery'), rand(10,9900021), true );
	

	// wp_enqueue_style( 'straightforwardinginc-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'straightforwardinginc-style', 'rtl', 'replace' );

	wp_enqueue_script( 'straightforwardinginc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'straightforwardinginc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/jc_option/option.php';


/*  Aloha  custom  */
function custom_excerpt_more($more) {
	return ' …';
}
add_filter('excerpt_more', 'custom_excerpt_more');




function custom_pagination($numpages = '', $pagerange = '', $paged='') {


	if (empty($pagerange)) {
		$pagerange = 2;
	}


	global $paged;
	if (empty($paged)) {
		$paged = 1;
	}
	if ($numpages == '') {
		global $wp_query;
		$numpages = $wp_query->max_num_pages;
		if(!$numpages) {
				$numpages = 1;
		}
	}


	/**
	 * We construct the pagination arguments to enter into our paginate_links
	 * function.
	 */
	$pagination_args = array(
		'base'            => get_pagenum_link(1) . '%_%',
		'format'          => 'page/%#%',
		'total'           => $numpages,
		'current'         => $paged,
		'show_all'        => False,
		'end_size'        => 1,
		'mid_size'        => $pagerange,
		'prev_next'       => True,
		'prev_text'       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
		'next_text'       => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>',
		'type'            => 'plain',
		'add_args'        => false,
		'add_fragment'    => ''
	);


	$paginate_links = paginate_links($pagination_args);


	if ($paginate_links) {
		echo "<nav class='custom-pagination'>";			
			echo $paginate_links;
		echo "</nav>";
	}

}
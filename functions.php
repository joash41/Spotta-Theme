<?php
	include_once('functions/wp_functions.php');
	function header_bc_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
		wp_enqueue_style( 'theme_style',  get_template_directory_uri() .'/css/theme_style.css');
		wp_enqueue_style( 'font_awesome_style',  get_template_directory_uri() .'/css/all.min.css');
		wp_enqueue_style( 'menu_icon_transition',  get_template_directory_uri() .'/css/menu_icon_transition.css');
		wp_enqueue_style( 'swiper_style',  'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css');
		wp_enqueue_style( 'font_google', 'https://fonts.googleapis.com/css?family=Titillium+Web:100,200,300,400,500,600,700,800,900&display=swap');
		gravity_form_enqueue_scripts( 1, false );
		wp_enqueue_script( 'swiper_js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js');
	}
	add_action( 'get_header', 'header_bc_scripts' );
	function footer_bc_scripts() {
		wp_enqueue_script( 'google_js', 'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
		wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js');
		wp_enqueue_script( 'smooth_scroll', get_template_directory_uri() . '/js/smoothScroll.js');
	}
	add_action( 'get_footer', 'footer_bc_scripts' );
	
	// Custom login screen for wp-admin
	function custom_loginlogo() {
		echo '<style type="text/css">
		h1 a {
			background-image: url('.get_template_directory_uri().'/images/logo.png) !important;
			background-size: 75% !important;
			height: 90px !important;
			width: 100% !important; }
		body{
			background: #fff !important;
			color: #fff !important;}
		.login form{
			background: #373a46 !important;
			border: 2px solid;}
		.login #login_error, .login .message, .login .success{
			color: #373a46 !important;}
		.login form label{
				color: #fff;}
		.login #login_error, .login .message, .login .success{
				background-color: transparent;}
		</style>';
	}
	add_action('login_head', 'custom_loginlogo');

	//Registering Gutenberg Block Category
	function block_category( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug' => 'spotta_blocks',
					'title' => __( 'Spotta Blocks', 'spotta_blocks' ),
				),
			)
		);
	}
	add_filter( 'block_categories', 'block_category', 60, 2);

	//Registering Gutenberg Blocks
	add_action('acf/init', 'my_register_blocks');
	function my_register_blocks() {
		// check function exists
		if( function_exists('acf_register_block') ) {
			// Featured Banner with Info
			acf_register_block(array(
				'name'              => 'featured_banner',
				'title'             => __('Featured Banner'),
				'description'       => __('Featured Banner'),
				'render_template'   => 'templates/gutenberg_blocks/featured_banner.php',
				'category'          => 'spotta_blocks',
				'icon'              => 'admin-comments',
				'mode'              => 'edit',
				'keywords'          => array( 'custom', 'block' ),
			));
			// Image with Content Block
			acf_register_block(array(
				'name'              => 'image_with_content',
				'title'             => __('Left/Right Image with Content'),
				'description'       => __('Left/Right Image with Content'),
				'render_template'   => 'templates/gutenberg_blocks/image_with_content.php',
				'category'          => 'spotta_blocks',
				'icon'              => 'admin-comments',
				'mode'              => 'edit',
				'keywords'          => array( 'custom', 'block' ),
			));
			// How it Works Block 
			acf_register_block(array(
				'name'              => 'how_it_works',
				'title'             => __('How it Works'),
				'description'       => __('How it Works'),
				'render_template'   => 'templates/gutenberg_blocks/how_it_works.php',
				'category'          => 'spotta_blocks',
				'icon'              => 'admin-comments',
				'mode'              => 'edit',
				'keywords'          => array( 'custom', 'block' ),
			));
			// Info with Buttons Block 
			acf_register_block(array(
				'name'              => 'info_with_buttons',
				'title'             => __('Info with Buttons'),
				'description'       => __('Info with Buttons'),
				'render_template'   => 'templates/gutenberg_blocks/info_with_buttons.php',
				'category'          => 'spotta_blocks',
				'icon'              => 'admin-comments',
				'mode'              => 'edit',
				'keywords'          => array( 'custom', 'block' ),
			));
			// FAQs Accordion Block 
			acf_register_block(array(
				'name'              => 'faq_accordion_block',
				'title'             => __('FAQs Accordions'),
				'description'       => __('FAQs Accordions'),
				'render_template'   => 'templates/gutenberg_blocks/faq_accordion_block.php',
				'category'          => 'spotta_blocks',
				'icon'              => 'admin-comments',
				'mode'              => 'edit',
				'keywords'          => array( 'custom', 'block' ),
			));
			// Testimonials 
			acf_register_block(array(
				'name'              => 'testimonials_block',
				'title'             => __('Testimonials'),
				'description'       => __('Testimonials'),
				'render_template'   => 'templates/gutenberg_blocks/testimonials_block.php',
				'category'          => 'spotta_blocks',
				'icon'              => 'admin-comments',
				'mode'              => 'edit',
				'keywords'          => array( 'custom', 'block' ),
			));
		}

	// BC Theme Options
	if( function_exists('acf_add_options_page') ) {
		$option_page = acf_add_options_page(array(
		'page_title'    => 'Theme Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'Theme-settings',
		'capability'    => 'edit_posts',
		'icon_url' => get_template_directory_uri(). '/images/bc_theme.png' ,
		'redirect'  => false,
		'position' => 2
		));
	}
}
?>
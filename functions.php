<?php
	// register a tool
	register_sidebar(
		array(
			'name'          => 'siderbar',
			'before_widget' => '<div class="sbox">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>'
		)
	);
	function wpbootstrap_enqueue_styles() {
		wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
		wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
		}
	add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

	require get_template_directory() . '/components/custom-header.php';

	wp_enqueue_style( 'themeO-bootstrap', get_template_directory_uri() . '/components/css/bootstrap.min.css' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'dazzling_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	  ) ) );


	

	add_theme_support( 'menus' );

?>
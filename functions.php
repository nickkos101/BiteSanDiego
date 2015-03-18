<?php 

include 'autocracy/autocracy.php';

add_theme_support('post-thumbnails');
add_theme_support('widgets');

function bite_scripts() {
	//Stylesheets
	wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'responsive' );
	wp_enqueue_style('thickbox');

	//Scripts
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/js/function.js', array('jquery', 'thickbox'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'bite_scripts' );

function bite_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | '. get_bloginfo( 'name' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}
add_filter( 'wp_title', 'bite_title' );

add_theme_support( 'menus' );

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	'Footer_Nav' => 'Footer Navigation Area',
	));


//Custom Post Types
function bite_create_post_type() {
	register_post_type('tours', array(
		'labels' => array(
			'name' => __('Tours'),
			'singular_name' => __('Tour')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'tours'),
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('press', array(
		'labels' => array(
			'name' => __('Press'),
			'singular_name' => __('Press')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'press'),
		'supports' => array('title','thumbnail')
		)
	);
	register_post_type('faq', array(
		'labels' => array(
			'name' => __('FAQs'),
			'singular_name' => __('FAQ')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'faq'),
		'supports' => array('title','editor')
		)
	);
	register_post_type('reviews', array(
		'labels' => array(
			'name' => __('Reviews'),
			'singular_name' => __('Review')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'reviews'),
		'supports' => array('title','editor')
		)
	);
}
add_action('init', 'bite_create_post_type');

register_sidebar( array(
	'name' => __( 'Blog Sidebar', 'wpb' ),
	'id' => 'sidebar-1',
	'description' => __( 'The blog sidebar appears on the right hand side.', 'wpb' ),
	'before_widget' => '<div class="widget talignleft">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	) 
);

function bg_change() {

}
?>
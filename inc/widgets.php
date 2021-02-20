<?php
/**
 * Smellycat - Widgets
 *
 * @package Smellycat
 * @subpackage Widgets
 * @author iamRahul1973
 */

/**
 * Theme's widgets goes here
 *
 * @return void
 */
function ir73_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'contentmatrix' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your Blog Page', 'contentmatrix' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s blog-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle blog-sidebar-title">',
			'after_title'   => '</h3>',
		)
	);

}

add_action( 'widgets_init', 'ir73_widgets_init' );

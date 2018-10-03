<?php
add_action( 'after_setup_theme', 'eig_module_br_register' );
/**
 * Register the Business Reviews module
 */
function eig_module_br_register() {
	eig_register_module( array(
		'name'     => 'business-reviews',
		'label'    => __( 'Business Reviews', 'endurance' ),
		'callback' => 'eig_module_br_load',
		'isActive' => false,
		'isHidden' => true,
	) );
}
/**
 * Load the Business Reviews module
 */
function eig_module_br_load() {
	require dirname( __FILE__ ) . '/business-reviews.php';
}
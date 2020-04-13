<?php
/** Add Carbon Fields */
add_action( 'carbon_fields_register_fields', 'ast_register_custom_fields' );
function ast_register_custom_fields() {
	require get_template_directory() . '/inc/custom-fields/post-meta.php';
	require get_template_directory() . '/inc/custom-fields/theme-options.php';
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

/** lookshop functions and definitions */
require get_template_directory() . '/inc/theme-settings.php';

/** Register widget area. */
require get_template_directory() . '/inc/widget-areas.php';

/** Enqueue scripts and styles. */
require get_template_directory() . '/inc/enqueue-script-style.php';

/** Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/** Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/** Functions which enhance the theme by hooking into WordPress. */
require get_template_directory() . '/inc/template-functions.php';

/** Customizer additions. */
require get_template_directory() . '/inc/customizer.php';


require get_template_directory() . '/inc/helpers.php';

/** Load Jetpack compatibility file. */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** Load WooCommerce compatibility file. */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}

<?php
/**
 * File for display Header.
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>
<?php $class='btn-style-two alvert-theme'; ?>	
<body <?php body_class(esc_attr($class));?> >
<?php 
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    } 
?>
<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'alvert' ); ?></a>
<?php 
// Theme Header
get_template_part('theme-header');	?>
<div id="content" class="flixita-theme-data">
	
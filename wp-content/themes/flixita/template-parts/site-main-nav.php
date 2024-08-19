<?php
/**
 * Template part for displaying site main navigation.
 */
wp_nav_menu( 
	array(  
		'theme_location' => 'primary_menu',
		'container'  => '',
		'menu_class' => 'main-menu',
		'fallback_cb' => 'flixita_bootstrap_navwalker::fallback',
		'walker' => new flixita_bootstrap_navwalker()
		 ) 
	);
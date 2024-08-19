<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly    
$activate = array(
	'sidebar-primary' => array('search-1','recent-posts-1','archives-1',),
	'footer-sidebar-1' => array('text-1'),
	'footer-sidebar-2' => array('categories-1'),
	'footer-sidebar-3' => array('archives-1'),
	'footer-sidebar-4' => array('search-1') 
);
/* the default titles will appear */
	update_option('widget_text', array(
	1 => array('title' => 'Quick contact info',
	'text'=>'<p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sit amet, the administration of justice, I may hear, finally, be expanded on, say, a certain pro cu neglegentur. </font><font style="vertical-align: inherit;">Mazim.Unusual or something.</font></font></p>
	<address class="about-addresss"><i class="fa fa-map-marker"></i>2130 Fulton Street, San Francisco<br>
	<i class="fa fa-envelope-o"></i><a href="mailto:support@test.com">support@test.com</a><br>
	<i class="fa fa-phone"></i><a href="tel:+(15) 123-456-7890">+(15) 1234-56789</a></address>
	'),        
	2 => array('title' => 'Recent Posts'),
	3 => array('title' => 'Categories'), 
	));
	 update_option('widget_categories', array(
		1 => array('title' => 'Categories'), 
		2 => array('title' => 'Categories')));

	update_option('widget_archives', array(
		1 => array('title' => 'Archives'), 
		2 => array('title' => 'Archives')));
		
	update_option('widget_search', array(
		1 => array('title' => 'Search'), 
		2 => array('title' => 'Search')));	
	
	update_option('sidebars_widgets',  $activate);
?>
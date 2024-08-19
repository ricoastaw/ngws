<?php
/**
 * The template for displaying all pages.
 */
get_header();
get_template_part('/template-parts/site', 'breadcrumb');
?>
<section id="flixita-page" class="Flixita-page st-py-default">
	<div class="container">
		<div class="row gy-lg-0 gy-5 wow fadeInUp">
			<?php 
				if ( class_exists( 'woocommerce' ) ){
						
					if( is_account_page() || is_cart() || is_checkout() ) { ?>
						<div class="<?php if ( is_active_sidebar('sidebar-woocommerce') ){ esc_attr_e('col-lg-8','flixita'); } else { esc_attr_e('col-lg-12','flixita'); } ?>">	
					<?php }
					else{ ?>
					
						<div class="<?php if ( is_active_sidebar('sidebar-primary') ){ esc_attr_e('col-lg-8','flixita'); } else { esc_attr_e('col-lg-12','flixita'); } ?>">
						
					<?php }}else{ ?>
					
					<div class="<?php if ( is_active_sidebar('sidebar-primary') ){ esc_attr_e('col-lg-8','flixita'); } else { esc_attr_e('col-lg-12','flixita'); } ?>">	
						
				<?php } if( have_posts()) : the_post(); 
					 the_content(); 
					endif;
					if( $post->comment_status == 'open' ) { 
						 comments_template( '', true ); // show comments 
					}
				?>
			</div>
			<?php  
				if ( class_exists( 'WooCommerce' ) ) 
					if( is_account_page() || is_cart() || is_checkout() ) {
						get_sidebar('woocommerce');
					}else{
				
				get_sidebar(); 
				} 
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
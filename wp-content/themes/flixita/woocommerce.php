<?php
/**
 * The template for displaying WooCommerce Posts.
 */
get_header();
get_template_part('/template-parts/site', 'breadcrumb');
?>
<section id="product" class="product-section st-py-default">
    <div class="container">
        <div class="row gy-lg-0 gy-5 wow fadeInUp">
			<div id="product-content" class="<?php if ( is_active_sidebar('sidebar-woocommerce') ){ esc_attr_e('col-lg-8','flixita'); } else { esc_attr_e('col-lg-12','flixita'); } ?>">
				<?php woocommerce_content(); ?>
			</div>
			<?php get_sidebar('woocommerce');  // Sidebar ?>
		</div>	
	</div>
</section>
<?php get_footer(); ?>


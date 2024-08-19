<?php 
$enable_product	= get_theme_mod('enable_product',daddy_plus_flixicart_get_default_option( 'enable_product' ));
$product_ttl	= get_theme_mod('product_ttl',daddy_plus_flixicart_get_default_option( 'product_ttl' ));
$product_subttl	= get_theme_mod('product_subttl',daddy_plus_flixicart_get_default_option( 'product_subttl' ));
$product_desc	= get_theme_mod('product_desc',daddy_plus_flixicart_get_default_option( 'product_desc' ));
$product_cat	= get_theme_mod('product_cat');
$product_count	= get_theme_mod('product_count',daddy_plus_flixicart_get_default_option( 'product_count' ));
if($enable_product=='1'):
?>
<section id="flixita-product-section" class="product-section-II st-pt-default flixita-main-product">
	<div class="container">
		<?php flixita_section_header($product_ttl,$product_subttl,$product_desc); ?>
		<?php if(!empty($product_cat) && class_exists( 'WooCommerce' )): ?>
			<div class="row">
				<div class="col-12 wow fadeInUp">
					<div class="g-4 product-wrapper">
						<?php 
						echo do_shortcode('[products limit="'.$product_count.'" columns="4" category="'.$product_cat.'" ]'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>
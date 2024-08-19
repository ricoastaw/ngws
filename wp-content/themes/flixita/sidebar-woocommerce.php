<?php
/**
 * Template file for WooCommerce sidebar
 */
if ( is_active_sidebar( 'sidebar-woocommerce' ) ) : ?>
	<div class="col-lg-4 pl-lg-4 order-0">
		<div class="sidebar">
			<?php dynamic_sidebar('sidebar-woocommerce'); ?>
		</div>
	</div>
<?php endif; ?>
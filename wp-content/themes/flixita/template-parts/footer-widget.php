<?php
/**
 * Template part for displaying footer widget.
 */
?>	
<div class="footer-main st-pt-default">
	<div class="container">
		<div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-5">
			<?php if ( is_active_sidebar( 'footer-sidebar-1' ) ) : ?>
				<div class="col wow fadeInUp">
					 <?php dynamic_sidebar( 'footer-sidebar-1'); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'footer-sidebar-2' ) ) : ?>
				<div class="col wow fadeInUp">
					 <?php dynamic_sidebar( 'footer-sidebar-2'); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
				<div class="col wow fadeInUp">
					 <?php dynamic_sidebar( 'footer-sidebar-3'); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
				<div class="col wow fadeInUp">
					 <?php dynamic_sidebar( 'footer-sidebar-4'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
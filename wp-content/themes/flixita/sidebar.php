<?php
/**
 * Template file for sidebar
 */
if ( is_active_sidebar( 'sidebar-primary' ) ) : ?>
	<div class="col-lg-4 pl-lg-4">
		<div class="sidebar">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</div>
	</div>
<?php endif; ?>
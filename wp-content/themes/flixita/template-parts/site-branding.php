<?php
/**
 * Template part for displaying site branding.
 */
if(has_custom_logo())
	{	
		the_custom_logo();
	}
	else { 
	?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<h4 class="site-title">
			<?php 
				echo esc_html(get_bloginfo('name'));
			?>
		</h4>
	</a>	
<?php 						
	}
$flixita_description = get_bloginfo( 'description');
if ($flixita_description) : ?>
	<p class="site-description"><?php echo esc_html($flixita_description); ?></p>
<?php endif;
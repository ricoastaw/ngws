<?php
/**
 * Template part for displaying site branding.
 */
$footer_copyright	= get_theme_mod('footer_copyright',flixita_get_default_option( 'footer_copyright' ));
if ( ! empty( $footer_copyright ) ){ ?>                  
	<div class="copyright-text">
		<?php echo wp_kses_post( str_replace( '{current_year}', date( 'Y' ), $footer_copyright ) ); ?>
	</div>
<?php }	
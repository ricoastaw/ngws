<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if (!function_exists('daddy_plus_flixita_top_footer')):
function daddy_plus_flixita_top_footer()
{
$enable_top_footer	= get_theme_mod('enable_top_footer',daddy_plus_flixita_get_default_option( 'enable_top_footer' ));
$footer_top_info	= get_theme_mod('footer_top_info',daddy_plus_flixita_get_default_option( 'footer_top_info' ));
if($enable_top_footer=='1'): ?>
<div class="footer-top">
	<div class="container">
		<div class="row">
			<?php
				if ( ! empty( $footer_top_info ) ) {
				$footer_top_info = json_decode( $footer_top_info );
				foreach ( $footer_top_info as $item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'flixita_translate_single_string', $item->title, 'Footer Top section' ) : '';
					$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'flixita_translate_single_string', $item->subtitle, 'Footer Top section' ) : '';
					$link = ! empty( $item->link ) ? apply_filters( 'flixita_translate_single_string', $item->link, 'Footer Top section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'flixita_translate_single_string', $item->icon_value, 'Footer Top section' ) : '';
					$image = ! empty( $item->image_url ) ? apply_filters( 'flixita_translate_single_string', $item->image_url, 'Footer Top section' ) : '';
			?>
			<div class="col-lg-3 col-md-4 col-12 text-center wow fadeInUp mb-4">
				<aside class="widget widget-contact first">
					<div class="contact-area">
						<div class="contact-icon">
							<?php if(!empty($image)): ?>
								<div class="contact-corn"><img src="<?php echo esc_url($image); ?>" /></div>
							<?php else: ?>	
								<div class="contact-corn"><i class="fa <?php echo esc_attr($icon); ?>"></i></div>
							<?php endif;?>
						</div>
						<div class="contact-info">
							<?php if(!empty($title)): ?>
								<h6 class="title"><?php echo esc_html($title); ?></h6>
							<?php endif;?>
							
							<?php if(!empty($subtitle)): ?>
								<p class="text"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($subtitle); ?></a></p>
							<?php endif;?>	
						</div>
					</div>
				</aside>
			</div>
			<?php } } ?>
		</div>
	</div>
</div>
<?php endif;} add_action('daddy_plus_flixita_top_footer','daddy_plus_flixita_top_footer');endif;
	
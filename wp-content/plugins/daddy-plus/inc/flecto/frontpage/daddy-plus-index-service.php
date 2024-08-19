<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$enable_service		= get_theme_mod('enable_service',daddy_plus_flixita_get_default_option( 'enable_service' ));
$service_ttl		= get_theme_mod('service_ttl',daddy_plus_flixita_get_default_option( 'service_ttl' ));
$service_subttl		= get_theme_mod('service_subttl',daddy_plus_flixita_get_default_option( 'service_subttl' ));
$service_desc		= get_theme_mod('service_desc',daddy_plus_flixita_get_default_option( 'service_desc' ));
$service_data		= get_theme_mod('service_data',daddy_plus_flixita_get_default_option( 'service_data' ));
if($enable_service=='1'):
?>	
<section id="service-section" class="service-section st-py-default">
	<div class="container">
		<?php flixita_section_header($service_ttl,$service_subttl,$service_desc); ?>
		<div class="row">
			<div class="col-12 wow fadeInUp">
				<div class="row g-4 service-wrapper">
					<?php
						if ( ! empty( $service_data ) ) {
						$service_data = json_decode( $service_data );
						foreach ( $service_data as $i=>$item ) {
							$title = ! empty( $item->title ) ? apply_filters( 'flixita_translate_single_string', $item->title, 'Service section' ) : '';
							$text = ! empty( $item->text ) ? apply_filters( 'flixita_translate_single_string', $item->text, 'Service section' ) : '';
							$button = ! empty( $item->text2 ) ? apply_filters( 'flixita_translate_single_string', $item->text2, 'Service section' ) : '';
							$link = ! empty( $item->link ) ? apply_filters( 'flixita_translate_single_string', $item->link, 'Service section' ) : '';
							$icon = ! empty( $item->icon_value ) ? apply_filters( 'flixita_translate_single_string', $item->icon_value, 'Service section' ) : '';
							$image = ! empty( $item->image_url ) ? apply_filters( 'flixita_translate_single_string', $item->image_url, 'Service section' ) : '';
					?>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="service-inner">
								<div class="service-img">
									<img src="<?php echo esc_url($image); ?>">
								</div>
								<?php if(!empty($icon)): ?>
									<div class="service-icon-img-wrap">
										<i class="fa <?php echo esc_attr($icon); ?>"></i>
									</div>
								<?php endif; ?>
								<div class="service-content">
							
									<?php if(!empty($title)): ?>
										<h3 class="service-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h3>
									<?php endif; ?>
									
									<?php if(!empty($text)): ?>
										<div class="service-excerpt">
											<p><?php echo esc_html($text); ?></p>
										</div>
									<?php endif; ?>
									
									<?php if(!empty($button)): ?>
										<a href="<?php echo esc_url($link); ?>" class="btn btn-primary"><?php echo esc_html($button); ?></a>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php } } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
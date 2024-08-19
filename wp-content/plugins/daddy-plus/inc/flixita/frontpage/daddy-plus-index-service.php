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
						<div class="col-lg-3 col-md-6 col-12">
							<div class="service-inner">
								<?php if(!empty($image)): ?>
									<div class="service-thumb">
										<img src="<?php echo esc_url($image); ?>" class="img-fluid wp-post-image" alt="">
									</div>
								<?php endif; ?>
								
								<?php if(!empty($icon)): ?>
									<div class="service-icon-img-wrap">
										<i class="fa <?php echo esc_attr($icon); ?>"></i>
									</div>
								<?php endif; ?>
								<div class="service-content">
									<?php if(!empty($title)): ?>
										<h4 class="service-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h4>
									<?php endif; ?>
									
									<?php if(!empty($text)): ?>
										<div class="service-excerpt">
											<p><?php echo esc_html($text); ?></p>
										</div>
									<?php endif; ?>
									
									<?php if(!empty($button)): ?>
										<div class="post-more">
											<a class="read-more" href="<?php echo esc_url($link); ?>"><?php echo esc_html($button); ?></a>
										</div>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php } } ?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-shape1">
		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="964px" height="429px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
		<g><path style="opacity:0.49" fill="var(--bs-primary)" d="M 48.5,-0.5 C 52.5,-0.5 56.5,-0.5 60.5,-0.5C 43.431,33.157 38.931,68.4903 47,105.5C 60.2856,154.904 90.119,190.404 136.5,212C 167.493,224.356 199.493,228.022 232.5,223C 264.468,217.788 295.468,209.122 325.5,197C 352.167,186.333 378.833,175.667 405.5,165C 444.384,149.59 484.717,141.423 526.5,140.5C 605.992,141.772 674.659,169.272 732.5,223C 762.764,252.927 791.93,283.76 820,315.5C 848.287,345.364 880.121,370.531 915.5,391C 930.792,398.815 946.792,404.648 963.5,408.5C 963.5,411.833 963.5,415.167 963.5,418.5C 938.888,413.352 915.888,404.186 894.5,391C 862.688,369.541 833.522,344.708 807,316.5C 782.978,289.332 758.145,262.832 732.5,237C 656.729,164.297 567.063,137.964 463.5,158C 445.533,162.322 427.867,167.655 410.5,174C 370.943,190.444 330.943,205.777 290.5,220C 253.728,232.305 216.061,236.638 177.5,233C 112.932,222.742 68.0984,187.576 43,127.5C 28.8058,84.1198 30.6391,41.4531 48.5,-0.5 Z"/></g>
		</svg>
	</div>
</section>
<?php endif; ?>
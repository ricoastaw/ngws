<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$enable_info	= get_theme_mod('enable_info',daddy_plus_flixita_get_default_option( 'enable_info' ));
$info_data	= get_theme_mod('info_data',daddy_plus_flixita_get_default_option( 'info_data' ));
if($enable_info=='1'):
?>	
<section id="info-section" class="info-section-4">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeInUp">
				<div class="row g-4 info-wrapper">
					<?php
						if ( ! empty( $info_data ) ) {
						$info_data = json_decode( $info_data );
						foreach ( $info_data as $i=>$item ) {
							$title = ! empty( $item->title ) ? apply_filters( 'flixita_translate_single_string', $item->title, 'Information section' ) : '';
							$text = ! empty( $item->text ) ? apply_filters( 'flixita_translate_single_string', $item->text, 'Information section' ) : '';
							$button = ! empty( $item->text2 ) ? apply_filters( 'flixita_translate_single_string', $item->text2, 'Information section' ) : '';
							$link = ! empty( $item->link ) ? apply_filters( 'flixita_translate_single_string', $item->link, 'Information section' ) : '';
							$icon = ! empty( $item->icon_value ) ? apply_filters( 'flixita_translate_single_string', $item->icon_value, 'Information section' ) : '';
							$image = ! empty( $item->image_url ) ? apply_filters( 'flixita_translate_single_string', $item->image_url, 'Service section' ) : '';
					?>
						<div class="col-lg-3 col-md-6 col-12">
							<aside class="widget widget-contact">
								<div class="info-inner">
									<div class="info-img">
										<img src="<?php echo esc_url($image); ?>">
									</div>
									<div class="info-meta">
										<?php if(!empty($icon)): ?>
											<div class="info-icon-img-wrap">
												<i class="fa <?php echo esc_attr($icon); ?>"></i>
											</div>
										<?php endif; ?>	
										<?php if(!empty($title)): ?>
											<h3 class="info-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h3>
										<?php endif; ?>
									</div>
									<div class="info-content">
										<?php if(!empty($icon)): ?>
											<div class="info-icon-img-wrap">
												<i class="fa <?php echo esc_attr($icon); ?>"></i>
											</div>
										<?php endif; ?>	
										<?php if(!empty($title)): ?>
											<h3 class="info-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title); ?></a></h3>
										<?php endif; ?>
										
										<?php if(!empty($text)): ?>
											<div class="info-excerpt">
												<p><?php echo esc_html($text); ?></p>
											</div>
										<?php endif; ?>
										
										<?php if(!empty($button)): ?>
											<a href="<?php echo esc_url($link); ?>" class="btn btn-white btn-like-icon"><?php echo esc_html($button); ?><span class="bticn"><i class="fa fa-arrow-right"></i></span></a>
										<?php endif; ?>	
									</div>
								</div>
							</aside>
						</div>
				   <?php } } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
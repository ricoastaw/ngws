<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$enable_info	= get_theme_mod('enable_info',daddy_plus_flixita_get_default_option( 'enable_info' ));
$info_data	= get_theme_mod('info_data2',daddy_plus_flixita_get_default_option( 'info_data2' ));
if($enable_info=='1'):
?>	
<section id="info-section" class="info-section-2">
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
							$image = ! empty( $item->image_url ) ? apply_filters( 'flixita_translate_single_string', $item->image_url, 'Information section' ) : '';
					?>
						<div class="col-lg-4 col-md-6 col-12">
							<aside class="widget widget-contact">
								<div class="contact-area">
									<?php if(!empty($image)): ?>
										<img src="<?php echo esc_url($image); ?>" />
									<?php endif; ?>	
									<div class="feature-box-inner">
										<?php if(!empty($icon)): ?>
											<i class="fa <?php echo esc_attr($icon); ?>"></i>	
										<?php endif; ?>	
										<?php if(!empty($title)): ?>
											<h4 class="feature-box-title"><?php echo esc_html($title); ?></h4>
										<?php endif; ?>
									</div>
									<div class="info-box-body">
										<div class="p-4">
											<div class="info-inner">
	                            		        <?php if(!empty($icon)): ?>
													<i class="fa <?php echo esc_attr($icon); ?>"></i>
												<?php endif; ?>
												<?php if(!empty($title)): ?>
													<h4 class="info-title">
														<a href="#" class="info-title-text text-white"><?php echo esc_html($title); ?></a>
													</h4>
												<?php endif; ?>
	                                	    </div>
											<?php if(!empty($text)): ?>
												<p class="info-desc-text text-white"><?php echo esc_html($text); ?></p>
											<?php endif; ?>
	                            	    </div>
										<?php if(!empty($button)): ?>
											<div class="info-button-card">
												<a class="info-button" href="<?php echo esc_url($link); ?>"><?php echo esc_html($button); ?> 
													<i class="fa fa-long-arrow-right"></i>
												</a>
											</div>
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
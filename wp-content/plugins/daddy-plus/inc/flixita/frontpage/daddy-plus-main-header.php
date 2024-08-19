<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if (!function_exists('daddy_plus_flixita_top_header')):
function daddy_plus_flixita_top_header()
{
$enable_top_hdr			=	get_theme_mod('enable_top_hdr',daddy_plus_flixita_get_default_option( 'enable_top_hdr' ));
$enable_hdr_info1		=	get_theme_mod('enable_hdr_info1',daddy_plus_flixita_get_default_option( 'enable_hdr_info1' ));
$hdr_info1_icon			=	get_theme_mod('hdr_info1_icon',daddy_plus_flixita_get_default_option( 'hdr_info1_icon' ));	
$hdr_info1_title		=	get_theme_mod('hdr_info1_title',daddy_plus_flixita_get_default_option( 'hdr_info1_title' ));
$hdr_info1_link			=	get_theme_mod('hdr_info1_link',daddy_plus_flixita_get_default_option( 'hdr_info1_link' ));

$enable_hdr_info2		=	get_theme_mod('enable_hdr_info2',daddy_plus_flixita_get_default_option( 'enable_hdr_info2' ));
$hdr_info2_icon			=	get_theme_mod('hdr_info2_icon',daddy_plus_flixita_get_default_option( 'hdr_info2_icon' ));	
$hdr_info2_title		=	get_theme_mod('hdr_info2_title',daddy_plus_flixita_get_default_option( 'hdr_info2_title' ));
$hdr_info2_link			=	get_theme_mod('hdr_info2_link',daddy_plus_flixita_get_default_option( 'hdr_info2_link' ));

$enable_hdr_info3		=	get_theme_mod('enable_hdr_info3',daddy_plus_flixita_get_default_option( 'enable_hdr_info3' ));
$hdr_info3_icon			=	get_theme_mod('hdr_info3_icon',daddy_plus_flixita_get_default_option( 'hdr_info3_icon' ));	
$hdr_info3_title		=	get_theme_mod('hdr_info3_title',daddy_plus_flixita_get_default_option( 'hdr_info3_title' ));
$hdr_info3_link			=	get_theme_mod('hdr_info3_link',daddy_plus_flixita_get_default_option( 'hdr_info3_link' ));

$enable_social_icon		=	get_theme_mod('enable_social_icon',daddy_plus_flixita_get_default_option( 'enable_social_icon' ));
$hdr_social_icons		=	get_theme_mod('hdr_social_icons',daddy_plus_flixita_get_default_option( 'hdr_social_icons' ));
if($enable_top_hdr=='1'): ?>
<div id="above-header" class="above-header d-lg-block wow fadeInDown">
	<div class="header-widget d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12 mb-lg-0 mb-4">
					<div class="widget-left text-lg-left text-center">
						<?php if($enable_hdr_info1=='1'): ?>
							<aside class="widget widget-contact info1">
								<div class="contact-area">
									<?php if(!empty($hdr_info1_icon)): ?>
										<div class="contact-icon">
											<div class="contact-corn"><i class="fa <?php echo esc_attr($hdr_info1_icon); ?>"></i></div>
										</div>
									<?php endif;?>
									<?php if(!empty($hdr_info1_title)): ?>
										<div class="contact-info">
											<h6 class="title"><a href="<?php echo esc_url($hdr_info1_link); ?>"><?php echo wp_kses_post($hdr_info1_title); ?></a></h6>
										</div>
									<?php endif;?>
								</div>
							</aside>
						<?php endif; ?>	
						
						<?php if($enable_hdr_info2=='1'): ?>
							<aside class="widget widget-contact info2">
								<div class="contact-area">
									<?php if(!empty($hdr_info2_icon)): ?>
										<div class="contact-icon">
											<div class="contact-corn"><i class="fa <?php echo esc_attr($hdr_info2_icon); ?>"></i></div>
										</div>
									<?php endif;?>
									<?php if(!empty($hdr_info2_title)): ?>
										<div class="contact-info">
											<h6 class="title"><a href="<?php echo esc_url($hdr_info2_link); ?>"><?php echo wp_kses_post($hdr_info2_title); ?></a></h6>
										</div>
									<?php endif;?>
								</div>
							</aside>
						<?php endif; ?>	
					</div>
				</div>
					<div class="col-lg-6 col-12 mb-lg-0 mb-4">                            
						<div class="widget-right justify-content-lg-end justify-content-center text-lg-right text-center">
							<?php if($enable_hdr_info3=='1'): ?>
								<aside class="widget widget-contact info3">
									<div class="contact-area">
										<?php if(!empty($hdr_info3_icon)): ?>
											<div class="contact-icon">
												<div class="contact-corn"><i class="fa <?php echo esc_attr($hdr_info3_icon); ?>"></i></div>
											</div>
										<?php endif;?>
										<?php if(!empty($hdr_info3_title)): ?>
											<div class="contact-info">
												<h6 class="title"><a href="<?php echo esc_url($hdr_info3_link); ?>"><?php echo wp_kses_post($hdr_info3_title); ?></a></h6>
											</div>
										<?php endif;?>
									</div>
								</aside>
							<?php endif; ?>		
								
							<?php if($enable_social_icon=='1'): ?>	
								<aside class="widget widget_social_widget third">
									<ul>
										<?php
											$social_icons = json_decode($hdr_social_icons);
											if( $social_icons!='' )
											{
											foreach($social_icons as $social_item){	
											$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'flixita_translate_single_string', $social_item->icon_value, 'Header section' ) : '';	
											$social_link = ! empty( $social_item->link ) ? apply_filters( 'flixita_translate_single_string', $social_item->link, 'Header section' ) : '';
										?>
										<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
										<?php }} ?>
									</ul>
								</aside>
							<?php endif; ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif;} add_action('daddy_plus_flixita_top_header','daddy_plus_flixita_top_header');endif;
	
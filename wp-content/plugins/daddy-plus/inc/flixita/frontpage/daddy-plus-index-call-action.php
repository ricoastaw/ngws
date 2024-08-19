<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$enable_call_action	= get_theme_mod('enable_call_action',daddy_plus_flixita_get_default_option( 'enable_call_action' ));
$call_action_ttl	= get_theme_mod('call_action_ttl',daddy_plus_flixita_get_default_option( 'call_action_ttl' ));
$call_action_subttl	= get_theme_mod('call_action_subttl',daddy_plus_flixita_get_default_option( 'call_action_subttl' ));
$call_action_icon1	= get_theme_mod('call_action_icon1',daddy_plus_flixita_get_default_option( 'call_action_icon1' ));
$call_action_ttl1	= get_theme_mod('call_action_ttl1',daddy_plus_flixita_get_default_option( 'call_action_ttl1' ));
$call_action_link1	= get_theme_mod('call_action_link1',daddy_plus_flixita_get_default_option( 'call_action_link1' ));
$call_action_icon2	= get_theme_mod('call_action_icon2',daddy_plus_flixita_get_default_option( 'call_action_icon2' ));
$call_action_ttl2	= get_theme_mod('call_action_ttl2',daddy_plus_flixita_get_default_option( 'call_action_ttl2' ));
$call_action_link2	= get_theme_mod('call_action_link2',daddy_plus_flixita_get_default_option( 'call_action_link2' ));
$call_action_img	= get_theme_mod('call_action_img',daddy_plus_flixita_get_default_option( 'call_action_img' ));
if($enable_call_action=='1'):
?>	
<section id="flixita-call-action-section" class="flixita-call-action-section flixita-main-cta wow fadeInUp">
	<div class="container">
			<div class="row">
				<div class="col-lg-8 col-12 text-left">
					<div class="call-content">
						<?php if(!empty($call_action_ttl)): ?>
							<h2 class="title"><?php echo wp_kses_post($call_action_ttl); ?></h2>
						<?php endif; ?>
						<?php if(!empty($call_action_subttl)): ?>
							<h6 class="description"><?php echo wp_kses_post($call_action_subttl); ?></h6>
						<?php endif; ?>	
						<div class="call-wrap">
							<div class="call-details1">
								<?php if(!empty($call_action_icon1)): ?>
									<div class="call-icon">
										<i class="fa <?php echo esc_attr($call_action_icon1); ?>"></i>
									</div>
								<?php endif; ?>	
								<?php if(!empty($call_action_ttl1)): ?>
									<div class="call-body">
										<h3 class="call-title">
											<a href="<?php echo esc_url($call_action_link1); ?>"><?php echo wp_kses_post($call_action_ttl1); ?></a>
										</h3>
									</div>
								<?php endif; ?>		
							</div>
							<div class="call-details2">
								<?php if(!empty($call_action_icon2)): ?>
									<div class="call-icon">
										<i class="fa <?php echo esc_attr($call_action_icon2); ?>"></i>
									</div>
								<?php endif; ?>	
								
								<?php if(!empty($call_action_ttl2)): ?>
									<div class="call-body">
										<h3 class="call-title">
											<a href="<?php echo esc_url($call_action_link2); ?>"><?php echo wp_kses_post($call_action_ttl2); ?></a>
										</h3>
									</div>
								<?php endif; ?>		
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12 text-right">
					<?php if(!empty($call_action_img)): ?>
						<div class="cta-image">
							<img src="<?php echo esc_url($call_action_img); ?>">
						</div>
					<?php endif; ?>	
				</div>
			</div>
	</div>
</section>
<?php endif; ?>
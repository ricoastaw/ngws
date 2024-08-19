<?php  
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$enable_slider 	= get_theme_mod('enable_slider',daddy_plus_flixita_get_default_option( 'enable_slider' ));
$slider 	= get_theme_mod('slider',daddy_plus_flixita_get_default_option( 'slider' ));
if($enable_slider=='1'):
?>	
<section id="slider-section" class="slider-section">
	<div class="home-slider owl-carousel owl-theme">
		<?php
			if ( ! empty( $slider ) ) {
			$slider = json_decode( $slider );
			foreach ( $slider as $item ) {
				$title = ! empty( $item->title ) ? apply_filters( 'flixita_translate_single_string', $item->title, 'slider section' ) : '';
				$subtitle = ! empty( $item->subtitle ) ? apply_filters( 'flixita_translate_single_string', $item->subtitle, 'slider section' ) : '';
				$subtitle2 = ! empty( $item->subtitle2 ) ? apply_filters( 'flixita_translate_single_string', $item->subtitle2, 'slider section' ) : '';
				$text = ! empty( $item->text ) ? apply_filters( 'flixita_translate_single_string', $item->text, 'slider section' ) : '';
				$button = ! empty( $item->text2) ? apply_filters( 'flixita_translate_single_string', $item->text2,'slider section' ) : '';
				$link = ! empty( $item->link ) ? apply_filters( 'flixita_translate_single_string', $item->link, 'slider section' ) : '';
				$image = ! empty( $item->image_url ) ? apply_filters( 'flixita_translate_single_string', $item->image_url, 'slider section' ) : '';
				$align = ! empty( $item->align ) ? apply_filters( 'flixita_translate_single_string', $item->align, 'slider section' ) : '';
		?>
		<div class="item">
			<?php if ( ! empty( $image ) ) : ?>
				<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
			<?php endif; ?>
			<div class="main-slider">
				<div class="main-table">
					<div class="main-table-cell">
						<div class="container">                                
							<div class="main-content text-<?php echo esc_attr($align); ?>">
								<?php if ( ! empty( $title ) ) : ?>
									<h4 data-animation="fadeInLeft" data-delay="150ms"><?php echo esc_html($title); ?></h4>
								<?php endif; ?>	
								
								<?php if ( ! empty( $subtitle ) ) : ?>
									<h1 data-animation="fadeInRight" data-delay="200ms"><?php echo wp_kses_post($subtitle); ?> <span class="primary"><?php echo esc_html($subtitle2); ?></span></h1>
								<?php endif; ?>	
								
								<?php if ( ! empty( $text ) ) : ?>
									<p data-animation="fadeInLeft" data-delay="500ms"><?php echo wp_kses_post($text); ?></p>
								<?php endif; ?>	
								
								<?php if ( ! empty( $button ) ) : ?>
									<a data-animation="fadeInUp" data-delay="800ms" href="<?php echo esc_url($link); ?>" class="btn btn-primary btn-like-icon"><?php echo wp_kses_post($button); ?><span class="bticn"><i class="fa fa-arrow-right"></i></span></a>
								<?php endif; ?>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } } ?>
	</div>
</section>
<?php endif; ?>
	
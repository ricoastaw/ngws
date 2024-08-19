<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$enable_marque	= get_theme_mod('enable_marque',daddy_plus_flixita_get_default_option( 'enable_marque' ));
$marque_data	= get_theme_mod('marque_data',daddy_plus_flixita_get_default_option( 'marque_data' ));
if($enable_marque=='1'):
?>	
<section id="marquee-section" class="marquee-section st-py-default">
	<div class="marquee-box">
		<?php
			if ( ! empty( $marque_data ) ) {
			$marque_data = json_decode( $marque_data );
		?>
			<div class="marquee-group">
				<?php 
					foreach ( $marque_data as $i=>$item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'flixita_translate_single_string', $item->title, 'Marque section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'flixita_translate_single_string', $item->icon_value, 'Marque section' ) : '';
				?>
					<figure class="icon"><i class="fa <?php echo esc_attr($icon); ?>"></i></figure>
					<div class="text"><?php echo esc_html($title); ?></div>
				<?php } ?>
			</div>
			<div aria-hidden="true" class="marquee-group">
				<?php 
					foreach ( $marque_data as $i=>$item ) {
					$title = ! empty( $item->title ) ? apply_filters( 'flixita_translate_single_string', $item->title, 'Marque section' ) : '';
					$icon = ! empty( $item->icon_value ) ? apply_filters( 'flixita_translate_single_string', $item->icon_value, 'Marque section' ) : '';
				?>
					<figure class="icon"><i class="fa <?php echo esc_attr($icon); ?>"></i></figure>
					<div class="text"><?php echo esc_html($title); ?></div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</section>
<?php endif; ?>
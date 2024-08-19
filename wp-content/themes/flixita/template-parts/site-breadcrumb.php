<?php
/**
 * Template part for displaying site page header.
 */
$flixita_enable_page_header	= get_theme_mod('enable_page_header','1');
if($flixita_enable_page_header == '1') {	
?>
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-center" style="background: url(<?php echo esc_url(get_header_image()); ?>) center center scroll;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-content">
					<div class="breadcrumb-heading">
						<h1>
							<?php flixita_page_title();	?>
						</h1>
					</div>
					<ol class="breadcrumb-list">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fa fa-home"></i></a></li>
						<li>
							<?php flixita_page_header();	?>
						</li>
					</ol>
				</div>                    
			</div>
		</div>
	</div>
</section>
<?php } ?>	
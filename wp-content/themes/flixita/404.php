<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();
get_template_part('/template-parts/site', 'breadcrumb');
?>
<section id="section-404" class="section-404 st-py-default">
	<div class="container">
		<div class="row wow fadeInUp">
			<div class="col-lg-6 col-12 text-center mx-auto">
				<div class="card-404">							
					<h4><?php esc_html_e( '404 Page Not Found', 'flixita' ); ?></h4> 
					<p><?php esc_html_e( 'The page you are looking is not available or has been removed.', 'flixita' ); ?></p>  
					<div class="card-404-btn mt-3">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-like-icon"><?php esc_html_e( 'Go Home Page', 'flixita' ); ?> <span class="bticn"><i class="fa fa-home"></i></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

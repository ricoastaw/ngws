<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header();
get_template_part('/template-parts/site', 'breadcrumb'); 
?>
<section id="flixita-blog-section" class="flixita-blog-section st-py-default">
	<div class="container">
		<div class="row gy-lg-0 gy-5 wow fadeInUp">
			<div class="<?php if ( is_active_sidebar('sidebar-primary') ){ esc_attr_e('col-lg-8','flixita'); } else { esc_attr_e('col-lg-12','flixita'); } ?>">
				<div class="row row-cols-1 row-cols-md-1 g-5">
					<?php if( have_posts() ): 
						 while( have_posts() ) : the_post(); ?>
							<div class="col">
								<?php get_template_part('template-parts/content','page'); ?>
							</div>
						<?php endwhile; 
					 else: 
						 get_template_part('template-parts/content','none'); 
					 endif; ?>
				</div>
				<div class="row">
					<div class="col-12 text-center mt-5">
						<div class="fx-post-pagination">
							<?php								
								// Pagination.
								the_posts_pagination( array(
									'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
									'next_text'          => '<i class="fa fa-angle-double-right"></i>'
								) ); 
							?>
						</div>
					</div>
				</div>
			</div>
			<?php 
				// Sidebar
				get_sidebar();
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
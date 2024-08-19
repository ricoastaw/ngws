<?php 
/**
 *
 * Template Name: Full Width Page
 *
 * Displays the Full Width page.
 *
 * @package flixita
 */
 
get_header();
get_template_part('/template-parts/site', 'breadcrumb');
?>
<section class="flixita-page st-py-default">
	<div class="container">
		<div class="row row-cols-1 gy-5 wow fadeInUp">
			<div class="col">
				<?php the_post(); the_content(); 
					if( $post->comment_status == 'open' ) { 
						 comments_template( '', true ); // show comments 
					}
				?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
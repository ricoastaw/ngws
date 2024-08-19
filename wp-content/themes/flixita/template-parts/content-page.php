<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flixita
 */
$blog_archive_ordering = get_theme_mod( 'blog_archive_ordering', flixita_get_default_option( 'blog_archive_ordering' )); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-inner'); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumb">
			<a href="<?php echo esc_url(get_permalink());?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
	<?php endif; ?>	
	<div class="post-details-outer">
		<?php foreach ( $blog_archive_ordering as $blog_data_order ) : ?>
		<?php if ( 'meta' === $blog_data_order ) : ?>	
		<div class="top-meta date">
			<ul class="nav top-meta-list meta-right">
				<li>
					<div class="post-date">
						<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><i class="fa fa-calendar"></i><span><?php echo esc_html(get_the_date('j')); ?></span> <?php echo esc_html(get_the_date('M'));  echo esc_html(get_the_date(' Y')); ?></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="bottom-meta date">
			<ul class="nav bottom-meta-list meta-left">
				<li>
					<div class="post-author">
						<?php  $user = wp_get_current_user(); ?>
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>">
							<span class="author-img"><img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" /></span>
							<span class="author-name"><?php esc_html(the_author()); ?></span>
						</a>
					</div>
				</li>
				<li>
					<div class="post-comment">
						<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark" class="comments-count">
							<i class="fa fa-comment"></i> <?php echo esc_html(get_comments_number($post->ID)); ?> <?php  esc_html_e('Comments','flixita'); ?>
						</a>
					</div>
				</li>
			</ul>
		</div>
		<?php elseif ( 'title' === $blog_data_order ) :  ?>
			<div class="post-title-head">
				<?php 
					if ( is_single() ) :
						
					the_title('<h4 class="post-title">', '</h4>' );
					
					else:
					
					the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
					
					endif; 
				?>
			</div>	
			<?php
			elseif ( 'content' === $blog_data_order ) : 
			the_content( 
					sprintf( 
						__( 'Read More', 'flixita' ), 
						'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
					) 
				);
			endif;	
		?>
		 <?php  endforeach; ?>
	</div>
</article>
<?php
/**
 * The template for displaying comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
	<div class="comments-title">
		<h2>
			<?php
				printf( // WPCS: XSS OK.
					esc_html('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'flixita'),number_format_i18n( get_comments_number() ),'<span>' . esc_html(get_the_title()) . '</span>'
				);
			?>
		</h2>
	</div>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flixita' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flixita' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flixita' ) ); ?></div>
			</div>
		</nav>
	<?php endif; ?>

	<ol class="comment-list">
		<?php wp_list_comments( array('style'      => 'ol','short_ping' => true,) ); ?>
	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'flixita' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'flixita' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'flixita' ) ); ?></div>
			</div>
		</nav>
	<?php endif; endif; 
if(!comments_open() && get_comments_number() && post_type_supports( get_post_type(),'comments')): ?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'flixita' ); ?></p>
<?php endif; comment_form(); ?>
</div>
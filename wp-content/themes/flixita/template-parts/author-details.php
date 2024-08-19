<?php
/**
 * Template for displaying Author Details
 */
?>
<div class="col">
	<article class="blog-post author-details">
		<div class="media">
			<?php
				$flixita_author_description = get_the_author_meta( 'description' );
				$flixita_author_id          = get_the_author_meta( 'ID' );
				$flixita_current_user_id    = is_user_logged_in() ? wp_get_current_user()->ID : false;
			?>
			<div class="auth-mata">
				<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
			</div>
			<div class="media-body author-meta-det">
				<h5><?php the_author_link(); ?></h5>
				
				<?php
					if ( '' === $flixita_author_description ) {
						if ( $flixita_current_user_id && $flixita_author_id === $flixita_current_user_id ) { ?>
						<p>
							<?php 
							// Translators: %1$s: <a> tag. %2$s: </a>.
							printf( wp_kses_post( __( 'You haven&rsquo;t entered your Biographical Information yet. %1$sEdit your Profile%2$s now.', 'flixita' ) ), '<br/><a href="' . esc_url( get_edit_user_link( $flixita_current_user_id ) ) . '">', '</a>' );
							?>
							</p>
						<?php }
					} else {
					?>
					<p><?php echo wp_kses_post( $flixita_author_description ); ?></p>
					<?php	
					}
				?>
				<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" class="btn btn-white"><?php esc_html_e('View All Post','flixita'); ?></a>
			</div>
		</div>  
	</article>
</div>

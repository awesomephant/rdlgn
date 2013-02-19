<?php
/**
 * @package grid
 * @since grid 1.0
 */
?>
			<article>
 
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'grid' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<p class="meta">
				<?php grid_posted_on(); ?>
				</p>
				<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'grid' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'grid' ), 'after' => '</div>' ) ); ?>
			</article>	


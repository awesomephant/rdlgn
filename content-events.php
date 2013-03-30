<?php
/**
 * @package grid
 * @since grid 1.0
 */
?>
			<article>
				<p class="meta">
					<em class='date'><?php the_field('date')?> <time class='begin'><?php the_field('time_start')?></time><time class='end'><?php the_field('time_end')?></time></em>
					<?php 
						$category = get_the_category(); 
						if($category[0]){
							echo '<a class="cat" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
						}
					?>
				</p>
				<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'grid' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				
				<?php the_excerpt( __( 'Weiterlesen <span class="meta-nav">&rarr;</span>', 'grid' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'grid' ), 'after' => '</div>' ) ); ?>
			</article>	


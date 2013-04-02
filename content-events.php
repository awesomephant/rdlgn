<?php
/**
 * @package grid
 * @since grid 1.0
 */
?>
			<li class='event'>
				<time datetime='<?php the_field('date')?>'>
					<span class='date'><?php the_field('date')?>'</span>
					<span class='begin'><?php the_field('time_start')?></span>
					<span class='end'><?php the_field('time_end')?></span>
				</time>
				
				<article>
					<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'grid' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					
					<?php the_excerpt( __( 'Weiterlesen <span class="meta-nav">&rarr;</span>', 'grid'));?>
				</article>
			</li>	


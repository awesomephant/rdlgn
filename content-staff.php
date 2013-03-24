<?php
/**
 * @package grid
 * @since grid 1.0
 */
?>
			<a class='employee' href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'grid' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<img class='avatar' src="<?php the_field('avatar'); ?>" alt="" />
				<div class='data'>
					<h2><?php the_title();?></h2>
					<span class='job'><?php the_field('job');?></span>
				</div>
			</a>	


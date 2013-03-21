
<?php
/*
Template Name: Staff
*/
?>
<?php get_header(); ?>

		<div class="primary content-area">
			<div class="site-content" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
				<section class='team-docs'>
				<?php if ( have_posts() ) : 
					query_posts('post_type=staff&meta_value=arzt');
				
					while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'staff' );?>
				
				<?php endwhile; ?>
				<?php endif; ?>
				</section>
				
			</div><!-- #primary .content-area -->
        </div>
		<?php get_footer(); ?>
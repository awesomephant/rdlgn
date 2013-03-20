<?php
/*
Template Name: News
*/

get_header(); ?>

		<div class="primary news" class="content-area">
			Aktuelles
			
			<?php if ( have_posts() ) : 
				query_posts('post_type=events');
			
				while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', get_post_format() );?>
				
				<?php endwhile; ?>

				<?php // grid_content_nav( 'nav-below' ); ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>

		</div><!-- #primary .content-area -->

<?php get_footer(); ?>
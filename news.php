<?php
/*
Template Name: News
*/

get_header(); ?>
<h1
		<div class="primary news" class="content-area">
			<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				
			<ol class='eventlist'>
			<div class='timeline'></div>
			<?php if ( have_posts() ) : 
				query_posts('post_type=events&&orderby=meta_value&&meta_key=date');
			
				while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', events );?>
				
				<?php endwhile; ?>

				<?php // grid_content_nav( 'nav-below' ); ?>

			<?php elseif ( current_user_can( 'edit_posts' ) ) : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
		</ol>
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>
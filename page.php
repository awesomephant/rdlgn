<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package grid
 * @since grid 1.0
 */

get_header(); ?>
			<?php get_sidebar(); ?>
			<div id="content" class="site-content" role="main">

				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
			


<?php get_footer(); ?>
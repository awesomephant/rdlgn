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
<aside>
				<nav>
<ul class="clearfix">
    <?php wp_list_pages( array('title_li'=>'','depth'=>3,'child_of'=>get_post_top_ancestor_id()) ); ?>
</ul>
				</nav>
			</aside>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				
				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
			
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>
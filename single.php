<?php
/**
 * The Template for displaying all single posts.
 *
 * @package grid
 * @since grid 1.0
 */

get_header(); ?>
		<div class="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				
				<?php get_template_part( 'content', 'single' ); ?>


			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		
		</div><!-- #primary .content-area -->
		<section class='blog-secondary'>	
		<section class='comments'>
			<h2><?php comments_number( '', '1 Kommentar', '% Kommentare' ); ?>.
			</h2>
			<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>
			</section>
		<section class='sidebar'>
			<h2>Mehr auf 100nm</h2>
			<?php if ( ! dynamic_sidebar() ) : ?>
				<li>{static sidebar item 1}</li>
				<li>{static sidebar item 2}</li>
			<?php endif; ?>
		
		</section>	
		</section>
<?php get_footer(); ?>

<?php
/*
Template Name: Impressum
*/
?>
<?php get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
				<button class='show-honcode'>HON-Code </button>
				<section class='honcode'>
					<?php the_field('hon-code')?>
				</section>
		</div><!-- #primary .content-area -->
        </div>

<?php get_footer(); ?>
<?php
/**
 * @package grid
 * @since grid 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class='blog-title'>
			<p class='number'>
				100
			</p>
			<p class='unit'>
				Nanometer
			</p>
		</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<p class='entry-intro'><?php the_field('intro'); ?></p>
		
		<div class='entry-meta'>
			<span class='author'><a href='<?php the_author_link(); ?>'><?php the_author(); ?></a></span>
			<span class='posted-on'><?php grid_posted_on(); ?></span>
			<span class='cats'>
			<?php 
			$category = get_the_category(); 
				if($category[0]){
				echo '<a class="cat" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
			}
			?>
			</span>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


		<?php edit_post_link( __( 'Edit', 'grid' ), '<span class="edit-link">', '</span>' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->

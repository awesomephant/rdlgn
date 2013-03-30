<?php
/**
 * @package grid
 * @since grid 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<p class='meta'>
		<span class='posted-on'><?php grid_posted_on(); ?></span>
		
		<?php 
		$category = get_the_category(); 
			if($category[0]){
			echo '<a class="cat" href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
			}
		?>
		</p>
		<hgroup>
	
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<h2><?php the_field('subhead'); ?></h2>
		
		</hgroup>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p class='author'>
			<a href='<?php the_author_link(); ?>'><?php the_author(); ?></a>
		</p>
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'grid' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', ', ' );

			if ( ! grid_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grid' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grid' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '%1$s <span class="tags">%2$s.</span> Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grid' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grid' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'grid' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->

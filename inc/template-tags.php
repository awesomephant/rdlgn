﻿<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package grid
 * @since grid 1.0
 */

if ( ! function_exists( 'grid_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 *
 * @since grid 1.0
 */
function grid_content_nav( $nav_id ) {
	global $wp_query;

	$nav_class = 'site-navigation paging-navigation';
	if ( is_single() )
		$nav_class = 'site-navigation post-navigation';

	?>
	<nav role="navigation" id="<?php echo $nav_id; ?>" class="<?php echo $nav_class; ?>">
		<h1 class="assistive-text"><?php _e( 'Post navigation', 'grid' ); ?></h1>

	<?php if ( is_single() ) : // navigation links for single posts ?>

		<?php previous_post_link( '<span class="nav-previous">%link</span>', ' %title' ); ?>
		<?php next_post_link( '<span class="nav-next">%link</span>', ' %title' ); ?>

	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>

		<?php if ( get_next_posts_link() ) : ?>
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'grid' ) ); ?></div>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'grid' ) ); ?></div>
		<?php endif; ?>

	<?php endif; ?>

	</nav><!-- #<?php echo $nav_id; ?> -->
	<?php
}
endif; // grid_content_nav

if ( ! function_exists( 'grid_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since grid 1.0
 */
function grid_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'grid' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'grid' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php // echo get_avatar( $comment, 220 ); ?>
					<?php printf( __( '%s ', 'grid' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
						<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
				$d = "d.m";
				printf( __( '%1$s', 'grid' ), get_comment_date($d) ); ?>
				</time></a>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'grid' ); ?></em>
					<br />
				<?php endif; ?>

			</footer>

			<div class="comment-content">
				<?php comment_text(); ?>
				<div class="comment-meta commentmetadata">
			
					<?php edit_comment_link( __( '(Edit)', 'grid' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			
				<div class="reply">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</div><!-- .reply -->
			</div>
			
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for grid_comment()

if ( ! function_exists( 'grid_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @since grid 1.0
 */
function grid_posted_on() {
	printf( __( '<time class="entry-date" datetime="%3$s">%4$s</time>', 'grid' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'grid' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);
}
endif;


/**
 * Returns true if a blog has more than 1 category
 *
 * @since grid 1.0
 */
function grid_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so grid_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so grid_categorized_blog should return false
		return false;
	}
}

/**
 * Flush out the transients used in grid_categorized_blog
 *
 * @since grid 1.0
 */
function grid_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'grid_category_transient_flusher' );
add_action( 'save_post', 'grid_category_transient_flusher' );
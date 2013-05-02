<?php
/**
 * The template for displaying search forms in grid
 *
 * @package grid
 * @since grid 1.0
 */
?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'grid' ); ?></label>
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'grid' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'grid' ); ?>" />
	</form>

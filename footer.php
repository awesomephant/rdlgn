<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package grid
 * @since grid 1.0
 */
?>

	</div><!-- #main .site-main -->

			<footer>
			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
			</nav>
			<a href="http://www.mammo-programm.de/startseite/startseite.php"><img alt="Mammografie-Screening" src="<?php bloginfo('template_directory'); ?>/images/mammo.png"></a>
			<a href="#"><img alt="Nach IMed-Standard zertifiziert." src="<?php bloginfo('template_directory'); ?>/images/imed.png"></a>
		</footer>
		<p>Copyright &copy; 2011 Gemeinschaftspraxis Prof. Dr. Hansj&ouml;rg Zwicker und Partner.</p>


<?php wp_footer(); ?>


</body>
</html>
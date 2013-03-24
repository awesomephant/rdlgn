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
			<nav role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
			</nav>
			<div class='partners'>
			<a title="Mammografie Screening" href="http://www.mammo-programm.de/startseite/startseite.php">
				<img alt="Mammografie Screening Logo" src="<?php bloginfo('template_directory'); ?>/images/mammo.png">
			</a>
			<a title="Nach IMED-Standard zertifiziert" href="#">
				<img alt="Mammografie Screening Logo" src="<?php bloginfo('template_directory'); ?>/images/imed.png">
			</a>
			</div>
		</footer>
		<p class="copyright">Copyright &copy; 2011 Gemeinschaftspraxis Prof. Dr. Hansj&ouml;rg Zwicker und Partner.</p>


<?php wp_footer(); ?>

</div><!--.page-container-->
</body>
</html>
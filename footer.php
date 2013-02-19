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
			<a class='mammo'href="http://www.mammo-programm.de/startseite/startseite.php"><span>Mammografie-Screening</span></a>
			<a class='imed' href="#"><span>Nach IMED-Standard zertifiziert</span></a>
		</footer>
		<p>Copyright &copy; 2011 Gemeinschaftspraxis Prof. Dr. Hansj&ouml;rg Zwicker und Partner.</p>


<?php wp_footer(); ?>


</body>
</html>

<?php
/*
Template Name: Kontakt (Google Map)
*/
?>
<?php get_header(); ?>
<iframe width="640" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=Haydnstr.+2+D-78464+Konstanz+&amp;aq=&amp;sll=51.175806,10.454119&amp;sspn=10.87505,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=Haydnstra%C3%9Fe+2,+78464+Konstanz,+Freiburg,+Baden-W%C3%BCrttemberg&amp;t=m&amp;view=map&amp;ll=47.671977,9.186845&amp;spn=0.013871,0.027466&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

				
		</div><!-- #primary .content-area -->
        </div>

<?php get_footer(); ?>
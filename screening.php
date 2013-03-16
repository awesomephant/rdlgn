<?php
/*
Template Name: Screening
*/
?>
<?php get_header(); ?>
	<section class='banner'>
		<video controls="controls" poster="http://sandbox.thewikies.com/vfe-generator/images/big-buck-bunny_poster.jpg" width="640" height="360">
			<source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4" type="video/mp4" />
			<source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm" />
			<source src="http://clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg" />
			<object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
				<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
				<param name="allowFullScreen" value="true" />
				<param name="wmode" value="transparent" />
				<param name="flashVars" value="config={'playlist':['http%3A%2F%2Fsandbox.thewikies.com%2Fvfe-generator%2Fimages%2Fbig-buck-bunny_poster.jpg',{'url':'http%3A%2F%2Fclips.vorwaerts-gmbh.de%2Fbig_buck_bunny.mp4','autoPlay':false}]}" />
				<img alt="Big Buck Bunny" src="http://sandbox.thewikies.com/vfe-generator/images/big-buck-bunny_poster.jpg" width="640" height="360" title="No video playback capabilities, please download the video below" />
			</object>
		</video>
	</section>
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
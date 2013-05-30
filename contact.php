
<?php
/*
Template Name: Kontakt (Google Map)
*/
?>

<?php get_header(); ?>

<div role='main'>
	<section class='banner map'>
		<iframe width="1225" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.de/maps?oe=utf-8&amp;client=firefox-a&amp;channel=fflb&amp;ie=UTF8&amp;q=radiologen+konstanz&amp;fb=1&amp;gl=de&amp;hq=radiologen&amp;hnear=0x479af61b380c1f5b:0x41f6bb7a5df99d0,Konstanz&amp;cid=0,0,261062657332997872&amp;t=m&amp;ll=47.672352,9.191008&amp;spn=0.006502,0.026286&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
		<img src='http://maps.google.com/maps/api/staticmap?center=Haydnstra%C3%9Fe+2,+78464+Konstanz,+Freiburg,+Baden-W%C3%BCrttemberg&zoom=13&markers=Haydnstra%C3%9Fe+2,+78464+Konstanz,+Freiburg,+Baden-W%C3%BCrttemberg&size=640x520&sensor=false&visual_refresh=true' alt='Anfahrt zur Praxis'>
		<a class='banner-link' href='https://maps.google.de/maps?q=Haydnstr.+2+D-78464+Konstanz&hl=de&ie=UTF8&geocode=+&hnear=Haydnstra%C3%9Fe+2,+78464+Konstanz,+Freiburg,+Baden-W%C3%BCrttemberg&t=m&z=16' title='In Google Maps öffnen.'>In GMaps öffnen</a>

	</section>
		<div class="primary content-area">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			<section>
				<h2>Senden Sie eine Nachricht:</h2>
				<form role="form" class='contactform' action="#">
				  <fieldset>
					<div>
						<label for="name">Absender</label>
						<input autofocus required type="text" name="name" id="name" placeholder="Max Mustermann" />
						<div class='indicator'>&#10003;</div>
					</div>
					
					<div>
						<label for="email">Email-Adresse</label>
						<input required type="text" name="email" id="email" placeholder="beathe.beispie@gmail.com" />
						<div class='indicator'>&#10003;</div>
					</div>
				 </fieldset>

				
				  <div>
					<label for="textarea">Nachricht</label>
					<textarea required cols="40" rows="8" name="textarea" id="textarea"></textarea>
				  </div>

				
				  <div>
					<input type="submit" value="Abschicken" />
				  </div>
				</form>
			</section>
	
        </div>
		<div class='secondary'>
			<?php the_field('numbers');?>
		</div>
</div>
<?php get_footer(); ?>
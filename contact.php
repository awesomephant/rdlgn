
<?php
/*
Template Name: Kontakt (Google Map)
*/
?>

<?php get_header(); ?>
<div role='main'>
<section class='banner'>
<iframe width="640" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.de/maps?f=q&amp;source=embed&amp;hl=de&amp;geocode=&amp;q=Haydnstr.+2+D-78464+Konstanz+&amp;aq=&amp;sll=51.175806,10.454119&amp;sspn=10.87505,19.753418&amp;ie=UTF8&amp;hq=&amp;hnear=Haydnstra%C3%9Fe+2,+78464+Konstanz,+Freiburg,+Baden-W%C3%BCrttemberg&amp;t=m&amp;view=map&amp;ll=47.671977,9.186845&amp;spn=0.013871,0.027466&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
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
				<form class='contactform' action="#">
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
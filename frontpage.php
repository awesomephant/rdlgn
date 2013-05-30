<?php
/*
Template Name: Startseite
*/
?><?php get_header(); ?>
		<section class='banner'>
  	    	<figure>
				<img src="<?php bloginfo('template_directory'); ?>/images/people-even-wider.jpg" />
				<figcaption><?php the_field('tagline')?></figcaption>
			</figure>
		</section>
        <section class="intro">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			<div class='teaser'>
				<h2><?php the_field('teaser-0-heading')?></h2>
					<?php the_field('teaser-0')?>
					<a href='#'>Weiterlesen</a>
			</div>
			<div class='teaser'>
				<h2><?php the_field('teaser-1-heading')?></h2>
					<?php the_field('teaser-1')?>
					<a href='#'>Weiterlesen</a>
			</div>
			<div class='teaser last'>
				<h2><?php the_field('teaser-2-heading')?></h2>
					<?php the_field('teaser-2')?>
					<a href='#'>Weiterlesen</a>
			</div>
			
		</section>
		<section class='feeds'>
			<section class="news">
			<a href="#"><h1>Aktuelles.</h1></a>
			<ul>
					<?php
					$news = new WP_Query( 'post_type=events' );
					// The Loop
					while ( $news->have_posts() ) :
						$news->the_post();
						
					?>
					<li>
						<a href="<?php the_permalink();?>">
							<h2><?php the_title();?></h2>
							<span class="meta"><?php grid_posted_on(); ?></span>
						</a>
					</li>
					
					<?php endwhile ?>
			</ul>
            </section>
            <section class="blog">
                <a href=""><h1>Blog "100 Nanometer".</h1></a>
				<ul>
				<?php
				$recent = new WP_Query( 'post_type=post');
				if($recent->have_posts()) : while($recent->have_posts()): $recent->the_post();
				?>
				<li>
                    <a href="<?php the_permalink();?>">
						<h2><?php the_title();?></h2>
                        <span class="meta"><?php grid_posted_on(); ?></span>
					</a>
				</li>
				<?php endwhile ?>
				</ul>
				<?php else : ?>
				<p> Nothing to see here. Move along </p>
				<?php endif ?>

            </section>
		</section>
        

<?php get_footer(); ?>
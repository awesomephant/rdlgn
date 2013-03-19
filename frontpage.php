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

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>
			<div class='teaser'>
				<h2>Patienteninformation</h2>
				<p>
					Unser Ziel ist es, mit einer breit gefächerten Bildgebung und differenzierten Methoden der Strahlenheilkunde Ihnen die bestmögliche Behandlung zu bieten.
				</p>
				<p>
					Wir möchten Sie einladen, sich auf den folgenden Seiten über unser Leistungsspektrum umfassend zu informieren.
				</p>
				<a href='#'>Weiterlesen</a>
			</div>
			<div class='teaser'>
				<h2>Ärtzteinformation</h2>
				<p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet</p>
				<a href='#'>Weiterlesen</a>
			</div>
			<div class='teaser last'>
				<h2>Leistungsübersicht</h2>
				<p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet</p>
				<a href='#'>Weiterlesen</a>
			</div>
		</section>
		<section class='feeds'>
			<section class="news">
			<a href="#"><h1>Aktuelles.</h1></a>
			<ul>
					<?php
					$news = new WP_Query( 'category_name=aktuelles' );
					// The Loop
					while ( $news->have_posts() ) :
						$news->the_post();
						
					?>
					<li>
						<a href="<?php the_permalink();?>">
							<h2><?php the_title();?></h2>
							<span class="meta"><?php grid_posted_on(); ?> <span class='comment-count'><?php comments_number();?>.</span></span>
						</a>
					</li>
					
					<?php endwhile ?>
			</ul>
            </section>
            <section class="blog">
                <a href=""><h1>Blog "100 Nanometer".</h1></a>
				<ul>
				<?php
				$recent = new WP_Query( 'cat=-16');
				if($recent->have_posts()) : while($recent->have_posts()): $recent->the_post();
				?>
				<li>
                    <a href="<?php the_permalink();?>">
						<h2><?php the_title();?></h2>
                        <span class="meta"><?php grid_posted_on(); ?><span class='comment-count'><?php comments_number();?>.</span></span>
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
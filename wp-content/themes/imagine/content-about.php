<article class="about-page">
	<figure id="aboutimg">
		<?php the_post_thumbnail('about-image'); ?>	
	</figure>
	<section class="content-about">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>
        <?php the_content(); ?>
    </p>
    </section>
</article>
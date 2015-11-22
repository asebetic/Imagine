<article class="about-page">
	<?php the_post_thumbnail('single-image'); ?>
	<section class="content-about">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>
        <?php the_content(); ?>
    </p>
    </section>
</article>
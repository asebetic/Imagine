<?php /* Template Name: Portfolio */

get_header(); ?>

<?php

$args = array('category' => 8);

$posts = get_posts($args);

?>

<ul class="portfolio">

<?php foreach ($posts as $post): setup_postdata($post); ?>

            <li class="portfolio-project">
                <a href="<?php the_permalink(); ?>">                
                	<figure>
                		<?php the_post_thumbnail('portfolio-image'); ?>
                		<figcaption><h2><?php the_title(); ?></h2></figcaption>               	
                	</figure>
                </a>

            </li>

<?php endforeach; ?>

</ul>

<?php wp_reset_postdata();

get_footer();



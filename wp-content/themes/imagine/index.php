<?php get_header(); ?>

    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>

        <section class="postpage">
            <div class="post-image">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-image'); ?></a>
            </div>            
            <div class="post"><p class="post-info"><?php
                
                $categories = get_the_category();
                $separator = ", ";
                $output = '';

                if ($categories) {            
                    foreach ($categories as $category) {                    
                        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;   
                    }     
                    echo trim($output, $separator);      
                }   
                ?> | <?php the_time('F j, Y'); ?></p>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                <?php the_content('Read more'); ?>                           
            </div>          
    	</section>

        <?php endwhile;

    	else :
            
        echo '<p>No content found</p>';

    	endif; 
    ?>

<?php get_footer(); ?>

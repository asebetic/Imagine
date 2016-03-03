<div class="content">

    <article class="single-post col-2-3">
    	<h2><?php the_title(); ?></h2>
    	<p class="post-info"><?php
                    
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
    	<figure class="single-img"><?php the_post_thumbnail('single-image'); ?></figure>
        <p>
            <?php the_content(); ?>
        </p>
    </article>

    <?php get_sidebar(); ?>

    <div class="comments col-2-3">
        <h2>Comments</h2>
        <?php comments_template(); ?>
    </div>
</div>

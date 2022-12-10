<?php
get_header();
?>

<main>
    <div class="blog-grid">
        <!-- Get all the posts -->
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>">
                    <!-- Blog image -->
                        <div class="blog-grid__image"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
                    </a>
                    <!-- Blog title -->
                    <h2 class="blog-grid__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <!-- Blog excerpt -->
                    <p class="blog-grid__text"><?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?></p>
                    <!-- Read more link -->
                    <a class="blog-grid__read-more" href="<?php the_permalink(); ?>"><?php _e( 'Read More' ); ?></a>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </article>

            <?php endwhile;
            // Get sidebar
            get_sidebar();
            the_posts_pagination();
        endif;?>
    </div>

</main>

<?php get_footer(); ?>
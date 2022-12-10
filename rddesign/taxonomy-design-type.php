<?php
get_header();
?>

<main>
    <h1 class="showcase">Showcase</h1>
    <!-- Filter buttons for showcase items -->
    <a href="/design-type/residential"><button class="showcase-btn">Residential</button></a>
    <a href="/design-type/commercial"><button class="showcase-btn">Commercial</button></a>
    <a href="/design-type/home-staging"><button class="showcase-btn">Home Staging</button></a>
    <div class="projects-grid">
        <!-- Get all the posts -->
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>">
                    <!-- Project Image -->
                        <div class="blog-grid__image"><?php the_post_thumbnail('single-post-thumbnail'); ?></div>
                    </a>
                    <!-- Project title -->
                    <h2 class="blog-grid__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <!-- View Project link -->
                    <a class="blog-grid__read-more" href="<?php the_permalink(); ?>"><?php _e( 'View Project' ); ?></a>
                    <?php wp_link_pages(); ?>
                    <?php edit_post_link(); ?>
                </article>

            <?php endwhile;
            // Pagination
            the_posts_pagination();
        endif;?>
    </div>
</main>

<?php get_footer(); ?>
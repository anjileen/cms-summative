<?php get_header(); ?>

<main>
    <div class="content">
        <!-- Show the post -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
                <?php edit_post_link(); ?>
            </article>

                <!-- In case a blog wants to be added in future. If it's not the showcase post, show comments -->
                <?php if(is_single() && (get_post_type() !== 'showcase')) comments_template(); ?>

            <!-- Previous and next navigation with thumbnails -->
            <?php 
            $next_post = get_next_post();
            $previous_post = get_previous_post();
            the_post_navigation( array(
            'prev_text'  => __( '<div>'.get_the_post_thumbnail($previous_post, [130, 130] ).'</div><&nbsp; Previous<br> %title &nbsp;' ),
            'next_text'  => __( '<div>'.get_the_post_thumbnail($next_post, [130, 130] ).'</div>&nbsp; Next ><br> %title &nbsp;' ),
            ) );

            endwhile;
        endif; ?>

    </div> 
</main>

<?php get_footer(); ?>
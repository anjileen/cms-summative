<?php get_header(); ?>

<main>
<!-- If post exists, show them -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>
<?php wp_link_pages(); ?>
<?php edit_post_link(); ?>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
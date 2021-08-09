<?php get_header(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <a href="<?php the_permalink();?>">
        <h3><?php the_title(); ?></h3>
        </a>
        <p>Published by: <?php the_author(); ?> on <?php the_date();?></p>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
        
        <?php endwhile; ?>
        
        <?php
        if ( get_next_posts_link() ) {
        next_posts_link();
        }
        ?>
        <?php
        if ( get_previous_posts_link() ) {
        previous_posts_link();
        }
        ?>
        
        <?php else: ?>
        
        <p>No posts found. :(</p>
        
        <?php endif; ?>
<?php get_footer(); ?>

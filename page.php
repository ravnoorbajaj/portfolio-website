<?php
//insert header
get_header();
?>

<!-- html  -->
<main>
<article>

<?php 
// wordpress loop standard
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

                    <!-- html -->

    <h2><?php the_title();?></h2>
    
                    <!-- PHP -->
        <?php 
            // check if the post or page has a Featured Image assigned to it.
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
        ?>
    <?php
        the_content();
        ?>
     <?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    
    ?>
    <!-- Closing html  -->
</article>
    </main>
    <!-- //insert footer -->
<?php
get_footer();
?>
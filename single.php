<?php 
/*template name:Resume */

get_header(); ?>

<!-- html  -->
<main>
    <article class="singlepage">

<!-- loop  -->
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>


    <!-- page title  -->
<h1>
    <section class="decoration">
<?php
the_title();
?>
    </section>
<!-- feature image  -->
<?php
                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
        
        ?>
<!-- metadata(autor,date,categories,tags,etc.) -->
<section class="metadata">

<p class="author">Published by :<?php the_author();?> on <?php the_date(); ?> </p>

<p>
<?php the_category(); ?>
</p>
<p>
<?php the_tags();?>
</p>

</section>

<!-- page content  -->

<?php the_content();?>

<!-- comments -->
<?php 

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        ?>
<!-- previous post link  -->
<?php 
previous_post_link(); ?>

<!-- next post link  -->
<?php 
next_post_link(); ?>

<?php
  endwhile; 
 endif; 
?>

</article>
</main>
<!-- sidebar  -->
<?php // get_sidebar();?>
<!-- footer  -->
<?php get_footer();?>
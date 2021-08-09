<?php 
/*template name: Blog Archieve*/
get_header();
?>

<main>
<article id="content" role="main">

<!-- this code will detect what type of archieve you want , and show the right header  -->

                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category:</h2>
                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h2>Archive for <?php the_time('F jS, Y'); ?>:</h2>
                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h2>Archive for <?php the_time('F, Y'); ?>:</h2>
                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h2>Archive for <?php the_time('Y'); ?>:</h2>
                    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h2>Author Archive</h2>
                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && 
                    !empty($_GET['paged'])) { ?>
                    <h2>Blog Archives</h2>
                    <?php } ?>
                            <?php get_search_form(); ?>
                        <h2> Archieves by Month:  </h2>
                                <ul>
                                <?php wp_get_archives('type-monthly'); ?>
                                
                                </ul>

                         <h2> Archieves by Year:  </h2>
                                <ul>
                                <?php wp_get_archives('type-yearly'); ?>
                                
                                </ul>        

                        <h2> Archieves by Subject:  </h2>
                                <ul>
                                <?php wp_list_categories(); ?>
                                
                                </ul>            
                                
                <?php if(have_posts()): ?> <?php while(have_posts()) : the_post();  ?>

                <li>
                <h2>
                <?php the_title(); ?>
                </h2>

            <?php echo get_avatar(get_the_author_meta('ID'),32); ?>
<p><?php the_author(); ?></p>

<p class="author">Published by :<?php the_author();?> on <?php the_date(); ?> </p>

<p><?php the_excerpt(); ?></p>

<a href="<?php the_permalink();?>" >Read More </a>

                </li>

<?php endwhile; else: ?>
<?php _e('Sorry, no posts matched your criteria'); ?>
<?php endif; ?>
</ul>
    </article>
</main>

<?php get_sidebar(); ?>
    <?php get_footer();?>
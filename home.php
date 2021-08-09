<?php get_header(); ?>

                <main>
                <article>
        <li id="categories">
            <h2><?php _e( 'Categories:' ); ?></h2>
            <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                <?php wp_dropdown_categories( 'show_count=1&hierarchical=1' ); ?>
                <input type="submit" name="submit" value="view" />
            </form>
        </li>

        <ul class="blog-container">

        <!-- wordpress loop  -->

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li class="blog-card">
                    <!-- build your template here -->
                    <!-- Display the post title -->
                    <h1><?php the_title(); ?></h1>

                    <?php 
                        // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                        ?>

                    <!-- Display author and publishing date -->

                    <p>Published by: <?php the_author(); ?> on <?php the_date(); ?></p>

                    <!-- Display the post categories -->

                    <p>Categories: <?php the_category(); ?></p>

                    <!-- Display the post tags -->

                    <p><?php the_tags(); ?></p>
                    
                    <!-- Display the content -->
                    <?php the_excerpt(); ?>

                    <a href="<?php the_permalink(); ?>">Read More</a>
                </li>

            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </ul>
    <hr>

                </article>
                </main>   

<?php get_sidebar(); ?>
<?php get_footer(); ?>
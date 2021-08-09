<?php 
get_header();
?>
  <section class="separator-home">
        <h2>Web Development</h2>
    </section>
    <section class="wrapper">
        <article class="portfolio">
        <!-- custom query -->

        <?php 
            // the query
        $the_query = new WP_Query( array( 'category_name' => 'portfolio+featured' ) );
         ?>
 
            <?php if ( $the_query->have_posts() ) : ?>
 
         <!-- pagination here -->
 
         <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <!-- portfolio project slider items -->
            
            <section class="item">

            <!-- Check the page for feature image -->
            <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
        
        ?>

                <img src="../../img/logo-withname-01.png">
                <h3 class="proj-scope">Scope</h3>
                <ul class="proj-scope">
                    
                <?php $acf_project_scope = get_field( 'project_scope' ); ?>
                    
                   <?php if ( $acf_project_scope ) : ?>
	
                     <?php $get_terms_args = array(
	            	'taxonomy' => 'post_tag',
	            	'hide_empty' => 0,
	            	'include' => $acf_project_scope,
            	); ?>
             <?php $terms = get_terms( $get_terms_args ); ?>
             <?php if ( $terms ) : ?>
                    <?php foreach ( $terms as $term ) : ?>
                    <li>
                        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
                    </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endif; ?>
            </ul>

                <h3 class="proj-title">Project Title</h3>
                <p class="proj-title"> <?php the_title(); ?></p>

                <h3 class="proj-type">Project Type</h3>
                <p class="proj-type"> <?php the_field('project_type' );  ?>  </p>

                <h3 class="proj-desc">Description</h3>
                <p class="proj-desc"><?php the_content(); ?></p>

            </section>
            <a href=" <?php the_permalink(); ?>" class="learnmorebutton">Learn more</a>
           
            <!-- end of custom query -->
        </article>


        <section class="webdevo">
            <section class="flex-container3">
                <a class="item dev1" href="#">
                    <p>As a student I don't have a lot of expereinece but I love learning I would sugget everyone to learn beacuse if we have the habit to learn we have a lot to gain. A good listener alway have more knowledge than a good speaker.Leaning never stops. I have been learning all things through grasping from others and it is your choice who you surround yourself with.
                    </p>
                </a>
                <a class="item dev2" href="#">
                    <p>In Sikh Religion, In prayer the last line always states that God please bless us with such a compny that we learn good things.Learning is like growing your skills once you learn things you must implement them in your life. Best practice is to take notes. A Famous proverb once said that Once written by your hand is engraved on your mind. I do believe it </p>
                </a>
                <a class="item dev3" href="#">
                    <p> I am a slow learner and I always forget things, I make notes and write almost everything taught to me in class this not only make it easier after wards for me but provides a great help to me while I am doing My assignments as I donot have to go back and forth to the videos I have highlighted notes which make it easier for me to understand.</p>

                </a>

    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


           

            </section>
        </section>

    </section>




<?php 
get_footer();
?>
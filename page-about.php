<?php 
/*template name:About*/
get_header();

//acf fields for about section
$acf_image1 = get_field( 'image1' );
$acf_text_for_about1 = get_field( 'text_for_about1' );
$acf_image2 = get_field( 'image2' );
?>
    <!--      start of main-->
    <main>
        <!--   start of article-->
        <article>
<!-- regualr loop -->
 <?php 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>

        <!--   about me-->
        <section class="myself">

            <h1>
               <?php 
               the_title();
               ?>
            </h1>
 
    <?php
    endwhile; 
endif; 
?>
<!-- end of regular loop -->
                <section class="wrapper">
                <?php if ( $acf_image1 ) : ?>
	<img src="<?php echo esc_url( $acf_image1['url'] ); ?>" alt="<?php echo esc_attr( $acf_image1['alt'] ); ?>" />
<?php endif; ?>
                    <p>
                    <?php echo $acf_text_for_about1; ?>
                    </p>
                    <?php if ( $acf_image2 ) : ?>
	<img src="<?php echo esc_url( $acf_image2['url'] ); ?>" alt="<?php echo esc_attr( $acf_image2['alt'] ); ?>" />
<?php endif; ?>
                    <p>
                    <?php echo $acf_text_for_about1; ?> </p>
                </section>
 
            </section>

       <!--Image of myself section-->
        <!--            <section class="portrait">
        <img src="../img/portrairt1.png" alt="Portrait">
         </section>-->
            <!--end Image of myself section-->


            <!--end myself-->


            <!--   Hobbies Section-->
            <section class="hobby">

                <h1>
                    Hobbies and Interests
                </h1>

                <div class="wrapper">

                    <p>
                        My hobbies are not limited.I have a lot of hobbies be it playing outdoor games to sitting inside a room alone.One of my favourite hobby is <strong>Art and Creativity</strong>.Also,I have a soft corner for fitness as I have been into Physcial Activities since childhood.
                        <br>
                        I wanted to build my career in the stream where I will not feel trapped rather I would enjoy being my own self .So ,I decided to choose one of my hobby as my future goal.
                    </p>
                </div>
            </section>

            <!--   End of hobbies Section-->
            <?php 
            // check if the post or page has a Featured Image assigned to it.
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
        ?>
        </article>
        <!--    End of article-->
    </main>
    <!--    End  of Main-->

    <hr>
    <div class="wrapper">
        <section class="reference">

           <?php get_sidebar('refrences') ?>

        </section>
    </div>

    <?php 
    get_footer();
    ?>
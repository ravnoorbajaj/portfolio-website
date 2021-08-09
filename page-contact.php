<?php
/*template name:Contact*/
get_header(); ?>
        <?php 
        $acf_section_bg_contact = get_field( 'section_bg_contact' );
        $acf_social_heading = get_field( 'social_heading' );
        $acf_social_icon_instagram = get_field( 'social_icon_instagram' );
        $acf_social_icon_facebook = get_field( 'social_icon_facebook' );
        $acf_social_instagram_url = get_field( 'social_instagram_url' );
        $acf_social_facebook_url = get_field( 'social_facebook_url' );
        
        
        
        ?>
    <article>
   <!-- Acf field to display the bg image  -->




        <section class="contact-h">

        </section>

        <h2 class="cont-h">Get in touch</h2>
        <div class="wrapper">
            <!--    form-->
            <!-- wordpress loop  -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content();?>


            <?php endwhile; ?>
             <?php endif; ?>

         
            <!-- end of wordpress loop   -->
            <section class="social">

            <!-- acf text field  -->
                <h3> <?php the_field('social_heading'); ?>     </h3>
                <p>On daily basis I post my work on these platfoms! Do follow me there..</p>
                <ul>
                    <li>

                    <!-- acf font awesome icons and url -->
                        
                        <?php if ( $acf_social_instagram_url ) : ?>
                <a href="<?php echo esc_url( $acf_social_instagram_url); ?>">
            <?php endif; ?>

                        <span class="fa-3x">

                            <?php echo $acf_social_icon_instagram; ?>
                        </span>

                        </a>
                    </li>
                    <li>

                    <!-- acf font awesome icons  -->
                    <?php if ( $acf_social_facebook_url ) : ?>
                <a href="<?php echo esc_url( $acf_social_facebook_url); ?>">
            <?php endif; ?>

                        
                        <span class="fa-3x">

                        <?php echo $acf_social_icon_facebook; ?>
                        </span>

                    </a>
                    </li>

                </ul>
            </section>
        </div>
    </article>

    <!--   Google map-->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2804.0389626636083!2d-75.7591114841831!3d45.34802574920827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce0718cc4a6ad7%3A0xc6cc467725843e2b!2sAlgonquin%20College%20%E2%80%93%20Ottawa%20Campus!5e0!3m2!1sen!2sin!4v1613327671446!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!--   End of Ggoogle map-->

<?php get_footer(); ?>



<!-- contact form 7 -->
<!-- 
<label> Your name
    [text* your-name] </label>

<label> Your email
    [email* your-email] </label>

<label> Subject
    [text* your-subject] </label>

<label> Your message (optional)
    [textarea your-message] </label>

[submit "Submit"] -->
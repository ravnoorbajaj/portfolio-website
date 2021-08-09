<?php get_header();
$acf_bio_text = get_field( 'bio_text' );
$acf_section_bg_services = get_field( 'section_bg_services' );

$acf_service_1_icon = get_field( 'service_1_icon' );
$acf_service_1_text = get_field( 'service_1_text' );
$acf_service_1_url = get_field( 'service_1_url' );

$acf_service_2_icon = get_field( 'service_2_icon' );
$acf_service_2_text = get_field( 'service_2_text' );
$acf_service_2_url = get_field( 'service_2_url' );

$acf_service_3_icon = get_field( 'service_3_icon' );
$acf_service_3_text = get_field( 'service_3_text' );
$acf_service_3_url = get_field( 'service_3_url' );

$acf_service_4_icon = get_field( 'service_4_icon' );
$acf_service_4_text = get_field( 'service_4_text');
$acf_service_4_url = get_field( 'service_4_url' );

$acf_service_5_icon = get_field( 'service_5_icon' );
$acf_service_5_text = get_field( 'service_5_text' );
$acf_service_5_url = get_field( 'service_5_url' );

$acf_service_6_icon = get_field( 'service_6_icon' );
$acf_service_6_text = get_field( 'service_6_text' );
$acf_service_6_url = get_field( 'service_6_url' );

$acf_service_7_icon = get_field( 'service_7_icon' );
$acf_service_7_text = get_field( 'service_7_text' );
$acf_service_7_url = get_field( 'service_7_url' );

$acf_service_8_icon = get_field( 'service_8_icon' );
$acf_service_8_text = get_field( 'service_8_text' );
$acf_service_8_url = get_field( 'service_8_url' );
 
?>

<main>

<!--       slide splider js-->

<?php echo do_shortcode('[metaslider id="5"]'); ?>
     
<!--       header-->
<section class="head">
    <!--   image section-->
    <section id="rav">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- //checking of page for feature image -->
        <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail('medium',array());
                }
        
        ?>

        <img src="<?php bloginfo('template_url');?>/img/rav.jpg" alt="Ravnoor Bajaj Portrait"><?php the_post_thumbnail();?>

    </section>

    <!--   end of image section-->

    <h1 class="myname"><?php bloginfo('name');?> </h1>
    <h2><?php bloginfo('description'); ?> </h2>
    
    <?php endwhile; ?>
    <?php endif; ?>
    <p>
        <?php echo $acf_bio_text; ?>

    </p>
</section>

<!--        End of header-->
 
<section class="separator-home" style="background-color: url('<?php echo esc_url( $acf_section_bg_services['url'] ); ?>');">
    <h2>Services</h2>
</section>
<section class="wrapper">
    <!--        Services section start-->

    <article class="services">
        <section class="container">
            <section class="item">
        <!-- Service item 1 -->
            <?php if ( $acf_service_1_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_1_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_1_icon; ?>
                </span>
                
                    <h3> <?php echo $acf_service_1_text; ?></h3>
                </a>
            </section>

            <section class="item">

                 <!-- Service item 2 -->
            <?php if ( $acf_service_2_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_2_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php the_field( 'service_2_icon' ); ?>
                </span>
                
                    <h3> <?php echo $acf_service_2_text ; ?></h3>
                </a>
            </section>

            <section class="item">

                <!-- Service item 3 -->
            <?php if ( $acf_service_3_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_3_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_3_icon ;?>
                </span>
                
                    <h3> <?php echo $acf_service_3_text ;?></h3>
                </a>
            </section>

            <section class="item">

            <!-- Service item 4 -->

            <?php
           
            if ( $acf_service_4_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_4_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_4_icon ; ?>
                </span>
                
                    <h3> <?php echo $acf_service_4_text; ?></h3>
                </a>
            </section>
            <section class="item">

                <!-- Service item 5 -->

            <?php if ( $acf_service_5_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_5_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_5_icon ;?>
                </span>
                
                    <h3> <?php echo $acf_service_5_text ;?></h3>
                </a>

            </section>

            <section class="item">

               <!-- Service item 6 -->
            <?php if ( $acf_service_6_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_6_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_6_icon ;?>
                </span>
                
                    <h3> <?php echo $acf_service_6_text; ?></h3>
                </a>
            </section>
            <section class="item">
                <!-- Service item 7 -->
            <?php if ( $acf_service_7_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_7_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_7_icon; ?>
                </span>
                
                    <h3> <?php echo $acf_service_7_text; ?></h3>
                </a>
            </section>
            <section class="item">
                <!-- Service item 8 -->
            <?php if ( $acf_service_8_url ) : ?>
                <a href="<?php echo esc_url( $acf_service_8_url); ?>">
            <?php endif; ?>
                <span class="fa-4x icon">

                    <?php echo $acf_service_8_icon; ?>
                </span>
                
                    <h3> <?php echo $acf_service_8_text ;?></h3>
                </a>
            </section>


        </section>
    </article>
</section>


</main>
<!--End of Main-->

<?php get_footer();?>

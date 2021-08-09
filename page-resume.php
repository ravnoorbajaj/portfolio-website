<?php 

get_header();

//work experience section

$acf_bg_work_experience = get_field( 'bg_work_experience' );
$acf_work_experience_heading1 = get_field( 'work_experience_heading1' );
$acf_work_experience_heading2 = get_field( 'work_experience_heading2' );
$acf_job_1_duration = get_field( 'job_1_duration' );
$acf_job_1_duration_2 = get_field( 'job_1_duration_2' );
$acf_job_1_location = get_field( 'job_1_location' );
$acf_job_1_location_p = get_field( 'job_1_location_p' );

//work experience job 2

$acf_job_2_title = get_field( 'job_2_title' );
$acf_job_2_duration = get_field( 'job_2_duration' );
$acf_job_2_company_name = get_field( 'job_2_company_name' );
$acf_job_2_location = get_field( 'job_2_location' );
$acf_job_2_location_area = get_field( 'job_2_location_area' );

//education section
$acf_bg_education = get_field( 'bg_education' );
$acf_edu_1_clg = get_field( 'edu_1_clg' );
$acf_edu_1_year = get_field( 'edu_1_year' );
$acf_edu_1_course = get_field( 'edu_1_course' );
$acf_edu_2_clg = get_field( 'edu_2_clg' );
$acf_edu_2_year = get_field( 'edu_2_year' );
$acf_edu_2_course = get_field( 'edu_2_course' );
?>


    <!--       header-->

    <header>
        <!--   image section-->
    
        <section id="rav">
            <!-- wordpress loop  -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

             <!-- //checking of page for feature image -->
        <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail('medium',array());
                }
        
        ?>

        </section>

        <!--   end of image section-->
<!-- blog info name  -->
        <h1 class="myname"><?php echo bloginfo('name');?> </h1>
<!-- blog info description -->
    <h2><?php echo bloginfo('description'); ?> </h2>
    
    <?php endwhile; ?>
    <?php endif; ?>
    <p>
        <?php the_content(); ?>

    </p>

    </header>
    <!--        End of header-->


    <!--    Main-->
    <main>
        <!-- acf image field  -->

        <section class="separator" style="background-color: url('<?php echo esc_url( $acf_bg_work_experience['url'] ); ?>');">



        <!-- acf text field  -->
            <h2>Work Experience</h2>
        </section>
        <article>
            <!--        Work Experience section-->
            <div class="wrapper">
                <section id="work-exp">
                    <!--        <h2>Work Experience</h2>-->
                    <!--experience1-->
                    <!--       employer-->


                    <!-- acf text field  -->
                    <h3><?php echo $acf_work_experience_heading1; ?></h3>

                    <!-- acf text field  -->
                    <h4><?php echo $acf_work_experience_heading2; ?></h4>


                    <!-- acf text field/date picker  -->
                    <time> <?php echo $acf_job_1_duration; ?></time> - <time>   <?php echo $acf_job_1_duration_2; ?>  </time>

                    <!--        Location-->
                    <h4><?php echo $acf_job_1_location; ?></h4>
                    <p><?php echo $acf_job_1_location_p; ?></p>
                    <!--End of experience1-->

                    <!--experience2-->              
                    <!-- acf text field  -->
                    <h3><?php echo $acf_job_2_title; ?></h3>
                    <!-- acf text field  -->
                    <h4><?php echo $acf_job_2_company_name; ?></h4>
                    <!-- acf text /date picker field  -->
                    <time> <?php echo $acf_job_2_duration; ?></time> - Present
                    <!-- acf text field  -->
                    <h4><?php echo $acf_job_2_location; ?></h4>
                    <!-- acf text field  -->
                    <p><?php echo $acf_job_2_location_area; ?></p>
                    <!--                End of experience2-->

                </section>

            </div>
        </article>

        <!--        Education section-->
<!-- acf image field  -->

<section class="separator" style="background-color: url('<?php echo esc_url( $acf_bg_education['url'] ); ?>');">
            <h2>Education</h2>
        </section>
        <article>
            <div class="wrapper">
                <section id="edu">
                    <!--            edu1-->
                    <!--                <h2>Education</h2>-->
                    <h3><?php echo $acf_edu_1_clg; ?></h3>
                    <time><?php echo $acf_edu_1_year; ?></time>
                    <p><?php echo $acf_edu_1_course; ?></p>
                    <!--            end edu1-->

                    <!--            edu2-->
                    <h3><?php echo $acf_edu_2_clg; ?></h3>
                    <time><?php echo $acf_edu_2_year; ?></time>
                    <p><?php echo $acf_edu_2_course; ?></p>
                    <!--            end edu2-->

                </section>
                <!--End of education section-->
            </div>
        </article>

    </main>
    <!--End of Main-->
    
    <!--    aside-->
    <aside id="homeaside">
        <?php get_sidebar('references'); ?>

    </aside>
    <!--        End of aside-->

    <?php 
get_footer();
?>

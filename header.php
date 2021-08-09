<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Head starts -->
<head>
    <!-- meta tags  -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!--style sheet -->
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        
        <?php wp_head(); ?>
</head>
<!-- Heads ends--> 

<body <?php body_class(); ?> id="homebody">
    <section id="my-header">
        <!--   Navigations-->
        
        <nav id="my-menu">
       <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
        </nav>
        <!--  End of navigations -->
    </section>

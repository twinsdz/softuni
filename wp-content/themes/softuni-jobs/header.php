<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <link rel="profile" href="//gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="preconnect" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <title><?php wp_title(); ?></title>

</head>
<body>
<div class="site-wrapper">
    <header class="site-header">

    <?php if( is_single() ): ?>
        <h2 class="site-title"><a href="<?php echo home_url(); ?>">Job Offers</a></h2>
    <?php else: ?>
        <h1 class="site-title"><a href="<?php echo home_url(); ?>">Job Offers</a></h1>
    <?php endif;?>

        <?php wp_head(); ?>
    </header>

    <div class="header-nav-menu" > 
        <?php 
        if( has_nav_menu( 'primary_menu' ) ){
        wp_nav_menu(
            array(
                'theme_location' => 'primary_menu',
                // 'menu_class' => 'custom-class-here'
            )
        );
    }
        ?>
    </div>
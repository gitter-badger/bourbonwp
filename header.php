<?php
/**
 * @package WordPress
 * @subpackage BoilerstrapWP
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="title" content="<?php wp_title('&laquo;', true, 'right'); ?> | <?php bloginfo('name'); ?>">
    <meta name="description" content="<h1><?php bloginfo('name'); ?></h1> | <?php bloginfo('description'); ?>">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <!-- Wordpress Templates require a style.css in theme root directory -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."styles/styles.css") ?>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects, jquery and selectivizr for IE improvements -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/modernizr-respond-jquery.min.js") ?>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/JavaScript" src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <![endif]-->

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

    <div class="wrapper">
        <div class="row">
            <header class="span12">
                <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
                <p class="description"><?php bloginfo('description'); ?></p>
            </header>
        </div>
        <div class="row">
            <div class="navbar span12">
                <div class="navbar-inner">
                    <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'nav', 'container' => false )); ?>
                </div>
            </div>
        </div>

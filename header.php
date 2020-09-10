<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>

	<![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    <div class="snupy_top">
        <a href="<?php echo esc_url(home_url('/'));?>"><h1><?php bloginfo('title');?></h1></a>
        <a href="http://snupy.iptime.org"><h5><?php bloginfo('description');?></h5></a>
    </div>

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

<!--    수동으로 메뉴 만들기-->
<!--    <nav>-->
<!--        <ul>-->
<!--            <li><a href="#">Menu A</a>-->
<!--                <ul>-->
<!--                    <li><a href="#">Submenu A1</a></li>-->
<!--                    <li><a href="#">Submenu A2</a></li>-->
<!--                    <li><a href="#">Submenu A3</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!---->
<!--            <li><a href="#">Menu B</a>-->
<!--                <ul>-->
<!--                    <li><a href="#">Submenu B1</a></li>-->
<!--                    <li><a href="#">Submenu B2</a></li>-->
<!--                    <li><a href="#">Submenu B3</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li><a href="#">Menu C</a></li>-->
<!--            <li><a href="#">Menu D</a></li>-->
<!--            <li><a href="#">Menu E</a>-->
<!--                <ul>-->
<!--                    <li><a href="#">Submenu E1</a></li>-->
<!--                    <li><a href="#">Submenu E2</a></li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </nav>-->

    <?php
        wp_nav_menu(
                array('menu' => 'Sub-menu', //보여줄 메뉴를 지정하고(메뉴 네임은 워드프레스에 미리 저장해둔 메뉴)
                      'container' => 'nav') //어떤 모양에 띄울지를 선택한다(stylesheet에 지정해 둔 nav에 먹인 모양에 매핑이 된다)
        );
    ?>
    <?php wd_slider(1); ?>
    <!--wd슬라이더 설치하고 나서 붙이기-->

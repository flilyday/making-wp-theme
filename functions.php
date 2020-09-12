<?php

function snupy_load_style() {
    wp_enqueue_style('style-snupy', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'snupy_load_style');

add_action('after_setup_theme', function(){
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail',160,100);
	add_image_size('big-thumbnail',500,300);
});
//관리자 화면 대시보드에서 포스트 글 쓸 때 썸네일 추가


add_filter('excerpt_length', function(){
	return 20;
});
//프론트 페이지 요약 글자 수 조절

add_action('after_setup_theme', function(){
	add_theme_support('menus'); //테마에서 메뉴를 사용할 것을 명시
	register_nav_menus(); //커스템 메뉴를 등록할 수 있게 해줌
});
//테마에서 메뉴 항목 지원


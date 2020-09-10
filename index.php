<?php get_header(); ?>
<div class="snupy_top">
<h3><?php bloginfo('title');?></h3>
<h5><?php bloginfo('description');?></h5>
</div>

<?php

if(have_posts()) {
    while(have_posts()) :the_post();
        ?>
        <h5>
        <?php
        _e("Category:","snupy");
        the_category("&gt", 'multiple');
        ?></h5>
        <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_content();
    endwhile;
    //포스트가 있으면 메인화면에 뿌려줌    
}
?>



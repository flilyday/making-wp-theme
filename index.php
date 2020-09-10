<?php get_header(); ?>

<div class="container">
    <div class="container-box">
        <div class="main-content">
	        <?php
                if(have_posts()) {
                    while(have_posts()) :the_post();
                        ?>
                        <h5>
                            <?php
                            _e("Category:","snupy");
                            the_category("&gt", 'multiple');
                            ?></h5>
                        <h3><a href="<?php echo the_permalink(); ?>">
                                <?php the_title(); ?>
                                <br>
                                <br>
                                <?php the_post_thumbnail('small-thumbnail'); ?>
                            </a></h3>
                        <?php echo get_the_excerpt();?>
                        <a href="<?php the_permalink(); ?>">View Page</a>
                        <hr> <?php
                    endwhile;
                    //포스트가 있으면 메인화면에 뿌려줌
                }
                ?>
        </div>
        <div class="side-bar">
	        <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>



<?php get_header(); ?>
<img style="width:100%" height="500px" src="<?php echo bloginfo('template_url'); ?>\img\start.jpg" alt="">
<div class="container">
	<div class="container-box">
		<div class="main-content">

		</div>
	</div>
</div>

<div class="mainbox-container">
    <div class="mainbox">
        <div class="subbox1">
            Bottom Sidebar Area1
	        <?php dynamic_sidebar('bottom-sidebar-a') ?>
        </div>
        <div class="subbox2">
            Bottom Sidebar Area2
            <?php dynamic_sidebar('bottom-sidebar-b') ?>
        </div>
        <div class="subbox3">
            Bottom Sidebar Area3
            <?php dynamic_sidebar('bottom-sidebar-c') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>



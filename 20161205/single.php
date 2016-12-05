<?php get_header();?>
    <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
        <div class="post">
            <h1><?php the_title();?></h1>
            <a href="<?php bloginfo('template_url')?>#header">asdkjash</a>
            <?php the_content('','','');?>
            <?php comments_popup_link(); ?>
        </div>
        <?php endwhile;?>
    <?php else:?>

    <span>没有内容</span>

    <?php endif;?>
<?php get_footer();?>
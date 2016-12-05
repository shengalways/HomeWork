<?php get_header();?>

<div id="Header">
    
</div>
<!--header 放banner图 横幅-->
<div id="Content">
    <div class="cate cate_post">
        <div class="cate_title">分类：文章</div>
            <?php
            query_posts(array('category_name' => 'post','posts_per_page' => 24));
            if(have_posts()) : while (have_posts()) : the_post();
            ?>
                <div class="post post<?php the_ID()?>">
                    <a href="<?php the_permalink()?>">
                        <span class="post_title"><?php the_title();?></span>
                        <span class="post_date"><?php the_time("y/m/d");?></span>
                        <span class="post_exce"><?php the_excerpt();?></span>
                    </a>       
                </div>
            <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <div class="cate cate_img">
        <?php
        query_posts(array('category_name' => 'img','posts_per_page' => 8));
        if(have_posts()) : while (have_posts()) : the_post();
        ?>
           

        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <div class="cate cate_music">
        <?php
        query_posts(array('category_name' => 'music','posts_per_page' => 12));
        if(have_posts()) : while (have_posts()) : the_post();
        ?>

        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <div class="cate cate_other">
        <?php
        query_posts(array('category_name' => 'other','posts_per_page' => 12));
        if(have_posts()) : while (have_posts()) : the_post();
        ?>

        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    
</div>
<!--footer 放网页主要内容-->
<div id="Footer"></div>
<?php get_footer();?>

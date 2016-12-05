<?php get_header() ?>
    <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
        <div class="post">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div><?php the_time('F j, Y'); ?>/<?php the_author(); ?></div> 
             <img src="<?php bloginfo('template_url')?>./images./clk.png" alt="哈哈">
            <?php the_excerpt();?>
            <a href="<?php the_permalink(); ?>">阅读全文</a>  
        </div>   
        <?php endwhile;?>
    <?php else:?>

    <span>没有内容</span>

    <?php endif;?>

<?php get_footer() ?>
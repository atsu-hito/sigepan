<?php
/*
    Template Name: single-news(お知らせ)
*/
?>

<?php get_header() ?>

    <div class="sub_fv">
        <img src="<?=get_template_directory_uri(); ?>/img/fv_sub.jpg" alt="しげぱん自家製食パン">
        <div class="sub_fv_inner">
            <p class="common_sub_title">News</p>
        </div>
    </div>

    <div class="single-news base">
        <div class="w-container single-news_inner">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/img/ph.png')); ?>" alt="">
                <?php endif; ?>
            <div class="single-news_list">
                <h2 class="common_title"><?php the_title(); ?></h2>
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date(); ?></time>
                <p>
                    <?php the_content(); ?>
                </p>
                <a href="<?=home_url('/archive-news/'); ?>"><div class="btn">記事一覧へ戻る</div></a>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>

<?php get_footer() ?>
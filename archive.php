<?php
/*
    Template Name: archive-news(お知らせ一覧)
*/
?>

<?php get_header() ?>

    <div class="sub_fv">
        <img src="<?=get_template_directory_uri(); ?>/img/fv_sub.jpg" alt="しげぱん自家製食パン">
        <div class="sub_fv_inner">
            <p class="common_sub_title">News</p>
        </div>
    </div>

    <div class="archive-news base">
        <h2 class="common_title">お知らせ</h2>
        <div class="w-container archive-news_inner">
            <!-- index.html の使いまわし -->
            <div class="main_news_container">
                <div class="main_news_list">
                    <ul>
                        <?php
                            $args = array(
                                'paged' => $paged,
                                'post_type' => 'post',
                                'posts_per_page' => 6
                            );

                            $post_query = new WP_Query($args);
                        ?>
                        <?php if($post_query -> have_posts()): while($post_query -> have_posts()): $post_query -> the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <time class="date"><?=get_the_date(); ?></time>
                                    <p><?php the_title(); ?></p>
                                </a>
                            </li>
                        <?php endwhile; endif; ?>
                    </ul>
                    <div class="pagination">
                        <?php if ($post_query->max_num_pages > 0) {
                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => 'page/%#%/',
                                'current' => max(1, $paged),
                                'end_size' => 0,
                                'total' => $post_query->max_num_pages,
                                'prev_text' => '前ページ',
                                'next_text' => '次ページ'
                            ));}; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                    <!-- <div class="prev_next">
                        <?php posts_nav_link('', '前へ', '次へ'); ?>
                    </div> -->
                </div>
            </div><!-- / index.html の使いまわし -->
        </div>
    </div>

<?php get_footer() ?>
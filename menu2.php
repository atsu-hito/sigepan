<?php
/*
    Template Name: menu2(メニュー)
*/
?>

<?php get_header() ?>

<div class="sub_fv">
    <img src="<?=get_template_directory_uri(); ?>/img/fv_sub.jpg" alt="しげぱん自家製食パン">
    <div class="sub_fv_inner">
        <p class="common_sub_title">Menu</p>
    </div>
</div>

<div class="menu base">
    <div class="w-container menu_inner">
        
        <?php
            $args = array(
                'post_type' => 'menu_new',
                /* 以下2行で、WordPressプラグイン「Advanced Custom Fields」の
                フィールド名「order_num」(フィールドタイプは数値)で指定した小さな数字のものから投稿が表示される */
                'meta_key' => 'order_num',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
                /*'posts_per_page' => 6,*/
            );

            $menu_new_query = new WP_Query($args);
        ?>

        <h2 class="common_title"><i class="fas fa-splotch"></i>期間限定</h2>

        <div class="menu_list">

            <?php if($menu_new_query->have_posts()): while($menu_new_query->have_posts()):  $menu_new_query->the_post(); ?>
            
            <dl class="menu_container menu_container_wide">
                <dt><?php the_post_thumbnail('full'); ?></dt>
                <div class="menu_container_list">

                    <?php // 真偽フィールドを取得
                        $suggest = get_field('オススメ');

                        if( $suggest ): // オススメ商品の場合
                    ?>
                    <dd class="menu_container_suggest">オススメ</dd>
                    <?php
                        else: // オススメ商品でない場合
                    ?>
                    <?php endif; ?>

                    <dd class="menu_container_title"><?php the_field('商品名'); ?></dd>
                    <dd class="menu_container_content"><?php the_field('商品紹介文'); ?></dd>
                    <dd class="menu_container_price"><?php the_field('値段'); ?></dd>
                </div>
            </dl>

            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>

        <?php
            $args = array(
                'post_type' => 'menu_bread',
                /* 以下2行で、WordPressプラグイン「Advanced Custom Fields」の
                フィールド名「order_num」(フィールドタイプは数値)で指定した小さな数字のものから投稿が表示される */
                'meta_key' => 'order_num',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
                /*'posts_per_page' => 6,*/
            );

            $menu_bread_query = new WP_Query($args);
        ?>

        <h2 class="common_title"><i class="fas fa-bread-slice"></i>食パン</h2>

        <div class="menu_list wide">

            <?php if($menu_bread_query->have_posts()): while($menu_bread_query->have_posts()):  $menu_bread_query->the_post(); ?>
            
            <dl class="menu_container">
                <dt><?php the_post_thumbnail('full'); ?></dt>
                <div class="menu_container_list">

                    <?php // 真偽フィールドを取得
                        $suggest = get_field('オススメ');

                        if( $suggest ): // オススメ商品の場合
                    ?>
                    <dd class="menu_container_suggest">オススメ</dd>
                    <?php
                        else: // オススメ商品でない場合
                    ?>
                    <?php endif; ?>

                    <dd class="menu_container_title"><?php the_field('商品名'); ?></dd>
                    <dd class="menu_container_content"><?php the_field('商品紹介文'); ?></dd>
                    <dd class="menu_container_price"><?php the_field('値段'); ?></dd>
                </div>
            </dl>

            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>

        <?php
            $args = array(
                'post_type' => 'menu_drink',
                /* 以下2行で、WordPressプラグイン「Advanced Custom Fields」の
                フィールド名「order_num」(フィールドタイプは数値)で指定した小さな数字のものから投稿が表示される */
                'meta_key' => 'order_num',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
                /*'posts_per_page' => 6,*/
            );

            $menu_drink_query = new WP_Query($args);
        ?>

        <h2 class="common_title"><i class="fas fa-coffee"></i>お飲み物</h2>

        <div class="menu_list">

            <?php if($menu_drink_query->have_posts()): while($menu_drink_query->have_posts()):  $menu_drink_query->the_post(); ?>
            
            <dl class="menu_container">
                <dt><?php the_post_thumbnail('full'); ?></dt>
                <div class="menu_container_list">

                    <?php // 真偽フィールドを取得
                        $suggest = get_field('オススメ');

                        if( $suggest ): // オススメ商品の場合
                    ?>
                    <dd class="menu_container_suggest">オススメ</dd>
                    <?php
                        else: // オススメ商品でない場合
                    ?>
                    <?php endif; ?>

                    <dd class="menu_container_title"><?php the_field('商品名'); ?></dd>
                    <dd class="menu_container_content"><?php the_field('商品紹介文'); ?></dd>
                    <dd class="menu_container_price"><?php the_field('値段'); ?></dd>
                </div>
            </dl>

            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>

    </div>

</div>

<?php get_footer() ?>
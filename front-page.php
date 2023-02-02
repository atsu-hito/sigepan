<?php get_header() ?>

<main>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="<?=get_template_directory_uri(); ?>/img/fv.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?=get_template_directory_uri(); ?>/img/fv2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?=get_template_directory_uri(); ?>/img/fv3.jpg" alt="">
            </div>
        </div><!-- / .swiper-wrapper -->

        <!-- ページネーション下部 -->
        <!--
            <div class="swiper-pagination"></div>
        -->
    
        <!-- ページネーション左右 -->
        <!--
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        -->
    
    </div><!-- / .swiper -->

    <div class="main_news base">
        <div class="w-container main_news_inner">
            <h2 class="common_title">お知らせ</h2>
            <div class="main_news_container">
                <ul class="main_news_list">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
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
                    <?php wp_reset_postdata(); ?>
                </ul>
                <a href="<?=home_url('/archive-news/'); ?>"><div class="btn">お知らせ一覧へ</div></a>
            </div>
        </div>
    </div>

    <div class="main_overview base">
            <div class="w-container main_overview_innner">
                <h2 class="common_title">店舗概要</h2>
                <div class="main_overview_container">
                    <img src="<?=get_template_directory_uri(); ?>/img/shopkeeper.jpg" alt="店主">
                    <div class="main_overvie_content">
                        <p>
                            趣味で始めた「自家製食パン」。<br>振り返ると10年以上焼き続けています。<br>
                            原材料はすべて国産にこだわっており、小さなお子様にも安心してお召し上がりいただけます。
                            メニューは豊富にご用意しております。<br>あなたの押し「しげぱん」を見つけてみてください！<br>
                            食べ比べセットもございます。どうぞお楽しみください♪
                        </p>
                        <div class="main_overvie_btn">
                            <a href="<?=home_url('/concept/'); ?>" class="btn">こだわりの原材料へ</a>
                            <a href="<?=home_url('/menu/'); ?>" class="btn">メニュー 一覧へ</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="main_access base">
        <div class="w-container main_access_inner">
            <h2 class="common_title">アクセス</h2>
            <div class="main_access_container">
                <div class="main_access_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4267414097817!2d136.8815369!3d35.170915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376e794d78b89%3A0x81f7204bf8261663!2z5ZCN5Y-k5bGL6aeF!5e0!3m2!1sja!2sjp!4v1665118049254!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="main_access_content">
                    <div class="main_access_content_inner">
                        <div class="main_access_content_list">
                            <div class="tag">住所</div><p>愛知県名古屋市中村区<br>名駅１丁目１ー４</p>
                        </div>
                        <div class="main_access_content_list">
                            <div class="tag">電話番号</div><p>052-000-0000</p>
                        </div>
                        <div class="main_access_content_list">
                            <div class="tag">営業時間</div><p>月火木金 9:00-17:00<br>土日祝 11:00-17:00</p>
                        </div>
                        <div class="main_access_content_list">
                            <div class="tag">定休日</div><p>水曜日</p>
                        </div>
                        <div class="main_access_content_list">
                            <div class="tag">駐車場</div><p>店舗横に5台</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer() ?>
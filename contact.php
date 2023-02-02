<?php
/*
    Template Name: contact(お問い合わせ)
*/
?>

<?php get_header() ?>

<div class="sub_fv">
        <img src="<?=get_template_directory_uri(); ?>/img/fv_sub.jpg" alt="しげぱん自家製食パン">
        <div class="sub_fv_inner">
            <p class="common_sub_title">Contact</p>
        </div>
    </div>

    <div class="contact base">
        <div class="w-container contact_inner">
            <p class="cotact_content">
                このたびは「しげぱん」のホームページにお越しいただき、誠にありがとうございます。<br>
                お問い合わせは、下記フォームかお電話からお気軽にご連絡ください。
            </p>

            <h2 class="common_title"><i class="fas fa-phone"></i>お電話でのお問い合わせ</h2>
            <div class="contact_container">
                <div>052-000-0000</div>
            </div>
            <p>
                ※お電話でのお問い合わせは、店舗営業時間のみとさせていただいております<br>
                ※営業時間はこちらです。<span class="br"></span>月火木金 9:00-17:00　土日・祝 11:00-17:00
            </p>
            <h2 class="common_title"><i class="fas fa-comments"></i>フォームでのお問い合わせ</h2>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>   
        </div>
    </div>

<?php get_footer() ?>
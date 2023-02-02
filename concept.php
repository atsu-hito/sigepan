<?php
/*
    Template Name: concept(こだわり)
*/
?>

<?php get_header() ?>

    <div class="sub_fv">
        <img src="<?=get_template_directory_uri(); ?>/img/fv_sub.jpg" alt="しげぱん自家製食パン">
        <div class="sub_fv_inner">
            <p class="common_sub_title">Concept</p>
        </div>
    </div>

    <div class="concept base">
        <h2 class="common_title">こだわり</h2>
        <div class="w-container concept_inner">
            <ul class="concept_list">
                <li>
                    <img src="<?=get_template_directory_uri(); ?>/img/material/flour&wheat.png" alt="小麦粉と小麦">
                    <div class="concept_list_container">
                        <h3 class="header_text">北海道産小麦粉「春よ恋」</h3>
                        <p>
                            噛めば噛むほど甘みがあふれます。<br>
                            外側までふっくらと柔らかく、<br>
                            内側はもっちりとした食パンに仕上がります。
                        </p>
                    </div>
                </li>
                <li>
                    <div class="concept_list_container">
                        <h3 class="header_text">新鮮な「知多エッグ」</h3>
                        <p>
                            新鮮で安心して食べられる卵です。<br>
                            鶏にストレスをかけない環境づくりによって、<br>
                            鶏の健康状態が保たれています。<br>
                        </p>
                    </div>
                    <img src="<?=get_template_directory_uri(); ?>/img/material/egg.jpg" alt="卵">
                </li>
                <li>
                    <img src="<?=get_template_directory_uri(); ?>/img/material/inside.jpg" alt="店内">
                    <div class="concept_list_container">
                        <h3 class="header_text">ゆったりできる「カフェスペース」</h3>
                        <p>
                            落ち着いた雰囲気の店内です。<br>
                            おいしい食パンとコーヒーで<br>
                            ほっと一息つきませんか？<br>
                            地元の皆様から愛されるお店を目指します。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

<?php get_footer() ?>
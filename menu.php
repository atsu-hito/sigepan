<?php
/*
    Template Name: menu(メニュー)
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
            
            <h2 class="common_title"><i class="fas fa-bread-slice"></i>食パン</h2>
            <dl class="menu_list">
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/plane.jpg" alt="自家製食パン"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">自家製食パン<span>人気No1</span></dd>
                        <dd class="menu_container_content">
                            一番シンプルな食パンです。<br>小麦の豊かな香りを感じられます。
                            中はもっちりとした食感で、外側もふっくらとやわらかい仕上がりです。
                            かめばかむほど甘みがあふれます。
                        </dd>
                        <dd class="menu_container_price">￥500</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/caramel.JPG" alt="濃厚生キャラメル食パン"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">濃厚生キャラメル</dd>
                        <dd class="menu_container_content">
                            北海道産の生キャラメルを使用しています。<br>
                            生キャラメルにマカダミアナッツを練り込んでいます！
                            温めていただくと、キャラメルがとろけだします。<br>
                            ※温めてご提供できます
                        </dd>
                        <dd class="menu_container_price">￥500</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/roasted_green_tea&anko.JPG" alt="ほうじ茶＆あんこ食パン"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">ほうじ茶＆あんこ</dd>
                        <dd class="menu_container_content">
                            香り高く、苦みの少ないほうじ茶を使用しています。<br>
                            中のあんこはこしあんです。甘すぎず、ほうじ茶の香りとマッチします♪
                        </dd>
                        <dd class="menu_container_price">￥500</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/corn&cheese.JPG" alt="コーン＆チーズ食パン"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">コーン＆チーズ<span>オススメ</span></dd>
                        <dd class="menu_container_content">
                            隠れ人気の惣菜食パンです。<br>
                            コーンの甘みと、チーズの塩気がベストマッチ。食べだしたら止まりません。
                        </dd>
                        <dd class="menu_container_price">￥500</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/mentaiko&cheese.JPG" alt="明太子チーズ食パン"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">明太子チーズ</dd>
                        <dd class="menu_container_content">
                            かねふくの明太子を使用しています。<br>
                            チーズが入っているので辛すぎず、まろやかな仕上がりです。
                            こちらも人気の惣菜食パンです。
                        </dd>
                        <dd class="menu_container_price">￥500</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/zunda.JPG" alt="ずんだ食パン"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">ずんだ</dd>
                        <dd class="menu_container_content">
                            厳選した枝豆を使用しています。<br>
                            香り高く、苦みの少ないほうじ茶を使用しています。深い味わいです。
                            あらめに砕いた枝豆を練り込んでいますので、食感もお楽しみいただけます♪
                        </dd>
                        <dd class="menu_container_price">￥500</dd>
                    </div>
                </div>
                <div class="menu_container wide">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/bread/half.jpg" alt="ハーフ＆ハーフ"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">ハーフ＆ハーフ(店内飲食のみ)<span>オススメ</span></dd>
                        <dd class="menu_container_content">
                            お好きな食パンを２種類お選びいただけます。<br>
                            それぞれ１枚ずつ切り分けたものを、お皿に盛り付けてお持ちします。<br>
                            ＋￥200でドリンクをお付けできます。下記メニューよりお選びください。
                        </dd>
                        <dd class="menu_container_price">￥350</dd>
                    </div>
                </div>
            </dl>

            <h2 class="common_title"><i class="fas fa-coffee"></i>お飲み物</h2>
            <dl class="menu_list">
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/hot_coffee.jpg" alt="ホットコーヒー"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">ホットコーヒー</dd>
                        <dd class="menu_container_price">￥300</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/ice_coffee.jpg" alt="アイスコーヒー"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">アイスコーヒー</dd>
                        <dd class="menu_container_price">￥300</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/hot_latte.jpg" alt="ホットカフェラテ"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">ホットカフェラテ</dd>
                        <dd class="menu_container_price">￥350</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/ice_latte.jpg" alt="アイスカフェエアテ"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">アイスカフェラテ</dd>
                        <dd class="menu_container_price">￥350</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/hot_tea.jpg" alt="ホットティー"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">ホットティー</dd>
                        <dd class="menu_container_price">￥320</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/ice_tea.jpg" alt="アイスティー"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">アイスティー</dd>
                        <dd class="menu_container_price">￥320</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/milk.jpg" alt="アイスミルク"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">アイスミルク<span>オススメ</span></dd>
                        <dd class="menu_container_price">￥350</dd>
                    </div>
                </div>
                <div class="menu_container">
                    <dt><img src="<?=get_template_directory_uri(); ?>/img/drink/detox_water.jpg" alt="デトックス水"></dt>
                    <div class="menu_container_list">
                        <dd class="menu_container_title">デトックス水</dd>
                        <dd class="menu_container_price">free</dd>
                    </div>
                </div>
            </dl>

        </div>
    </div>

<?php get_footer() ?>
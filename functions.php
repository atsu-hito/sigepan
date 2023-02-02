<?php

function add_files(){
    //リセットCSS
    wp_enqueue_style('reset_style', 'https://unpkg.com/ress/dist/ress.min.css');
    //Swiper
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    //Google Fonts
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@400;700&display=swap');
    //CSS
    wp_enqueue_style('css', get_theme_file_uri('/style.css'));
    //Java Script
    wp_enqueue_script('javascript', get_theme_file_uri('/script.js'),array(), false, true);
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array() , false, true);
    wp_enqueue_script('javascript-swiper', get_theme_file_uri('/swiper.js'),array(), false, true);
    //第五因数がtrueの場合ファイルはfooterで読み込まれる。falseの場合はheaderで読み込まれる
}

add_action('wp_enqueue_scripts', 'add_files');

//投稿画面ににアイキャッチ画像を追加
add_theme_support('post-thumbnails');

// menu_newのカスタム投稿タイプを追加

function menu_new_custom_post_type(){
    register_post_type('menu_new', // 投稿タイプ名
        array(   // オプション
            'label' => 'メニュー(期間限定)', // ダッシュボードに表示される名前
            'public' => true, // 利用する場合はtrueにする
            'description' => 'メニューを投稿するページです',  // 投稿タイプの説明文
            'show_in_rest' => false, // ブロックエディタを使用
            'has_archive' => false, // trueにするとアーカイブを有効にする
            'menu_position' => 5, // ダッシュボードに「メニュー」が表示される位置
            'menu_icon' => 'dashicons-book', // ダッシュボードで表示するアイコン
            'supports' => array( // 投稿画面で表示する項目
                'title',  // タイトルの追加
                'thumbnail' //サムネイルの追加
            )
        )
    );
}

add_action('init', 'menu_new_custom_post_type');

// menu_breadのカスタム投稿タイプを追加

function menu_bread_custom_post_type(){
   register_post_type('menu_bread', // 投稿タイプ名
       array(   // オプション
           'label' => 'メニュー(パン)', // ダッシュボードに表示される名前
           'public' => true, // 利用する場合はtrueにする
           'description' => 'メニューを投稿するページです',  // 投稿タイプの説明文
           'show_in_rest' => false, // ブロックエディタを使用
           'has_archive' => false, // trueにするとアーカイブを有効にする
           'menu_position' => 6, // ダッシュボードに「メニュー」が表示される位置
           'menu_icon' => 'dashicons-book', // ダッシュボードで表示するアイコン
           'supports' => array( // 投稿画面で表示する項目
               'title',  // タイトルの追加
               'thumbnail' //サムネイルの追加
           )
       )
   );
}

add_action('init', 'menu_bread_custom_post_type');

// menu_drinkのカスタム投稿タイプを追加

function menu_drink_custom_post_type(){
    register_post_type('menu_drink', // 投稿タイプ名
        array(   // オプション
            'label' => 'メニュー(ドリンク)', // ダッシュボードに表示される名前
            'public' => true, // 利用する場合はtrueにする
            'description' => 'メニューを投稿するページです',  // 投稿タイプの説明文
            'show_in_rest' => false, // ブロックエディタを使用
            'has_archive' => false, // trueにするとアーカイブを有効にする
            'menu_position' => 7, // ダッシュボードに「メニュー」が表示される位置
            'menu_icon' => 'dashicons-book', // ダッシュボードで表示するアイコン
            'supports' => array( // 投稿画面で表示する項目
                'title',  // タイトルの追加
                'thumbnail' //サムネイルの追加
            )
        )
    );
}

add_action('init', 'menu_drink_custom_post_type');

//ダッシュボードの「投稿」を「お知らせ」に変更している(コピペOK)
// $name = 'お知らせ'; この部分のお知らせを好きなものに変更可能！！！

function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

?>
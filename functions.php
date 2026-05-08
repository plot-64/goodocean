<?php 
// 管理画面｜アイキャッチ画像の設定領域を表示
function theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


// 管理画面｜投稿の名前変更
function change_menu_label(){
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新しい'.$name;
}
function change_object_label(){
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
add_action( 'init', 'change_object_label' );
add_action( 'admin_menu', 'change_menu_label' );

function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する時の関数
  //「メニューの位置」の識別子 => メニューの説明の文字列,
    'main-menu' => 'Main Menu',//グローバルナビゲーション用
    'footer-menu'  => 'Footer Menu',//フッターナビゲーション用
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );


//ウィジェット機能を追加
function my_widgets_init() {
  register_sidebar( array(
    'name' => 'News Widgets',//News用のウィジェット名
    'id' => 'news-widgets',//News用のウィジェットID名
    'before_widget' => '<div id="%1$s" class="widget">',//※必要なら追加<ul>で出力されるソースコードを<div>に変更
    'after_widget' => '</div>',//※必要なら追加</ul>で出力されるソースコードを</div>に変更
  ) );
  
  register_sidebar( array(
    'name' => 'Footer Widgets',//Footer用のウィジェット
    'id' => 'footer-widgets',//Footer用のウィジェットID名
   'before_widget' => '<div id="%1$s" class="widget">',//※必要なら追加<ul>で出力されるソースコードを<div>に変更
    'after_widget' => '</div>',//※必要なら追加</ul>で出力されるソースコードを</div>に変更
  ) );
}
add_action( 'widgets_init', 'my_widgets_init' );




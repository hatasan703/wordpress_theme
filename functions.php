<?php

if ( ! function_exists( 'lab_setup' ) ) :
  

function lab_setup() {
	/*
	 * 自動フィードリンク
	 * 参照：https://wpdocs.osdn.jp/%E8%87%AA%E5%8B%95%E3%83%95%E3%82%A3%E3%83%BC%E3%83%89%E3%83%AA%E3%83%B3%E3%82%AF
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * titleを自動で書き出し
	 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#Title_.E3.82.BF.E3.82.B0
	 */
	add_theme_support( 'title-tag' );
	
	/*
	 * アイキャッチ画像を設定できるようにする
	 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#.E6.8A.95.E7.A8.BF.E3.82.B5.E3.83.A0.E3.83.8D.E3.82.A4.E3.83.AB
	 */
	add_theme_support( 'post-thumbnails' );
	
	/*
	 * 検索フォーム、コメントフォーム、コメントリスト、ギャラリー、キャプションでHTML5マークアップの使用を許可します
	 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
	 * テーマカスタマイザーにおける編集ショートカット機能の使用
	 * 参照：https://celtislab.net/archives/20161222/wp-customizer-edit-shortcut/
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * カスタムメニュー位置を定義
	 * 参照：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
	 */
	register_nav_menus( array(
		'global' => 'グローバルナビ',
	) );
	
}
endif;
add_action( 'after_setup_theme', 'lab_setup' );

/*
 * 動画や写真を投稿する際のコンテンツの最大幅を設定
 * 参照：https://wpdocs.osdn.jp/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E5%B9%85
 */
function lab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lab_content_width', 640 );
}
add_action( 'after_setup_theme', 'lab_content_width', 0 );

/*
 * サイドバーを定義
 * 参照：http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
function lab_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'ここにウィジェットを追加',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lab_widgets_init' );

/*
 * スクリプトを読み込み
 * wp_enqueue_styleについて参照：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_enqueue_style
 * wp_enqueue_scriptについて参照：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/wp_enqueue_script
 */

function lab_scripts() {
	wp_enqueue_style( 'lab-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'lab_scripts' );

function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// クエリ付与

// function theme_name_scripts() {
// 	wp_enqueue_style( 'style-name', get_stylesheet_uri() . '/style.css' . date('YmdHi'), array() );
// 	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/article.css' . date('YmdHi'), array() );
// 	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/category.css' . date('YmdHi'), array() );
// 	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/drawer.css' . date('YmdHi'), array() );
// 	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/reset.css' . date('YmdHi'), array() );
// 	wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/site_info.css' . date('YmdHi'), array() );
// }
// add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/* 記事内の最初の画像を取得して表示 */
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all("/]+src=[\"'](s?https?:\/\/[\-_\.!~\*'()a-z0-9;\/\?:@&=\+\$,%#]+\.(jpg|jpeg|png|gif))[\"'][^>]+>/i", $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){ //Defines a default image
	$first_img = "wp-content/plugins/wordpress-popular-posts/assets/images/no_thumb.jpg";
	}
	return $first_img;
  }
  
  function my_tiny_mce_before_init( $mceInit, $editor_id ) {
	$mceInit['allow_script_urls'] = true;
	if ( ! isset( $mceInit['extended_valid_elements'] ) ) {
		$mceInit['extended_valid_elements'] = '';
	} else {
		$mceInit['extended_valid_elements'] .= ',';
	}
	$mceInit['extended_valid_elements'] .= 'button[onclick]';
	return $mceInit;
}
add_filter( 'tiny_mce_before_init', 'my_tiny_mce_before_init', 10, 2 );

/**
 * ビジュアルエディタに切り替えで、空の span タグや i タグが消されるのを防止
 */
if ( ! function_exists('tinymce_init') ) {
    function tinymce_init( $init ) {
        $init['verify_html'] = false; // 空タグや属性なしのタグを消させない
        $initArray['valid_children'] = '+body[style], +div[div|span|a], +span[span]'; // 指定の子要素を消させない
        return $init;
    }
    add_filter( 'tiny_mce_before_init', 'tinymce_init', 100 );
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wptexturize' );
remove_filter( 'the_excerpt', 'wptexturize' );
remove_filter( 'the_content', 'convert_chars' );
remove_filter( 'the_excerpt', 'convert_chars' );
 
add_filter('tiny_mce_before_init', function($init) {
$init['wpautop'] = false;
$init['apply_source_formatting'] = true;
return $init;
});


function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );


?>
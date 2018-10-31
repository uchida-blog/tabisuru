<?php
/**
*アイキャッチ画像を使用可能にする
*/
add_theme_support( 'post-thumbnails' );


function add_thumbnail_size() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'list-thumbnail', 320, 240, true );
    add_image_size( 'single-thumbnail', 1000, 250, false );
}
add_action( 'after_setup_theme', 'add_thumbnail_size' );



/**
*カスタムメニュー昨日を使用可能にする
*/
add_theme_support( 'menus' );



/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'sidemenu',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );






add_theme_support('custom-header', array(
	'default-image' => get_theme_file_uri('/assets/images/topimage.jpg'),
	'width' => 2000,
	'height' => 1200,
	'flex-height' => true,
));






/**
 * Archive 投稿ナビゲーション表示のテンプレート変更
 */
function archive_navi_template($template){
	$template = '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>';
	return $template;
}
add_action( 'navigation_markup_template', 'archive_navi_template' );





register_nav_menu( 'footer-menu', 'フッターメニュー' );

register_nav_menu( 'footer-menu', 'フッターメニュー' );






	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );


		/**
		*コメントフォームのコメント項目の順序を変える
		*/
		function wp34731_move_comment_field_to_bottom( $fields ) {
		  $comment_field = $fields['comment'];
		  unset( $fields['comment'] );
		  $fields['comment'] = $comment_field;

		  return $fields;
		}
		add_filter( 'comment_form_fields', 'wp34731_move_comment_field_to_bottom' );

		/**
		*コメントフォームの次回コメントで～を消す
		*/
		add_filter('comment_form_default_fields', 'comment_remove_cookiescheck');
		function comment_remove_cookiescheck($arg) {
		 $arg['cookies'] = '';
		 $arg['url'] = '';
		 $arg['email'] = '';
		 $arg['author'] = '';
		 		 return $arg;

		}



		// カテゴリの投稿数をaタグの中に
		add_filter( 'wp_list_categories', 'my_list_categories', 10, 2 );
		function my_list_categories( $output, $args ) {
		  $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
		  return $output;
		}
























?>

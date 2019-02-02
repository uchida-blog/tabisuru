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






    function get_the_custom_excerpt($content, $length) {
     $length = ($length ? $length : 70);//デフォルトの長さを指定する
     $content =  strip_shortcodes($content);//ショートコード削除
     $content =  strip_tags($content);//タグの除去
     $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
     return $content;
    }

    //内部リンクをはてなカード風にするショートコード
    function nlink_scode($atts) {
     extract(shortcode_atts(array(
     'url'=>"",
     'title'=>"",
     'excerpt'=>""
     ),$atts));

     $id = url_to_postid($url);//URLから投稿IDを取得
     $post = get_post($id);//IDから投稿情報の取得

     $img_width ="160";//画像サイズの幅指定
     $img_height = "100";//画像サイズの高さ指定
     $no_image = get_template_directory_uri().'/images/no-img.png';//アイキャッチ画像がない場合の画像を指定

     //タイトルを取得
     if(empty($title)){
     $title = esc_html(get_the_title($id));
     }

     //アイキャッチ画像を取得
     if(has_post_thumbnail($id)) {
     $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),array($img_width,$img_height));
     $img_tag = "<img src='" . $img[0] . "' alt='{$title}' width=" . $img[1] . " height=" . $img[2] . " />";
     } else { $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
        }

     $nlink .='
    <div class="blog-card"><a href="'. $url .'">
     <div class="blog-card-thumbnail">'. $img_tag .'</div>
     <div class="blog-card-content">
     <div class="blog-card-title">'. $title .' </div>
     </div>
     <div class="clear"></div>
    </a></div>';

     return $nlink;
    }

    add_shortcode("nlink", "nlink_scode");


















?>

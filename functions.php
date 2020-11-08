<?php

// フック用のfunctionで読み込む
function add_files() {
// Swiper JS
wp_enqueue_script( 'swiper-js', get_template_directory_uri() . 'swiper.min.js', array( '' ), '4.3.3', true );
}
add_action('wp_enqueue_scripts', 'add_files');

wp_enqueue_script(
'swiper-js',// 読み込みの名前（任意）
get_template_directory_uri() . '/swiper.min.js',//jsのフォルダパス
array( '' ),// 読み込みの順番
'4.3.3',// バージョン（任意）
true // フッターで読み込むか（true/false）
);


// アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');

// アーカイブページのスラッグ を変更

function post_has_archive( $args, $post_type ) {
 
  if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'news'; 
  }
  return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// ページネーション 

/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/

function pagination( $pages, $paged, $range = 2, $show_only = false ) {

$pages = ( int ) $pages;   
$paged = $paged ?: 1;

//表示テキスト
$text_before  = "BACK";
$text_next    = "NEXT";

if ( $show_only && $pages === 1 ) {
    // １ページのみで表示設定が true の時
		echo '
		<div class="dsn-pagination">
			<span class="page-numbers current ">
					<span class="dsn-numbers">
							<span class="number">1</span></span>
				</span>
			</div>';
    return;
}

if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

if ( 1 !== $pages ) {
    //２ページ以上の時
    echo '<div class="dsn-pagination">';
    if ( $paged > 1 ) {
        // 「前へ」 の表示
				echo '
				<a href="', get_pagenum_link( $paged - 1 ) ,'" class="next page-numbers">
					<span class="button-n">
						<svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%"
								height="100%">
								<path
										d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
								</path>
						</svg>
						<span>', $text_before ,'</span>
					</span>
					</a>
				';
		}
		
    for ( $i = 1; $i <= $pages; $i++ ) {

        if ( $i <= $paged + $range && $i >= $paged - $range ) {
            // $paged +- $range 以内であればページ番号を出力
            if ( $paged === $i ) {
								echo '<span class="page-numbers current ">
												<span class="dsn-numbers">
													<span class="number">', $i ,'</span>
												</span>
											</span>';
            } else {
								echo '<a class="page-numbers" href="', get_pagenum_link( $i ) ,'">
												<span class="dsn-numbers">
													<span class="number">', $i ,'</span>
												</span>
											</a>';
            }
        }

    }
    if ( $paged < $pages ) {
        // 「次へ」 の表示
				echo '
				<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next page-numbers">
					<span class="button-m">
						<svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%"
								height="100%">
								<path
										d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
								</path>
						</svg>
						<span>', $text_next ,'</span>
					</span>
				</a>';
    }
    echo '</div>';
}
}

?>
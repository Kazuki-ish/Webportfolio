<?php
/* モーダルウィンドウ用のループカウント */
$modalNumber = 0;

/* DNSプリフェッチ設定の削除 */
add_filter( 'emoji_svg_url', '__return_false' );

/* 絵文字削除 */
remove_action( 'wp_head',             'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles',     'print_emoji_styles' );
remove_action( 'admin_print_styles',  'print_emoji_styles' );

/* wp-json削除 */
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');

/* 外部投稿ツール設定削除 */
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/* WPのバージョン削除 */
remove_action('wp_head', 'wp_generator');


//サムネイルの追加を設定
add_theme_support( 'post-thumbnails' );


//Worksページ用くえり
function all_works_posts() {
  $paged = (int) get_query_var('paged');
  $args = array(
  	'posts_per_page' => 12,
  	'paged' => $paged,
  	'orderby' => 'post_date',
  	'order' => 'DESC',
  	'post_type' => 'post',
  	'post_status' => 'publish'
  );
  $the_query = new WP_Query($args);
  if ( $the_query->have_posts() ) :
  	while ( $the_query->have_posts() ) : $the_query->the_post();
		$modalNumber ++;
  ?><div class="worksitem">
		<button id="openModal<?php echo "$modalNumber";?>"> <?php the_post_thumbnail() ?></button>
		<!-- モーダルエリアここから -->
		<section id="modalArea<?php echo "$modalNumber";?>" class="modalArea">
			<div id="modalBg<?php echo "$modalNumber";?>" class="modalBg"></div>
			<div class="modalWrapper">
				<div class="modalContents">
					<h1><?php the_title(); //ポストのタイトルを表示 ?></h1>
					<?php the_content(); //ポストの本文を表示 ?>
					<time datetime="<?php the_time('Y-m'); ?>"><?php the_time('Y.m'); ?></time>
					<?php the_post_thumbnail() ?>
				</div>
				<div id="closeModal<?php echo "$modalNumber";?>" class="closeModal">
					×
				</div>
			</div>
		</section>
		<!-- モーダルエリアここまで -->
	</div><?php
  endwhile; endif;
  ?><div class="pagination"><?php
  if ($the_query->max_num_pages > 1) {
    echo paginate_links(array(
      'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
      'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
      'prev_text'     => ( 'prev'), // 「前へ」リンクのテキスト
      'next_text'     => ( 'next'), // 「次へ」リンクのテキスト
      'type'          => 'list', // 戻り値の指定 (plain/list)
  		'base' => get_pagenum_link(1) . '%_%',
  		'format' => 'page/%#%/',
  		'current' => max(1, $paged),
  		'total' => $the_query->max_num_pages
  	));
  }
  ?></div><?php
  wp_reset_postdata();
}

//投稿を取得してモーダルウィンドウとして表示
function front_works_posts() {?>
  <h2 class="pagetitle">Works&Histry</h2>
  <div class="workspage">
    <?php if(have_posts()): while(have_posts()):the_post(); //wpメインループ、あるだけのポストを取得
		$modalNumber ++;?>
    <div class="worksitem">
			<button id="openModal<?php echo "$modalNumber";?>"> <?php the_post_thumbnail() ?></button>
			<!-- モーダルエリアここから -->
			<section id="modalArea<?php echo "$modalNumber";?>" class="modalArea">
			  <div id="modalBg<?php echo "$modalNumber";?>" class="modalBg"></div>
			  <div class="modalWrapper">
			    <div class="modalContents">
						<h1><?php the_title(); //ポストのタイトルを表示 ?></h1>
			      <?php the_content(); //ポストの本文を表示 ?>
						<time datetime="<?php the_time('Y-m'); ?>"><?php the_time('Y.m'); ?></time>
						<?php the_post_thumbnail() ?>
					</div>
			    <div id="closeModal<?php echo "$modalNumber";?>" class="closeModal">
			      ×
			    </div>
			  </div>
			</section>
			<!-- モーダルエリアここまで -->
    </div>

    <?php
      endwhile; endif;
      wp_reset_postdata(); //ポストリセット
    ?></div><?php

}
?>

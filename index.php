<?php
/*
Template Name: works
*/
get_header(); //ヘッダーを表示
?>

<section id="Works" class="Works">
	<h2> <?php the_title(); ?></h2>
	<div class="workspage"><?php
		if( function_exists('all_works_posts') ){// 関数が定義されていたらtrueになる
		all_works_posts(); //funtion呼び出し
		}
		?><div class="pagination"><?php
	?>
			</div>
	</div>
</section>
<?php
get_footer(); //フッターを表示
?>

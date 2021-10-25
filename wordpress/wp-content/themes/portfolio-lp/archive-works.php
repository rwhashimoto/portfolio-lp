<?php
$args = array(
	'post_type' => 'works', // 投稿タイプを指定
	'posts_per_page' => 10, // 表示する記事数
);
$xxx_query = new WP_Query( $args ); // $argsで指定した投稿タイプをクエリに設定
if ( $xxx_query->have_posts() ): // ↑で指定したクエリに記事が存在する場合
	while ( $xxx_query->have_posts() ): // クエリの記事を表示し続ける
	$xxx_query->the_post(); // クエリの記事を表示
?>

<!-- ここにhtml -->
<p>
<?= get_the_date(); //投稿日 ?>
</p>
<?php
endwhile; endif;
wp_reset_postdata();
?>
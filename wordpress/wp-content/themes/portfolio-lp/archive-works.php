<?php get_header(); ?>

<?php
$args = array(
	'post_type' => 'works', // 投稿タイプを指定
	'posts_per_page' => 10, // 表示する記事数
);
$works_query = new WP_Query( $args ); // $argsで指定した投稿タイプをクエリに設定
if ( $works_query->have_posts() ): // ↑で指定したクエリに記事が存在する場合
	while ( $works_query->have_posts() ): // クエリの記事を表示し続ける
	$works_query->the_post(); // クエリの記事を表示
?>

<!-- ここにhtml -->
<section id="works" class="l-main-content">
	<h2 class="l-main-title">Works</h2>
	<ul class="works">
	    <li class="works-item">
            <p><?= get_the_date(); ?></p>
		    <img src="<?= get_template_directory_uri(); ?>/assets/images/works1.jpg" alt="img_works1">
	    </li>
	</ul>
</section>

<?php
endwhile; endif;
wp_reset_postdata();
?>

<?php get_footer(); ?>
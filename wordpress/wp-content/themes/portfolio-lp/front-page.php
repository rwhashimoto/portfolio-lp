<?php get_header(); ?>

	<main class="l-main">
		<div class="l-main-mv">
			<picture>
				<source media="(max-width: 600px)" srcset="images/mainvisual-sp.jpg" alt="mv-sp">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/mainvisual-pc.jpg" alt="mv-pc">
			</picture>
		</div>

		<section id="works" class="l-main-content">
			<h2 class="l-main-title">Works</h2>
			<ul class="works">
				<li class="works-item">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/works1.jpg" alt="img_works1">
				</li>
				<li class="works-item">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/works2.jpg" alt="img_works2">
				</li>
				<li class="works-item">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/works3.jpg" alt="img_works3">
				</li>
				<li class="works-item">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/works4.jpg" alt="img_works4">
				</li>
				<li class="works-item">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/works5.jpg" alt="img_works5">
				</li>
				<li class="works-item">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/works6.jpg" alt="img_works6">
				</li>
			</ul>
		</section>

		<section id="news" class="l-main-content">
			<h2 class="l-main-title">News</h2>
			<div class="news">

			<?php
			$args = array(
				'post_type' => 'news', // 投稿タイプを指定
				'posts_per_page' => 10, // 表示する記事数
			);
			$news_query = new WP_Query($args);
			// もし投稿があった場合
			if($news_query->have_posts()):
			// 条件を満たし続ける間（↑で指定している「投稿があるなら」って条件を満たす限り）
			while($news_query->have_posts()): 
			// the_post（投稿）を表示する
			$news_query->the_post(); ?>
				<dl>
					<dt><?= get_the_date(); //投稿日 ?></dt>
					<dd><?= get_the_title(); //投稿タイトル ?></dd>
				</dl>
			<?php
				// ループは必ず終了させる
				endwhile; endif; ?>

			</div>
		</section>
	</main>

<?php get_footer(); ?>
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
			<?php
			$args = array(
				'post_type' => 'works',
				'posts_per_page' => 6,
			);
			$works_query = new WP_Query($args);
			if($works_query->have_posts()):
			while($works_query->have_posts()): 
			$works_query->the_post();
			$thumbnail = get_field('thumbnail');
			?>
				<li class="works-item">
					<img src="<?= $thumbnail ?>" alt="">
				</li>
			<?php
				// ループは必ず終了させる
				endwhile; endif; ?>
			</ul>
			<a class="btn-more" href="<?php echo home_url('/works/'); ?>">See More</a>
		</section>

		<section id="news" class="l-main-content">
			<h2 class="l-main-title">News</h2>
			<div class="news">

			<?php
			$args = array(
				'post_type' => 'news', // 投稿タイプを指定
				'posts_per_page' => 3, // 表示する記事数
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
			<a class="btn-more" href="<?php echo home_url('/news/'); ?>">See More</a>
		</section>
	</main>

<?php get_footer(); ?>
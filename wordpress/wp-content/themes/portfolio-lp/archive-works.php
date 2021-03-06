<?php get_header(); ?>

<section id="works" class="l-main-content archive-works">
	<h2 class="l-main-title">Works</h2>
    <ul class="works">
    <?php
    $args = array(
        'post_type' => 'works', // 投稿タイプを指定
        'posts_per_page' => 10, // 表示する記事数
    );
    $works_query = new WP_Query( $args ); // $argsで指定した投稿タイプをクエリに設定
    if ( $works_query->have_posts() ): // ↑で指定したクエリに記事が存在する場合
        while ( $works_query->have_posts() ): // クエリの記事を表示し続ける
        $works_query->the_post(); // クエリの記事を表示
        $thumbnail = get_field('thumbnail');
        $works_text = get_field('text');
    ?>

	    <li class="works-item">
            <img src="<?= $thumbnail ?>" alt="">
            <p class="title"><?= get_the_title(); ?></p>
            <p class="text"><?= $works_text ?></p>
	    </li>
        <?php
    endwhile; endif;
    wp_reset_postdata();
    ?>
	</ul>

</section>

<?php get_footer(); ?>
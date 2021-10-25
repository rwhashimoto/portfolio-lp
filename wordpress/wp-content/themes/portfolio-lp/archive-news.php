<?php get_header(); ?>
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
        if ($news_query->have_posts()) :
            // 条件を満たし続ける間（↑で指定している「投稿があるなら」って条件を満たす限り）
            while ($news_query->have_posts()) :
                // newsのthe_post（投稿）を表示する
                $news_query->the_post(); ?>
                <dl>
                    <dt><?= get_the_date(); ?></dt>
                    <dd><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></dd>
                </dl>
        <?php
        // ループは必ず終了させる
        endwhile;
        endif; ?>   
    </div>
</section>
<?php get_footer(); ?>
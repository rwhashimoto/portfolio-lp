<?php get_header(); ?>

<section id="news" class="l-main-content single-news">
    <h2 class="l-main-title"><?= get_the_title(); ?></h2>
    <p><?= get_the_date(); ?></p>
    <p class="entry-field"><?php the_content(); ?></p>
    <a class="btn-prev" href="<?php echo home_url('/news/'); ?>">一覧に戻る</a>
</section>

<?php get_footer(); ?>
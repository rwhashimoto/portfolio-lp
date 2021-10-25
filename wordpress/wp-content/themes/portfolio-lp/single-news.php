<?php get_header(); ?>
<h2 class="l-main-title"><?= get_the_title(); ?></h2>
<p><?= get_the_date(); ?></p>
<p><?php the_content(); ?></p>
<?php get_footer(); ?>
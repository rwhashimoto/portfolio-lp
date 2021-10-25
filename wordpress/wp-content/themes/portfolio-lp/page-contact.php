<?php get_header(); ?>
<section id="contact" class="l-main-content">
    <h2 class="l-main-title">Contact</h2>
    <form class="contact" method="POST">
        <div class="contact-item">
            <span>NAME</span>
            <input type="text" name="NAME">
        </div>
        <div class="contact-item">
            <span>E-mail</span>
            <input type="text" name="email">
        </div>
        <div class="contact-item">
            <span>MESSAGE</span>
            <textarea></textarea>
        </div>
        <input class="btn-submit" type="submit" value="送信">
    </form>
</section>
<?php get_footer(); ?>
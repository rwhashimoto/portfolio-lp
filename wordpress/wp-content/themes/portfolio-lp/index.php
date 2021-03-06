<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Work - Portfolio</title>
	<meta name="description" content="ディスクリプション">
	<link rel="icon" href="<?= get_template_directory_uri(); ?>favicon.ico">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/common.css">
</head>

<body>
	<header class="l-header">
		<h1 class="l-header-logo">
			<a href="<?= get_template_directory_uri(); ?>/">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" alt="My Work">
			</a>
		</h1>
		<nav>
			<ul  class="l-header-items">
				<li class="l-header-item"><a href="#about">About</a></li>
				<li class="l-header-item"><a href="#works">Works</a></li>
				<li class="l-header-item"><a href="#news">News</a></li>
				<li class="l-header-item"><a href="#contact">Contact</a></li>
				<li class="l-header-item ico-sns"><a href="DUMMY"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="ico-instagram"></a></li>
			</ul>
		</nav>
	</header>
	<main class="l-main">
		<div class="l-main-mv">
			<picture>
				<source media="(max-width: 600px)" srcset="images/mainvisual-sp.jpg" alt="mv-sp">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/mainvisual-pc.jpg" alt="mv-pc">
			</picture>
		</div>
		<section id="about" class="l-main-content">
			<h2 class="l-main-title">About</h2>
			<div class="about">
				<p>Xxxxx Ashley</p>
				<ul class="contact">
					<li>2th Floor xxxxx Building x-x-x Nishiazabu, <span class="line-break">Minato-ku, Tokyo 106-0031Japan</span></li>
					<li>tel: 000-0000-0000</li>
					<li>url: www.xxxxxx.jp</li>
					<li>mail: xxx@xxxxxx.jp</li>
				</ul>
				<p class="detail">
					プロフィールテキストテキストテキストテキストテキストテキストテキストテキストテキストスト テキストテキストテキストテキ
					ストテキストテキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキストテキスト
					テキストテキストテキストテキスト
				</p>
			</div>
		</section>

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
				<dl>
					<dt>2020.XX.XX</dt>
					<dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
				</dl>
				<dl>
					<dt>2020.XX.XX</dt>
					<dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
				</dl>
				<dl>
					<dt>2020.XX.XX</dt>
					<dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
				</dl>
				<dl>
					<dt>2020.XX.XX</dt>
					<dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</dd>
				</dl>
				<dl>
					<dt>2020.XX.XX</dt>
					<dd>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト。</dd>
				</dl>
			</div>
		</section>
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
	</main>
	<footer class="l-footer">
			<p>© 2020 My Work</p>
	</footer>
</body>

</html>
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
			<a href="/">
				<img src="<?= get_template_directory_uri(); ?>/assets/images/logo.svg" alt="My Work">
			</a>
		</h1>
		<nav>
			<ul  class="l-header-items">
				<li class="l-header-item"><a href="<?php echo home_url('/about/'); ?>">About</a></li>
				<li class="l-header-item"><a href="<?php echo home_url('/works/'); ?>">Works</a></li>
				<li class="l-header-item"><a href="<?php echo home_url('/news/'); ?>">News</a></li>
				<li class="l-header-item"><a href="<?php echo home_url('/contact/'); ?>">Contact</a></li>
				<li class="l-header-item ico-sns"><a href="DUMMY"><img src="<?= get_template_directory_uri(); ?>/assets/images/icon-instagram.png" alt="ico-instagram"></a></li>
			</ul>
		</nav>
	</header>
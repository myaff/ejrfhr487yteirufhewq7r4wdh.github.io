<?php require('parts/variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="dist/template_styles.css">
	<link rel="stylesheet" href="dist/styles.css">
	<!-- стили страниц временно тут -->
	<link rel="stylesheet" href="dist/mfc-map.css">
	<link rel="stylesheet" href="dist/faq.css">
	<script src="dist/js/libs.min.js"></script>
	<script src="dist/js/scripts.js"></script>
</head>
<body>
<div id="svg-placeholder" class="hidden"><?php require('dist/images/svg/sprite.svg'); ?></div>
<div class="page <?php if($isHome){ ?>page-home<?php } ?>">
	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-3 header__top-logo hidden-md hidden-lg">
						<div class="logo"><a href="#"><svg><use xlink:href="#logo"/></svg></a></div>
						<div class="tel hidden-sm">+7&nbsp;(8692)&nbsp;417&#8209;100</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-5 col-md-offset-2 col-lg-6 header__top-links">
						<a href="#">Записаться на прием <svg class="icon arrow-circle"><use xlink:href="#arrow"/></svg></a>
						<a href="#">Узнать статус дела <svg class="icon arrow-circle"><use xlink:href="#arrow"/></svg></a>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2 header__top-buttons">
						<a href="#" class="icon-box__wrapper header-button hidden-md hidden-lg" data-target="#mobile-menu" data-toggle="modal">
							<div class="icon-box">
								<div class="icon-box__icon"><svg class="icon"><use xlink:href="#burger"/></svg></div>
								<div class="icon-box__text">Меню</div>
							</div>
						</a>
						<a href="#" class="icon-box__wrapper header-button">
							<div class="icon-box">
								<div class="icon-box__icon"><svg class="icon"><use xlink:href="#user"/></svg></div>
								<div class="icon-box__text">Личный кабинет</div>
							</div>
						</a>
						<a href="#" class="icon-box__wrapper header-button hidden-md hidden-lg js-toggle-class" data-target="#search-box">
							<div class="icon-box">
								<div class="icon-box__icon"><svg class="icon"><use xlink:href="#zoom"/></svg></div>
							</div>
						</a>
					</div>
					<div class="col-sm-3 col-md-5 col-lg-4 cols-wrapper">
						<div class="header__top-search" id="search-box">
							<div class="search">
								<input type="text" class="form-control input-sm" placeholder="Найти">
								<svg class="icon"><use xlink:href="#zoom-light"/></svg>
							</div>
						</div>
						<div class="hidden-xs header__top-feedback">
							<div class="tel">
								<svg class="icon hidden-sm"><use xlink:href="#phone"/></svg>
								+7&nbsp;(8692)&nbsp;417&#8209;100
							</div>
							<a href="#" class="btn btn-primary btn-xs">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__bottom">
			<div class="container">
				<div class="row">
					<div class="header__bottom-logo hidden-xs hidden-sm col-md-3">
						<div class="logo"><a href="#"><svg><use xlink:href="#logo-full"/></svg></a></div>
					</div>
					<div class="col-xs-12 col-md-9">
						<?php require('parts/header-menu.php'); ?>
						<div class="header-contacts">
							<div class="header-contacts__title">Многофункциональный центр предоставления государственных и муниципальных услуг города севастополь</div>
							<div class="header-contacts__info clearfix">
								<div class="header-contacts__address pull-left">
									<a href="#" class="header-contacts__address-link">
										<svg class="icon map"><use xlink:href="#map-pin"/></svg>
										<address>МФЦ ул.Вокзальная, 10 г. Севастополя</address>
										<svg class="icon arrow-down arrow-circle"><use xlink:href="#arrow"/></svg>
									</a>
								</div>
								<div class="header-contacts__workhours">
									<span><b>Пн.-Пт:</b>&nbsp;08:00&nbsp;-&nbsp;20:00, <b>Сб.:</b>&nbsp;09:00&nbsp;-&nbsp;16:00, <b>Вс.:</b>&nbsp;Выходной</span>
									<a href="#" class="readmore">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="sidebar__wrapper hidden-xs hidden-sm col-md-3">
				<?php require('parts/sidebar.php'); ?>
			</div>
			<main class="workarea__wrapper col-xs-12 col-md-9">
			<?php if (!$isHome) {?>
				<ol class="breadcrumb">
					<li class="breadcrumb__item">
						<a href="#" class="breadcrumb__link">
							<svg class="breadcrumb__icon home"><use xlink:href="#home"/></svg>
							<svg class="breadcrumb__icon separator"><use xlink:href="#arrow"/></svg>
						</a>
					</li>
					<li class="breadcrumb__item">
						<a href="#" class="breadcrumb__link">
							<span>Нормативно-правовые документы</span>
							<svg class="breadcrumb__icon separator"><use xlink:href="#arrow"/></svg>
						</a>
					</li>
					<li class="breadcrumb__item active">
						<a href="#" class="breadcrumb__link">
							<span>Федеральный закон от 27.07.2006 № 152-ФЗ</span>
							<svg class="breadcrumb__icon separator"><use xlink:href="#arrow"/></svg>
						</a>
					</li>
				</ol>
			<?php } ?>
				<div class="workarea">
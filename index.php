<?php require('parts/header.php'); ?>
<div class="carousel carousel--home">
	<div class="carousel__item">
		<a href="#" class="carousel__link">
			<img class="carousel__img" data-lazy="images/carousel.jpg" alt="Img"/>
		</a>
	</div>
	<div class="carousel__item">
		<img class="carousel__img" data-lazy="images/carousel.jpg" alt="Img"/>
	</div>
	<div class="carousel__item">
		<img class="carousel__img" data-lazy="images/carousel.jpg" alt="Img"/>
	</div>
	<div class="carousel__item">
		<img class="carousel__img" data-lazy="images/carousel.jpg" alt="Img"/>
	</div>
	<div class="carousel__item">
		<a href="#" class="carousel__link">
			<img class="carousel__img" data-lazy="images/carousel.jpg" alt="Img"/>
		</a>
	</div>
</div>
<div class="servs bordered-box">
	<div class="servs__title block-title"><a href="#">Услуги по жизненным ситуациям</a></div>
	<div class="servs__list row">
		<?php foreach ($services as $title => $icon) { ?>
			<div class="servs__item col-xs-12 col-sm-4">
				<a href="#" class="servs__item-link icon-box__wrapper">
					<div class="servs__item-link-inner icon-box">
						<div class="servs__item-icon icon-box__icon icon-circle">
							<svg class="icon"><use xlink:href="#<?php echo $icon; ?>"/></svg>
						</div>
						<div class="servs__item-title icon-box__text"><?php echo $title; ?></div>
					</div>
					<svg class="icon next"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		<?php } ?>
	</div>
</div>
<div class="news bordered-box">
	<div class="news__title block-title"><a href="#">Новости</a></div>
	<div class="news__list row">
		<div class="news__item col-xs-12 col-sm-4">
			<span class="news__item-date">02.11.2016</span>
			<div class="news__item-title"><a href="#">Режим работы МФЦ на 03.11.2016:</a></div>
			<div class="news__item-anons">
				<p>ул. Вокзальная, д.10 - с 08:00 до 19:00; ул. Леваневского, д.24 - с 08:00 до 19:00;  пл. Восставших, д. 6 - с 08:00 до 19:00;
				пр. Героев Сталинграда, д. 64 - с 08:00 до 19:00;</p>
			</div>
			<a href="#" class="readmore">Подробнее</a>
		</div>
		<div class="news__item col-xs-12 col-sm-4">
			<span class="news__item-date">02.11.2016</span>
			<div class="news__item-title"><a href="#">Уважаемые жители города Севастополя, поздравляем Вас с праздником, с ДНЕМ НАРОДНОГО ЕДИНСТВА!!!</a></div>
			<div class="news__item-anons">
				<p>Во все времена единение народа было, есть и будет для нашей страны главной национальной идеей и в политическом, и в духовном плане. Это та историческая основа, которая связывает наше прошлое, настоящее и будущее. В самые трудные для Родины времена</p>
			</div>
			<a href="#" class="readmore">Подробнее</a>
		</div>
		<div class="news__item col-xs-12 col-sm-4">
			<span class="news__item-date">02.11.2016</span>
			<div class="news__item-title"><a href="#">ВНИМАНИЕ ВСЕМ ЗАЯВИТЕЛЯМ !!!!</a></div>
			<div class="news__item-anons">
				<p>24 октября 2016 года, произошёл аварийный сбой в программном комплексе, АИС МФЦ, в связи с чем приём заявителей не может осуществляться в полном объёме. На данный момент ведётся приём по предварительной записи в ручном режиме.</p>
			</div>
			<a href="#" class="readmore">Подробнее</a>
		</div>
	</div>
</div>
<div class="contacts hidden-xs">
	<div class="contacts__title block-title"><a href="#">Филиалы и контакты</a></div>
	<div class="contacts__panel panel panel-custom">
		<div class="row">
			<div class="col-sm-3 col-md-4">
				<div class="contacts__img-wrapper">
					<img src="images/map.jpg" alt="Map" class="contacts__img"/>
				</div>
			</div>
			<div class="col-sm-9 col-md-8">
				<div class="panel-body">
					<div class="panel-title contacts__panel-title">
						<a href="#">
							<span>МФЦ ул.Вокзальная,&nbsp;10 г.&nbsp;Севастополя</span>
							<svg class="icon arrow-down arrow-circle"><use xlink:href="#arrow"/></svg>
						</a>
					</div>
					<div class="row">
						<div class="col-sm-7">
							<address class="contacts__address">
								г.&nbsp;Севастополь, ул.&nbsp;Вокзальная,&nbsp;д.10<br/>
								<strong>+7&nbsp;(8692)&nbsp;417&nbsp;100</strong>
							</address>
							<a href="#" class="btn btn-primary btn-sm">Подробнее</a>
						</div>
						<div class="col-sm-5">
							<dl class="contacts__workhours dl-horizontal">
								<dt>Пн.-Пт</dt>
								<dd>08:00&nbsp;&#8209;&nbsp;20:00</dd>
							</dl>
							<dl class="contacts__workhours dl-horizontal">
								<dt>Суббота</dt>
								<dd>09:00&nbsp;&#8209;&nbsp;16:00</dd>
							</dl>
							<dl class="contacts__workhours dl-horizontal">
								<dt>Воскресенье</dt>
								<dd>Выходной</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require('parts/footer.php'); ?>
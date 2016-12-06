<?php require('parts/header.php'); ?>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-5">
		<h1 class="mfc-map__page-title">Найти МФЦ</h1>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-7 mfc-map__legend">
		<div class="mfc-map__legend-mark mark--active icon-box__wrapper">
			<div class="icon-box">
				<div class="icon-box__icon"><svg class="icon"><use xlink:href="#map-pin"/></svg></div>
				<div class="icon-box__text">Действующее подразделение МФЦ</div>
			</div>
		</div>
		<div class="mfc-map__legend-mark icon-box__wrapper">
			<div class="icon-box">
				<div class="icon-box__icon"><svg class="icon"><use xlink:href="#map-pin"/></svg></div>
				<div class="icon-box__text">Планируемое подразделение МФЦ</div>
			</div>
		</div>
	</div>
</div>
<!-- .demo-mode добавляет заливку контейнеру для карты, при подключении карты можно убрать  -->
<div class="mfc-map demo-mode" id="mfc-map"></div>
<h2 class="mfc-map__title">Список МФЦ</h2>
<div class="mfc-map__list row">
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ ул.Вокзальная,&nbsp;10 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт: 08:00-20:00<br />
				Сб: 09:00-16:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ на пл.&nbsp;Восставших,&nbsp;6 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт: 08:00-20:00<br />
				Сб: 09:00-16:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ&nbsp;на&nbsp;пр.&nbsp;Героев&nbsp;Сталинграда,&nbsp;64 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт: 08:00-20:00<br />
				Сб: 09:00-16:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ ул.Вокзальная,&nbsp;10 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт: 08:00-20:00<br />
				Сб: 09:00-16:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ на пл.&nbsp;Восставших,&nbsp;6 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт: 08:00-20:00<br />
				Сб: 09:00-16:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ с.Орлинное, ул.&nbsp;Тюкова, д.&nbsp;60А</a></div>
			<div class="mfc-map__workhours">
				График работы: <br/>
				Пн, Вт, Ср, Чт: 09:00-18:00, обед: 13:00-14:00<br/>
				Пт: 09:00-17:00, обед: 13:00-14:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ ул.Вокзальная,&nbsp;10 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт, Сб: 09:00-18:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
	<div class="mfc-map__item col-xs-12 col-sm-4">
		<div class="mfc-map__item-inner">
			<div class="mfc-map__item-title"><a href="#">МФЦ на пл.&nbsp;Восставших,&nbsp;6 г.Севастополя</a></div>
			<div class="mfc-map__workhours">
				График работы:<br />
				Пн, Вт, Ср, Чт, Пт: 08:00-20:00<br />
				Сб: 09:00-16:00
			</div>
			<div class="mfc-map__contacts">
				<span class="tel">+7(8692) 417100</span>
				<a href="#" class="map-link">
					<span>На карте</span>
					<svg class="icon icon-circle"><use xlink:href="#arrow"/></svg>
				</a>
			</div>
		</div>
	</div>
</div>
<?php require('parts/footer.php'); ?>
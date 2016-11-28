<div class="page-aside modal fade no-hide" id="mobile-menu">
	<div class="page-aside__overflow">
		<div class="page-aside__inner">
			<div class="page-aside__head">		
				<a href="#" class="close-custom close-left" data-toggle="modal" data-target="#mobile-menu"><span></span><span></span></a>
				<div class="page-aside__logo"><a href="#"><svg><use xlink:href="#logo"/></svg></a></div>
			</div>
			<div class="page-aside__body">
				<nav class="mobile-menu__wrapper">
					<ul class="mobile-menu menu accordion">
						<li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Главная</a></li>
						<li class="mobile-menu__item">
							<a href="#menu-collapse-1" class="mobile-menu__link" data-toggle="collapse" data-parent=".accordion">
								<svg class="icon arrow-down"><use xlink:href="#arrow-circle"/></svg>
								Об учреждении
							</a>
							<ul id="menu-collapse-1" class="menu-collapse menu collapse">
								<li class="menu-collapse__item"><a href="#" class="menu-collapse__link">Подраздел 1</a></li>
								<li class="menu-collapse__item"><a href="#" class="menu-collapse__link">Подраздел 2</a></li>
								<li class="menu-collapse__item"><a href="#" class="menu-collapse__link">Подраздел 3 с длинным названием</a></li>
								<li class="menu-collapse__item"><a href="#" class="menu-collapse__link">Подраздел 4</a></li>
								<li class="menu-collapse__item"><a href="#" class="menu-collapse__link">Подраздел 5</a></li>
							</ul>
						</li>
						<li class="mobile-menu__item">
							<a href="#menu-collapse-2" class="mobile-menu__link" data-toggle="collapse" data-parent=".accordion">
								<svg class="icon arrow-down"><use xlink:href="#arrow-circle"/></svg>
								Услуги по жизненным ситуациям
							</a>
							<ul id="menu-collapse-2" class="menu-collapse menu collapse">
								<?php foreach ($services as $title => $icon) { ?>
									<li class="menu-collapse__item">
										<a href="#" class="menu-collapse__link icon-box__wrapper">
											<div class="menu-collapse__link-inner icon-box">
												<div class="menu-collapse__item-icon icon-box__icon icon-circle">
													<svg class="icon"><use xlink:href="#<?php echo $icon;?>"/></svg>
												</div>
												<div class="menu-collapse__item-title icon-box__text">
													<?php echo $title;?>
												</div>
											</div>
										</a>
									</li>
								<?php } ?>
							</ul>
						</li>
						<li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Найти МФЦ</a></li>
						<li class="mobile-menu__item"><a href="#" class="mobile-menu__link">Новости</a></li>
					</ul>
				</nav>
				<nav class="mobile-secondary-menu__wrapper">
					<ul class="mobile-secondary-menu">
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Филиалы и контакты</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Вакансии</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Нормативно-правовые документы</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Корпорация МСП</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Возможности портала</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Вопросы и ответы</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Получение информации о деле</a>
						</li>
						<li class="mobile-secondary-menu__item">
							<a href="#" class="mobile-secondary-menu__link">Отзывы</a>
						</li>
					</ul>
				</nav>
				<div class="page-aside__buttons">
					<a href="#" class="btn btn-secondary btn-lg btn-block">Записаться на прием</a>
					<a href="#" class="btn btn-secondary btn-lg btn-block">Узнать статус дела</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-aside big modal fade no-hide" id="serv-menu">
	<div class="page-aside__overflow">
		<div class="page-aside__inner">
			<div class="page-aside__head">		
				<a href="#" class="close-custom" data-toggle="modal" data-target="#serv-menu"><span></span><span></span></a>
				<div class="page-aside__title">Услуги по жизненным ситуациям</div>
			</div>
			<div class="page-aside__body">
				<nav class="serv-menu__wrapper">
					<ul class="serv-menu menu">
						<?php foreach ($services as $title => $icon) { ?>
							<li class="serv-menu__item">
								<a href="#" class="serv-menu__link icon-box__wrapper">
									<div class="serv-menu__link-inner icon-box">
										<div class="serv-menu__item-icon icon-box__icon icon-circle">
											<svg class="icon"><use xlink:href="#<?php echo $icon;?>"/></svg>
										</div>
										<div class="serv-menu__item-title icon-box__text">
											<?php echo $title;?>
										</div>
									</div>
									<svg class="icon next"><use xlink:href="#arrow"/></svg>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
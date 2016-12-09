<?php require('parts/header.php'); ?>

<h1>Вопросы и ответы</h1>
<div class="faq">
	<div class="action-block faq__filter">
		<form action="" class="action-block__body form-inline">
			<div class="form-group">
				<label for="catogory-filter">Категории вопросов</label>
				<select name="category-filter" id="category-filter" class="form-control chosen-select">
					<option value="v0">Все категории</option>
					<option value="v1">Получение услуги</option>
					<option value="v2">Запись на приём</option>
					<option value="v3">Общие вопросы</option>
					<option value="v4">Другое</option>
				</select>
			</div>
			<a href="#" class="btn btn-primary btn-sm">Показать</a>
		</form>
	</div>
	<div class="faq__list">
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Здравствуйте! Возможно ли выдача в мфц справки с места жительства? Или это возможно только в паспортных столах?</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Возможно ли отчуждение доли квартиры постороннему лицу без участия нотариуса?</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Я студентка одного из вузов Саратова, проживаю в общежитии, где имею временную прописку. Постоянно зарегистрирована НЕ в Саратовской области. Моим ежемесячным доходом является только стипендия, она разумеется ниже прожиточного минимума. Могу ли я получить</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Здравствуйте! Возможно ли выдача в мфц справки с места жительства? Или это возможно только в паспортных столах?</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Возможно ли отчуждение доли квартиры постороннему лицу без участия нотариуса?</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Я студентка одного из вузов Саратова, проживаю в общежитии, где имею временную прописку. Постоянно зарегистрирована НЕ в Саратовской области. Моим ежемесячным доходом является только стипендия, она разумеется ниже прожиточного минимума. Могу ли я получить</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Здравствуйте! Возможно ли выдача в мфц справки с места жительства? Или это возможно только в паспортных столах?</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Возможно ли отчуждение доли квартиры постороннему лицу без участия нотариуса?</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
		<div class="faq__item">
			<div class="faq__item-date">02.11.2016</div>
			<div class="faq__item-preview-text">
				<p><span class="text">Я студентка одного из вузов Саратова, проживаю в общежитии, где имею временную прописку. Постоянно зарегистрирована НЕ в Саратовской области. Моим ежемесячным доходом является только стипендия, она разумеется ниже прожиточного минимума. Могу ли я получить</span> <a href="#" class="readmore">Подробнее</a></p>
			</div>
		</div>
	</div>
</div>
<nav class="pagination__wrapper">
	<ul class="pagination">
		<li class="pagination__item active"><a href="#" class="pagination__link">01</a></li>
		<li class="pagination__item"><a href="#" class="pagination__link">02</a></li>
		<li class="pagination__item"><a href="#" class="pagination__link">03</a></li>
		<li class="pagination__item"><a href="#" class="pagination__link">04</a></li>
		<li class="pagination__item"><a href="#" class="pagination__link">05</a></li>
		<li class="pagination__item"><a href="#" class="pagination__link">...</a></li>
		<li class="pagination__item"><a href="#" class="pagination__link">25</a></li>
		<li class="pagination__item next">
			<a href="#" class="pagination__link">
				<svg class="pagination__icon"><use xlink:href="#arrow"/></svg>
			</a>
		</li>
	</ul>
</nav>

<div class="action-block action-block--big">
	<div class="action-block__body">
		<div class="action-block__text">Если Вы не нашли ответ на интересующий Вас вопрос, задайте его нам.</div>
		<a href="#" class="btn btn-primary btn-lg btn-block action-block__btn">Задать вопрос</a>
	</div>
</div>

<?php require('parts/footer.php'); ?>
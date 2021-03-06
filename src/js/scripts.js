$(document).ready(function(){
	//svg4everybody();
	$('.carousel').slick({
		arrows: false,
		dots: true,
		fade: true,
		mobileFirst: true,
		lazyLoad: 'progressive'
	});
	
	$('.js-toggle-class').on('click', function(e){
		e.preventDefault();
		var target = $(this).attr('data-target');
		var classForToggle = $(this).attr('data-class') || 'open';
		$(target).toggleClass(classForToggle);
	});
	
	$(document).on('click', '.modal-backdrop', function(){
		$('.modal').modal('hide');
	});
	
	
	$('input[type="tel"]').inputmask("+7(999)999-99-99");
	
	$('.chosen-select').chosen({
		disable_search: true,
		width: 'auto'
	})
	
});

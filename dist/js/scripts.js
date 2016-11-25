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
	
	$('.modal.no-hide').modal({
		backdrop: true,
		show: false
	});
	
	$('input[type="tel"]').inputmask("+7(999)999-99-99");
	
});

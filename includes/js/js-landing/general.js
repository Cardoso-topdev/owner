(function($) {

	$(document).ready(function(){
		// $('body.mobile .pp-a-form input[type=text], body.mobile .pp-a-form-mob input[type=text]' ).on( 'focus', function(e) {
		// 	console.log( "open modal" );
		// 	e.preventDefault();
		// 	$.fancybox.open([{
		// 		src: '#analyze-modal',
		// 		touch: false
		// 	}]);
		// 	$('#a-s-form').trigger('toggle:step-reset');
		// });
		$('.o-cta .box-button a, .o-hero .box-button a, .get-a-free-demo').on( 'click', function(e) {
			console.log( "open modal" );
			e.preventDefault();
			$.fancybox.open([{
				src: '#analyze-modal',
				touch: false
			}]);
			$('#a-s-form').trigger('toggle:step-reset');
		});
		$(document).on('click', 'body.mobile .pp-a-form input[type=text], body.mobile .pp-a-form-mob input[type=text], .o-cta .box-button a, .o-hero .box-button a', function(e){
			e.preventDefault();
			$('form.pp-a-form-mob button[type=submit]').trigger('click');
		});
	});

	$(window).on('load', function (e) {

	});

})(jQuery);
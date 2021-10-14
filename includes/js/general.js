(function($) {
	var getUrlParameter = function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;
		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
		return false;
	};
	$(document).ready(function(){
		// 
		let videoId = getUrlParameter('play_video');
		if (videoId) {
			$('.video-block__p-btn').each(function() {
				let id = $(this).attr('data-id');
				if (id == videoId) {
					$(this).trigger('click');
					return false;
				}
			});
		}
	   $('body.mobile .pp-a-form input[type=text], body.mobile .pp-a-form-mob input[type=text], .o-cta .box-button a, .o-hero .box-button a').focus(function(e) {
		   //alert("Asd");
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

		// form
		$(document).on( 'frmPageChanged', function( event, form, response ){
			$( '.order-form' ).removeClass( '_step-1' );
			$( '.order-form' ).addClass( '_step-2' );

		});
		$(document).on( 'frmFormComplete', function( event, form, response ) {
			$( '.order-form' ).removeClass( '_step-2' );
			$( '.order-form' ).addClass( '_step-3' );
		});
	});
    
})(jQuery);
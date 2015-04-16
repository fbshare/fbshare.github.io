(function($) {

	$(function() {

		if(window.location.hash == '#prank') {
			$('.container').remove();
			$('.prank').show();
		}
		
		$('input, textarea').on('change keyup', function() {
			$('#preview-picture').css('background-image', 'url('+$('#picture').val()+')');
			$('#preview-description').html($('#description').val());
			$('#preview-name').html($('#name').val());
			$('#preview-caption').html($('#caption').val());
		});

		$('#feed-btn').on('click', function() {
			FB.ui({
				method: 'feed',
				picture: $('#picture').val(),
				name: $('#name').val(),
				link: 'http://google.se',
				caption: $('#caption').val(),
				description: $('#description').val(),
			}, function(response){

			});
		});
	});

	window.fbAsyncInit = function() {
		FB.init({
			appId      : '224547341072098',
			xfbml      : true,
			version    : 'v2.3'
		});
	};

	(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
})(jQuery);
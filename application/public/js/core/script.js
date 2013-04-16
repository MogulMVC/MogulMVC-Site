/*
 * Put your site wide JavaScript here.
 * Then autoload it in with config/autoload.php
 */

$(document).ready(function() {

	$('a').not($('li a')).on('click', function() {

		var _this = this;

		var location = $(_this).attr('href');

		if (location != undefined && location.charAt(0) == '#') {
			$(window).scrollTo(location, 500, {
				offset : {
					top : -90
				}
			});
			return false;
		}

	});

	$('.showCode').each(function(index) {
		$(this).click(function() {
			$(this).next('pre').slideToggle()
		});
	});

});

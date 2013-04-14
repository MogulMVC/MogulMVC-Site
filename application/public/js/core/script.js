/*
 * Put your site wide JavaScript here.
 * Then autoload it in with config/autoload.php
 */

$(document).ready(function() {

	$(document).on('click', 'a', function() {

		var _this = this;

		var location = $(_this).attr('href');

		if (location.charAt(0) == '#') {
			console.log("works");
			$(window).scrollTo(location, 500, {
				offset : {
					top : -90
				}
			});
			return false;
		}

	});

});

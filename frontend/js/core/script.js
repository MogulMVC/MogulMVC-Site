/*
 * Put your site wide JavaScript here.
 * Then autoload it in with config/autoload.php
 */

$(document).ready(function() {

	if ($('#MToolBar').length > 0) {
		$('#header_forkme').css({
			'top' : '68px'
		});
	}

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
			$(this).next('pre').slideToggle();
		});
	});

	SyntaxHighlighter.all();

});

$(document).ready(function () {
	$('.carousel').carousel();

	$('.quantity-plus-d').on('click', function () {
		var val = parseInt($(this).prev('input').val());
		$(this).prev('input').val(val + 1).change();
		return false;
	});

	$('.quantity-minus-d').on('click', function () {
		var val = parseInt($(this).next('input').val());
		if (val !== 1) {
			$(this).next('input').val(val - 1).change();
		}
		return false;
	});





	// Slick part
	$('.get_in').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2500,
		responsive: [{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	// Arrow part start
	//scrollspy menu
	$('body').scrollspy({
		target: '#full_nav',
		offset: 81
	});
	var $window = $(window);
	var html_body = $('html, body');

	//arrow part
	$(".arrow").on('click', function () {

		$("html,body").animate({
			scrollTop: 0
		}, 500);

	});
	//scroll part
	$window.on('scroll', function () {

		var $scrolling = $(this).scrollTop();

		if ($scrolling >= 200) {

			$(".arrow").fadeIn();
		} else {
			$(".arrow").fadeOut();
		}

		// for sticy menu 
		if ($scrolling >= 20) {
			$("#full_nav").addClass("position-fixed");
		} else {
			$("#full_nav").removeClass("position-fixed");
		}
	});
});
jQuery(document).ready(function () {
	jQuery(".owl-carousel.owl-reviews-slider").owlCarousel({
		margin: 10,
		responsiveClass: true,
		dots: false,
		autoplay: false,
		autoplayTimeout: 4000,
		autoPlaySpeed: 40000,
		autoplayHoverPause: false,
		navText: [
			"<i class='fa-solid fa-chevron-left'></i>",
			"<i class='fa-solid fa-chevron-right'></i>",
		],
		responsive: {
			0: {
				items: 1,
				nav: true,
			},
			600: {
				items: 2,
				nav: true,
			},
			1000: {
				items: 3,
				nav: true,
			},
		},
	});
});

jQuery(function () {
	jQuery(".faqs .accordion li").click(function () {
		jQuery(this).toggleClass(" active ");
		jQuery(this).siblings().removeClass(" active ");
		jQuery(".subtext").stop().slideUp();
		jQuery(".active .subtext").stop().slideDown();
		return false;
	});
});

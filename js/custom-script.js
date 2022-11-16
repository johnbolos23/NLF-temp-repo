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

	jQuery("ul.wcu-inner-dots li").click(function () {
		jQuery(this).toggleClass("active");
	});

	jQuery("ul.wcu-inner-dots li:nth-child(1)").addClass("active");
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

jQuery(document).ready(function () {
	// VARIABLES
	// ----------------------------------------------------------

	var amount,
		percent,
		result,
		months,
		monthsresult,
		monthsresultfinal,
		monthsinterest;
	var calculator = jQuery(".calculator");
	var calculatorBill = calculator.find(".calculator__bill");
	var calculatorTip = calculator.find(".calculator__tip");
	var calculatorResult = calculator.find(".calculator__result");
	var calculatorMonthly = calculator.find(".calculator__monthly");
	var calculatorMonths = calculator.find(".calculator__months");
	var tipAmount = calculator.find(".tip-amount");

	var monthsAmount = calculator.find(".months-amount");

	// INIT BILL
	// ----------------------------------------------------------

	jQuery(window).on("DOMContentLoaded", function () {
		tipAmount.text(calculatorTip.val() + "");
		amount = calculatorBill.val() * 1;
		percent = calculatorTip.val() * 1;
		result = amount + amount * (percent / 100);
		monthsinterest = amount * 0.152 + amount;
		monthsresult = monthsinterest / percent;
		monthsresultfinal = monthsresult / 2;
		calculatorMonthly.text("$" + monthsresultfinal.toFixed(2));
	});

	// RANGE FUNCTION
	// ----------------------------------------------------------

	calculatorTip.on("change", function () {
		if (calculatorBill.val() === "" || isNaN(calculatorBill.val())) {
			alert("Enter bill amount, please!");
		} else {
			amount = calculatorBill.val() * 1;
		}

		tipAmount.text(calculatorTip.val() + "");
		amount = calculatorBill.val() * 1;
		percent = calculatorTip.val() * 1;
		result = amount + amount * (percent / 100);
		monthsinterest = amount * 0.152 + amount;
		monthsresult = monthsinterest / percent;
		monthsresultfinal = monthsresult / 2;
		calculatorMonthly.text("$" + monthsresultfinal.toFixed(2));
	});
});

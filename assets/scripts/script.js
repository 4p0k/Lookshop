$(function () {

	$('.slider').slick({
		speed: 500,
		dots: true,
		prevArrow: '<a class="prev-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="18px"><path fill-rule="evenodd"  opacity="0.2" fill="rgb(0, 0, 0)" d="M11.990,15.053 L8.995,17.990 L0.010,9.178 L0.192,9.000 L0.010,8.822 L8.995,0.010 L11.990,2.948 L5.818,9.000 L11.990,15.053 Z"/></svg></a>',
		nextArrow: '<a class="next-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="18px"><path fill-rule="evenodd"  opacity="0.2" fill="rgb(0, 0, 0)"d="M11.990,9.178 L3.005,17.990 L0.010,15.053 L6.182,9.000 L0.010,2.948 L3.005,0.010 L11.990,8.822 L11.808,9.000 L11.990,9.178 Z"/></svg></a>',

	});

	$('.quadrslider').slick({
		speed: 500,
		centerMode: true,
		variableWidth: true,
	});

});
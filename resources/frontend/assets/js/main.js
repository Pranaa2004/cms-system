(function ($) {
"use strict";

// meanmenu
$('#mobile-menu').meanmenu({
	meanMenuContainer: '.mobile-menu',
	meanScreenWidth: "1199"
});

$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 120) {
		$(".header-sticky").removeClass("sticky");
	} else {
		$(".header-sticky").addClass("sticky");
	}
});


//mobile side menu
$('.side-toggle').on('click', function () {
	$('.side-info').addClass('info-open');
	$('.offcanvas-overlay').addClass('overlay-open');
})

$('.side-info-close,.offcanvas-overlay').on('click', function () {
	$('.side-info').removeClass('info-open');
	$('.offcanvas-overlay').removeClass('overlay-open');
});

function sliderActive() {
	/*------------------------------------
	Slider
	--------------------------------------*/
	if (jQuery(".banner_6_active").length > 0) {
		let sliderActive1 = '.banner_6_active';
		let sliderInit1 = new Swiper(sliderActive1, {
			// Optional parameters
			slidesPerView: 1,
			rtl: false,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			speed: 1000,
			effect: 'fade',
			autoplay: {
				delay: 5000,
			},

			// If we need pagination
	        pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.banner_6-swiper-next',
				prevEl: '.banner_6-swiper-prev',
			},

			a11y: false
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + ' [data-animation]').each(function () {
					let anim = $(this).data('animation');
					let delay = $(this).data('delay');
					let duration = $(this).data('duration');

					$(this).removeClass('anim' + anim)
						.addClass(anim + ' animated')
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration
						})
						.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
							$(this).removeClass(anim + ' animated');
						});
				});
			};
			animated();
			// Make animated when slide change
			init.on('slideChange', function () {
				$(sliderActive1 + ' [data-animation]').removeClass('animated');
			});
			init.on('slideChange', animated);
		}

		animated_swiper(sliderActive1, sliderInit1);
	}}
sliderActive();


// banner active 7 

var swiper = new Swiper(".h7_slider-active-nav", {
	spaceBetween: 0,
	slidesPerView: 1,
	freeMode: true,
	watchSlidesProgress: true,
	breakpoints: {
		550: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3,
		},
		1400: {
			slidesPerView: 4,
			}
		}
});

function sliderActiveTwo() {
	/*------------------------------------
	Slider
	--------------------------------------*/
	if (jQuery(".h7_slider-active").length > 0) {
		let sliderActive2 = '.h7_slider-active';
		let sliderInit2 = new Swiper(sliderActive2, {
			// Optional parameters
			slidesPerView: 1,
			rtl: false,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			speed: 1000,
			effect: 'fade',
			autoplay: {
				delay: 5000,
			},

			// If we need pagination
	        pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".h7_slider-next",
				prevEl: ".h7_slider-prev",
			},
			thumbs: {
				swiper: swiper,
			},

			a11y: false
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + ' [data-animation]').each(function () {
					let anim = $(this).data('animation');
					let delay = $(this).data('delay');
					let duration = $(this).data('duration');

					$(this).removeClass('anim' + anim)
						.addClass(anim + ' animated')
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration
						})
						.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
							$(this).removeClass(anim + ' animated');
						});
				});
			};
			animated();
			// Make animated when slide change
			init.on('slideChange', function () {
				$(sliderActive2 + ' [data-animation]').removeClass('animated');
			});
			init.on('slideChange', animated);
		}

		animated_swiper(sliderActive2, sliderInit2);
	}}
sliderActiveTwo();



// banner  active 9

var h9_swiper = new Swiper(".h9_slider-active-nav", {
	spaceBetween: 0,
	slidesPerView: 1,
	freeMode: true,
	watchSlidesProgress: true,
	breakpoints: {
		550: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 4,
		},
		1400: {
			slidesPerView: 4,
		},
		1600: {
			slidesPerView: 5,
		}
		}
});


function sliderActiveThree() {
	/*------------------------------------
	Slider
	--------------------------------------*/
	if (jQuery(".h9_slider-active").length > 0) {
		let sliderActive3 = '.h9_slider-active';
		let sliderInit3 = new Swiper(sliderActive3, {
			// Optional parameters
			slidesPerView: 1,
			rtl: false,
			slidesPerColumn: 1,
			paginationClickable: true,
			loop: true,
			speed: 1000,
			effect: 'fade',
			crossFade: true,

			autoplay: {
				delay: 5000,
			},

			// If we need pagination
	        pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: ".h7_slider-next",
				prevEl: ".h7_slider-prev",
			},
			thumbs: {
				swiper: h9_swiper,
			},

			a11y: false
		});

		function animated_swiper(selector, init) {
			let animated = function animated() {
				$(selector + ' [data-animation]').each(function () {
					let anim = $(this).data('animation');
					let delay = $(this).data('delay');
					let duration = $(this).data('duration');

					$(this).removeClass('anim' + anim)
						.addClass(anim + ' animated')
						.css({
							webkitAnimationDelay: delay,
							animationDelay: delay,
							webkitAnimationDuration: duration,
							animationDuration: duration
						})
						.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
							$(this).removeClass(anim + ' animated');
						});
				});
			};
			animated();
			// Make animated when slide change
			init.on('slideChange', function () {
				$(sliderActive3 + ' [data-animation]').removeClass('animated');
			});
			init.on('slideChange', animated);
		}

		animated_swiper(sliderActive3, sliderInit3);
	}}
sliderActiveThree();



/* magnificPopup img view */
$('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
$('.popup-video').magnificPopup({
	type: 'iframe'
});

$('.has-nice-select, .contact-form select').niceSelect();
// data background
$("[data-background]").each(function(){
	$(this).css("background-image","url("+$(this).attr("data-background") + ") ")
})
// data width
$("[data-width]").each(function(){
	$(this).css("width",$(this).attr("data-width"))
})
// data background color
$("[data-bg-color]").each(function(){
	$(this).css("background-color",$(this).attr("data-bg-color"))
})
//for menu active class
$('.portfolio_nav button').on('click', function(event) {
	$(this).siblings('.active').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
});

// scrollToTop
$.scrollUp({
	scrollName: 'scrollUp', // Element ID
	topDistance: '300', // Distance from top before showing element (px)
	topSpeed: 300, // Speed back to top (ms)
	animation: 'fade', // Fade, slide, none
	animationInSpeed: 200, // Animation in speed (ms)
	animationOutSpeed: 200, // Animation out speed (ms)
	scrollText: '<i class="icofont icofont-long-arrow-up"></i>', // Text for element
	activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
});

// brand active 
const brandActive = new Swiper(".brand-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	autoplay: {
		delay: 1500,
	},
	breakpoints: {
		0: {
			slidesPerView: 2,
			},
		576: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 4,
		},
		992: {
			slidesPerView: 5,
		},
		1200: {
			slidesPerView: 6
		}
	}
});

// brand active 2
const brandActiveTwo = new Swiper(".brand-active-2", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	autoplay: {
		delay: 1500,
	},
	breakpoints: {
		0: {
			slidesPerView: 2,
			},
		576: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 4,
		},
		992: {
			slidesPerView: 5,
		},
		1200: {
			slidesPerView: 5
		}
	}
});

// category active 
const categoryActive = new Swiper(".category-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: ".category-prev",
		prevEl: ".category-next",
		},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 3,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		},
		1400: {
			slidesPerView: 4
		}
	}
});


// category active 8
const categoryActiveEight = new Swiper(".h8_category-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: ".h8_category-prev",
		prevEl: ".h8_category-next",
		},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 4
		},
		1400: {
			slidesPerView: 5
		}
	}
});

// event active 
const eventActive = new Swiper(".event-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: ".event-prev",
		prevEl: ".event-next",
		},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});

// testimonial active 
const testimonialActive = new Swiper(".testimonial-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	scrollbar: {
		el: '.testimonial-scrollbar',
		draggable: true,
	  },
	navigation: {
		nextEl: ".event-prev",
		prevEl: ".event-next",
		},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 2,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		},
		1400: {
			slidesPerView: 4
		},
		1800: {
			slidesPerView: 5
		}
	}
});


// testimonial active 2 
const testimonialActiveTwo = new Swiper(".h3_testimonial-active", {
	slidesPerView: 2,
	spaceBetween: 30,
	loop: true,
	speed: 2000,

	navigation: {
		nextEl: ".h3_testimonial-prev",
		prevEl: ".h3_testimonial-next",
		},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 2,
		},
		1200: {
			slidesPerView: 2
		},
		1400: {
			slidesPerView: 2
		},
		1800: {
			slidesPerView: 2
		}
	}
});


// testimonial active 6
const testimonialActiveSix = new Swiper(".h6_testimonial-active", {
	slidesPerView: 2,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	navigation: {
		nextEl: ".h6_testimonial-prev",
		prevEl: ".h6_testimonial-next",
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 1,
		},
		992: {
			slidesPerView: 1,
		},
		1200: {
			slidesPerView: 1
		},
		1400: {
			slidesPerView: 1
		},
		1800: {
			slidesPerView: 1
		}
	}
});


// testimonial 9 

var testimonial_thumbs = new Swiper(".h9_testimonial-thumbs", {
	loop: true,
	spaceBetween: 30,
	slidesPerView: 1,
	freeMode: true,
	centeredSlides: true,
	watchSlidesProgress: true,
	allowTouchMove: false,
	breakpoints: {
		0: {
			slidesPerView: 3,
			spaceBetween: 0,
			},
		576: {
			slidesPerView: 3,
		},
		768: {
			slidesPerView: 3,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		},
	}
  });
  var testimonialActiveNine = new Swiper(".h9_testimonial-active", {
	slidesPerView: 1,
	spaceBetween: 0,
	loop: true,
	speed: 2000,
	thumbs: {
	  swiper: testimonial_thumbs,
	},
	pagination: {
		el: ".h9_testimonial-pagination",
		clickable: true,
	},
	navigation: {
		nextEl: ".h9_testimonial-prev",
		prevEl: ".h9_testimonial-next",
	},
});


// testimonial active 10
var h10_testimonial_thumbs = new Swiper(".h10_testimonial-thumbs", {
	loop: true,
	spaceBetween: 0,
	slidesPerView: 2,
	allowTouchMove: false,
	effect: "fade",
	speed: 2000,
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 2,
		},
		1200: {
			slidesPerView: 2
		},
	}
});


const testimonialActiveTen = new Swiper(".h10_testimonial-active", {
	slidesPerView: 2,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	thumbs: {
		swiper: h10_testimonial_thumbs,
	  },
	navigation: {
		nextEl: ".h10_testimonial-prev",
		prevEl: ".h10_testimonial-next",
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 1,
		},
		992: {
			slidesPerView: 1,
		},
		1200: {
			slidesPerView: 1
		},
		1400: {
			slidesPerView: 1
		},
		1800: {
			slidesPerView: 1
		}
	}
});


// teacher active 
const teacherActive = new Swiper(".teacher-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	pagination: {
		el: ".teacher-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});


// teacher active 
const teacherActiveFive = new Swiper(".teacher-active-5", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	pagination: {
		el: ".teacher-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});


// teacher active 6
const teacherActiveSix = new Swiper(".teacher-active-6", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	pagination: {
		el: ".teacher-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});


// teacher active 7
const teacherActiveSeven = new Swiper(".teacher-active-7", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	pagination: {
		el: ".teacher-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});


// teacher active 8
const teacherActiveEight = new Swiper(".teacher-active-8", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,

	navigation: {
		nextEl: ".h8_teacher-prev",
		prevEl: ".h8_teacher-next",
	},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 4
		},
	}
});



// teacher active 9
const teacherActiveNine = new Swiper(".teacher-active-9", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	pagination: {
		el: ".h9_teacher-pagination",
		clickable: true,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});



// Blog active 8
const blogActive = new Swiper(".blog-active-8", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,
	speed: 2000,
	navigation: {
		nextEl: ".h8_blog-prev",
		prevEl: ".h8_blog-next",
	},
		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 2,
		},
		1200: {
			slidesPerView: 3
		},
	}
});


// feature course active
const featureCourseActive = new Swiper(".feature_course-active", {
	slidesPerView: 1,
	spaceBetween: 30,
	loop: true,

		breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 2,
		},
		992: {
			slidesPerView: 3,
		},
		1200: {
			slidesPerView: 3
		}
	}
});



// section-text-active
const otherTextActive = new Swiper(".section-text-active", {
	slidesPerView: 1,
	spaceBetween: 50,
	loop: true,
	speed: 8000,
	freeMode: true,
	allowTouchMove: false,
	disableOnInteraction: true,
	preventInteractionOnTransition:true,
	autoplay: {
		delay: 1,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			},
		576: {
			slidesPerView: 1,
		},
		768: {
			slidesPerView: 1,
		},
		992: {
			slidesPerView: 1,
		},
		1200: {
			slidesPerView: 1
		}
	}
});


// odometer
$('.count_one').appear(function (e) {
	var odo = $(".count_one");
	odo.each(function () {
		var countNumber = $(this).attr("data-count");
		$(this).html(countNumber);
	});
});

// odometer 2
$('.count_two').appear(function (e) {
	var odo = $(".count_two");
	odo.each(function () {
		var countNumber = $(this).attr("data-count");
		$(this).html(countNumber);
	});
});

// WOW active
new WOW().init();

// product quantity in cart
var productQuantity = 1;
// quantity form 
$('.single-product-quantity-box .plus').on('click', function () {
	var selectedInput = $(this).closest('.single-product-quantity-box').find('input');
	productQuantity += 1;
	selectedInput.attr('value', productQuantity);
});
$('.single-product-quantity-box .minus').on('click', function () {
	var selectedInput = $(this).closest('.single-product-quantity-box').find('input');
	productQuantity-=1;
	if(productQuantity < 1) {
		productQuantity = 1;
	}
	selectedInput.attr('value', productQuantity);
});

// InHover Active 
$('.h9_blog-item').on('mouseenter', function () {
	$(this).addClass('active').parent().siblings().find('.h9_blog-item').removeClass('active');
});

// ticker slider 
$("#program-text-ticker").bxSlider({
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 25000,
});


$("#apply-text-ticker").bxSlider({
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 15000,
});


$("#campus-text-ticker").bxSlider({
	mode: 'horizontal',
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 20000,
});


$("#campus-text-ticker-2").bxSlider({
	mode: 'horizontal',
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 20000,
	autoDirection: 'prev',
});


$("#testimonial-text-ticker").bxSlider({
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 25000,
});

$("#about-text-ticker").bxSlider({
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 25000,
});

$("#research-text-ticker").bxSlider({
	minSlides: 1,
	maxSlides: 1,
	slideMargin: 0,
	ticker: true,
	speed: 10000,
});

// $("#apply-text-ticker").bxSlider({
// 	minSlides: 1,
// 	maxSlides: 1,
// 	slideMargin: 0,
// 	ticker: true,
// 	speed: 25000,
// });


const choiceArray = document.querySelectorAll(".h8_course_common")

choiceArray.forEach((card) => {
    card.addEventListener("click", () => {
        choiceArray.forEach((element) => {
            element.classList.remove("expand")
            element.classList.add('small')
        })
        card.classList.remove("small")
        card.classList.add('expand')
    });
});

})(jQuery);
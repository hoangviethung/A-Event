// Function thêm class lazyload vào các thẻ <img> có thuộc tính [data-src]
const addClassLazyload = () => {
	let imgList = document.querySelectorAll("img[data-src]")
	Array.prototype.forEach.call(imgList, function(el) {
		if (el.className.length > 0) {
			el.className = el.className + " lazyload"
		} else {
			el.className = "lazyload"
		}
	});
}
// Script Cho Tab
class Tab {
	selector;
	titleList;
	contentList;

	constructor(selector) {
		this.selector = document.querySelector(selector);
		if (this.selector) {
			this.titleList = this.selector.querySelectorAll("[toggle-for]")
			this.contentList = this.selector.querySelectorAll("[tab-id]")
			this.init();
		}
	}

	runTabWhenClicked() {
		Array.prototype.forEach.call(this.titleList, (element, index) => {
			element.addEventListener("click", e => {
				e.preventDefault();
				const tabTarget = element.attributes["toggle-for"].value;
				const targetDOM = this.selector.querySelector(`[tab-id='${tabTarget}']`);
				element.classList.add("active");
				Array.prototype.forEach.call(this.titleList, (eleClicked, eleClickedIndex) => {
					if (eleClickedIndex != index) {
						eleClicked.classList.remove("active")
					}
				});
				Array.prototype.forEach.call(this.contentList, (tabContentElement) => {
					if (tabContentElement.attributes["tab-id"].value != tabTarget) {
						tabContentElement.style.display = "none"
						tabContentElement.classList.remove("show")
					}
				});
				targetDOM.style.display = "block",
					setTimeout(() => {
						targetDOM.classList.add("show")
					}, 50);
			})
		})
	}

	activeFirstTab() {
		this.titleList[0].click();
	}

	init() {
		this.runTabWhenClicked();
		this.activeFirstTab();
	}
}

// ACTIVE SCROLL MENU
function activeScrollMenu() {
	if ($(window).scrollTop() > 50) {
		$("header").addClass("active")
	} else {
		$("header").removeClass("active")
	}
}

function fixedBoxBooking() {
	let heightProductDetail = $('.product-detail').height();

	if ($(window).scrollTop() > 695) {
		$(".box-booking .overview").slideDown();
		$(".box-booking").addClass("fixed");
	} else {
		$(".box-booking .overview").slideUp();
		$(".box-booking").removeClass("fixed")
	}

	if ($(window).scrollTop() > heightProductDetail - 400) {
		$(".box-booking").removeClass("fixed")
	}
}

// SLIDER HOME BANNER
function sliderHomeBanner() {
	var swiper = new Swiper('.slider-bannerHome', {
		slidesPerView: 1,
		speed: 1000,
		simulateTouch: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		pagination: {
			el: '.slider-bannerHome .swiper-pagination',
		},
		navigation: {
			nextEl: '.slider-bannerHome .swiper-button-next',
			prevEl: '.slider-bannerHome .swiper-button-prev',
		},
	});
}

// SLIDER HOME BANNER
function sliderHotEvent() {
	var swiper = new Swiper('.slider-hotEvent', {
		slidesPerView: 1,
		speed: 1000,
		pagination: {
			el: '.slider-hotEvent .swiper-pagination',
		},
		navigation: {
			nextEl: '.slider-hotEvent .swiper-button-next',
			prevEl: '.slider-hotEvent .swiper-button-prev',
		},
	});
}

// SLIDER CATALOG EVNET
function sliderProductByCatalog() {
	var swiper = new Swiper('.slider-ProductByCatalog', {
		slidesPerView: 3,
		speed: 1000,
		loop: true,
		spaceBetween: 10,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: '.slider-ProductByCatalog .swiper-pagination',
		},
		navigation: {
			nextEl: '.slider-ProductByCatalog .swiper-button-next',
			prevEl: '.slider-ProductByCatalog .swiper-button-prev',
		},
	});
}

// POPUP ABOUT
function popupAbout() {
	$('.home-about [data-fancybox]').fancybox({
		animationEffect: "circular",
		transitionEffect: "zoom-in-out",
		buttons: [
			'zoom',
			'close',
			'share',
			'fullscreen',
		],
		vimeo: {
			color: 'ffd800'
		},
		thumbs: {
			autoStart: true,
		}
	});
}

// SHOW SUB INFORMATION
function showSubInformation() {
	$('header .right-menu figure').click(function(e) {
		e.preventDefault();
		$(this).siblings('#sub-information').addClass('active');
	});

	$('header .right-menu #sub-information .close').click(function(e) {
		e.preventDefault();
		$(this).parent('#sub-information').removeClass('active');
	});
}

// LÂY TÊN FILE
function getNameFile() {
	$('input[type="file"]').change(function(e) {
		var fileName = e.target.files[0].name;
		$(this).parent('.form-input').siblings('p').html(fileName);
	});
}

// ĐẾM SỐ NGƯỢC
function countDownSale() {
	// Set the date we're counting down to
	var countDownDate = new Date("Sep 30, 2020 23:59:59").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {
		// Get today's date and time
		var now = new Date().getTime();

		// Find the distance between now and the count down date
		var distance = countDownDate - now;

		// Time calculations for days, hours, minutes and seconds

		// var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Display the result in the element with id="demo"
		try {
			// document.getElementById("days").innerHTML = days;
			document.getElementById("hours").innerHTML = hours;
			document.getElementById("minutes").innerHTML = minutes;
			document.getElementById("seconds").innerHTML = seconds;
			// If the count down is finished, write some text 
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "EXPIRED";
			}
		} catch (error) {

		}
	}, 1000);
}

// CLICK CHỌN FILE
function chooseFile_Img() {

	$('.button-choose-file').on('click', function() {
		$(this).siblings('input[type=file]').click();
		console.log('OK');
	});

	// ĐỔI ẢNH ĐÃ LẤY ĐƯỢC TỪ URL
	$(".file-img").change(function() {
		readURL(this);
	});

	// LẤY HÌNH ẢNH TỪ INPUT FILE
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$(input).siblings('.button-choose-file').children('img.ofc').attr('src', e.target.result);
				console.log('Đổi hình');
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

}

// CKEditor
function CKEditor() {
	ClassicEditor
		.create(document.querySelector('#editor'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});
}

function showInformationTicket() {
	$('.list-ticket .item').click(function(e) {
		e.preventDefault();

		$('.list-ticket .item').not(this).removeClass('active');
		$(this).toggleClass('active');

		$('.list-ticket .item').not(this).find('.info-ticket').slideUp();
		$(this).find('.info-ticket').slideToggle();
	});
}









$(document).ready(function() {
	objectFitImages("img.ofc"); // Luôn luôn chậy polyfill cho thuôc tính object-fit: cover trên các phiên bản IE >= 9
	addClassLazyload(); // Luôn luôn addClass lazyload cho các hình ảnh có thuộc tính [data-src]
	sliderHomeBanner();
	sliderHotEvent();
	sliderProductByCatalog();
	popupAbout();
	showSubInformation();
	getNameFile();
	countDownSale();
	chooseFile_Img();
	CKEditor();
	showInformationTicket();
	const tabHomeNews = new Tab(".home-news .tab-container");
	const tabClientsPartner = new Tab(".clients-partner .tab-container")
	new WOW().init();
})

$(document).ajaxComplete(function() {
	addClassLazyload();
})

window.addEventListener("scroll", () => {
	activeScrollMenu();
	fixedBoxBooking();
})
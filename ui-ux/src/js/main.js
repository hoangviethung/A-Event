// Function thêm class lazyload vào các thẻ <img> có thuộc tính [data-src]
const addClassLazyload = () => {
	let imgList = document.querySelectorAll("img[data-src]")
	Array.prototype.forEach.call(imgList, function (el) {
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
			el: '.swiper-pagination',
		},
		navigation: {
			nextEl: '.slider-bannerHome .swiper-button-next',
			prevEl: '.slider-bannerHome .swiper-button-prev',
		},
	});
}

// POPUP ABOUT
function popupAbout() {
	$('.about [data-fancybox]').fancybox({
		youtube: {
			controls: true,
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
			el: '.swiper-pagination',
		},
		navigation: {
			nextEl: '.slider-ProductByCatalog .swiper-button-next',
			prevEl: '.slider-ProductByCatalog .swiper-button-prev',
		},
	});
}



$(document).ready(function () {
	objectFitImages("img.ofc"); // Luôn luôn chậy polyfill cho thuôc tính object-fit: cover trên các phiên bản IE >= 9
	addClassLazyload(); // Luôn luôn addClass lazyload cho các hình ảnh có thuộc tính [data-src]
	sliderHomeBanner();
	sliderProductByCatalog();
	activeScrollMenu();
	popupAbout();
	const newsTab = new Tab(".home-news .tab-container")





	new WOW().init();
})

$(document).ajaxComplete(function () {
	addClassLazyload();
})

window.addEventListener("scroll", () => {
	activeScrollMenu();
})
jQuery(function ($) {
	// ハンバーガーメニューとドロワーメニュー
	$(".js-hamburger,.js-drawer").click(function () {
		$(".js-hamburger").toggleClass("is-active");
		$(".js-circle-bg").toggleClass("is-active");
		$(".js-mv__catchcopy").toggleClass("is-active");
		$("body").toggleClass("fixed");
		$(".js-drawer").fadeToggle();
	});

// TOPページのスライダー実装
	const swiper = new Swiper(".swiper", {
		loop: true,
		effect: "fade",
		speed: 3000,
		allowTouchMove: false,
		autoplay: {
			delay: 3000,
		},
	});


	// 診療科目ページのページ内リンクのスクロール（ヘッダー分だけプラス）
	$(document).ready(function () {
		$('a[href^="#"]').on('click', function (event) {
			var target = $(this.getAttribute('href'));
			if (target.length) {
				var headerHeight = $('.header').outerHeight();
				var targetPosition = target.offset().top;
				$('html, body').animate({
					scrollTop: targetPosition - headerHeight - 50
				}, 100);
				event.preventDefault();
			}
		});
	});


})
/*Mr.Huong cearted: 2020-12-25 */
(function($){

	/* jsAnchors
	--------------------------------------------------*/
	var jsAnchors = function(){
		$('a[href^="#"]:not(".tabs a, .nav-item")').on('click', function(event) {
			var hash = '#' + $(this).attr('href').split('#')[1]
			var element = $(hash)
			if (element.length) {
				event.preventDefault();
				history.pushState(hash, undefined, hash)
				$('html, body').animate({scrollTop: element.offset().top}, 1000)
			}
		});
	}
	/* jsEffect
	--------------------------------------------------*/
	var jsEffect = function(){
		$(window).on('scroll load', function(){
			var
			sc = $(window).scrollTop(),
			wh = window.innerHeight;
			$('.fadeup, .fadein, .effect').each(function(index, el) {
				var pos = $(this).offset().top;
				if(pos<sc+wh*0.8){
					$(this).addClass('on');
				}
			});
		});
	}

	/* jsFixed
	--------------------------------------------------*/
	var jsFixed = function(){
		var $header = $('#header');
		var $height = $header.outerHeight();

		$(window).scroll(function() {
			if ( $(window).scrollTop() > 0){
				$header.addClass('fixed');
				$('body').css({
					'padding-top': $height
				});
			} else {
				$header.removeClass('fixed');
				$('body').css({
					'padding-top': 0
				});
			}
		});
	}

	/* jsGnavSub
	--------------------------------------------------*/
	var jsGnavSubs = function(e){
		$('.nav-item').hover(function() {

			var elm = $(this);
			
			elm.parent("li")
				.siblings()
				.removeClass("active");
			
			elm.parent("li").addClass("active");
			
			// コンテンツ本体である.tabContentsを一旦隠す
			elm.closest("#gnav")
				.children(".sub-gnav")
				.removeClass('on');
			
			// htmlにはメニューのa要素href属性に
			// 表示したいボックスのIDを記述する
			// 例） <a href="#tab1"> など
			$(this.hash).addClass('on');
			return false;
		});

		$("html").click(function(){
			$(".sub-gnav").removeClass("on");
		});
		$("header").click(function(e){
			e.stopPropagation();
		});
	}

	/* jsOpenMenuSP
	--------------------------------------------------*/
	var jsMenu = function(){
		$('#open-menu').click(function() {
			$(this).toggleClass('active');
			$('#sp-nav').slideToggle(200);
		});
		$('#close-menu').click(function() {
			$('#sp-nav').slideToggle(200);
			$('#open-menu').removeClass('active');
		});
		$('.sp-nav-parent').click(function() {console.log('aa');
			$(this).removeClass('active');
			if($(this).parent('p').next('.sp-nav-sub').css('display') == 'none') {
				$(this).parent('p').next('.sp-nav-sub').slideDown(200);
				$(this).parent('p').addClass('active');
			}
			else {
				$(this).parent('p').next('.sp-nav-sub').slideUp(200);
			}
		});
	}

	/* jsMenuFooter
	--------------------------------------------------*/
	var jsMenuFooter = function(){
		$('.fnav-parent').click(function() {console.log('aa');
			$(this).removeClass('active');
			if($(this).next('.fnav-sub').css('display') == 'none') {
				$(this).next('.fnav-sub').slideDown(200);
				$(this).addClass('active');
			}
			else {
				$(this).next('.fnav-sub').slideUp(200);
			}
		});
	}

	/* jsTabs
	--------------------------------------------------*/
	var jsTabs = function(){
		$(".tabs a").click(function() {
			
			$('html, body').animate();

			var elm = $(this);

			elm.parent("li")
				.siblings()
				.removeClass("active");

			elm.parent("li").addClass("active");

			elm.parents(".tabs")
				.next()
				.children(".tab-box")
				.hide();

			var i = elm.parent("li").index();
			$('.tab-contents > div:eq('+i+')').fadeIn();
			return false;
		});
	}

	/* jsMainImage
	--------------------------------------------------*/
	var jsMainImage = function(){
		$('.main-page').each(function() {
			var imgSrc = $(this).find('img').attr('src');
			$(this).css('background', 'url("' + imgSrc + '")');
			$(this).find('img').hide();
		});
	}

	/* jsAccodion
	--------------------------------------------------*/
	var jsAccodion = function(){
		$('.open-acc').click (function(){    
			$(this).removeClass('active');
			if($(this).next().css('display') == 'none') {
				$(this).next().slideDown(200);
				$(this).addClass('active');
			}
			else {
				$(this).next().slideUp(200);
			}
		});
	}

	/* Dom Ready
	--------------------------------------------------*/
	jsAnchors();
	jsEffect();
	jsFixed();
	jsGnavSubs();
	jsMenu();
	jsMenuFooter();
	jsTabs();
	jsMainImage();
	jsAccodion();
	$('.matchHeight').matchHeight();
	$('.sec-contact input[type="submit"]').wrap('<button class="btn red submit"></button>').after('<span class="arrow">&nbsp;</span>');
})(jQuery);
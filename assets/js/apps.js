/* Validation form */

validateForm('validation-tuvan');
validateForm('validation-contact');
validateForm('validation-booking');
validateForm('validation-newsletter');
/* Lazys */
NN_FRAMEWORK.Lazys = function () {
	if (isExist($('.lazy'))) {
		var lazyLoadInstance = new LazyLoad({
			elements_selector: '.lazy'
		});
	}
};

/* Load name input file */
NN_FRAMEWORK.loadNameInputFile = function () {
	if (isExist($('.custom-file input[type=file]'))) {
		$('body').on('change', '.custom-file input[type=file]', function () {
			var fileName = $(this).val();
			fileName = fileName.substr(fileName.lastIndexOf('\\') + 1, fileName.length);
			$(this).siblings('label').html(fileName);
		});
	}
};

/* Back to top */
NN_FRAMEWORK.GoTop = function () {
	$(window).scroll(function () {
		if (!$('.scrollToTop').length)
			$('body').append('<div class="scrollToTop"><img src="' + GOTOP + '" alt="Go Top"/></div>');
		if ($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
		else $('.scrollToTop').fadeOut();
	});

	$('body').on('click', '.scrollToTop', function () {
		$('html, body').animate({ scrollTop: 0 }, 800);
		return false;
	});
};

/* Alt images */
NN_FRAMEWORK.AltImg = function () {
	$('img').each(function (index, element) {
		if (!$(this).attr('alt') || $(this).attr('alt') == '') {
			$(this).attr('alt', WEBSITE_NAME);
		}
	});
};

/* Menu */
NN_FRAMEWORK.Menu = function () {
	/* Menu remove empty ul */
	if (isExist($('.menu'))) {
		$('.menu ul li a').each(function () {
			$this = $(this);

			if (!isExist($this.next('ul').find('li'))) {
				$this.next('ul').remove();
				$this.removeClass('has-child');
			}
		});
	}

	/* Menu fixed */
	if(isExist($(".header")))
	{
		$(window).on("scroll load", function () {
			if($(window).scrollTop() >= $(".header").height())
			{
				$(".header").addClass('fixed');
			}
			else
			{
				$(".header").removeClass('fixed');
			}
		}).trigger("scroll");
	}

	/* Mmenu */
	if (isExist($('nav#menu'))) {
		$('nav#menu').mmenu({
			extensions: ['border-full', 'position-left', 'position-front']
		});
	}
};

/* Tools */
NN_FRAMEWORK.Tools = function () {

	if (isExist($('.toolbar'))) {
		$('.footer').css({ marginBottom: $('.toolbar').innerHeight() });
	}
};

/* Popup */
NN_FRAMEWORK.Popup = function () {
	if (isExist($('#popup'))) {
		$('#popup').modal('show');
	}
};

/* Wow */
NN_FRAMEWORK.Wows = function () {
	new WOW().init();
};

/* Ticker scroll */
NN_FRAMEWORK.TickerScroll = function () {
	if (isExist($('.news-scroll'))) {
		$('.news-scroll')
			.easyTicker({
				direction: 'up',
				easing: 'swing',
				speed: 'slow',
				interval: 3500,
				height: '520px',
				visible: 2,
				mousePause: true,
				controls: {
					up: '.news-control#up',
					down: '.news-control#down'
					// toggle: '.toggle',
					// stopText: 'Stop'
				},
				callbacks: {
					before: function (ul, li) {
						// $(li).css('color', 'red');
					},
					after: function (ul, li) {}
				}
			})
			.data('easyTicker');
	}
};

/* Photobox */
NN_FRAMEWORK.Photobox = function () {
	if (isExist($('.album-gallery'))) {
		$('.album-gallery').photobox('a', { thumbs: true, loop: false });
	}
};

/* Comment */
NN_FRAMEWORK.Comment = function () {
	if (isExist($('.comment-page'))) {
		$('.comment-page').comments({
			url: 'api/comment.php'
		});
	}
};

/* DatePicker */
NN_FRAMEWORK.DatePicker = function () {
	if (isExist($('#birthday'))) {
		$('#birthday').datetimepicker({
			timepicker: false,
			format: 'd/m/Y',
			formatDate: 'd/m/Y',
			minDate: '01/01/1950',
			maxDate: TIMENOW
		});
	}
};

/* Search */
NN_FRAMEWORK.Search = function () {
	if (isExist($('.icon-search'))) {
		$('.icon-search').click(function () {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$('.search-grid').stop(true, true).animate({ opacity: '0', width: '0px' }, 200);
			} else {
				$(this).addClass('active');
				$('.search-grid').stop(true, true).animate({ opacity: '1', width: '230px' }, 200);
			}
			document.getElementById($(this).next().find('input').attr('id')).focus();
			$('.icon-search i').toggleClass('fa fa-search fa fa-times');
		});
	}
};

/* Videos */
NN_FRAMEWORK.Videos = function () {
	/* Fancybox */
	// $('[data-fancybox="something"]').fancybox({
	//     // transitionEffect: "fade",
	//     // transitionEffect: "slide",
	//     // transitionEffect: "circular",
	//     // transitionEffect: "tube",
	//     // transitionEffect: "zoom-in-out",
	//     // transitionEffect: "rotate",
	//     transitionEffect: "fade",
	//     transitionDuration: 800,
	//     animationEffect: "fade",
	//     animationDuration: 800,
	//     slideShow: {
	//         autoStart: true,
	//         speed: 3000
	//     },
	//     arrows: true,
	//     infobar: false,
	//     toolbar: false,
	//     hash: false
	// });

	if (isExist($('[data-fancybox="video"]'))) {
		$('[data-fancybox="video"]').fancybox({
			transitionEffect: 'fade',
			transitionDuration: 800,
			animationEffect: 'fade',
			animationDuration: 800,
			arrows: true,
			infobar: false,
			toolbar: true,
			hash: false
		});
	}
};

/* Owl Data */
NN_FRAMEWORK.OwlData = function (obj) {
	if (!isExist(obj)) return false;
	var items = obj.attr('data-items');
	var rewind = Number(obj.attr('data-rewind')) ? true : false;
	var autoplay = Number(obj.attr('data-autoplay')) ? true : false;
	var loop = Number(obj.attr('data-loop')) ? true : false;
	var lazyLoad = Number(obj.attr('data-lazyload')) ? true : false;
	var mouseDrag = Number(obj.attr('data-mousedrag')) ? true : false;
	var touchDrag = Number(obj.attr('data-touchdrag')) ? true : false;
	var animations = obj.attr('data-animations') || false;
	var smartSpeed = Number(obj.attr('data-smartspeed')) || 800;
	var autoplaySpeed = Number(obj.attr('data-autoplayspeed')) || 800;
	var autoplayTimeout = Number(obj.attr('data-autoplaytimeout')) || 5000;
	var dots = Number(obj.attr('data-dots')) ? true : false;
	var responsive = {};
	var responsiveClass = true;
	var responsiveRefreshRate = 200;
	var nav = Number(obj.attr('data-nav')) ? true : false;
	var navContainer = obj.attr('data-navcontainer') || false;
	var navTextTemp =
		"<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>";
	var navText = obj.attr('data-navtext');
	navText =
		nav &&
		navContainer &&
		(((navText === undefined || Number(navText)) && navTextTemp) ||
			(isNaN(Number(navText)) && navText) ||
			(Number(navText) === 0 && false));

	if (items) {
		items = items.split(',');

		if (items.length) {
			var itemsCount = items.length;

			for (var i = 0; i < itemsCount; i++) {
				var options = items[i].split('|'),
					optionsCount = options.length,
					responsiveKey;

				for (var j = 0; j < optionsCount; j++) {
					const attr = options[j].indexOf(':') ? options[j].split(':') : options[j];

					if (attr[0] === 'screen') {
						responsiveKey = Number(attr[1]);
					} else if (Number(responsiveKey) >= 0) {
						responsive[responsiveKey] = {
							...responsive[responsiveKey],
							[attr[0]]: (isNumeric(attr[1]) && Number(attr[1])) ?? attr[1]
						};
					}
				}
			}
		}
	}

	if (nav && navText) {
		navText = navText.indexOf('|') > 0 ? navText.split('|') : navText.split(':');
		navText = [navText[0], navText[1]];
	}

	obj.owlCarousel({
		rewind,
		autoplay,
		loop,
		lazyLoad,
		mouseDrag,
		touchDrag,
		smartSpeed,
		autoplaySpeed,
		autoplayTimeout,
		dots,
		nav,
		navText,
		navContainer: nav && navText && navContainer,
		responsiveClass,
		responsiveRefreshRate,
		responsive
	});

	if (autoplay) {
		obj.on('translate.owl.carousel', function (event) {
			obj.trigger('stop.owl.autoplay');
		});

		obj.on('translated.owl.carousel', function (event) {
			obj.trigger('play.owl.autoplay', [autoplayTimeout]);
		});
	}

	if (animations && isExist(obj.find('[owl-item-animation]'))) {
		var animation_now = '';
		var animation_count = 0;
		var animations_excuted = [];
		var animations_list = animations.indexOf(',') ? animations.split(',') : animations;

		obj.on('changed.owl.carousel', function (event) {
			$(this).find('.owl-item.active').find('[owl-item-animation]').removeClass(animation_now);
		});

		obj.on('translate.owl.carousel', function (event) {
			var item = event.item.index;

			if (Array.isArray(animations_list)) {
				var animation_trim = animations_list[animation_count].trim();

				if (!animations_excuted.includes(animation_trim)) {
					animation_now = 'animate__animated ' + animation_trim;
					animations_excuted.push(animation_trim);
					animation_count++;
				}

				if (animations_excuted.length == animations_list.length) {
					animation_count = 0;
					animations_excuted = [];
				}
			} else {
				animation_now = 'animate__animated ' + animations_list.trim();
			}
			$(this).find('.owl-item').eq(item).find('[owl-item-animation]').addClass(animation_now);
		});
	}
};

/* Owl Page */
NN_FRAMEWORK.OwlPage = function () {
	if (isExist($('.owl-page'))) {
		$('.owl-page').each(function () {
			NN_FRAMEWORK.OwlData($(this));
		});
	}
};

/* Dom Change */
NN_FRAMEWORK.DomChange = function () {
	/* Video Fotorama */
	$('#video-fotorama').one('DOMSubtreeModified', function () {
		$('#fotorama-videos').fotorama();
	});

	/* Video Select */
	$('#video-select').one('DOMSubtreeModified', function () {
		$('.listvideos').change(function () {
			var id = $(this).val();
			$.ajax({
				url: 'api/video.php',
				type: 'POST',
				dataType: 'html',
				data: {
					id: id
				},
				beforeSend: function () {
					holdonOpen();
				},
				success: function (result) {
					$('.video-main').html(result);
					holdonClose();
				}
			});
		});
	});

	/* Chat Facebook */
	$('#messages-facebook').one('DOMSubtreeModified', function () {
		$('.js-facebook-messenger-box').on('click', function () {
			$('.js-facebook-messenger-box, .js-facebook-messenger-container').toggleClass('open'),
				$('.js-facebook-messenger-tooltip').length && $('.js-facebook-messenger-tooltip').toggle();
		}),
			$('.js-facebook-messenger-box').hasClass('cfm') &&
				setTimeout(function () {
					$('.js-facebook-messenger-box').addClass('rubberBand animated');
				}, 3500),
			$('.js-facebook-messenger-tooltip').length &&
				($('.js-facebook-messenger-tooltip').hasClass('fixed')
					? $('.js-facebook-messenger-tooltip').show()
					: $('.js-facebook-messenger-box').on('hover', function () {
							$('.js-facebook-messenger-tooltip').show();
					  }),
				$('.js-facebook-messenger-close-tooltip').on('click', function () {
					$('.js-facebook-messenger-tooltip').addClass('closed');
				}));
		$('.search_open').click(function () {
			$('.search_box_hide').toggleClass('opening');
		});
	});
};
NN_FRAMEWORK.jsToggle = function () {
	if($('.js-faq-link').length) {
		$('.js-faq-link').on('click', function () {
			$(this).toggleClass('is-active');
			$(this).parents('.js-faq').toggleClass('is-active');
			$(this).siblings('.js-faq-content').slideToggle();
		})
	}
}
/* Toc */
NN_FRAMEWORK.Toc = function(){
	// if(isExist($(".toc-list")))
	// {
	// 		$(".toc-list").toc({
	// 				content: "div#toc-content",
	// 				headings: "h2,h3,h4"
	// 		});

	// 		if(!$(".toc-list li").length) $(".meta-toc").hide();

	// 		$('.toc-list').find('a').click(function(){
	// 				var x = $(this).attr('data-rel');
	// 				goToByScroll(x);
	// 		});
	// }

	if($(".toc-list").length)
    {
		$('#toc-content h1,#toc-content h2,#toc-content h3').each(function(){
			$(this).attr("id",changeToSlug($(this).text()));
		})
        $(".toc-list").toc({
            content: "div#toc-content",
            headings: "h2,h3,h4"
        });

        if(!$(".toc-list li").length){
        	$(".meta-toc").hide();
        }else{
        	if($(window).width() > 768){
        		$(".toc-list").before("<div class='toc_title'>MỤC LỤC <span>[Ẩn]</span></div>");
        	}else{
        		$(".toc-list").before("<div class='toc_title'>MỤC LỤC <span>[Hiện]</span></div>");
        	}

		};

        $('.toc-list').find('a').click(function(){
			id = $(this).attr("href").substring($(this).attr("href").indexOf('#')+1);
            goToByScroll(id);
        });
		$(".box-readmore .toc_title span").click(function(){
			var $o  = $(this);
			$(this).parents(".box-readmore").find(".toc-list").slideToggle(function(){
				$ht = $o.html();
			if($ht == "[Ẩn]"){
				$o.html("[Hiện]");
			}else{
				$o.html("[Ẩn]");
			}});

		})
    }

};

/* Ready */
$(document).ready(function () {
	NN_FRAMEWORK.Toc();
	NN_FRAMEWORK.Lazys();
	NN_FRAMEWORK.Tools();
	NN_FRAMEWORK.Popup();
	NN_FRAMEWORK.Wows();
	NN_FRAMEWORK.AltImg();
	// NN_FRAMEWORK.GoTop();
	NN_FRAMEWORK.Menu();
	NN_FRAMEWORK.OwlPage();
	NN_FRAMEWORK.Videos();
	NN_FRAMEWORK.Photobox();
	NN_FRAMEWORK.Comment();
	NN_FRAMEWORK.Search();
	NN_FRAMEWORK.DomChange();
	NN_FRAMEWORK.TickerScroll();
	// NN_FRAMEWORK.DatePicker();
	NN_FRAMEWORK.loadNameInputFile();
	NN_FRAMEWORK.jsToggle();
	$(".booknow").click(function () {
		$(".box-form").addClass("is-active");
	});
	$(".btn-close").click(function () {
		$(".box-form").removeClass("is-active");
	});
})

$(window).on("load resize", function (e) {
  $('a[href^="#"]:not([href="#"])').on("click", function (e) {
    var widthwin = $(window).width();
    var headerh = 64;
    if (widthwin < 768) headerh = 55;
    e.preventDefault();
    var target = this.hash,
      $target = $(target),
      pos = $target.offset().top - headerh;
    if ($target.length) $("html, body").stop().animate({ scrollTop: pos }, 500);
  });
});

$(function (e) {
  var widthwin = $(window).width();
  var headerh = 64;
  if (widthwin < 768) headerh = 55;
  var str = location.hash;
  if (str != "" && $(str).length != 0) {
    var n = str.replace("_temp", "");
    setTimeout(function () {
      var pos = $(n).offset().top - headerh;
      $("html,body").scrollTop(pos);
    }, 300);
  }
});
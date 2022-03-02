document.addEventListener("DOMContentLoaded", function() {
    var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

    if ("IntersectionObserver" in window) {
      let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            let lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.srcset = lazyImage.dataset.srcset;
            lazyImage.classList.remove("lazy");
            lazyImageObserver.unobserve(lazyImage);
          }
        });
      });

      lazyImages.forEach(function(lazyImage) {
        lazyImageObserver.observe(lazyImage);
      });
    } else {
      lazyImages.forEach(function(e) {
        e.src = e.dataset.src;
      });
    }
});

jQuery(document).ready(function($){

	//タッチホバー
	var linkTouchStart = function(){
	    thisAnchor = $(this);
	    touchPos = thisAnchor.offset().top;
	    moveCheck = function(){
	        nowPos = thisAnchor.offset().top;
	        if(touchPos == nowPos){
	            thisAnchor.addClass("hover");
	        }
	    }
	    setTimeout(moveCheck,100);
	}
	var linkTouchEnd = function(){
	    thisAnchor = $(this);
	    hoverRemove = function(){
	        thisAnchor.removeClass("hover");
	    }
	    setTimeout(hoverRemove,500);
	}

	$(document).on('touchstart mousedown','a',linkTouchStart);
	$(document).on('touchend mouseup','a',linkTouchEnd);

    //スムーススクロール
    // var offsetY = 0;
    // var time = 500;
    // $('a[href^=#]').click(function() {
    //     var target = $(this.hash);
    //     if (!target.length) return ;
    //     var targetY = target.offset().top+offsetY;
    //     $('html,body').animate({scrollTop: targetY}, time, 'swing');
    //     window.history.pushState(null, null, this.hash);
    //     return false;
    // });

    //ハンバーガーメニュー
    $('.menu-trigger').on('click', function(){
        $(this).toggleClass('active');
        $('header .inner').toggleClass('active');
        $('.menu-close').toggleClass('active');
        $('.sp-nav').toggleClass('opened');
    });

    //スクロール関連
    $(window).scroll(function () {
    	//フィックスドヘッダー
        if ($(this).scrollTop() > 30) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
        //トップに戻るボタン
        if ($(this).scrollTop() > 100) {
            $('#page-top').addClass('appear');
        } else {
            $('#page-top').removeClass('appear');
        }
    });

    //レスポンシブ制御
    if( window.matchMedia("(min-width: 769px)").matches ){
        $('.sp').remove();
    }
    if( window.matchMedia("(max-width: 768px)").matches ){
        $('.pc').remove();
    }

    //トップリクルート部分アニメーション
    $(function() {
        var scrolled = $(window).scrollTop();
        var point = $('.recruit');
        var offsetTop = point.offset().top - 600;
        var startAnimation = function() {
            if ($(window).scrollTop() > offsetTop) {
                $('.recruit-img').addClass('appear');
            } else {}
        }
        $(window).scroll(startAnimation);
        $('body').bind('touchmove', startAnimation);
    });

    //pc member lisg
    $(document).on('click', '.member-list li', function(){
        $('.member-list li').removeClass('active');
        $('.member-list li').removeClass('related');

        var index = $('.member-list li').index(this);
        var remainder = (index+1)%3;

        $('.member-list li').eq(index).addClass('active');

        if(remainder==0) {
            $('.member-list li').eq(index-1).addClass('related');
            $('.member-list li').eq(index-2).addClass('related');
        } else if(remainder==1) {
            $('.member-list li').eq(index+1).addClass('related');
            $('.member-list li').eq(index+2).addClass('related');
        } else if(remainder==2) {
            $('.member-list li').eq(index+1).addClass('related');
            $('.member-list li').eq(index-1).addClass('related');
        }
    });

    //pc member moreボタンが押されたときにメンバーリストを全表示する
    $(document).on('click', '.more-btn', function(){
        $('.member-list').removeClass('h48');
        $(this).parents('.more-btn-div').addClass('hidden');
    });


    $(document).on('click', '.member-list li.active', function(){
        $('.member-list li').removeClass('active');
        $('.member-list li').removeClass('related');
    });


    // sp member list
    $(document).on('click', '.sp-member-list li', function(){
        $('.sp-member-list li').removeClass('active');
        var index = $('.sp-member-list li').index(this);
        $('.sp-member-list li').eq(index).addClass('active');
    });

     $(document).on('click', '.sp-member-list li.active', function(){
        $('.sp-member-list li').removeClass('active');
    });


    //ポップアップバナー（LP遷移）の非表示
    // PC
    $('a.popup-banner-close-btn').on('click',function(){
        $(this).parent('.popup-banner').hide();
    });
    // SP
    $('a.sp-popup-banner-close-btn').on('click',function(){
        $(this).parent('.sp-popup-banner').hide();
    });
});

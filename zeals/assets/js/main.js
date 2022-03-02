$(function(){

  // scroll
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var headerHeight = $('.p-header').height();
    var position = target.offset().top - headerHeight;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  // drawer menu
  $('※トリガーのクラス名※').click(function() {
    $('html').toggleClass('is-open');
    $('.p-drawer').toggleClass('is-show');
  });
});

$(window).on('load', function(){
});

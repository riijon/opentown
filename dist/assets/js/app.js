var scrollElm = (function () {
  if ('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if (navigator.userAgent.indexOf('WebKit') !== -1) {
    return document.body;
  }
  return document.documentElement;
})();

$('a[href^="#"]').not('.noscroll').on('click', function () {
  var speed = 800;
  var easing = 'swing';
  var href = $(this).attr("href");
  $(scrollElm).animate({
    scrollTop: $(href === "#" ? 'html' : href).offset().top - 100
  }, speed, easing);
  return false;
});

// modal
var buttonId = 0;

$('.modal-button').click(function () {
  buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass('six');
  $('body').addClass('modal-active');
  $('.' + buttonId).css('display', 'inline-block');
  return buttonId;
});

$('#modal-container').click(function () {
  console.log(buttonId);
  $('.' + buttonId).css('display', 'none');
  $(this).addClass('out');
  $('body').removeClass('modal-active');
});

// SP modal menu
$(function () {
  var $body = $('body');

  //開閉用ボタンをクリックでクラスの切替え
  $('#js__btn').on('click', function () {
    $body.toggleClass('open');
  });

  //メニュー名以外の部分をクリックで閉じる
  $('#js__nav').on('click', function () {
    $body.removeClass('open');
  });
});
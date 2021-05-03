$(window).on('scroll', function () {
  var scrolled = $(window).scrollTop();
  var height = $(window).height();
  if (scrolled < height) {
    $('.full-image').css({
      'top': -scrolled * .2
    });
  }
});
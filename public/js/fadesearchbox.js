$(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.search-box').fadeOut();
    } else {
      $('.search-box').fadeIn();
    }
});
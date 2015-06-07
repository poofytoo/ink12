$(function() {
  // Load foundation JS Libraries
  $(document).foundation();

  console.log($('path'))
  $('path').html('hi')
  // Sticky Header
  $(document).on('scroll', function() {
    var s = $(document).scrollTop()
    if (s > 70) {
      if (!$('header').hasClass('sticky-small')) {
        $('header').addClass('sticky-small')
        $('.nav-bar').addClass('sticky-small')
        $('.content').addClass('sticky-small')
      }
    } else {
      if ($('header').hasClass('sticky-small')) {
        $('.content').removeClass('sticky-small')
        $('.nav-bar').removeClass('sticky-small')
        $('header').removeClass('sticky-small')
      }
    }
  })
})
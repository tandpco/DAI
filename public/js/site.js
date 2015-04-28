(function() {
  $(function() {
    var tabScroll;
    $('.close').on('click', function() {
      return $('#site-navigation').removeClass('toggled');
    });
    $('.slider').flipster(function() {
      return {
        itemContainer: 'ul',
        itemSelector: 'li',
        start: 'center',
        enableMousewheel: false
      };
    });
    $('.coverflow').coverflow({
      duration: 'slow',
      index: 2,
      visible: 'density'
    });
    $('.arrow').on('click', function(event) {
      var i, l, n, t;
      t = $(event.target);
      i = $('.coverflow').coverflow('index');
      l = $('.coverflow .cover').length;
      n = 0;
      if (t.hasClass('left')) {
        n = i === 0 ? 0 : 1;
      } else if (t.hasClass('right')) {
        n = i === l - 1 ? 0 : -1;
      }
      $('.coverflow').coverflow('index', i - n);
    });
    tabScroll = function() {
      var width;
      width = null;
      $('.tabs li').each(function() {
        width = width + $(this).outerWidth();
        return console.log(width);
      });
      $('.tabs').css({
        left: 0,
        right: 0,
        width: width
      });
      return $('.rail').css({
        width: width
      });
    };
    if ($(window).width() < 768) {
      return tabScroll();
    }
  });

}).call(this);

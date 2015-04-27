(function() {
  $(function() {
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
    return $('.arrow').on('click', function(event) {
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
  });

}).call(this);

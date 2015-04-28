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
    return $('.tab').on('click', function(event) {
      var i, p, t;
      t = $(event.target);
      p = t.parent('li');
      i = t.attr('id');
      event.preventDefault();
      $('.tabs .selected').removeClass('selected');
      p.addClass('selected');
      $('.tab-panel').addClass('hidden');
      $('.' + i).removeClass('hidden');
    });
  });

}).call(this);

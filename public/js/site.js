(function() {
  $(function() {
    var columnSelector, elementHeights, maxHeight, tabScroll;
    $('.close').on('click', function() {
      return $('#site-navigation').removeClass('toggled');
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
      tabScroll();
    }
    $('.tab').on('click', function(event) {
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
    elementHeights = void 0;
    maxHeight = void 0;
    columnSelector = $('.program-column p');
    elementHeights = $(columnSelector).map(function() {
      return $(this).height();
    }).get();
    maxHeight = Math.max.apply(null, elementHeights);
    return $(columnSelector).height(maxHeight);
  });

}).call(this);

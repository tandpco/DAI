(function() {
  $(function() {
    $('.close').on('click', function() {
      return $('#site-navigation').removeClass('toggled');
    });
    return $('.slider').flipster(function() {
      return {
        itemContainer: 'ul',
        itemSelector: 'li',
        start: 'center',
        enableMousewheel: false
      };
    });
  });

}).call(this);

(function() {
  $(function() {
    var equalizer, getParameterByName, tabScroll;
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
    $('.tabs li').on('click', function(e) {
      var target;
      target = $(this).attr('id');
      $(this).addClass('active').siblings('.active').removeClass('active');
      return $('.' + target).addClass('in').siblings('.in').removeClass('in');
    });
    $('.banner').unslider({
      dots: true
    });
    $('#overview').on('click', function() {
      return $('.banner').unslider({
        dots: true,
        fluid: true
      });
    });
    equalizer = function(selector) {
      var elementHeights, maxHeight;
      elementHeights = void 0;
      maxHeight = void 0;
      elementHeights = $(selector).map(function() {
        return $(this).height();
      }).get();
      maxHeight = Math.max.apply(null, elementHeights);
      return $(selector).height(maxHeight);
    };
    equalizer($('.program-column p'));
    getParameterByName = function(name) {
      var regex, results;
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
      results = regex.exec(location.search);
      if (results === null) {
        return '';
      } else {
        return decodeURIComponent(results[1].replace(/\+/g, ' '));
      }
    };
    $('.story').on('click', function() {
      var html, postID, url;
      postID = $(this).data('post');
      url = $(this).data('url');
      html = $('.story-roll').html();
      $('.loading').fadeIn();
      return $('.stories .story-holder').load('/index.php/hello-world article.post', function() {
        window.history.pushState('Story', 'Story', '?post=' + postID);
        $('.story-holder').addClass('in');
        $('.story-holder').append('<a href="#" class="show__stories btn btn-outline inline-block small">Back to Stories</a>');
        $('.story-roll').hide();
        $('.loading').hide();
        return $('.show__stories').on('click', function() {
          window.history.pushState('Home', 'Home', '?stories');
          $('.story-holder').removeClass('in').html('');
          return $('.story-roll').fadeIn();
        });
      });
    });
    $(window).on('load', function() {
      if (window.location.href.indexOf('location') > -1 && window.location.href.indexOf('post') > -1) {
        $('.tabs').find('.active').removeClass('active');
        $('.tabs').find('#stories').addClass('active');
        $('.tab.in').removeClass('in');
        $('.stories').addClass('in');
        return $('.stories .story-holder').load('/index.php/hello-world article.post', function() {
          window.history.pushState('Story', 'Story', '?post=' + getParameterByName('post'));
          $('.story-holder').addClass('in');
          $('.story-holder').append('<a href="#" class="show__stories btn btn-outline inline-block small">Back to Stories</a>');
          $('.story-roll').hide();
          $('.loading').hide();
          return $('.show__stories').on('click', function() {
            window.history.pushState('Home', 'Home', '?stories');
            $('.story-holder').removeClass('in').html('');
            return $('.story-roll').fadeIn();
          });
        });
      }
    });
    return $('.view__story').on('click', function() {
      if (window.location.href.indexOf('location') > -1) {
        $('.loading').fadeIn();
        return $('.stories .story-holder').load('/index.php/hello-world article.post', function() {
          window.history.pushState('Story', 'Story', '?post=');
          $('#stories').addClass('active').siblings('.active').removeClass('active');
          $('.stories').addClass('in').siblings('.in').removeClass('in');
          $('.story-holder').addClass('in');
          $('.story-holder').append('<a href="#" class="show__stories btn btn-outline inline-block small">Back to Stories</a>');
          $('.story-roll').hide();
          $('.loading').hide();
          return $('.show__stories').on('click', function() {
            window.history.pushState('Home', 'Home', '?stories');
            $('.story-holder').removeClass('in').html('');
            return $('.story-roll').fadeIn();
          });
        });
      }
    });
  });

}).call(this);

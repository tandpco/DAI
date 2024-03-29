$ ->
  # Hide Site Menu
  $('.close').on 'click', ->
    $('#site-navigation').removeClass 'toggled'

  # Coverflow Settings
  $('.coverflow').coverflow
    duration: 'slow'
    index: 2
    visible: 'density'

  # Coverflow Controls
  $('.arrow').on 'click', (event) ->
    t = $(event.target)
    i = $('.coverflow').coverflow('index')
    l = $('.coverflow .cover').length
    n = 0
    if t.hasClass('left')
      n = if i == 0 then 0 else 1
    else if t.hasClass('right')
      n = if i == l - 1 then 0 else -1
    $('.coverflow').coverflow 'index', i - n
    return

  # Accordion Function
  $('.accordion').on 'click', (event) ->
    bool = false
    href = undefined
    et = undefined
    target = undefined
    icon = undefined
    et = $(event.target)
    if et.hasClass('accordion-title')
      target = et
      icon = et.parent('.accordion-panel').prev('.accordion-icon')
    else if et.hasClass('accordion-icon')
      target = et.next('.accordion-panel').children('.accordion-title')
      icon = et
    if target
      event.preventDefault()
      href = target.attr('href')
      bool = !target.hasClass('active')
      $('.accordion .active').removeClass 'active'
      $('.accordion .open').slideUp('300').removeClass 'open'
      if bool
        target.addClass 'active'
        icon.addClass 'active'
        $('.accordion ' + href).slideDown('300').addClass 'open'
    return


  # Responsive function for Tabs
  tabScroll = ->
    width = null
    $('.tabs li').each ->
      width = (width + $(this).outerWidth())
      console.log width
    $('.tabs').css
      left: 0
      right: 0
      width: width
    $('.rail').css
      width: width

  # Tab Sorting Function
  $('.tab').on 'click', (event) ->
    t = $(event.target)
    p = t.parent('li')
    i = t.attr('id')
    event.preventDefault()
    $('.tabs .selected').removeClass 'selected'
    p.addClass 'selected'
    $('.tab-panel').addClass 'hidden'
    $('.' + i).removeClass 'hidden'
    return

  # Dan's Tabs
  $('.tabs li').on 'click', (e)->
    target = $(this).attr('id')
    $(this).addClass('active').siblings('.active').removeClass 'active'
    $('.' + target).addClass('in').siblings('.in').removeClass 'in'

  # Call Unslider
  $('.banner').unslider
    dots: true

  $('#overview').on 'click', ->
    # Call Unslider
    $('.banner').unslider
      dots: true
      fluid: true

  equalizer = (selector)->
    # Column Equalizer
    elementHeights = undefined
    maxHeight = undefined
    elementHeights = $(selector).map(->
      $(this).height()
    ).get()
    maxHeight = Math.max.apply(null, elementHeights)
    $(selector).height maxHeight

  equalizer($('.program-column p'))

  getParameterByName = (name) ->
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]')
    regex = new RegExp('[\\?&]' + name + '=([^&#]*)')
    results = regex.exec(location.search)
    if results == null then '' else decodeURIComponent(results[1].replace(/\+/g, ' '))

  # CLEAN THESE UP
  $('.story').on 'click', ->
    postID = $(this).data('post')
    url    = $(this).data('url')
    html   = $('.story-roll').html()
    $('.loading').fadeIn()
    $('.stories .story-holder').load '/index.php/hello-world #main', ->
      window.history.pushState('Story', 'Story', '?post=' + postID)
      $('.story-holder').addClass 'in'
      $('.story-holder').append '<a href="#" class="show__stories btn btn-outline inline-block small">Back to Stories</a>'
      $('.story-roll').hide()
      $('.loading').hide()
      rrssbInit()
      $('.show__stories').on 'click', ->
        window.history.pushState('Home', 'Home', '?stories')
        $('.story-holder').removeClass('in').html ''
        $('.story-roll').fadeIn()

  $(window).on 'load', ->
    if window.location.href.indexOf('location') > -1 && window.location.href.indexOf('post') > -1
      $('.tabs').find('.active').removeClass 'active'
      $('.tabs').find('#stories').addClass 'active'
      $('.tab.in').removeClass 'in'
      $('.stories').addClass 'in'
      $('.stories .story-holder').load '/index.php/hello-world #main', ->
        window.history.pushState('Story', 'Story', '?post=' + getParameterByName('post'))
        $('.story-holder').addClass 'in'
        $('.story-holder').append '<a href="#" class="show__stories btn btn-outline inline-block small">Back to Stories</a>'
        $('.story-roll').hide()
        $('.loading').hide()
        rrssbInit()
        $('.show__stories').on 'click', ->
          window.history.pushState('Home', 'Home', '?stories')
          $('.story-holder').removeClass('in').html ''
          $('.story-roll').fadeIn()

  $('.view__story').on 'click', ->
    if window.location.href.indexOf('location') >-1
      $('.loading').fadeIn()
      $('.stories .story-holder').load '/index.php/hello-world #main', ->
        window.history.pushState('Story', 'Story', '?post=')
        $('#stories').addClass('active').siblings('.active').removeClass 'active'
        $('.stories').addClass('in').siblings('.in').removeClass 'in'
        $('.story-holder').addClass 'in'
        $('.story-holder').append '<a href="#" class="show__stories btn btn-outline inline-block small">Back to Stories</a>'
        $('.story-roll').hide()
        $('.loading').hide()
        rrssbInit()
        $('.show__stories').on 'click', ->
          window.history.pushState('Home', 'Home', '?stories')
          $('.story-holder').removeClass('in').html ''
          $('.story-roll').fadeIn()

  # Blog Functions
  $(window).on 'load resize', ->
    if document.body.className.match('blog')
      height = $(window).height() - ($('#masthead').height() + $('#colophon').height())
      console.log height
      if document.getElementsByClassName('posts-1').length
        if $(window).height() > $('.post').height()
          $('.post').css
            height: height
            display: 'table'
            verticalAlign: 'bottom'
            width: '100%'
        else
          $('.post').css
            height: auto
      else if $('.posts-2').length
        console.log 'Test'
        if $(window).height() > $('.posts').height()
          $('.post').each ->
            $(this).css
              height: (height / 2)
              display: 'table'
              verticalAlign: 'bottom'
              width: '100%'
        else
          $('.post').each ->
            $(this).css
              height: 'auto'
              width: 'auto'

  document.getElementById('map').ondragstart = ->
    false
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
	if ($(window).width() < 768)
		tabScroll()

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

	# Column Equalizer
	elementHeights = undefined
	maxHeight = undefined
	columnSelector = $('.program-column p')
	elementHeights = $(columnSelector).map(->
	  $(this).height()
	).get()
	maxHeight = Math.max.apply(null, elementHeights)
	$(columnSelector).height maxHeight

$ ->
	$('.close').on 'click', ->
		$('#site-navigation').removeClass 'toggled'

	$('.slider').flipster ->
		itemContainer: 'ul'
		itemSelector: 'li'
		start: 'center'
		enableMousewheel: false
	$('.coverflow').coverflow
		duration: 'slow'
		index: 2
		visible: 'density'
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
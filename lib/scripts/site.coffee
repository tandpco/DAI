$ ->
	$('.close').on 'click', ->
		$('#site-navigation').removeClass 'toggled'

	$('.slider').flipster ->
		itemContainer: 'ul'
		itemSelector: 'li'
		start: 'center'
		enableMousewheel: false
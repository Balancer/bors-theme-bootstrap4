$(".carousel").swipe({
	swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
		if (direction == 'left') $(this).carousel('next');
		if (direction == 'right') $(this).carousel('prev');
	},
	click: function(event, target) {
		$(target).click(); //nothing happen
	},
	allowPageScroll:"vertical",
	excludedElements: "label, button, input, select, textarea, .noSwipe",
	threshold: 75
});

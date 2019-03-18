function cycleBackgrounds(){
	var index = 0;

	$imageEls = $('.slider .main-slider .slide'); // Get the images to be cycled.

	setInterval(function(){
		// Get the next index.  If at end, restart to the beginning.
		index = index + 1 < $imageEls.length ? index + 1 : 0;
		// Show the next image.
		$imageEls.eq(index).addClass('show');
		// Hide the previous image.
		$imageEls.eq(index - 1).removeClass('show');
	}, 6000);
};
function cycleBackgroundsPokoje(){
	var indexP = 0;

	$imageElsP = $('.slider .half-page-img-col .slide'); // Get the images to be cycled.

	setInterval(function(){
		// Get the next index.  If at end, restart to the beginning.
		indexP = indexP + 1 < $imageElsP.length ? indexP + 1 : 0;
		// Show the next image.
		$imageElsP.eq(indexP).addClass('show');
		// Hide the previous image.
		$imageElsP.eq(indexP - 1).removeClass('show');
	}, 4000);
};
	// Document Ready.
	$(function(){
		cycleBackgrounds();
		cycleBackgroundsPokoje();
	});
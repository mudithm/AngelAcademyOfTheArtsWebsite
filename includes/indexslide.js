$(document).ready(function()
{
	var currSlide = $('#gallery').children('a').first();
	lastSlide = $('#gallery').children('a').last();
	var nextSlide;

	currSlide.show();

	setInterval(function()	
	{
		if(currSlide.html() == lastSlide.html())
		{
			nextSlide = $('#gallery').children('a').first();
		}
		else
		{
			nextSlide = currSlide.next('a');
		}

		if(nextSlide.children().first().width() < currSlide.children().first().width())
		{
			currSlide.css("z-index", "1");
			nextSlide.css("z-index", "0");
			nextSlide.show(0,function(){currSlide.fadeOut(1000,function(){currSlide = nextSlide})});
		}

		else
		{	
			currSlide.css("z-index", "0");
			nextSlide.css("z-index:", "1");
			nextSlide.fadeIn(1000,function(){currSlide.hide(0,function(){currSlide = nextSlide})});
		}

	},5000);
});
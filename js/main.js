// Some useful variables

var standalone = window.navigator.standalone,
    userAgent = window.navigator.userAgent.toLowerCase(),
    safari = /safari/.test( userAgent ),
    ios = /iphone|ipod|ipad/.test( userAgent ),
    windowWidth = $(window).width(), //retrieve current window width
    windowHeight = $(window).height(), //retrieve current window height
    documentWidth = $(document).width(), //retrieve current document width
    documentHeight = $(document).height(), //retrieve current document height
    vScrollPosition = $(document).scrollTop(), //retrieve the document scroll ToP position
    hScrollPosition = $(document).scrollLeft();//retrieve the document scroll Left position

$(document).ready(function() {
	// your scripts go here
});

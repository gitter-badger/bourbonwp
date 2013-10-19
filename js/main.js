// Some useful variables (remember you can also use the helpers provided by device.js)
var windowWidth = $(window).width(), //retrieve current window width
    windowHeight = $(window).height(), //retrieve current window height
    documentWidth = $(document).width(), //retrieve current document width
    documentHeight = $(document).height(), //retrieve current document height
    vScrollPosition = $(document).scrollTop(), //retrieve the document scroll ToP position
    hScrollPosition = $(document).scrollLeft();//retrieve the document scroll Left position

// Used to open a link when clicking on a div containing a link - http://css-tricks.com/snippets/jquery/make-entire-div-clickable/
$(".clickable-box").click(function(){
     window.location=$(this).find("a").attr("href"); 
     return false;
});

$(document).ready(function() {
	
});

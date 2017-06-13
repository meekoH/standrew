$('.banner').flexslider({
	animation: "fade",
	slideshowSpeed: 7000,
	pauseOnAction: false,
	pauseOnHover: false,
	controlNav: true,
	directionNav: false,
	randomize: false,
	startAt: 0
});
$('#jeff-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    sync: "#jeff-carousel",
    smoothHeight: true
});
$('#jeff-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#jeff-slider'
});
$('#history-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
	nextText: "",
    sync: "#history-carousel",
    smoothHeight: true
});
$('#history-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
	nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#history-slider'
});
$('#chancel-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
	nextText: "",
    sync: "#chancel-carousel",
    smoothHeight: true
});
$('#chancel-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
	nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#chancel-slider'
});
$('#garden-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    sync: "#garden-carousel",
    smoothHeight: true
});
$('#garden-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#garden-slider'
});
$('#stained-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    sync: "#stained-carousel",
    smoothHeight: true
});
$('#stained-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#stained-slider'
});
$('#service-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    sync: "#service-carousel",
    smoothHeight: true
});
$('#service-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#service-slider'
});
$('#communion-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    sync: "#communion-carousel",
    smoothHeight: true
});
$('#communion-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#communion-slider'
});
$('#christmas-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    sync: "#christmas-carousel",
    smoothHeight: true
});
$('#christmas-carousel').flexslider({
    animation: "slide",
    controlNav: true,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    itemWidth: 100,
    itemMargin: 5,
    asNavFor: '#christmas-slider'
});
$('#cabane-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    smoothHeight: true
});
$('#healing-slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    directionNav: true,
    slideshow: false,
    prevText: "",
    nextText: "",
    smoothHeight: true
});
$(".fancy-gallery").fancybox({
	'hideOnContentClick': true,
	'transitionIn'	:	'fade',
	'transitionOut'	:	'fade',
	'autoScale' : true,
	'titleShow': false,
	'titlePosition' : 'inside'
});
$('.person-info').readmore({
    maxHeight: 150,
    moreLink: '<a href="#">Read More <i class="fa fa-plus"></i></a>',
    lessLink: '<a href="#">Read Less <i class="fa fa-times"></i></a>'
});
$("#worshipVideo").fitVids();
var navigation = responsiveNav("responsive-navigation", {customToggle: ".nav-toggle"});

var $container = $('#articleContainer');
// initialize
$($container).imagesLoaded( function() {
    $container.masonry({
      itemSelector: '.news-article'
    });
});
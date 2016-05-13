$(document).ready(function(){
	$("#dropDown").click(function(){
		$("ul#dropdown-menu").slideToggle(1000);
	});
	$("img").mouseover(function(){
		opacity: 0.8;
	});

	$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
	});

	$("#toTop").click(function() {
    	$("html, body").animate({scrollTop: 0}, 500);
 	});

 	$('li#dropdown-nav').mouseenter(function(){
 		$('ul#dropdown-nav').slideDown('slow');
 	});
 	 $('li#dropdown-nav').mouseleave(function(){
 		$('ul#dropdown-nav').slideUp('slow');
 	});
});
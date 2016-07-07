/*点击回到顶部*/
$(function(){
	$(".to-top").hide();
	$(window).scroll(function() {
     if ($(this).scrollTop() != 0) {
       $('.to-top').fadeIn();
    } else {
	        $('.to-top').fadeOut();
	    }
	});
	$(".to-top").on('click',function(){
		$("body").animate({ scrollTop:0}, 600);;
	});
});

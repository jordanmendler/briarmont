// ===============================
// designesia 2011  //
// ===============================

$(document).ready(function() {
	$(".hide_content").hide();
	$(".min").hide();


	$(".plus").click(function()
	{
		// Close all
		$(".hide_content").hide(1000);
		$(".plus").show(1000);
		$(".min").hide();

		// Open us - use hide()/show() instead of slideToggle() to preserve white color
		$(this).hide(1000);
		$(".min").show();
		$(this).next(".hide_content").show(1000);
		$(this).next(".min").show(1000);
	});
  

	$(".min").click(function()
	{
		// Use show()/hide() instead of slideToggle() to preserve white color
		$(this).parent().prev(".plus").show(1000);
		$(this).parent().hide(1000);
		$(this).hide();
	});


	$(".image").click(function()
	{
		// Fade out rollover during animation to prevent rendering issues
		$(this).find('.rollover').fadeOut(100);

		// If open, close all
		if (  $(this).parent().next().next(".hide_content").is(":visible") )
		{
			$(".hide_content").hide(1000);
			$(".plus").show(1000);
			$(".min").hide();
		}
		// Otherwise, open this one
		else
		{
			// Close all other ones
			$(".hide_content").hide(1000);
			$(".plus").show(1000);

			// Open this one - use hide()/show() instead of slideToggle() to preserve white color
			$(".min").show(1000);
			$(this).parent().next(".plus").hide(1000);
			$(this).parent().next().next(".hide_content").show(1000);
		}
	}); 
});


// ===============================
// fading object //
// ===============================


$(document).ready(function(){

$('.pic_hover').hover(
    function() {
        $(this).find('.rollover').stop().fadeTo(150, 1);
    },
	
    function() {
		$(this).find('.rollover').stop().fadeTo(150, 0);
    }	
)

});


$(document).ready(function(){
	$("#wrapper").fadeIn(700);
	$(".hide_content .inner").css("-webkit-border-radius", "20px");
	$(".hide_content .inner").css("-moz-border-radius", "20px");
	$(".contact_form_holder").css("-moz-border-radius", "10px");

	$("#social-icons img").stop().animate({"opacity": ".25"}, "50");
	
	$("#social-icons img").hover(
	function() {
	$(this).stop().animate({"opacity": "1"}, "50");
	},
	function() {
	$(this).stop().animate({"opacity": ".25"}, "50");
	
});
 
});

// set all images opacity

$(document).ready(function(){
$('.pf_gallery li').hover(function() {
	$('.pf_gallery li').not($(this)).stop().animate({opacity: .3}, 100);
	
}, function() {
    $('.pf_gallery li').stop().animate({opacity: 1});}, 100);


});

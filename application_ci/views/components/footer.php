<section id="footer">

	
	
<!--scripts-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="/js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="/js/jquery.ez-bg-resize.js" charset="utf-8"></script> 
<script src="/js/lib.js" charset="utf-8"></script>
<script src="/js/trigger.js"></script>
<script>
$(document).ready(function() {
    $("#body-background").ezBgResize();
});

$(window).bind("resize", function(){
    $("#body-background").ezBgResize();
});
</script>
<script>
//append click event to the UL list anchor tag
$('#hero-slider ul a').click(function () {
     
    //reset all the items
    $('#hero-slider ul a').removeClass('active');
         
    //set current item as active
    $(this).addClass('active'); 
         
    //scroll it to the right position
    $('.mask').scrollTo($(this).attr('rel'), 300);
         
    //disable click event
       return false;        
         
});
</script>
<script>
$(document).ready(function(){
	$(".btn-slide").click(function(){
		$("#panel-hours").slideToggle("slow");
		$(this).toggleClass("active"); return false;
	});
	 
});
</script>
	</body>
</html>
$(document).ready(function() {
	$("#main").css('overflow', 'visible');
	$("#content").css('overflow', 'visible');
});

$(document).ready(function () {
	// start animation hide
    new WOW().init();

    //add even class to hexagon
     $('.categories .top-div:nth-child(2n)').addClass('even');
     $('.our-team-full .one_fifth:last-child').addClass('last');

     //function to calculate screen height
    	  function setHeight() {
    	    windowHeight = $(window).innerHeight();
    	    $('#page1, #page2, #page3, #page4, #page5').css('min-height', windowHeight);
    	  };
    	  setHeight();
    	  
    	  $(window).resize(function() {
    	    setHeight();
    	  });
    	//function to calculate screen height
    	
    	  //add active class
    	    $('ul#sub-menu-solution li').click(function(e) {
    	        //e.preventDefault();
    	        $('ul#sub-menu-solution a').addClass('active');
    	        $('a').removeClass('active');
    	        $(this).addClass('active');
    	    });
});
$(function(){
   	$('#sub-menu-solution').css({position: 'fixed', top: '186px','border': 'solid 0px #ececec',
    	'border-right':'solid 0px #ececec','border-top':'solid 0px #ececec',
    width: '719px'});
    $('#main').css({'padding-top': '160px'});

    $(window).scroll(function(){
        if( $(window).scrollTop() > 20 ) {
       $('#sub-menu-solution').css({'border': 'solid 1px #ececec', 'border-right':'solid 0px #ececec','border-top':'solid 0px #ececec'});
       $('ul#sub-menu-solution').css({'-webkit-animation': 'none 0s 0s !important', 'visibility':'visible'});
       $('.welcome-text').css({'z-index': '1'});
        }
            
     });
   
});

$(function($){
$(document).ready(function(){
    /**
     * This part causes smooth scrolling using scrollto.js
     * We target all a tags inside the nav, and apply the scrollto.js to it.
     */
    $("ul#sub-menu-solution li a, .down-div a").click(function(evn){
        evn.preventDefault();
        $('html,body').scrollTo(this.hash, this.hash); 
     });

    /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and 
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $("ul#sub-menu-solution li, .down-div").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("active");
            } else {
                $("a[href='" + theID + "']").removeClass("active");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$("ul#sub-menu-solution li:last-child a").hasClass("active")) {
                var navActiveCurrent = $(".active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("active");
                $("ul#sub-menu-solution li:last-child a").addClass("active");
            }
        }
    });
});
});

//animate veloz-solutions welcome text
$(document).ready(function() {
	$(".welcome-text").css('margin-top', '-800px');
	show_next();
});

function show_next()
{
	var $changed = false;
	$(".pic_hover").each(function() {
		// If already moved, skip
		if (  $(this).css('margin-left') == '27px' )
		{
			return;
			alert('if');
		}
		else if ($changed == true)
		{
			return;
			alert('else');
		}
		else
		{
			
		}
	});
	if ($changed == false)
	{
		setTimeout('add_plus()', 100);
	}
}
function add_plus()
{
	$changed = false;
	$(".welcome-text").delay(4500).each(function() {
		$(this).animate({"margin-top": "-26px"}, 3000);
	});

	
}

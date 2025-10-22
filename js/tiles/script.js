$(function() {
			
	var $ibWrapper	= $('#ib-main-wrapper'),
	 
		Template	= (function() {
				
				// true if dragging the container
			var 	kinetic_moving				= false,
				// current index of the opened item
				current						= -1,
				// true if the item is being opened / closed
				isAnimating					= false,
				// items on the grid
				$ibItems					= $ibWrapper.find('div.ib-main > a'),
				// image items on the grid
				$ibImgItems					= $ibItems.not('.ib-content'),
				// total image items on the grid
                                init                                            = function() {

                                        // add a class ib-image to the image items
                                        $ibImgItems.addClass('ib-image');
	
					// load some events
					initEvents();
				
				},
				initEvents					= function() {
				
					// open the item only if not dragging the container


					// This affects how the name/quote change.
					// To change only when user clicks on blue square, uncomment
					// first bind (clic.ibtemplate).
					// To change when user mouses over the blue square, use
					// second and third bind (mouseenter and mouseleave).
					/*$ibItems.bind('click.ibTemplate', function( event ) {
						
						if( !kinetic_moving )
							openItem( $(this) );
					
						return false;	
					
					});*/

						
					$ibItems.bind('mouseenter', function( event) {
						if( !kinetic_moving )
							openItem( $(this) );
					
						return false;	
					
					});

					$ibItems.bind('mouseleave', function( event) {
						
						if( !kinetic_moving )
							openItem( $(this) );
					
						return false;	
					
					});

					// Jordan: Unbind images so that can follow think
					$ibImgItems.unbind();
				},
				openItem					= function( $item ) {
					
					if( isAnimating ) { return false;}
					
					// if content item
					if( $item.hasClass('ib-content') ) {
						if( $item.find(".Quote").css("display") == "none" ) {
							isAnimating	= true;
							current	= $item.index('.ib-content');
							loadQuote( $item, function() { isAnimating = false; } );
						} else if( $item.find(".Name").css("display") == "none" ) {
							isAnimating	= true;
							current	= $item.index('.ib-content');
							loadName( $item, function() { isAnimating = false; } );
						}
					}
					/*
					// if image item
					else {
					
						isAnimating	= true;
						current	= $item.index('.ib-image');
						loadImgPreview( $item, function() { isAnimating = false; } );
						
					}
					*/
				},
				
				// change from name to quote.
				loadQuote				= function( $item, callback ) {
					$item.children('.ib-teaser').children('.Name').fadeOut('fast', function(){
						$item.children('.ib-teaser').children('.Quote').fadeIn('fast');					
					});
					if( callback ) callback.call();
				}

				// change back from quote to name
				loadName				= function( $item, callback ) {
					$item.children('.ib-teaser').children('.Quote').fadeOut('fast', function(){
						$item.children('.ib-teaser').children('.Name').fadeIn('fast');					
					});
					if( callback ) callback.call();
				};
			
			return { init : init };
			
		})();
	
	Template.init();
	
});

/* jQuery Easing */
jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a+c;return-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){if((a/=d/2)<1)return b/
2*a*a*a+c;return b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a*a*a+c;return-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a*a*a*a+c;return b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,
a,c,b,d){return-b*Math.cos(a/d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return a==0?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){if(a==0)return c;if(a==d)return c+b;if((a/=d/2)<1)return b/2*Math.pow(2,10*(a-1))+c;return b/2*(-Math.pow(2,-10*--a)+2)+c},
easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){if((a/=d/2)<1)return-b/2*(Math.sqrt(1-a*a)-1)+c;return b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d)==1)return c+b;f||(f=d*0.3);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,
a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d)==1)return c+b;f||(f=d*0.3);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d/2)==2)return c+b;f||(f=d*0.3*1.5);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);if(a<1)return-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c;return g*Math.pow(2,-10*(a-=1))*Math.sin((a*
d-e)*2*Math.PI/f)*0.5+b+c},easeInBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;if((a/=d/2)<1)return b/2*a*a*(((f*=1.525)+1)*a-f)+c;return b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=
d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){if(a<d/2)return jQuery.easing.easeInBounce(e,a*2,0,b,d)*0.5+c;return jQuery.easing.easeOutBounce(e,a*2-d,0,b,d)*0.5+b*0.5+c}});

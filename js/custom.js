var $ = jQuery.noConflict();

jQuery(document).ready(function($) {
 
        if ( $().fitVids ) { $("#content,#footer,#slider:not(.layerslider-wrap),.landing-offer-media").fitVids( { customSelector: "iframe[src^='http://www.dailymotion.com/embed']"} ); }
        
        
        // prettyPhoto
        
        if ( $().prettyPhoto ) {
            
            initprettyPhoto=function(){
                
                $("a[rel^='prettyPhoto']").prettyPhoto({ theme: 'light_square', allow_expand: false, social_tools: false });
				$("a[rel^='prettyPhoto1']").prettyPhoto({ theme: 'light_square',  allow_expand: true, social_tools: false });
            
            };
            initprettyPhoto();
        
        }
        
    
   

});
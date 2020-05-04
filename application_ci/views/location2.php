<!DOCTYPE html>

<!-- FIXME: This should contain the Header -->
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="description" content="place description here" />
<meta name="viewport" content="width = device-width;" /> 
<!-- define the width of the page as no wider than the width of the viewport --> 

<link rel="stylesheet" href="/css/styles.css" />
<link rel="stylesheet" href="/css/main.css" />
<link rel="stylesheet" href="/css/_print/main.css" media="print" /> 
<!--[if IE]><link rel="stylesheet" href="_/css/_patches/win-ie-all.css" media="all" /><![endif]--> 
	<!--[if IE 7]><link rel="stylesheet" href="_/css/_patches/win-ie7.css" media="all" /><![endif]--> 
	<!--[if lt IE 7]><link rel="stylesheet" href="_/css/_patches/win-ie-old.css" media="all" /><![endif]--> 
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
<link href='//fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Mako:regular" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Waiting+for+the+Sunrise:regular" rel="stylesheet" type="text/css" />
<link rel="icon" href="favicon.png" />

<!--[if IE ]><link rel="stylesheet" href="/css/ie.css" media="all"/><![endif]--> 
<title>Briarmont</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	
	
<body>	


<head>
<meta charset="utf-8" />
<meta name="description" content="Place your description here" />
<meta name="author" content="Virtuti-Design" />
<meta name="date" content="2011-5-16T11:00:00" />
<meta name="copyright" content="Copyright Virtuti-D 2008-2011" />
<meta name="viewport" content="initial-scale=0, user-scalable=no" />

<link rel="stylesheet" href="css/css/main.css" />
<link rel="stylesheet" href="css/css/_print/main.css" media="print" />
<!--[if IE]><link rel="stylesheet" href="_/css/_patches/win-ie-all.css" media="all" /><![endif]--> 
	<!--[if IE 7]><link rel="stylesheet" href="_/css/_patches/win-ie7.css" media="all" /><![endif]--> 
	<!--[if lt IE 7]><link rel="stylesheet" href="_/css/_patches/win-ie-old.css" media="all" /><![endif]--> 
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
<link href='//fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Mako:regular" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Waiting+for+the+Sunrise:regular" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<title>Briarmont Location and address</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body id="index" onload="initialize()">
	<div id="inner-wrap-map">
<header>
  
     	   
	<a href="/home"><img src="/images/briarmont_transparent.png" width="260" height ="240" style="opacity:1;"alt></a>
	<object type="application/x-shockwave-flash" data="/Music/dewplayer-mini.swf" align="left" width="100" height="20" id="dewplayer" name="dewplayer">
<param name="movie" value="/Music/dewplayer-mini.swf" />
<param name="flashvars" value="mp3=/Music/Briarmont.mp3&amp;autostart=1&amp;autoreplay=1" />
<param name="wmode" value="transparent" />
</object>  
	</header>
	
	
	<nav id="top">
	<!-- FIXME: This shouldn't be hardcoded it should come in from controller as a variable that is gotten navmenu meodel -->
	<a href="/home" style="opacity:1">Home | </a>
	<a href="/about" style="opacity:1">About | </a> 
	<a href="/products" style="opacity:1">Products | </a> 
	<a href="/blog" style="opacity:1">Blog | </a>
	<a href="/location" style="opacity:1">Contact | </a>
	
	<section id="social">
	<figure><a href="https://www.facebook.com/BriarmontCo?ref=hl" style="opacity:1"><img src="/images/facebook.gif" alt="facebook" /></a></figure>
	<figure><a href="https://twitter.com/briarmontco" style="opacity:1"><img src="/images/twitter.gif" alt="twitter" /></a></figure>
	<figure><a href="http://pinterest.com/briarmontco/" style="opacity:1"><img src="/images/pinterest.gif" alt="pinterest" /></a></figure>
	<figure><a href="http://briarmontco1.tumblr.com/" style="opacity:1"><img src="/images/tumblr.gif" alt="tumblr" /></a></figure>
</section>

</nav>
	
  </div><!--inner-wrap-map ends here-->
<div id="map_canvas"></div>

<!--scripts-->
<script src="//maps.google.com/maps/api/js?sensor=false"></script>
<script>
 		function initialize() {
				var latlng = new google.maps.LatLng(34.052677,-118.438817);
				var settings = {
					zoom: 15,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
					navigationControl: true,
					navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
					mapTypeId: google.maps.MapTypeId.ROADMAP};
				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<h1 id="firstHeading" class="firstHeading">Welcome to Briarmont!</h1>'+
					'<div id="bodyContent">'+
					'<p>Contact Information:</p>'+
					'<div id="address">'+
					'<p>1642 Westwood Boulevard, Los Angeles CA, 90024</p>'+
					'</div>'+
					'<figure><img src="images/contact.jpg" width="400" height="260" style="opacity:1" alt="bar outside"/> </img></figure>'
					'</div>'+ 
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				
				var companyImage = new google.maps.MarkerImage('images/image.png',
					new google.maps.Size(50,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50,50)
				);

				var companyShadow = new google.maps.MarkerImage('images/shadow.png',
					new google.maps.Size(50,50),
					new google.maps.Point(0,0),
					new google.maps.Point(50, 50)); 

				var companyPos = new google.maps.LatLng(34.053548,-118.438624);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					shadow: companyShadow, 
					title:"Briarmont",
					zIndex: 3});

				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
			}
</script>
	</body>
</html>

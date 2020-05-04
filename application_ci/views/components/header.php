<!doctype html>
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
<link rel="icon" href="favicon.ico" />

<!--[if IE ]><link rel="stylesheet" href="/css/ie.css" media="all"/><![endif]--> 
<!--<title>Briarmont</title>-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

	
<body>	
<div id="crossslide"></div> 				
<div id="wrapper">
<!--   <object type="application/x-shockwave-flash" data="/Music/dewplayer-mini.swf" align="right" width="100" height="20" id="dewplayer" name="dewplayer">
<param name="movie" value="/Music/dewplayer-mini.swf" />
<param name="flashvars" value="mp3=/Music/Briarmont.mp3&amp;autostart=1&amp;autoreplay=1" />
<param name="wmode" value="transparent" />
</object> -->
	<div id="inner-wrap">
	
	  <header> 
 	
	<a href="/home"><img src="/images/briarmont_transparent.png" width="260" height ="240"  style="opacity:1; position: relative; right: 60px;"alt></a> 
 
	</header> 
	



<div id="main-content-index">

	<nav id="side">
	 
     <ul>
     <?php  
    foreach ($navmenu as $nav) {
					$active = false;
					$iter = 1;
					
					foreach (array_keys($nav) as $subnav) {
                 if ($subnav == '/' . $page_class)
						{
							$active = true;
if ( $page_method == "index" || strtolower('/' . $page_class . '/' . $page_method) == $subnav)
							{
								echo '<li class="active" style="opacity:1">';
							}
							else
							{
								echo '<li class="active-parent" style="opacity:1">';
							}

							echo '<a href="' . $subnav . '" style="opacity:1">' . $nav[$subnav] . '</a><li>';
						}
						else if ($active == true)
						{
							//
							if (preg_match("#^http://#", $subnav) > 0)
							{
								// If last
								if ($iter == count($nav))
								{
									echo '<li class="submenu-last" style="opacity:1">';
								}
								else
								{
									echo '<li class="submenu" style="opacity:1">';
								}

								// Generate link and close li
								echo '<a href="' . $subnav . '" target="_blank" style="opacity:1">' . $nav[$subnav] . '</a></li>';
							}

							// If external link set as popup
							else if ( strtolower('/' . $page_class . '/' . $page_method) == $subnav)
							{
								// If last
								if ($iter == count($nav))
								{
									echo '<li class="submenu-active-last" style="opacity:1">';
								}
								else
								{
									echo '<li class="submenu-active" style="opacity:1">';
								}

								// Generate link and close li
								echo '<a href="' . $subnav . '" style="opacity:1">' . $nav[$subnav] . '</a></li>';
							}
							// Otherwise
							else
							{
								// If last
								if ($iter == count($nav))
								{
									echo '<li class="submenu-last" style="opacity:1">';
								}
								// Otherwise
								else
								{					
									echo '<li class="submenu" style="opacity:1">';
								}

								// Generate link and close li
								echo '<a href="' . $subnav . '" style="opacity:1">' . $nav[$subnav] . '</a></li>';
							}
						}
						else
						{
							echo '<li><a href="' . $subnav . '" style="opacity:1">' . $nav[$subnav] . '</a></li>';
							break;
						}

						$iter++;
					}
				}
	?>
		</ul>
		</nav><!-- close div mainmenu -->





	
	
	


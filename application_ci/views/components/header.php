<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Briarmont Estates & Mansion
<?php
	/* if (isset($title))
	{
		echo $title;
	}
	else
	{
		echo 'Building Businesses. Connecting People.';
	} */
?>
</title>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4F3QM34MF6"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4F3QM34MF6');
</script>

<!-- ================ -->
<!-- attach css files -->
<!-- ================ -->
<link href="/css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="/css/animation.css" rel="stylesheet" type="text/css" />


<!-- Override css if color is defined (i.e. for division or foundation pages) -->
<?php
	if (isset($color))
	{
?>
<style type="text/css">
		.nav-links a,
		a,
		.mailto a,
		#mainmenu ul li.submenu-active a,
		#mainmenu ul li.submenu-active-last a,
		.slogan-small1,
		h1, h2, h3, h4, h5, h6
		{
			color:<?= $color ?>
		}

		span.gc-cs-link
		{
			color:#777;
		}



		/* #social-icons img, Dont change social icons for now */
		.homeicon img
		{
			background:<?= $color ?>;
		}

		#mainmenu ul li.active,
		#mainmenu ul li.active-parent
		{
			border-left:solid 1px <?= $color ?>
		}

/* Don't change top color
		#wrapper{border-top:solid 1px <?= $color ?>}

		{
			color:<?= $color ?>
		}
*/


		a:hover{color:#777}



</style>



<?php
	}
?>



<!-- ================ -->
<!-- attach js files -->
<!-- ================ -->
<!-- <script type="text/javascript" src="/js/jquery-1.5.1.min.js"></script> -->
<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/js/designesia.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>
<script type="text/javascript" src="/js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="/js/jquery.ui.totop.setting.js"></script>
<script type="text/javascript" src="/js/cufon-yui.js"></script>
<!-- <script type="text/javascript" src="/js/parallax/jquery.stellar.min.js"></script>
<script type="text/javascript" src="/js/parallax/waypoints.min.js"></script>
<script type="text/javascript" src="/js/parallax/script.js"></script>
<script type="text/javascript" src="/js/parallax/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/wow.min.js"></script> -->
<!--
	<script type="text/javascript">
/* code to preload all images after the page finished loading */
function preload(arrayOfImages) {
    $(arrayOfImages).each(function(){
        $('<img/>')[0].src = this;
        // Alternatively you could use:
        // (new Image()).src = this;
    });
}

$(window).load(preload([
<?php
   /* fetch all jpg/png path in the /image directory and output an array of directory (e.g. /images/folder/123.jpg) */
    /*function ListFiles($dir) {
        if($dh = opendir($dir)) { 

            $files = Array();
            $inner_files = Array();

            while($file = readdir($dh)) {
                if($file != "." && $file != ".." && $file[0] != '.') {
                    if(is_dir($dir . "/" . $file)) {
                        $inner_files = ListFiles($dir . "/" . $file);
                        if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                    } else {
                        $path = $dir . "/" . $file;
                        $shorten_path = substr($path, strlen($_SERVER['DOCUMENT_ROOT']));  
                        array_push($files, $shorten_path);
                    }
                }
            }

            closedir($dh);
            return $files;
        }
    }*/

    /* out put the directories in in 'path', form */
   /* foreach (ListFiles($_SERVER['DOCUMENT_ROOT'].'/images') as $key=>$file){ 
        if(strpos($file, '.jpg') === false && strpos($file, '.png') === false){
        } else {
                //echo $file.'<br />';
                echo "'$file', ";
        }
}*/
?>
]));

</script>
-->
</head>

<body>
<div id="wrapper">
	<div id="inside">
	<div id="navmenu">
	<div id="social-icons" style="visibility:hidden;">
		<a href="https://briarmont.com" target="_blank"><img src="/images/social-media/icon-facebook.png" alt="Briarmont Estates & Mansion"/></a>
		<a href="https://briarmont.com" target="_blank"><img src="/images/social-media/icon-twitter.png" alt="Briarmont Estates & Mansion"/></a>
		<a href="https://briarmont.com" target="_blank"><img src="/images/social-media/icon-linkedin.png" alt="Briarmont Estates & Mansion"/></a>
		<a href="https://briarmont.com" target="_blank"><img src="/images/social-media/icon-googleplus.png" alt="Briarmont Estates & Mansion"/></a>
	</div><!-- close div social-icons -->

	<div id="mainmenu">
		<ul>
			<?php
				// For each menu category
				foreach ($navmenu as $nav) {
					$active = false;
					$iter = 1;

					// Look at each menu group
					foreach (array_keys($nav) as $subnav) {

						// If it is the active on, check if this page is active or if subpage is active
						if ($subnav == '/' . $page_class)
						{
							$active = true;

							// See if active or active parent
							if ( $page_method == "index" || strtolower('/' . $page_class . '/' . $page_method) == $subnav)
							{
								echo '<li class="active">';
							}
							else
							{
								echo '<li class="active-parent">';
							}

							echo '<a href="' . $subnav . '">' . $nav[$subnav] . '</a></li>';
						}
						// In this case we are hitting a subpage
						else if ($active == true)
						{
							//
							if (preg_match("#^http://#", $subnav) > 0)
							{
								// If last
								if ($iter == count($nav))
								{
									echo '<li class="submenu-last">';
								}
								else
								{
									echo '<li class="submenu">';
								}

								// Generate link and close li
								echo '<a href="' . $subnav . '" target="_blank">' . $nav[$subnav] . '</a></li>';
							}

							// If external link set as popup
							else if ( strtolower('/' . $page_class . '/' . $page_method) == $subnav)
							{
								// If last
								if ($iter == count($nav))
								{
									echo '<li class="submenu-active-last">';
								}
								else
								{
									echo '<li class="submenu-active">';
								}

								// Generate link and close li
								echo '<a href="' . $subnav . '">' . $nav[$subnav] . '</a></li>';
							}
							// Otherwise
							else
							{
								// If last
								if ($iter == count($nav))
								{
									echo '<li class="submenu-last">';
								}
								// Otherwise
								else
								{					
									echo '<li class="submenu">';
								}

								// Generate link and close li
								if ($subnav == '#Active' || $subnav == '#Projects' || $subnav == '#Retail' || $subnav == '#Industrial' || $subnav == '#Development' || $subnav == '#Holdings' || $subnav == '#Past-Projects' || $subnav == '#Opportunities') {
								    echo '<a class="project-filter" data-trigger="'. str_replace("#", '', $subnav) .'" href="' . $subnav . '">' . $nav[$subnav] . '</a></li>';
								} else {
								    echo '<a href="' . $subnav . '">' . $nav[$subnav] . '</a></li>';
								}
								
							}
						}
						else
						{
							echo '<li><a href="' . $subnav . '">' . $nav[$subnav] . '</a></li>';
							break;
						}

						$iter++;
					}
				}
			?>
		</ul>
	</div><!-- close div mainmenu -->
	<div class="inner"></div>
</div><!-- close div navmenu -->

<div id="main">
	<div id="header">
		<div class="mainlogo"><a href="/"><img src="<?= $header ?>" alt="Briarmont Estates & Mansion"/
				onmouseover='$(this).stop().animate({"opacity": ".4"}, "100");'
				onmouseout='$(this).stop().animate({"opacity": "1"}, "50");'
		></a></div>
		<div class="clear"></div>
	</div>
	<div id="content">

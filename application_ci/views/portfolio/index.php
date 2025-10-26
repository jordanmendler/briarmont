<div id="squares">
  <link rel="stylesheet/less" type="text/css" href="css/alphine/style.css" media="all" />
  <link rel="stylesheet/less" type="text/css" href="css/alphine/type/apparatus.css" media="all" />
  <link rel="stylesheet/less" type="text/css" href="css/alphine/type/bebas.css" media="all" />

  <!-- {less} css plugin -->
  <script src="/js/less-1.3.0.min.js" type="text/javascript"></script>

  <!--[if IE 8]>
  <link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
  <![endif]-->
  
  <script type="text/javascript" src="/js/alphine/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="/js/alphine/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="/js/alphine/ddsmoothmenu.js"></script>
  <script type="text/javascript" src="/js/alphine/slides.jquery.js"></script>
  <script type="text/javascript" src="/js/alphine/jquery.masonry.min.js"></script> 
  <script type="text/javascript" src="/js/alphine/jquery.portfolio.min.js"></script>
  <script type="text/javascript" src="/js/alphine/jquery.slickforms.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($){
  	$('.forms').dcSlickForms({successH:40});
  });
  </script>
  
  <body id="top">
  <div id="body-wrapper">
  <!-- Begin Container -->
  <div id="container">
  <!-- Begin Wrapper -->
  <div class="wrapper">

<!-- Begin Menu -->
<!-- needed mouse over black box to show -->
  <div id="menu" class="menu">
    <ul>
    </ul>
  </div>
  <!-- End Menu -->
 <!-- <p>The Veloz Group wholly owns and operates three technology businesses: Beverly Hills Chairs, Custom Tobacco and Veloz Solutions. We are actively developing a fourth business -- RepRoll. The Veloz Group regularly explores new opportunities, both internally and as joint ventures.</p> -->
 <p>Briarmont develops, owns, and operates real estate. Learn more about our projects below.</p>
  	<!-- Begin Portfolio -->
        <div id="portfolio">
          <ul id="filtering-nav">
            <li class="active"><a class="all" href="#all">All</a></li>
            <?php /*	// Get and display list of types
            for($i = 0; $i < count($types) ; $i++) {	
                echo"<li><a class=\"$types[$i]\" href=\"#$types[$i]\">Our $types[$i]</a></li>";
            }*/
            ?>
            <li><a class="Industrial" href="Industrial">Industrial</a></li>
            <li><a class="Self-Storage" href="Self-Storage">Self-Storage</a></li>
            <li><a class="Retail" href="Retail">Retail</a></li>
            <li><a class="Multifamily" href="Multifamily">Multifamily</a></li>
            <li><a class="Development" href="Development">Development</a></li>
          </ul>
          <div class="divider"></div>
          <div class="clear"></div>

          <div class="items">           
	<?php	// Insert items from portfolio_model.php
	for ($i = 0 ; $i < count($portfolio) ; $i++)
	{
		$company = $portfolio[$i];
		// Get type
		echo' 
            	<div class="box col4';
		for($j = 0; $j < count($company['types']); $j++) {
			echo ' ';
			echo $company['types'][$j];
		}
		echo'">
            	<a href="#' .strtolower(str_replace(' ', '-', $company['name'])) .'">';
		?>

		<!-- Dispense company contents -->
		<span class="overlay open"><strong><?=$company['name']?></strong><em><br/><?=$company['tagline']?></em></span><img src="<?=$company['icon']?>" alt="" /></a>
            	<!-- Begin Block -->
            	<div class="container">
  			<!-- Begin Slider (images) -->
  			<div class="slides">
  				<div class="slides_container">
				<?php 
				
				for($j = 0; $j < count($company['images']); $j++) {
  					echo '<img src="';
					echo $company['images'][$j];
					echo '" width="380" height="380" alt=""> ';
				} 
				?>
  				</div>
  				<a href="#" class="prev"></a>
  				<a href="#" class="next"></a>
  			</div>
  			<!-- End Slider -->
  			<!-- Begin Content -->
  			<div class="content">
  				<h2><?=$company['name']?></h2>
  				<p><?=$company['summary']?></p>  				
  				<div class="meta">
					<?php
					if($company['launch'] != '') {
  						echo '<span><em>Launch Date:  </em>';
						echo $company['launch'];
						echo '</span>';
					} else{
										
					}
					?>
					<!-- <span><em>Industries:  </em><?=$company['industries']?></span> -->
  					<?php
					if($company['link'] != '') {?>
  					<span  class="<?php if($company['name'] == 'Custom Tobacco'){ echo $company['name'];}?>"><!-- <em>Link:  </em>  --><a href="<?=$company['link']?>" target="_blank"><?=$company['link']?></a></span>
  					<?php }else{
										
					}
					?>
  				</div>
  			</div>
  			<!-- End Content -->
  			<div class="clear"></div><div class="divider"></div>
            	</div>
            	<!-- End Block -->
            </div>
            <!-- End Item -->
	<?php
	}
	?>
            </div>
  <div class="push"></div>
          <!-- .wrap --> 
      </div>
      <!-- End Portfolio -->
  </div>
  <!-- End Wrapper -->
  </div>
  <!-- End Container -->
  </div>
  <!-- End Body Wrapper -->
    
  <!--[if !IE]> -->
  <script type="text/javascript" src="/js/alphine/jquery.corner.js"></script>
  <!-- <![endif]-->
  <script type="text/javascript" src="/js/alphine/scripts.js"></script>
  
</div>

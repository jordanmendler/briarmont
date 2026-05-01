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
            <li><a class="Medical-Office" href="Medical-Office">Medical Office</a></li>
            <li style="visibility: hidden"><a class="Holdings" href="Holdings">Holdings</a></li>
            <li style="visibility: hidden"><a class="Past-Projects" href="Past-Projects">Past-Projects</a></li>
            <li style="visibility: hidden"><a class="Opportunities" href="Opportunities">Opportunities</a></li>
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
            	<a href="#' . slugify($company['name']) .'">';
		?>

            <!-- Dispense company contents -->
            <span class="overlay open">
                <strong><?=$company['name']?></strong>
            </span>
            <img src="<?=$company['image']?>" alt="" />
            <p class="name"><?= $company['name'] ?></p>
            <p class="summary"><?= $company['summary'] ?></p>
        </a>
            	<!-- Begin Block -->
            	<div class="container">
                    <!-- Begin Slider (images) -->
                    <div class="slides">
                        <div class="slides_container">
                        <?php 
                            echo '<img src="';
                            echo $company['image'];
                            echo '" width="380" height="380" alt=""> ';
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
                        <?php
                        if (!empty($company['embed_url'])) {
                        ?>
                            <a href="#" class="deck-link" data-slug="<?=slugify($company['name'])?>" onclick="openPresentationModal(event)">More Info</a>
                        <?php
                        }
                        ?>
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
  <script type="text/javascript">
    function openPresentationModal(eventOrSlug) {
        let presentationSlug;

        if (eventOrSlug instanceof Event) {
            eventOrSlug.preventDefault();
            presentationSlug = eventOrSlug.target.dataset.slug;
        } else {
            presentationSlug = eventOrSlug;
        }

        if (!presentationSlug) {
            return;
        }

        const modalElement = document.getElementById('modal-' + presentationSlug);
        
        // Lazy-load iframe if it's not a video modal
        if (modalElement.querySelector('video') === null && modalElement.querySelector('iframe') === null) {
            const embedUrl = modalElement.getAttribute('data-embed-url');
            if (embedUrl) {
                const modalContent = modalElement.querySelector('.modal-content');
                const iframe = document.createElement('iframe');
                iframe.src = embedUrl;
                iframe.frameborder = '0';
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.setAttribute('allow', 'fullscreen; clipboard-write');
                iframe.setAttribute('allowfullscreen', 'true');
                modalContent.appendChild(iframe);
            }
        }
        
        modalElement.style.display = 'block';
        document.documentElement.classList.add('modal-open');
        document.body.classList.add('modal-open');

        setTimeout(function() {
            if (modalElement.querySelector('video') !== null) {
                var player = videojs('video-' + presentationSlug);
                player.ready(function() {
                    var promise = player.play();
                    if (promise !== undefined) {
                        promise.then(function() {
                            //console.log('Autoplay started!');
                        }).catch(function(error) {
                            //console.log('Autoplay was prevented.');
                        });
                    }
                });
            }
        }, 500);

        const url = new URL(window.location);
        if (url.searchParams.get('modal') !== 'true') {
            url.searchParams.set('modal', 'true');
            const newUrl = url.pathname + url.search + url.hash;
            window.history.pushState({}, '', newUrl);
        }
    };

    function closePresentationModal(presentationSlug) {
        const modalElement = document.getElementById('modal-' + presentationSlug);
        modalElement.style.display = 'none';
        document.documentElement.classList.remove('modal-open');
        document.body.classList.remove('modal-open');

        if (modalElement.querySelector('video') !== null) {
            var player = videojs('video-' + presentationSlug);

            player.pause();
        }

        const url = new URL(window.location);
        url.searchParams.delete('modal');
        
        const newUrl = url.pathname + url.search + url.hash;
        
        window.history.replaceState({}, '', newUrl);
    };

    function handleClosePresentationModal(event) {
        event.preventDefault();
        const presentationSlug = event.target.dataset.slug;

        if (!presentationSlug) {
            return;
        }
        closePresentationModal(presentationSlug);
    }

    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        
        if (urlParams.get('modal') === 'true') {
            if (window.location.hash) {
                const presentationSlug = window.location.hash.slice(1);
                if (presentationSlug) {
                    openPresentationModal(presentationSlug);
                }
            }
        }

        document.querySelectorAll('.close-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const slug = this.dataset.slug;
                closePresentationModal(slug);
            });
        });

        document.addEventListener('click', function(event) {
            const modal = document.querySelector('.modal[style*="display: block"]');

            if (!modal) return;

            if (event.target === modal) {
                const closeBtnElement = modal.querySelector('span[data-slug]');
                if (closeBtnElement) {
                    const slug = closeBtnElement.dataset.slug;
                    closePresentationModal(slug);
                }
            }
        });
    });
  </script>
  
</div>

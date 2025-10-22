<div id="divisions" class="divisions_single">
<div>
<img src="<?= $info['heading-image']?>" alt="<?= $info['name'] ?>" />
</div>
		<br />
	<div class=""> <!-- description class removal   -->
		<h5>Overview</h5>
		<?= $info['description'] ?>
	</div>
	
	<!-- include Cycle plugin -->
	<script type="text/javascript" src="/js/jquery.cycle.all-2.9999.js"></script> <!-- http://jquery.malsup.com/cycle -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.project-slideimg').cycle({
				fx: 'fade',
				speed: 2500, // Transition speed
				timeout: 7500, // How long each image stays
			});

			$('.project-slidequotes').cycle({
				fx: 'fade',
				speed: 2500, // Transition speed
				timeout: 7500, // How long each quote stays
			});
		});
	</script>

<?php
	if ( count($info['project-image']) > 0 && count($info['project-title']) > 0)
	{
?>
		<!-- need to be modified -->
		<div class="services">
			<h5><a href="/companies">Projects<span style="font-size:16px;"></span></a></h5>
			<div class="slideShow">
				<div class="project-slideimg">
					<?php
						foreach ($info['project-image'] as $projectImg)
						{
							echo '<img src="' . $projectImg . '"/>';
						}
					?>
				</div>
				<br/>
				<div class="project-slidequotes">
					<?php
						foreach ($info['project-title'] as $proTitle)
						{
							echo '<span class="project-title">' . $proTitle . '</span>';
						}
					?>
				</div> 
			</div>
		</div>

		<div class="contact-us">
			<h5><a href="/contact">Contact Us</a></h5>
			<p><img src="<?=  $info['contact-icon'] ?>" alt="<?= $info['name'] ?>"/></p>
			<br/>
			<p>601 Meridian Ave</p>
			<p>South Pasadena, CA 91030</p>
			<!--
			<p><span class="mailto">424.999.5570</span></p> 
			<p><span class="mailto"><a href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a></span></p>
			-->
		</div>

<?php
		}
?>
	</div>

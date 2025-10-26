<div class="one_half_first">
	<style type="text/css">
		.slideimg { height: 280px; width: 320px; margin: 0px }
		.slideimg img { padding: 0px; border: 0px solid #ccc; background-color: #eee; }
	</style>
	<!-- include Cycle plugin -->
	<script type="text/javascript" src="/js/jquery.cycle.all-2.9999.js"></script> <!-- http://jquery.malsup.com/cycle -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.slideimg').cycle({
				fx: 'fade',
				speed: 2500, // Transition speed
				timeout: 7500, // How long each image stays
			});

			$('.slidequotes').cycle({
				fx: 'fade',
				speed: 2500, // Transition speed
				timeout: 15000, // How long each image stays
			});
		});
	</script>
	<div class="slideimg">
		<img src="/images/about/index/1-downtown-los-angeles-1.jpg" alt="Downtown Los Angeles"/>
		<img src="/images/about/index/2-wilshire-corridor-1.jpg" alt="Wilshire Corridor" />
		<img src="/images/about/index/3-malibu-1.jpg" alt="Malibu" />
		<img src="/images/about/index/5-ucla.jpg" alt="UCLA Royce Hall" />
		<img src="/images/about/index/6-downtown-los-angeles-3.jpg" alt="Downtown Los Angeles" />
		<img src="/images/about/index/7-pch.jpg" alt="Pacific Coast Highway" />
		<img src="/images/about/index/8-wilshire-corridor-2.jpg" alt="Wilshire Corridor" />
		<img src="/images/about/index/9-hollywood.jpg" alt="Hollywood"/>
	</div>
</div>

<div class="one_half_plus last">
	<?= $content['intro'] ?>
	<div id="quote" style="margin-top: 20px;">
	<blockquote>
		<div class="slidequotes">
			<?php
				foreach ($quotes as $quote)
				{
					echo '<p>' . $quote[0] . '<br /><br />—' . $quote[1] . '</p>';
				}
			?>
		</div>
	</blockquote>
	</div>
</div>

<!-- <div class="line"></div>
<div class="one_half">
	<h5><span class="red"><?= $content['col1-head'] ?></span></h5>
	<?= $content['col1-body']?>
</div>


<div class="one_half last">
	<h5><span class="red"><?= $content['col2-head'] ?></span></h5>
	<?= $content['col2-body']?>
</div>
 -->
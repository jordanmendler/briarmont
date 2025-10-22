<h2><?= $title ?></h2>
<div class="nav-links">
<?php
	foreach ($people as $person)
	{
		echo '<li><a href="#';
		echo str_replace(' ', '-', str_replace('"', '', $person['name']));
		echo '">';
		echo $person['name'] . ', <span class="people-title">' . $person['title'];
		echo '</span></a></li>';
	}
?>
</div>
	

<div class="people-bios">
<?php
	foreach($people as $person)
	{
?>
		<div id="<?= str_replace(' ', '-', str_replace('"', '',  $person['name'])) ?>"></div>
		<div class="line"></div>

		<style type="text/css">
			.slideshow { height: 250px; width: 250px; margin: 4px 20px 4px 0;float: left}
			.slideshow img { padding: 0px; border: 1px solid #ccc; background-color: #eee; }
		</style>
		<!-- include Cycle plugin -->
		<script type="text/javascript" src="/js/jquery.cycle.all-2.9999.js"></script> <!-- http://jquery.malsup.com/cycle/begin.html -->
		<script type="text/javascript">
			$(document).ready(function() {
				$('.slideshow').cycle({
				fx: 'fade',
				speed: 2500, // Transition speed
				timeout: 7500, // How long each image stays
			});
		});
		</script>

		<div class="slideshow">
			<?php foreach ($person['image'] as $img)  { ?>
				<img src="<?= $img ?>" alt="<?= $person['name'] . ', ' . $person['title'] ?>" class="pic_left"/>
			<?php } ?>
		</div>

		<a href="#<?= str_replace(' ', '-', str_replace('"', '', $person['name'])) ?>"><div class="people-name"><h5><?=$person['name'] ?></h5></div></a>
		<div class="people-title"><?= $person['title'] ?></div>
		<div class="people-email">
		<?php
			echo '<span class="mailto"><a href="mailto:' . $person['email'] . '">' . $person['email'] . '</a></mailto>';
		?>
		</div>
		<br />
		<div class="people-bio"><?= $person['bio'] ?></div>
<?php
	}
?>
</div>

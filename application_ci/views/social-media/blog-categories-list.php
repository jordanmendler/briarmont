<div id="social-media">
	<h2><?=$type ?></h2>
	<ul class="cool-list">
	<? foreach ($categories as $category) { ?>
		<li class="post-list">
			<a href="<?= $category['link'] ?>"><?= $category['name'] ?> </a>  <?= $category['description'] ?>
		</li>
	<? } ?>
	</li>
	<br />

	<div class="page-nav">
		<? if (isset($prev_page)) { ?>
			<a href="<?= $prev_page ?>" style="float:left">Prev</a>
		<? } ?>

		<? if (count($categories) == $list_max) { ?> 
			<a href="<?= $next_page ?>" style="float:right">Next</a>
		<? } ?>
	</div>
</div>

<div id="social-media">
	<h2><?= $parent ?>  »  <?= str_replace("-"," ",$tag) ?></h2>
	<ul class="cool-list">
	<? foreach ($posts as $post) { ?>
		<li class="post-list">
			<a href="<?= $post['link'] ?>"><?= $post['title'] ?></a> on <?= $post['date'] ?>
		</li>
	<? } ?>
	</ul>
	<br />
	<div class="page-nav">
		<? if (isset($prev_page)) { ?>
			<a href="<?= $prev_page ?>" style="float:left">Prev</a>
		<? } ?>

		<? if (count($posts) == $list_max ) { ?> 
			<a href="<?= $next_page ?>" style="float:right">Next</a>
		<? } ?>
	</div>
</div>

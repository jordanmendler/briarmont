<div id="social-media">
	 
	<div class="post-title"><?= $post['title'] ?></div>
	<div class="post-date">
		<!--<p>By <a href="#"><?= $post['author'] ?></a> on <?= $post['date'] ?></p>-->
		<p>Posted on <?= $post['date'] ?></p>
	</div>
	
	<div class="post-content">
		<p><?= $post['content'] ?></p>
	</div>
	<br/>
	<!-- <p>
		<span style="font-size:18px;"><a href="/social-media/blog/category/">Categories:</a> </span>
		<? foreach ($post['categories'] as $category) { ?>
			<a href="/social-media/blog/category/<?= str_replace(" ", "-", $category) ?>"><?= $category ?></a>
		<? } ?>
	</p> -->
	<p>
		<span style="font-size:18px;"><a href="/social-media/blog/tag">Tags:</a> </span>
		<? foreach ($post['tags'] as $tag) { ?>
			<a href="/social-media/blog/tag/<?= str_replace(" ", "-", $tag) ?>"><?= $tag ?></a>
		<? } ?>
	</p>
</div>

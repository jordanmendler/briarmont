<!-- This is the view used for displaying a blog post -->
<!DOCTYPE html>
<html lang="en">
<title>Briarmont Blog</title>
<div id="hero-slider" style="color:rgb(255,255,255); background-color:rgba(0,0,0,0);">
	<ul>
		<li><a href="/blog" style="color:rgb(255,255,255)">Latest</a></li>
		<li><a href="/blog/category" style="color:rgb(255,255,255)">Categories</a></li>
		<li><a href="/blog/tag" style="color:rgb(255,255,255)">Tags</a></li>
	</ul>
	<div class="mask">
		<div class="panel" id="panel-1" style="overflow:auto;">
			<section class="panelinfo">
				<h2 style="color:rgb(255,255,255);"><?= $post['title'] ?></h2>
				<p style="color:rgb(255,255,255);">Posted on <?= $post['date'] ?></p>
				<p style="color:rgb(255,255,255);"><?= $post['content'] ?></p>
				<br/>
				<p>
					<span style="font-size:18px;"><a href="/blog/category/">Categories:</a> </span>
					<? foreach ($post['categories'] as $category) { ?> 
						<a href="/blog/category/<?= str_replace(" ", "-", $category) ?>"><?= $category ?></a>
					<? } ?>
				</p>
				<p>
					<span style="font-size:18px;"><a href="/blog/tag">Tags:</a> </span>
					<? foreach ($post['tags'] as $tag) { ?>
						<a href="/blog/tag/<?= str_replace(" ", "-", $tag) ?>"><?= $tag ?></a>
					<? } ?>
				</p>
			</section>
		</div>
	</div>
<div class="clear"></div>
</div>


<section id="social">
	<figure><a href="https://www.facebook.com/BriarmontCo?ref=hl"><img src="/images/facebook.gif" alt="facebook" /></a></figure>
	<figure><a href="https://twitter.com/briarmontco"><img src="/images/twitter.gif" alt="twitter" /></a></figure>
	<figure><a href="http://pinterest.com/briarmontco/"><img src="/images/pinterest.gif" alt="pinterest" /></a></figure>
	<figure><a href="http://briarmontco1.tumblr.com/"><img src="/images/tumblr.gif" alt="tumblr" /></a></figure>
</section>
	</div><!--main-content-index ends here-->

<section id="hours">
<div id="body-background"><img src="/images/blog-photo.jpg" alt="interior full-size photo" /></div>	
	

	</body>
</html>

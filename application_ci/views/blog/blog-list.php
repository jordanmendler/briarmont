<!-- This is the view used for listing all articles, e.g. the latest posts, posts from a specific catgory, or posts from a specific tag -->
<!DOCTYPE html>
<html lang="en">
<title>Briarmont Blog</title>


<div id="hero-slider" style="color:rgb(255,255,255); background-color:rgba(0,0,0,0);">
	<ul>
		<li><a href="/blog" <? if ($type == "Latest") { echo 'class="active"'; } ?> style="color:rgb(255,255,255)">Latest</a></li>
		<li><a href="/blog/category" <? if ($type == "Categories") { echo 'class="active"'; } ?> style="color:rgb(255,255,255)">Categories</a></li>
		<li><a href="/blog/tag" <? if ($type == "Tags") { echo 'class="active"'; } ?> style="color:rgb(255,255,255)">Tags</a></li>
	</ul>
	<div class="mask" style="color:rgb(255,255,255">
		<div class="slider-body">
			<div class="panel" id="panel-1">
			<section class="panelinfo">
				<h2 style="color:rgb(255,255,255)">
					<?
						if ($type == "Latest")
						{
							echo $type;
						}
						else
						{
							echo $parent . "  »  " . $tag;
						}
					?>
				</h2>

				<? foreach ($posts as $post) { ?>
					<p>
						<a href="<?= $post['link']?>"><?= $post['title'] ?></a> on <?= $post['date'] ?> in
						<?
							for ($i = 0 ; $i < count($post['categories']) ; $i++)
							{
								if ($i > 0)
								{
									echo ", ";
								}

								$cat = $post['categories'][$i];
								/* echo '<a href="/blog/category/' . $cat . '">' . $cat . '</a>'; */
								echo "$cat";
							}
						?>
					</p>
				<? } ?>

				<div class="page-nav">
					<? if (isset($prev_page)) { ?>
						<a href="<?= $prev_page ?>" style="color:rgb(255,255,255); float:left">Prev</a>
					<? } ?>

					<? if (count($posts) == $list_max ) { ?>
						<a href="<?= $next_page ?>" style="color:rgb(255,255,255); float:right">Next</a>
					<? } ?>
				</div>
			</section>
			</div>
		</div>
	</div> <!-- .mask -->
	<div class="clear"></div>
</div> <!-- #hero-slider -->


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

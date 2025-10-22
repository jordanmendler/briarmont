<div class="col-md-10 clearfix home-height">
<h2>Social Media</h2>
<div id="social-media">
	<p>
	Stay on top of the latest news and insight from Briarmont Estates & Mansion and our portfolio companies and join the conversation. Read our blogs, watch our videos and follow us on social media.
	</p>
	<div id="follow-us">
	<div class="social-logos">
                <a href="https://briarmont.com" target="_blank"><img src="/images/social-media/logo-facebook.jpg" alt="Briarmont Estates & Mansion"/></a>
                <a href="https://briarmont.com" target="_blank"><img src="/images/social-media/logo-twitter.jpg" alt="Briarmont Estates & Mansion"/></a>
                <a href="https://briarmont.com" target="_blank"><img src="/images/social-media/logo-linkedin.jpg" alt="Briarmont Estates & Mansion"/></a>
                <a href="https://briarmont.com" target="_blank"><img src="/images/social-media/logo-googleplus.jpg" alt="Briarmont Estates & Mansion"/></a>
	</div>
</div>
</div>
<div class="cards">
<div id="blog" style="float:left;width:100%;clear:both;">
	<div class="blog-area">  
<?php if ( isset($_GET['p']) )
        {
            $start_point = $_GET['p'];
            }else{
				$start_point = 1;
			}
 		$start_point = $start_point*7 - 7 ;
		$i = 1;
		$posts = array_slice($posts, $start_point, 7);
		foreach($posts as $post)
		{
			//if($i <= 7 ){
			$color = $bg_color['Briarmont Estates & Mansion'];
			$image = $bg_image['Briarmont Estates & Mansion'];
			// Find background
			foreach ($post['categories'] as $category)
			{
				if (array_key_exists($category, $bg_image))
				{
					$color = $bg_color[$category];
					$image = $bg_image[$category];
					// If no color, have to choose large image if needed
					if ($color == "none")
					{
						if ($i == 1 || $i == 5)
						{
							$image = str_replace('blog', 'blog-large', $bg_image[$category]);
						}
					}
					break;
				}
			}
?>
<?php   
		$page_next = '';
			$color='#b2aea5';
			$color_ct = '#792316';
			$color_bhc = '#305c69';
			$image_ct = '/images/social-media/ctlogo-blog.png';
			$image_bhc = '/images/social-media/bhclogo-blog.png';
			$image_veloz = '/images/social-media/velozlogo-blog.png';
  			$current_host = $post['link'];
				if (false !== strpos($current_host,'the-veloz-group')) {
				//if ((parse_url($post['link'], PHP_URL_HOST)== $_SERVER['HTTP_HOST'])) {
				?>		
			<div class="cards<?= $i ?>">
            	<div class="blog-grid grid<?= $i ?>" style="background-color:<?= $color ?>">
				<a class="big-link" href="<?= $post['link'] ?>" target="_blank"></a>
		<div class="blog-img"><img src="<?=  $image_veloz ?>" alt="<?= $post['title'] ?>"></div>
				<div class="title t-pos<?= $i ?>"><?= $post['title'] ?></div><div class="blog-date"><i><?php 
				$d = date_parse_from_format("d-m-Y", $post['date']);
				echo $monthName = date('F', mktime(0, 0, 0, $d["month"], 10)).' '; echo $d["day"].', '; echo $d["year"]; ?>
				<?php /*?><?= $post['date'] ?><?php */?></i></div>
				</div>
			</div>
            	<?php
				} else if(false !== strpos($current_host,'custom-tobacco')) {
						$new_link = str_replace('http://blogs.thevelozgroup.com/custom-tobacco', 'https://www.customtobacco.com/blog/post', $current_host);
				?>
                		<div class="cards<?= $i ?>">
            <div class="blog-grid grid<?= $i ?>" style="background-color:<?= $color_ct ?>">
			<a class="big-link" target="_blank" href="<?= $new_link ?>"></a>
            	<div class="blog-img"><img src="<?=  $image_ct ?>" alt="<?= $post['title'] ?>"></div>
				<div class="title t-pos<?= $i ?>"><?= $post['title'] ?></div><div class="blog-date"><i><?php 
				$d = date_parse_from_format("d-m-Y", $post['date']);
				echo $monthName = date('F', mktime(0, 0, 0, $d["month"], 10)).' '; echo $d["day"].', '; echo $d["year"]; ?><?php /*?><?= $post['date'] ?><?php */?></i></div>
				</div>
			</div>
            <?php	
				}else if(false !== strpos($current_host,'beverly-hills-chairs')) {
				$new_link = str_replace('http://blogs.thevelozgroup.com/beverly-hills-chairs', 'https://www.beverlyhillschairs.com/blog/post', $current_host);
				?>
            <div class="cards<?= $i ?>">
            <div class="blog-grid grid<?= $i ?>" style="background-color:<?= $color_bhc ?>">
			<a class="big-link" target="_blank" href="<?= $new_link ?>"></a>
            	<div class="blog-img"><img src="<?=  $image_bhc ?>" alt="<?= $post['title'] ?>"></div>
				<div class="title t-pos<?= $i ?>"><?= $post['title'] ?></div><div class="blog-date"><i><?php 
				$d = date_parse_from_format("d-m-Y", $post['date']);
				echo $monthName = date('F', mktime(0, 0, 0, $d["month"], 10)).' '; echo $d["day"].', '; echo $d["year"]; ?><?php /*?> <?= $post['date'] ?><?php */?></i></div>
				</div>
			</div>
               <?php	}
			$i++;
		}
?></div>
	<div class="social-navigation">
	<?php if (isset($prev_page)) { ?>
		<a href="<?= $prev_page ?>" class="prev">Prev</a>
	<?php } ?>
	<?php 
	if ((count($posts) == $tiles)) { ?>
	<a href="<?= $next_page ?>" class="next">Next</a>
	<?php } ?>
	</div>
</div>
<?php
/*
$apikey = "AIzaSyCnwNmmNvR24ohYtunhfyWlbNEj4lretQE";
$per_page = 6;
$search = "";
$category = "2"; //autos
$query1 = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCnwNmmNvR24ohYtunhfyWlbNEj4lretQE&channelId=UCEgK7-UFovJqI7CAZCPG_Nw&part=snippet,id&order=date&maxResults=20";
$query2 = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCnwNmmNvR24ohYtunhfyWlbNEj4lretQE&channelId=UC6BPodXqii9lMAiNXEQoV4A&part=snippet,id&order=date&maxResults=20";
$query3 = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCnwNmmNvR24ohYtunhfyWlbNEj4lretQE&channelId=UC7gfXpJ1RyVPdxneoR9fdig&part=snippet,id&order=date&maxResults=20";
$json_file31 = file_get_contents($query1);
$json_file32 = file_get_contents($query2);
$json_file33 = file_get_contents($query3);
$json_file34 = file_get_contents($query4);
$jfo31 = json_decode($json_file31,true);
$jfo32 = json_decode($json_file32,true);
$jfo33 = json_decode($json_file33,true);
$jfo34 = json_decode($json_file34,true);?>
<script>
    var items =Array();
</script>
<?php foreach($jfo31['items'] as $val) {if(isset($val['id']['videoId'])){$id = $val['id']['videoId'];}else {}?>
<?php 
echo '<script>
    	items.push("'.$id.'");
     </script>';
 }?>
<script>
    var item1 = items[Math.floor(Math.random()*items.length)];
	document.write("<div class='cards8'><div class='blog-grid grid8'><a href='https://www.youtube.com/watch?v="+item1+"&rel=0' rel='prettyPhoto'><div class='image-logo-vg'></div><img src='http://img.youtube.com/vi/"+item1+"/hqdefault.jpg' width='280' /></div></div>");
</script>
    <script>
    	var items =Array();
	</script>
<?php foreach($jfo32['items'] as $val) {if(isset($val['id']['videoId'])){$id = $val['id']['videoId'];}else {}?>
<?php 
echo '<script>
    	items.push("'.$id.'");
     </script>';
 }?>
<script>
    var item1 = items[Math.floor(Math.random()*items.length)];
	document.write("<div class='cards9'><div class='blog-grid grid9'><a href='https://www.youtube.com/watch?v="+item1+"&rel=0' rel='prettyPhoto'><div class='image-logo'></div><img src='http://img.youtube.com/vi/"+item1+"/hqdefault.jpg' width='280' /></div></div>");
</script>
    <script>
    var items =Array();
</script>
<?php foreach($jfo33['items'] as $val) {if(isset($val['id']['videoId'])){$id = $val['id']['videoId'];}else {}?>
<?php 
echo '<script>
    	items.push("'.$id.'");
     </script>';
 }?>
<script>
    var item1 = items[Math.floor(Math.random()*items.length)];
	document.write("<div class='cards10'><div class='blog-grid grid10'><a href='https://www.youtube.com/watch?v="+item1+"&rel=0' rel='prettyPhoto'><div class='image-logo-bhc'></div><img src='http://img.youtube.com/vi/"+item1+"/hqdefault.jpg' width='280' /></div></div>");
</script>
<script>
    var items =Array();
</script>
<?php foreach($jfo33['items'] as $val) {if(isset($val['id']['videoId'])){$id = $val['id']['videoId'];}else {}?>
<?php 
echo '<script>
    	items.push("'.$id.'");
     </script>';
 }?>
<script>
    var item1 = items[Math.floor(Math.random()*items.length)];
	document.write("<div class='cards11'><div class='blog-grid grid11'><a href='https://www.youtube.com/watch?v="+item1+"&rel=0' rel='prettyPhoto'><div class='image-logo-bhc'></div><img src='http://img.youtube.com/vi/"+item1+"/hqdefault.jpg' width='280' /></div></div>");
</script>
 * 
 */ ?>
 </div>
 </div><!-- cards main function ends -->
<script type="text/javascript" src="/js/plugins.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css" />
<script type="text/javascript" src="/js/index.js"></script>
<style type="text/css">
      .cards {margin: auto;}
      .card {width: 210px;overflow: hidden;opacity: 0;}
      .card--loaded {opacity: 1;}
</style>
<script>
      (function(){
        function grid() {
          minigrid({
            container: '.cards',
            item: '.card',
            gutter: 6
          });
        }
        window.addEventListener('resize', function(){
          grid();
        });
        grid();
      })();
    </script>
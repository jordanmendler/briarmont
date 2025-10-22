<?php
	class Blog_Model extends CI_Model
	{
		var $blog_feed = ""; // URL of wordpress blog, so can get feed
		var $ct_feed = "";
		var $bhc_feed = "";
		var $blog_root = ""; // URL to the blog in this webapp
		var $ct_root = ""; 
		var $bhc_root = ""; 
		var $post_root = ""; // If there is anything extra to path to a post in this web app. /post means we'd have $blog_root/$post_root/$wordpress_slug to view access the blog post within this webapp
		var $ctpost_root = "";
		var $bhcpost_root = "";

		function setFeed($feed, $ct, $bhc)
		{
			$this->blog_feed = $feed;
			$this->ct_feed = $ct;
			$this->bhc_feed = $bhc;
		}

		function setBlogRoot($root, $ct_root, $bhc_root)
		{
			$this->blog_root = $root;
			$this->ct_root = $ct_root;
			$this->bhc_root = $bhc_root;
		}

		function setPostRoot($root,$ctpost_root,$bhcpost_root)
		{
			$this->post_root = $root;
			$this->ctpost_root = $ctpost_root;
			$this->bhcpost_root = $bhcpost_root;
		}


		//Parse the RSS feed using SimplePie to get the latest posts for a given blog
		function getLatestBlogPosts($page = 1, $number_of_posts = 10)
		{
		
		return $this->getPosts($this->blog_feed . '/feed/', $this->ct_feed . '/feed/', $this->bhc_feed . '/feed/', $page, $number_of_posts);
		
		
		}
	
		//Parse the RSS feed using SimplePie to get all the posts                
		function getPosts($url,$url1,$url2, $page = 1, $number_of_posts=10)
		{
			$max_pages_to_pull = 10;  // max paged pages to pull posts from each url 
		
			//Load up the SimplePie functions
			require_once($_SERVER['DOCUMENT_ROOT'] . '/php/autoloader.php');
			//determine the range of posts
			$post_max = ($page * $number_of_posts) - 1;
			$post_min = ($page-1) * ($number_of_posts);
			$pages = array();
			
			//determine the set of pages we must grab from the feed
			$i = $post_min;
			$ceil_ten = $post_max + (10-($post_max%10));
			do {
				$pages[] = intval(floor($i/10)+1);
				$i += 10;
			} while($i < $ceil_ten);
				
			//array of posts
			$blog_posts = array();
			$blog_posts_feed_temp = array();
			$blog_posts_feed = [];
			$blog_posts_feed_temp_2 = array();
			$blog_posts_feed_2 = array();
			$blog_posts_feed_temp_3 = array();
			$blog_posts_feed_3 = array();
			

			//Find page range
			$min_page = $pages[0];
			$max_page = $pages[0];
			foreach($pages as $page)
			{
				$min_page = ($page < $min_page) ? $page : $min_page;
				$max_page = ($page > $max_page) ? $page : $max_page;
			}
			
			for($i=1; $i<$max_pages_to_pull; $i++){
				
				$feed_ary = array();
				$feed_ary[] = $url . '?paged='.$i;
				$feed = new SimplePie();
				$feed->set_feed_url($feed_ary);
				$feed->enable_cache(true);
				$feed->set_cache_location('cache');
				$feed->set_cache_duration(1800);
				$feed->init();
				$feed->handle_content_type();
				
				if($rss_items = $feed->get_items()){
					//echo 'welcome<br>';
					
					$rss_items = $feed->get_items(0, 10);
					foreach($rss_items as $item)
				{
					$categories = array();
					$tags = array();

					foreach($item->get_categories() as $category)
					{
						// Parse out if it should be a tag
						if ( substr( $category->get_label(), 0, 4) == "tag_"  )
						{
							$tags[] = substr($category->get_label(), 4);
						}
						else
						{
							$categories[] = $category->get_label();
						}
					}

					$current_post = array (
						'title'         => $item->get_title(),
						'author'        => $item->get_author()->get_name(),
						'date'          => $item->get_date('d-m-Y'),
						'link'		  => str_replace( $this->blog_feed, $this->blog_root . $this->post_root, $item->get_link()),
						'content'       => $item->get_content(), 
						'categories'    => $categories
					);
					
						$blog_posts_feed_temp[] = $current_post;
				}
				
				$blog_posts_feed = $blog_posts_feed_temp;
					
					
					}else{
						//echo 'not welcome<br>';
						break;
					}
				}
				
				// for ct code starts here
				
				
				for($i=1; $i<$max_pages_to_pull; $i++){
				
				$feed_ary = array();
				$feed_ary[] = $url1 . '?paged='.$i;
				$feed = new SimplePie();
				$feed->set_feed_url($feed_ary);
				$feed->enable_cache(true);
				$feed->set_cache_location('cache');
				$feed->set_cache_duration(1800);
				$feed->init();
				$feed->handle_content_type();
				
				if($rss_items = $feed->get_items()){
					//echo 'welcome<br>';
					
					$rss_items = $feed->get_items(0, 10);
					foreach($rss_items as $item)
				{
					$categories = array();
					$tags = array();

					foreach($item->get_categories() as $category)
					{
						// Parse out if it should be a tag
						if ( substr( $category->get_label(), 0, 4) == "tag_"  )
						{
							$tags[] = substr($category->get_label(), 4);
						}
						else
						{
							$categories[] = $category->get_label();
						}
					}

					$current_post = array (
						'title'         => $item->get_title(),
						'author'        => $item->get_author()->get_name(),
						'date'          => $item->get_date('d-m-Y'),
						'link'		  => str_replace( $this->blog_feed, 'https://www.customtobacco.com/blog/post', $item->get_link()),
						'content'       => $item->get_content(), 
						'categories'    => $categories
					);
				$blog_posts_feed_temp_2[] = $current_post;
				}
				
				$blog_posts_feed_2 = $blog_posts_feed_temp_2;
			
					
					}else{
						//echo 'not welcome<br>';
						break;
					}
				}
				
				
	
				// for bhc code starts here
				
				for($i=1; $i<$max_pages_to_pull; $i++){
				
				$feed_ary = array();
				$feed_ary[] = $url2 . '?paged='.$i;
				$feed = new SimplePie();
				$feed->set_feed_url($feed_ary);
				$feed->enable_cache(true);
				$feed->set_cache_location('cache');
				$feed->set_cache_duration(1800);
				$feed->init();
				$feed->handle_content_type();
				
				if($rss_items = $feed->get_items()){
					//echo 'welcome<br>';
					
					$rss_items = $feed->get_items(0, 10);
					foreach($rss_items as $item)
				{
					$categories = array();
					$tags = array();

					foreach($item->get_categories() as $category)
					{
						// Parse out if it should be a tag
						if ( substr( $category->get_label(), 0, 4) == "tag_"  )
						{
							$tags[] = substr($category->get_label(), 4);
						}
						else
						{
							$categories[] = $category->get_label();
						}
					}

					$current_post = array (
						'title'         => $item->get_title(),
						'author'        => $item->get_author()->get_name(),
						'date'          => $item->get_date('d-m-Y'),
						'link'		  => str_replace( $this->blog_feed, 'https://www.beverlyhillschairs.com/blog/post', $item->get_link()),
						'content'       => $item->get_content(), 
						'categories'    => $categories
					);
					
					$blog_posts_feed_temp_3[] = $current_post;
				}
				
			
				$blog_posts_feed_3 = $blog_posts_feed_temp_3;
			
					
					}else{
						//echo 'not welcome<br>';
						break;
					}
				}
					
		
				// merge the arrray values from url , url1  and url2
				$blog_posts = array_merge($blog_posts_feed,$blog_posts_feed_2,$blog_posts_feed_3);
				
				
				function cmp($a, $b)
				{
					if (strtotime($b["date"]) == strtotime($a["date"])) {
						return 0;
					}else{
					return (strtotime($b["date"]) < strtotime($a["date"])) ? -1 : 1;
					}
				}
				
				usort($blog_posts, "cmp");
				 
						
			//Loop through wordpress page set and return custom page of posts for sorting date wise
			for($i=0; $i<count($pages); $i++)
			{
				$pg = $pages[$i];
				$p_min = ($pg==$min_page) ? $post_min%10 : 0;
				$num_get = min($number_of_posts, 10-$p_min);
			
			}
						
			return $blog_posts;
			}
				
				

		//Parse a custom RSS feed of Categories using SimplePie to get all categories for a given blog
		function getCategories($page = 1, $number_of_categories = 10)
		{
			//Load up the SimplePie functions
			require_once($_SERVER['DOCUMENT_ROOT'] . '/php/autoloader.php');

				$feed = new SimplePie();
				$feed->set_feed_url();
				$ct = new SimplePie();
				$ct->set_feed_url();
				$bhc = new SimplePie();
				$bhc->set_feed_url();
				
				
				$feed->init();
				$feed->handle_content_type();
				
				$ct->init();
				$ct->handle_content_type();
				$bhc->init();
				$bhc->handle_content_type();
				
				
			//array of categories
			$blog_cats = array();

			//Item starting point
			$cat_min = ($page-1)*$number_of_categories;
			$cat_num = $feed->get_item_quantity($number_of_categories);

			//Build an array of all the items in page
			$rss_items = $feed->get_items($cat_min,$cat_num);

			foreach($rss_items as $item)
			{
				$current_cat = array (
					'name'		=> $item->get_title(),
					'link'          => $item->get_link(),
					'description'	=> $item->get_content() );

				$blog_cats[] = $current_cat;
			}
			
		//Build an array of all the items in page
			$rss_items_ct = $ct->get_items($cat_min,$cat_num);

			foreach($rss_items_ct as $item)
			{
				$current_cat = array (
					'name'		=> $item->get_title(),
					'link'          => $item->get_link(),
					'description'	=> $item->get_content() );

				$blog_cats_ct[] = $current_cat;
			}
			
			
		//Build an array of all the items in page
			$rss_items_bhc = $bhc->get_items($cat_min,$cat_num);

			foreach($rss_items_bhc as $item)
			{
				$current_cat = array (
					'name'		=> $item->get_title(),
					'link'          => $item->get_link(),
					'description'	=> $item->get_content() );

				$blog_cats_bhc[] = $current_cat;
			}

			$blog_cats= array_merge($blog_cats,$blog_cats_ct,$blog_cats_bhc);
			return $blog_cats;
		}

		//Parse a custom RSS feed of Tags using SimplePie to get all tags
		function getTags($page = 1, $number_of_tags = 10)
		{
			//Load up the SimplePie functions
			require_once($_SERVER['DOCUMENT_ROOT'] . '/php/autoloader.php');

			$feed = new SimplePie();
			$feed->set_feed_url();
			$ct->set_feed_url();
			$bhc->set_feed_url();

			$feed->init();
			$feed->handle_content_type();
			$ct->init();
			$ct->handle_content_type();
			$bhc->init();
			$bhc->handle_content_type();

			//array of tags
			$blog_tags = array();

			//Determine page of tags
       		$tag_min = ($page-1)*$number_of_tags;
            $tag_num = $feed->get_item_quantity($number_of_tags);


			//Build an array of all the items
			$rss_items = $feed->get_items($tag_min, $tag_num);

			foreach($rss_items as $item)
			{
				$current_tag = array (
					'name'		=> $item->get_title(),
					'link'		=> $item->get_link(),
					'description'	=> $item->get_content() );

				$blog_tags[] = $current_tag;
			}
			
		//Build an array of all the items
			$rss_items_ct = $ct->get_items($tag_min, $tag_num);

			foreach($rss_items_ct as $item)
			{
				$current_tag = array (
					'name'		=> $item->get_title(),
					'link'		=> $item->get_link(),
					'description'	=> $item->get_content() );

				$blog_tags_ct[] = $current_tag;
			}
			
		//Build an array of all the items
			$rss_items_bhc = $bhc->get_items($tag_min, $tag_num);

			foreach($rss_items_bhc as $item)
			{
				$current_tag = array (
					'name'		=> $item->get_title(),
					'link'		=> $item->get_link(),
					'description'	=> $item->get_content() );

				$blog_tags_bhc[] = $current_tag;
			}
$blog_tags = array_merge($blog_tags,$blog_tags_ct,$blog_tags_bhc);
			return $blog_tags;
		}

		//Parse a Post feed for a given category name(slug) using SimplePie
		function getPostsbyCategory($cat_name, $page = 1, $number_of_posts = 10)
		{
			return $this->getPosts($this->blog_feed . '/category/' . $cat_name . '/feed/',
$this->ct_feed . '/category/' . $cat_name . '/feed/',
$this->bhc_feed . '/category/' . $cat_name . '/feed/',
			(int)$page, (int)$number_of_posts);
		}

		//Parse a Post feed for a given tag name(slug) using SimplePie
		function getPostsbyTag ($tag_name, $page = 1, $number_of_posts = 10)
		{
			return $this->getPosts($this->blog_feed . '/tag/' . $tag_name . '/feed/',
$this->ct_feed . '/tag/' . $tag_name . '/feed/',
$this->bhc_feed . '/tag/' . $tag_name . '/feed/',
			(int) $page, (int) $number_of_posts);
		}

		// Parse the RSS feed generated by posts satisfying the given search parameters using SimplePie
		// Ideally, this function is given search parameters to uniquely identify a single post such as the post name or id.
		// The search parameters must begin with 'q_' followed by a valid search condition for the array key. You can specify 
		// query arguments based on the following page: http://codex.wordpress.org/Class_Reference/WP_Query#Parameters
		//
		// Returns a single post
		function getPost($slug)
		{
			//Load up the SimplePie functions
			require_once($_SERVER['DOCUMENT_ROOT'] . '/php/autoloader.php');

			$url = '/post-feed/?';


			$split = explode('/', $slug);
			for ($i = count($split) - 1 ; $i > 0 ; $i--)
			{
				if ( $split[$i] != "" )
				{
					$slug = $split[$i];
					break;
				}
			}

			$query_string = http_build_query( array('q_name' => $slug) );
				
			$feed = new SimplePie();
			$feed->set_feed_url( $this->blog_feed . $url . $query_string);
			$feed->init();
			$feed->handle_content_type();
			$rss_item = $feed->get_item();
            
			$categories = array();
			$tags = array();
		
			if($rss_item){ 
			
					
			foreach($rss_item->get_categories() as $category)
			{
				// Parse out if it should be a tag
				if ( substr( $category->get_label(), 0, 4) == "tag_"  )
				{
					$tags[] = substr($category->get_label(), 4);
				}
				else
				{
					$categories[] = $category->get_label();
				}
			}
			
			// end of foreach loop
			
			$content = $rss_item->get_content();
			/* Get content and fix all links in that blog to other categories, tags, or posts */
			// Category
			$content = str_replace('<a href="' . $this->blog_feed . '/category', '<a href="' . $this->blog_root . '/category', $content);
			// Tag
			$content = str_replace('<a href="' . $this->blog_feed . '/tag', '<a href="' . $this->blog_root . '/tag', $content);
			// Everything else (e.g. posts)
			$content = str_replace('<a href="' . $this->blog_feed, '<a href="' . $this->blog_root . $this->post_root, $content);
			
			$current_post1 = array (
				'title'         => $rss_item->get_title(),
				'author'        => $rss_item->get_author()->get_name(),
				'date'          => $rss_item->get_date(),
				'content'       => $content,
				'categories'    => $categories,
				'tags'          => $tags
			);
			
			$current_post = $current_post1;
			
			}elseif($rss_item_ct){
			
						
			
			//for ct test
		
		foreach($rss_item_ct->get_categories() as $category_ct)
			{
		
				// Parse out if it should be a tag
				if ( substr( $category_ct->get_label(), 0, 4) == "tag_"  )
				{
					$tags_ct[] = substr($category_ct->get_label(), 4);
				}
				else
				{
					$categories_ct[] = $category_ct->get_label();
				}
			}
			// end of foreach loop
			$content_ct = $rss_item_ct->get_content();
			/* Get content and fix all links in that blog to other categories, tags, or posts */
			// Category
			$content_ct = str_replace('<a href="' . $this->ct_feed . '/category', '<a href="' . $this->ct_root . '/category', $content_ct);
			// Tag
			$content_ct = str_replace('<a href="' . $this->ct_feed . '/tag', '<a href="' . $this->ct_root . '/tag', $content_ct);
			// Everything else (e.g. posts)
			$content_ct = str_replace('<a href="' . $this->ct_feed, '<a href="' . $this->blog_root . $this->ctpost_root, $content_ct);
			
			$current_post2 = array (
				'title'         => $rss_item_ct->get_title(),
				'author'        => $rss_item_ct->get_author()->get_name(),
				'date'          => $rss_item_ct->get_date(),
				'orderby'       => 'post_date',
				
				'content'       => $content_ct,
				'categories'    => $categories_ct,
				'tags'          => $tags_ct
			);
			
			$current_post = $current_post2;
			
			
			}elseif($rss_item_bhc){
			
			
			
			//for bhc test			
			
		foreach($rss_item_bhc->get_categories() as $category_bhc)
			{
				// Parse out if it should be a tag
				if ( substr( $category_bhc->get_label(), 0, 4) == "tag_"  )
				{
					$tags_bhc[] = substr($category_bhc->get_label(), 4);
				}
				else
				{
					$categories_bhc[] = $category_bhc->get_label();
				}
			}
			// end of for each loop
			
			$content_bhc = $rss_item_bhc->get_content();
			
			/* Get content and fix all links in that blog to other categories, tags, or posts */
		    // Category
			$content_bhc = str_replace('<a href="' . $this->bhc_feed . '/category', '<a href="' . $this->bhc_root . '/category', $content_bhc);
			// Tag
			$content_bhc = str_replace('<a href="' . $this->bhc_feed . '/tag', '<a href="' . $this->bhc_root . '/tag', $content_bhc);
			// Everything else (e.g. posts)
			$content_bhc = str_replace('<a href="' . $this->bhc_feed, '<a href="' . $this->blog_root . $this->bhcpost_root, $content_bhc);	
			
			$current_post3 = array (
				'title'         => $rss_item_bhc->get_title(),
				'author'        => $rss_item_bhc->get_author()->get_name(),
				'date'          => $rss_item_bhc->get_date('F j,Y'),
				'orderby'       => 'post_date',
				
				'content'       => $content_bhc,
				'categories'    => $categories_bhc,
				'tags'          => $tags_bhc
			);
			
			$current_post = $current_post3;

			
			}

				

			return $current_post;
		}

	}
?>

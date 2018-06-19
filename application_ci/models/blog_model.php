<?php
	class Blog_Model extends CI_Model
	{
		var $blog = "http://blogs.thevelozgroup.com/briarmont";

		//Parse the RSS feed using SimplePie to get the latest posts for a given blog
		function getLatestBlogPosts($page = 1, $number_of_posts = 10)
		{
			return $this->getPosts($this->blog . '/feed/', $page, $number_of_posts);
		}
	
		//Parse the RSS feed using SimplePie to get all the posts                
		function getPosts($url, $page = 1, $number_of_posts=10)
		{
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

			//Find page range
			$min_page = $pages[0];
			$max_page = $pages[0];
			foreach($pages as $page)
			{
				$min_page = ($page < $min_page) ? $page : $min_page;
				$max_page = ($page > $max_page) ? $page : $max_page;
			}
			//Loop through wordpress page set and return custom page of posts
			for($i=0; $i<count($pages); $i++)
			{
				$pg = $pages[$i];
				$f_url = $url . '?paged='.$pg;
				$feed = new SimplePie();
				$feed->set_feed_url($f_url);
				$feed->init();
				$feed->handle_content_type();

				/*If it's the smallest page number, it sets $p_min to the mapping of 
				 * $post_min onto the page*/
				$p_min = ($pg==$min_page) ? $post_min%10 : 0;

				/* If it's the largest page number, it sets $num_get to the mapping of 
				 * $post_max onto the page +1 to determine the posts remaining. Else, 
				 * sets it to the number of posts we should get starting at $p_min*/
				$num_get = min($number_of_posts, 10-$p_min);

				//Build an array of all the items
				$rss_items = $feed->get_items($p_min, $num_get);

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
						'date'          => $item->get_date(),
						'link'		=> str_replace( $this->blog, "/blog/post" , $item->get_link()),
						'content'       => $item->get_content(), 
						'categories'    => $categories
					);
					$blog_posts[] = $current_post;
				}
				$number_of_posts -= $num_get;
			}
			return $blog_posts;
		}

		//Parse a custom RSS feed of Categories using SimplePie to get all categories for a given blog
		function getCategories($page = 1, $number_of_categories = 10)
		{
			//Load up the SimplePie functions
			require_once($_SERVER['DOCUMENT_ROOT'] . '/php/autoloader.php');

			$feed = new SimplePie();
			$feed->set_feed_url( $this->blog . '/category-feed/' );
			$feed->init();
			$feed->handle_content_type();

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
					'link'		=> str_replace( "http://blogs.thevelozgroup.com", "" , $item->get_link()),
					'description'	=> $item->get_content() );

				$blog_cats[] = $current_cat;
			}

			return $blog_cats;
		}

		//Parse a custom RSS feed of Tags using SimplePie to get all tags
		function getTags($page = 1, $number_of_tags = 10)
		{
			//Load up the SimplePie functions
			require_once($_SERVER['DOCUMENT_ROOT'] . '/php/autoloader.php');

			$feed = new SimplePie();
			$feed->set_feed_url($this->blog . '/tag-feed/');

			$feed->init();
			$feed->handle_content_type();

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
					'link'		=> str_replace( "http://blogs.thevelozgroup.com", "" , $item->get_link()),
					'description'	=> $item->get_content() );

				$blog_tags[] = $current_tag;
			}

			return $blog_tags;
		}

		//Parse a Post feed for a given category name(slug) using SimplePie
		function getPostsbyCategory($cat_name, $page = 1, $number_of_posts = 10)
		{
			return $this->getPosts($this->blog . '/category/' . $cat_name . '/feed/', (int)$page, (int)$number_of_posts);
		}

		//Parse a Post feed for a given tag name(slug) using SimplePie
		function getPostsbyTag ($tag_name, $page = 1, $number_of_posts = 10)
		{
			return $this->getPosts($this->blog . '/tag/' . $tag_name . '/feed/', (int) $page, (int) $number_of_posts);
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
			$feed->set_feed_url( $this->blog . $url . $query_string);
			$feed->init();
			$feed->handle_content_type();
			
			//Build a SimplePie item object
			$rss_item = $feed->get_item();

			$categories = array();
			$tags = array();

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

			$current_post = array (
				'title'         => $rss_item->get_title(),
				'author'        => $rss_item->get_author()->get_name(),
				'date'          => $rss_item->get_date(),
				'content'       => $rss_item->get_content(),
				'categories'    => $categories,
				'tags'          => $tags
			);

			return $current_post;
		}

	}
?>

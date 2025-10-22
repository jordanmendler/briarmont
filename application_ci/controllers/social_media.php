<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Social_Media extends MY_Controller
{
	var $num_tiles = 7;
	var $list_max = 7;
	//var $num_tiles_ct = 7;
	//var $list_max_ct = 10;
	//var $num_tiles_bhc = 7;
	//var $list_max_bhc = 10;

	private function initModel()
	{
                $this->load->model('blog_model');
                // This is the URL to the wordpress blog (e.g. the backend)
                
                $feed = 'http://blogs.thevelozgroup.com/the-veloz-group';
		$ct = 'http://blogs.thevelozgroup.com/custom-tobacco';
		$bhc = 'http://blogs.thevelozgroup.com/beverly-hills-chairs';
					
                //$feed1 = array($feed, $ct, $bhc);
				//$feed1 = 'http://blogs.thevelozgroup.com/the-veloz-group';
                //$ct = 'http://blogs.thevelozgroup.com/custom-tobacco';
				//$bhc = 'http://blogs.thevelozgroup.com/beverly-hills-chairs';				
                $this->blog_model->setFeed($feed,  $ct, $bhc);
                //$this->blog_model->setFeed('http://blogs.thevelozgroup.com/custom-tobacco');
                // This is the URL to the blog on this webapp (e.g. the frontend)
                $this->blog_model->setBlogRoot("http://" . $_SERVER['HTTP_HOST'] . '/social-media/blog',"http://" . $_SERVER['HTTP_HOST'] . '/social-media/blog',"http://" . $_SERVER['HTTP_HOST'] . '/social-media/blog');
	}

	private function next()
	{
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$queryString = array();
		$queryString = $_GET;


		if (isset( $queryString['p'] ))
		{
			$queryString['p'] += 1;
			
		}
		else
		{
			$queryString['p'] = 2;
			
		}

		return $path . "?" . http_build_query($queryString) . '#blog';
	}

	private function prev()
	{
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$queryString = array();
		$queryString = $_GET;


		if (isset( $queryString['p'] ) && $queryString['p'] > 1)
		{
			$queryString['p'] -= 1; 
			return $path . "?" . http_build_query($queryString) . '#blog';
		}
		else
		{
			return NULL;
			
		}
	}

	//Return to the page from which you followed a link to the current page
	private function back()
	{
		
	}

	private function page()
	{
                if ( isset($_GET['p']) )
                {
                        return $_GET['p'];
                }
                else
                {
                        return 1;
                }
	}


	function index()
	{
		$this->data['title'] = 'Social Media';
		
		// Load divisions model for avenue V formating
                $this->load->model('divisions_model');
                $this->load->model('portfolio_model');
                $this->load->model('socialmedia_model');
                $this->initModel();

		//$this->data['videos_veloz'] = $this->socialmedia_model->getYoutubeFeed_veloz(); // FIXME: 
		//$this->data['videos_ct'] = $this->socialmedia_model->getYoutubeFeed_ct(); // FIXME:
		//$this->data['videos_bhc'] = $this->socialmedia_model->getYoutubeFeed_bhc(); // FIXME:
		$path = parse_url($_SERVER['REQUEST_URI'] );


		$this->data['page'] = $this->page();
		$this->data['tiles'] = $this->num_tiles;
		//$this->data['tilesct'] = $this->num_tiles_ct;
		//$this->data['tilesbhc'] = $this->num_tiles_bhc;
		$this->data['prev_page'] = $this->prev();
		$this->data['next_page'] = $this->next();
		$this->data['last_page'] = $this->back();


		$this->data['posts'] = $this->blog_model->getLatestBlogPosts($this->data['page'], $this->data['tiles']);
		

		// Add maps for all companies and  divisions as categories
		$categories = array_merge($this->divisions_model->get_divisions(), $this->portfolio_model->get_company_info());
		$categories_ct = array_merge($this->divisions_model->get_divisions(), $this->portfolio_model->get_company_info());
		$categories_bhc = array_merge($this->divisions_model->get_divisions(), $this->portfolio_model->get_company_info());

		// Add Misc
		$categories['Briarmont Estates & Mansion']['name'] = 'Briarmont Estates & Mansion';
		$categories['Briarmont Estates & Mansion']['icon'] = '/images/divisions/logos/veloz-153px.png';
		$categories['Briarmont Estates & Mansion']['color'] = '#b2aea5';
		
		// Add Misc for ct
		$categories_ct['Briarmont Estates & Mansion']['name'] = 'Custom Tobacco';
		$categories_ct['Briarmont Estates & Mansion']['icon'] = '/images/companies/custom-tobacco-blog.png';
		$categories_ct['Briarmont Estates & Mansion']['color'] = '#792316';
		
		// Add Misc for bhc
		$categories_bhc['Briarmont Estates & Mansion']['name'] = 'Briarmont Estates & Mansion';
		$categories_bhc['Briarmont Estates & Mansion']['icon'] = '/images/divisions/logos/veloz-153px.png';
		$categories_bhc['Briarmont Estates & Mansion']['color'] = '#305c69';

		// Youtube

		foreach ($categories as $category)
		{
			$name = $category['name'];
			if (array_key_exists('blog_image', $category))
			{
			$color = '#99a3a8';
				$this->data['bg_image'][$name] = $category['blog_image'];
				$this->data['bg_color'][$name] = $color;
			}
			else
			{
				$color = substr($category['color'], 1);
		        //list($r, $g, $b) = array($color[0].$color[1], $color[2].$color[3], $color[4].$color[5]);
				//$r = hexdec($r); $g = hexdec($g); $b = hexdec($b);
				$color = '#99a3a8';

				$this->data['bg_color'][$name] = $color;
				$this->data['bg_image'][$name] = $category['icon'];
			}
		}
		
		// for ct
		
		foreach ($categories_ct as $category_ct)
		{
			$name = $category_ct['name'];
			if (array_key_exists('blog_image', $category_ct))
			{
			$color_ct = '#97615f';
				$this->data['bg_image'][$name] = $category_ct['blog_image'];
				$this->data['bg_color'][$name] = $color_ct;
			}
			else
			{
				$color_ct = substr($category_ct['color'], 1);
		                //list($r, $g, $b) = array($color[0].$color[1], $color[2].$color[3], $color[4].$color[5]);
				//$r = hexdec($r); $g = hexdec($g); $b = hexdec($b);
				$color = '#97615f';

				$this->data['bg_color'][$name] = $color_ct;
				$this->data['bg_image'][$name] = $category_ct['icon'];
			}
		}
		
		// for bhc
		
		foreach ($categories_bhc as $category_bhc)
		{
			$name = $category_bhc['name'];
			if (array_key_exists('blog_image', $category_bhc))
			{
			$color_bhc = '#7f9e5e';
				$this->data['bg_image'][$name] = $category_bhc['blog_image'];
				$this->data['bg_color'][$name] = $color_bhc;
			}
			else
			{
				$color = substr($category_bhc['color'], 1);
		              //  list($r, $g, $b) = array($color[0].$color[1], $color[2].$color[3], $color[4].$color[5]);
				//$r = hexdec($r); $g = hexdec($g); $b = hexdec($b);
				$color_bhc = '#7f9e5e';

				$this->data['bg_color'][$name] = $color_bhc;
				$this->data['bg_image'][$name] = $category_bhc['icon'];
			}
		}


                $this->load_header();
                $this->load_view();
                $this->load_footer();
	}



	function blog($type, $var = NULL)
	{
                $this->initModel();
		$this->load_header();


		// If it's a category
		if ( $type == "category" )
		{
			$this->data['page'] = $this->page();
			$this->data['prev_page'] = $this->prev();
			$this->data['next_page'] = $this->next();

			// If it's a category
			if ( isset($var) )
			{
				$this->data['parent'] = '<a href="/social-media/blog/category">Categories</a>';
				$this->data['tag'] = $var;
				$this->data['list_max'] = $this->list_max;
				$this->data['posts'] = $this->blog_model->getPostsbyCategory($var, $this->data['page'], $this->list_max);
				$this->load_view("social-media/blog-article-list");
			}
			// Otherwise show all categories
			else
			{
				$this->data['type'] = 'Categories';
				$this->data['list_max'] = $this->list_max;
				$this->data['categories'] = $this->blog_model->getCategories($this->data['page'], $this->list_max);
				$this->load_view("social-media/blog-categories-list");
			}
		}
		// If it's a tag
		else if ( $type == "tag" )
		{
			$this->data['parent'] = '<a href="/social-media/blog/tag">Tags</a>';
			$this->data['page'] = $this->page();
			$this->data['prev_page'] = $this->prev();
			$this->data['next_page'] = $this->next();

			// If it's a tag
			if ( isset($var) )
			{
				$this->data['tag'] = $var;
				$this->data['list_max'] = $this->list_max;
				$this->data['posts'] = $this->blog_model->getPostsbyTag($var, $this->data['page'], $this->list_max);
				$this->load_view("social-media/blog-article-list");
			}
			// Otherwise show all tags
			else
			{
				$this->data['type'] = 'Tags';
				$this->data['list_max'] = $this->list_max;
				$this->data['categories'] = $this->blog_model->getTags($this->data['page'], 10);
				$this->load_view("social-media/blog-categories-list");
			}
		}
		// Otherwise its a post
		else
		{
			// Otherwise process blog post
			$blog_post = str_replace("/social-media", "", $_SERVER['REQUEST_URI']);

			$this->data['page'] = $this->page(); // FIXME
			$this->data['prev_page'] = $this->prev(); // FIXME
			$this->data['next_page'] = $this->next(); // FIXME
	
			$this->data['post'] = $this->blog_model->getPost($blog_post);

			$this->load_view("social-media/blog-post");
		}

		$this->load_footer();
	}
}

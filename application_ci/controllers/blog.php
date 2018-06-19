<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MY_Controller
{
	var $post_max = 5;
	var $tag_max = 8;

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

		return $path . "?" . http_build_query($queryString);
	}

	private function prev()
	{
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

		$queryString = array();
		$queryString = $_GET;


		if (isset( $queryString['p'] ) && $queryString['p'] > 1)
		{
			$queryString['p'] -= 1; 
			return $path . "?" . http_build_query($queryString);
		}
		else
		{
			return NULL;
			
		}
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
		$this->load->model('blog_model');
		$this->load_header();
		$this->data['type'] = 'Latest';


		$this->data['title'] = 'Blog';
		
		$this->data['page'] = $this->page();
		$this->data['prev_page'] = $this->prev();
		$this->data['next_page'] = $this->next();
		$this->data['list_max'] = $this->post_max;

		$this->data['posts'] = $this->blog_model->getLatestBlogPosts($this->data['page'], $this->data['list_max']);

       	        $this->load_header();
               	$this->load_view('blog/blog-list.php');
                $this->load_footer();
	}

	function post($var)
	{
		$this->load->model('blog_model');
		$this->load_header();

		$blog_post = str_replace("/post", "", $_SERVER['REQUEST_URI']);

		$this->data['page'] = $this->page();
		$this->data['prev_page'] = $this->prev();
		$this->data['next_page'] = $this->next();
	
		$this->data['post'] = $this->blog_model->getPost($blog_post);

		$this->load_view("blog/blog-post.php");
		$this->load_footer();
	}


	function category($var = NULL)
	{
		$this->load->model('blog_model');
		$this->load_header();
		$this->data['type'] = 'Categories';

		$this->data['page'] = $this->page();
		$this->data['prev_page'] = $this->prev();
		$this->data['next_page'] = $this->next();

		// If it's a category
		if ( isset($var) )
		{
			$this->data['parent'] = '<a href="/blog/category" style="color:rgb(255,255,255)">Categories</a>';
			$this->data['tag'] = $var;
			$this->data['list_max'] = $this->post_max;
			$this->data['posts'] = $this->blog_model->getPostsbyCategory($var, $this->data['page'], $this->data['list_max']);
			$this->load_view('blog/blog-list.php');
		}
		// Otherwise show all categories
		else
		{
			$this->data['list_max'] = $this->tag_max;
			$this->data['categories'] = $this->blog_model->getCategories($this->data['page'], $this->data['list_max']);
			$this->load_view('blog/blog-category-list.php');
		}

		$this->load_footer();
	}


	function tag($var = NULL)
	{
		$this->load->model('blog_model');
		$this->load_header();
		$this->data['type'] = 'Tags';


		$this->data['parent'] = '<a href="/blog/tag" style="color:rgb(255,255,255)">Tags</a>';
		$this->data['page'] = $this->page();
		$this->data['prev_page'] = $this->prev();
		$this->data['next_page'] = $this->next();

		// If it's a tag
		if ( isset($var) )
		{
			$this->data['tag'] = $var;
			$this->data['list_max'] = $this->post_max;
			$this->data['posts'] = $this->blog_model->getPostsbyTag($var, $this->data['page'], $this->data['list_max']);
			$this->load_view('blog/blog-list.php');
		}
		// Otherwise show all tags
		else
		{
			$this->data['list_max'] = $this->tag_max;
			$this->data['categories'] = $this->blog_model->getTags($this->data['page'], $this->data['list_max']);
			$this->load_view('blog/blog-category-list.php');
		}

		$this->load_footer();
	}
}

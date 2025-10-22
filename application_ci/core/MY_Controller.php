<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	var $data = array();

	function __construct()
	{
		parent::__construct();

		// Set current page and render header
		$this->data['page_class'] = str_replace('_', '-', $this->router->fetch_class());
		$this->data['page_method'] = str_replace('_', '-', $this->router->fetch_method());
		if (! isset($this->data['header']))
		{
			$this->data['header'] = '/images/briarmont-logo.png';
		}


		// Get navmenu information
		$this->load->model('navmenu_model');
		$this->data['navmenu'] = $this->navmenu_model->get_navmenu();

		// Load default model if there is one
		if (file_exists('application_ci/models/' . $this->data['page_class'] . '_model.php'))
		{
			$this->load->model($this->data['page_class'] . '_model');
		}

		// Set url if there isn't one
		if ($this->router->fetch_method() == "index")
		{
			$this->data['page_url'] = '/' . $this->data['page_class'];
		}
		else
		{
			$this->data['page_url'] = '/' . $this->data['page_class'] . '/' . $this->data['page_method'];
		}
	}


	protected function load_view($view = null)
	{
		if (isset($view))
		{
			$this->load->view("$view", $this->data);
		}
		else
		{
			$page = $this->data['page_class'] . '/';

			if ($this->data['page_method'] == '')
			{
				$page .= 'index';
			}
			else
			{
				$page .= $this->data['page_method'];
			}

			$page .= '.php';


			if (file_exists('application_ci/views/' . $page))
			{
				$this->load->view($page , $this->data);
			}
			else
			{
				echo $page;
				show_404();
			}
		}
	}


	protected function load_header()
	{
		$this->load->view('components/header', $this->data);
	}
//solutions header
protected function load_header_sol()
	{
		$this->load->view('components/header_solutions', $this->data);
	}
	

	protected function load_footer()
	{
		$this->load->view('components/footer', $this->data);
	}


	protected function load_coming_soon_body()
	{
		$this->load->view("coming_soon", $this->data);
	}


	protected function load_coming_soon()
	{
		$this->load_header();
		$this->load_coming_soon_body();
		$this->load_footer();
	}
}

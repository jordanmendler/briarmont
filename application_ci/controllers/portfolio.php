<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller
{
	function index()
	{$this->uri->segment(1 , 'blog');
		$this->data['title'] = 'Portfolio';
		$this->load_header();
		$this->data['portfolio'] = $this->portfolio_model->get_portfolio_info();
		$this->data['types'] = $this->portfolio_model->get_types_info();
		$this->load_view();
		$this->load_footer();
	}


	function companies()
	{
		$this->load->helper('url');
		redirect('/portfolio#Companies', 'location', 301);
	}


	function projects()
	{
		$this->load->helper('url');
		redirect('/portfolio#Projects', 'location', 301);
	}

}

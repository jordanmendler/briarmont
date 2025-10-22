<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Divisions extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->data['header'] =  '/images/divisions/headers/' . str_replace('_', '-', $this->router->fetch_method()) . '.png';
	}

	function index()
	{
		$this->data['title'] = 'Divisions';
		$this->data['header'] = '/images/divisions/headers/veloz.png';
		$this->data['divisions'] = $this->divisions_model->get_active_divisions();

		$this->load_header();
		$this->load_view('home/round_icons');
		$this->load_footer();
	}

	function veloz_global()
	{
              	$this->data['division'] =  ucwords(str_replace('-', ' ', $this->data['page_method']));
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}

	function solutions()
	{
		$this->load->helper('url'); 
		redirect('https://www.veloz-solutions.com', 'location', 301);
	}

	function veloz_solutions()
	{
		$this->load->helper('url'); 
		redirect('https://www.veloz-solutions.com', 'location', 301);
	}

	function veloz_capital()
	{
              	$this->data['division'] =  ucwords(str_replace('-', ' ', $this->data['page_method']));
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}


	function veloz_industries()
	{
              	$this->data['division'] =  ucwords(str_replace('-', ' ', $this->data['page_method']));
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}


	function veloz_innovations()
	{
              	$this->data['division'] =  ucwords(str_replace('-', ' ', $this->data['page_method']));
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}


	function veloz_entertainment()
	{
              	$this->data['division'] =  ucwords(str_replace('-', ' ', $this->data['page_method']));
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}


	function veloz_ventures()
	{
              	$this->data['division'] =  ucwords(str_replace('-', ' ', $this->data['page_method']));
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}

	function veloz_foundation()
	{
		$this->load->helper('url'); 
		redirect('/foundation/', 'location', 301);
	}
}

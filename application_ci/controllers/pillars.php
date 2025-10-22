<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pillars extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->data['title'] = 'Pillars';
		$this->data['header'] = '/images/pillars/headers/veloz.png';
		$this->data['pillars'] = $this->pillars_model->get_pillars();

		$this->load_header();
		$this->load_view('home/pillars');
		$this->load_footer();
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acquisitions extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		//$this->data['header'] =  '/images/divisions/headers/' . str_replace('_', '-', $this->router->fetch_method()) . '.png';
	}

	function index()
	{
		$this->data['title'] = 'Acquisitions';
		//$this->data['header'] = '/images/divisions/headers/veloz.png';
		//$this->data['divisions'] = $this->divisions_model->get_active_divisions();

		$this->load_header();
		$this->load_view('acquisitions/index');
		$this->load_footer();
	}
}

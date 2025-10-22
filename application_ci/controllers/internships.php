<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Internships extends MY_Controller
{
	function index()
	{
		$this->data['title'] = 'Internships';
		$this->load_header();
		$this->load_view();
		$this->load_footer();
	}
}

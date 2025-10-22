<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Domains extends MY_Controller
{
	function index()
	{
		$this->data['title'] = 'Domain Name Registration';
		$this->load_header();
		$this->load_view();
		$this->load_footer();
	}
}

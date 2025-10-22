<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Press extends MY_Controller
{
	function index()
	{
        $this->data['title'] = 'Press';
        $this->load_header();
		$this->load_view();
		$this->load_footer();
	}
}

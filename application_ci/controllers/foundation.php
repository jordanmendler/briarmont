<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foundation extends MY_Controller
{
	function index()
	{
        $this->data['title'] = 'Foundation';
        $this->data['header'] =  '/images/divisions/headers/veloz-foundation.png';
		$this->data['color'] = '#3BB9FF';
		$this->load_header();
		$this->load_view();
		$this->load_footer();
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tech_Test extends MY_Controller
{
	function index()
	{
		$this->load->helper('url');
		redirect('/tech-test/internship', 'refresh', 301);
	}

	function internship()
	{
		$this->load_header();
		$this->load->view('internships/tech_test.php', $this->data);
		$this->load_footer();
	}

	function full_time()
	{
		$this->load_header();
		$this->load->view('jobs/tech_test.php', $this->data);
		$this->load_footer();
	}
}

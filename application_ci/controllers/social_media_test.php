<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Social_Media_Test extends MY_Controller
{
	function index()
	{
		$this->load_header();
		$this->load->view('internships/social_media_test.php', $this->data);
		$this->load_footer();
	}
}

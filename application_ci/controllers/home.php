<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
	function index()
	{
		$this->load_header();
		$this->load->model('divisions_model');
		$this->data['divisions'] = $this->divisions_model->get_services();
		$this->load->view("home/index.php", $this->data);
		$this->load->view("home/round_icons.php", $this->data);
		$this->load_footer();
	}
}

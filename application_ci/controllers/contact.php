<?php
class Contact extends MY_Controller {
	public function index()
	{
	      
            $this->load_header();
	        $this->load->view('location.php');
		    $this->load_footer();
	}
}

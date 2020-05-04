<?php
class Location extends MY_Controller {
	public function index()
	{
        
	        $this->load->view('location.php');
	        $this->load_footer();
	}
}

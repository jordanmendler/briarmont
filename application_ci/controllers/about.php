<?php
class About extends MY_Controller {
    public function index()
    {
        
        $this->load_header(); 
        $this->load->view('about.php');
        $this->load_footer();
    }
}

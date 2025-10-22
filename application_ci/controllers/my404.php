<?php 
class my404 extends MY_Controller 
{
  public function index() 
    { 
        $this->load_header(); 
        $this->load->view("error_404", $this->data);
        $this->load_footer(); 
    } 
} 
?> 
<?php
class Cigars extends MY_Controller {
	public function index()
	{
	      
            $this->load_header();
	        $this->load->view('cigars/cigars.php');
		    $this->load_footer();
	}

public function classic()
	{
        
            
        
	       	$this->load_header();
       		$this->load_view('cigars/classic.php');
       		$this->load_footer();
    	}


	public function doublewrap()
	{
	       	$this->load_header();
       		$this->load_view('cigars/doublewrap.php');
       		$this->load_footer();
	}
public function maduro()
	{
	       	$this->load_header();
       		$this->load_view('cigars/maduro.php');
       		$this->load_footer();
	}
public function reserve()
	{
	       	$this->load_header();
       		$this->load_view('cigars/reserve.php');
       		$this->load_footer();
	}
}

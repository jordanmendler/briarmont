<?php
class Products extends MY_Controller
{
	public function index()
	{
        
            $this->load->library('cart');
        
	       	$this->load_header();
       		$this->load_view('products/products');
       		$this->load_footer();
    	}


	public function cigars()
	{
        
            $this->load->library('cart');
        
	       	$this->load_header();
       		$this->load_view('products/cigars');
       		$this->load_footer();
    	}


	public function additional()
	{
	       	$this->load_header();
       		$this->load_view('products/additional');
       		$this->load_footer();
	}
}

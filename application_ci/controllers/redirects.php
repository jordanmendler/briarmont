<?php
class Redirects extends MY_Controller
{
	public function index()
	{
            $this->load->library('cart');
            $this->load->helper('url');
        
            $bClassic = array ('id' => 101, 'qty'     => 1, 'price'   => 15, 'name'    => 'Classic');
            $this->cart->insert($bClassic);
        
	        redirect('cart');
    	}


	public function doublewrap()
	{
            $this->load->library('cart');
            $this->load->helper('url');
        
            $bDoubleWrap = array ('id' => 102, 'qty'     => 1, 'price'   => 30, 'name'    => 'Double Wrap');
            $this->cart->insert($bDoubleWrap);
        
	       	redirect('cart');
    	}


	public function maduro()
	{
            $this->load->library('cart');
            $this->load->helper('url');
        
            $bMaduro = array ('id' => 103, 'qty'     => 1, 'price'   => 50, 'name'    => 'Maduro');
            $this->cart->insert($bMaduro);
        
	       	redirect('cart');
	}
    
    public function reserve()
	{
            $this->load->library('cart');
            $this->load->helper('url');
        
            $bReserve = array ('id' => 104, 'qty'     => 1, 'price'   => 70, 'name'    => 'Reserve');
            $this->cart->insert($bReserve);
        
            redirect('cart');
	}
    
    public function empty_cart()
    {
            $this->load->library('cart');
            $this->load->helper('url');
        
            $this->cart->destroy();
        
            redirect('cart');
    }
    
    public function checkout()
    {
        redirect('cart/checkout');
    }
}

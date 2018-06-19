<?php
class Orderadmin extends MY_Controller
{
	public function index()
	{
        
          $this->load->library('cart');
        	$this->load->helper('form');
        	$this->load->helper('date');
        	$this->load->database();

	       	//$this->load_header();
       		$this->load_view('orderadmin/orderadmin');
       		//$this->load_footer();
    	}


	public function order_details($order_num)
	{
        
          $this->load->library('cart');
          $this->load->helper('form');
          $this->load->helper('date');
          $this->load->database();

          $data['order_id'] = $order_num;

          //$this->load_header();
          $this->load->view('orderadmin/order_details', $data);
          //$this->load_footer();
    	}

  public function update_order_status($order_num, $status)
  {
          $this->load->library('cart');
          $this->load->database();

          $sql_query = $this->db->query("UPDATE orders SET order_status = '$status' WHERE order_id = '$order_num'") ;
          self::order_details($order_num);

  }

  public function mark_shipped($order_num, $tracking_id)
  {
          $this->load->library('cart');
          $this->load->database();

          $status = 2;

          $sql_query = $this->db->query("UPDATE orders SET shipping_tracking_id = '$tracking_id', order_status = '$status' WHERE order_id = '$order_num'") ;
          self::send_email($order_num);
          self::order_details($order_num);

  }

  function send_email($order_num) {
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('email');

        $query = $this->db->query("SELECT * FROM orders WHERE order_id = '$order_num'"); 
        $order = $query->row();

        //EMAIL CONFIGURATION IS LOCATED IN config/email.php
        $this->email->set_newline("\r\n");

        // Set to, from, message, etc.

        $this->email->from('briarmontco@gmail.com', 'Briarmont & Co');
        $this->email->to($order->email); 
        $this->email->subject('Briarmont & Co Shipping Update');

        $Message = 
        "<b>Thanks for your order, ".$order->billing_name."!</b> <br><br>
        Your order has been shipped! <br><br>
        The shipment tracking number is: ".$order->shipping_tracking_id."<br><br> 
        If you have any questions, don't hesitate to contact us by email at ".mailto('briarmont@briarmontco.com', 'briarmont@briarmontco.com');


        $this->email->message($Message);  

        $result = $this->email->send();
        //$this->email->send();

        //if (!$this->email->send())
       //     show_error($this->email->print_debugger());
       // else
       //     echo 'Your e-mail has been sent!'; 
    }
}

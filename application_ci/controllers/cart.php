 <?php
class Cart extends MY_Controller {
	public function index()
	{
            $this->load->library('cart');
            $this->load->helper('form');
	      
            $this->load_header();
	        $this->load->view('cart/cart.php');
		    $this->load_footer();
	}
    
    function update_cart()
    {
        $this->load->library('cart');
        $this->load->helper('form');
        
 		foreach($_POST as $id => $cart)
		{
            $data = array(
                          'rowid' => $cart['rowid'],
                          'qty'   => $cart['qty']
                          );
            $this->cart->update($data);
		}
        
        self::index();
	}
    
    function checkout()
    {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('session');
        
        $this->load_header();
        $this->load->view('cart/checkout.php');
        $this->load_footer();
    }
    
    function checkout_validate()
    {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('session');
        
        //REQUIRED Fields
        $this->form_validation->set_rules('shipping_name', 'Shipping Contact - Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('shipping_street_address', 'Shipping Address - Street Address', 'required');
        $this->form_validation->set_rules('shipping_zip', 'Shipping Address - Zip Code', 'required|alpha_dash|max_length[10]');
        $this->form_validation->set_rules('num_items', 'Number of Items', 'greater_than[0]');
        $this->form_validation->set_message('greater_than', 'There are no items in the cart, please go to <a href="/products/cigars">Products</a> and add an item to the cart');
        //OPTIONAL Fields
        $this->form_validation->set_rules('shipping_phone', 'Shipping Contact - Phone Number', '');
		$this->form_validation->set_rules('shipping_company_name', 'Shipping Address - Company Name', '');
		$this->form_validation->set_rules('shipping_add_extra', 'Shipping Address - Apt,Suite,Bldg.', '');
        
        foreach($_POST as $Key => $Value)
        {
            $this->session->set_userdata($Key, $Value);
        }
        
		if ($this->form_validation->run() == FALSE)
		{
            self::checkout();
		}
		else
		{
            self::checkout2();
		}
    }
    
    function checkout2()
    {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('session');
        
        $this->load_header();
        $this->load->view('cart/checkout2.php');
        $this->load_footer();
    }
    
    function checkout2_validate()
    {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('session');
        
        //REQUIRED Fields
        $this->form_validation->set_rules('billing_name', 'Billing Contact - Name', 'required');
		$this->form_validation->set_rules('billing_street_address', 'Billing Address - Street Address', 'required');
        $this->form_validation->set_rules('billing_zip', 'Billing Address - Zip Code', 'required|alpha_dash|max_length[10]');        
        //OPTIONAL Fields
        $this->form_validation->set_rules('billing_phone', 'Billing Contact - Phone Number', '');
		$this->form_validation->set_rules('billing_company_name', 'Billing Address - Company Name', '');
		$this->form_validation->set_rules('billing_add_extra', 'Billing Address - Apt,Suite,Bldg.', '');

        foreach($_POST as $Key => $Value)
        {
            $this->session->set_userdata($Key, $Value);
        }
        
		if ($this->form_validation->run() == FALSE)
		{
            self::checkout2();
		}
		else
		{
            self::checkout3();
		}
    }
    
    function checkout3()
    {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
        $this->load->library('session');
        $this->load->database();
        
        foreach($_POST as $Key => $Value)
        {
            $this->session->set_flashdata($Key, $Value);
        }
        
        $this->load_header();
        $this->load->view('cart/checkout3.php');
        $this->load_footer();
    }
    
    public function send() {
        
		$url = 'https://api.globalgatewaye4.firstdata.com/transaction';

        $order_info = array();
        $order_info["total"] = $this->input->post("total");
        $order_info["email"] = $this->input->post("email");
        $order_info["currency_code"] = $this->input->post("currency_code");
        $order_info["total_num_items"] = $this->input->post("total_num_items");
        $order_info["shipping_name"] = $this->input->post("shipping_name");
        $order_info["shipping_phone"] = $this->input->post("shipping_phone");
        $order_info["shipping_company_name"] = $this->input->post("shipping_company_name");
        $order_info["shipping_street_address"] = $this->input->post("shipping_street_address");
        $order_info["shipping_add_extra"] = $this->input->post("shipping_add_extra");
        $order_info["shipping_zip"] = $this->input->post("shipping_zip");
        $order_info["billing_name"] = $this->input->post("billing_name");
        $order_info["billing_phone"] = $this->input->post("billing_phone");
        $order_info["billing_company_name"] = $this->input->post("billing_company_name");
        $order_info["billing_street_address"] = $this->input->post("billing_street_address");
        $order_info["billing_add_extra"] = $this->input->post("billing_add_extra");
        $order_info["billing_zip"] = $this->input->post("billing_zip");
        
		$data = array();
        
		$data['gateway_id'] = "A04271-02";
		$data['password'] = "6ix3i924";
		//$data['amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], 1.00000, false);
        $data['amount'] = $order_info["total"];
		$data['transaction_type'] = '00';
		$data['cardholder_name'] = $this->input->post("cc_holder");
		$data['cc_number'] = str_replace(' ', '', $this->input->post("cc_number"));
		$data['cc_expiry'] = $this->input->post("cc_expiry_date_month") . substr($this->input->post("cc_expiry_date_year"), -2);
		$data['cc_verification_str2'] = $this->input->post("cc_cvv2");
		$data['client_ip'] = $this->input->server('REMOTE_ADDR');
		$data['client_email'] = $order_info["email"];
        
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8', 'Accept: application/json'));
		curl_setopt($curl, CURLOPT_PORT, 443);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, true);
		curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        
		$response = curl_exec($curl);
		
		$json = array();
		if (curl_error($curl)) {
			$json['error'] = 'CURL ERROR: ' . curl_errno($curl) . '::' . curl_error($curl);
		//	$this->log->write('FIRST DATA CURL ERROR: ' . curl_errno($curl) . '::' . curl_error($curl));
		} elseif ($response) {
			$response_data = json_decode($response, true);
			if (isset($response_data['transaction_approved'])) {
				if ($response_data['transaction_approved'] == 1) {
			//		$json['success'] = $this->url->link('checkout/success', '', 'SSL');
                    $json['success'] = "Transaction was successful!";
                    $json['responsefirstdata'] = $response_data['ctr'];
				} else {
					$json['error'] = "Transaction not approved. Please review your credit card number, security code, and expiration date and try again.";
			//		$this->log->write('FIRST DATA ERROR: Transaction not approved');
				}
			} else {
				$json['error'] = $response;
			//	$this->log->write('FIRST DATA ERROR: ' . $response);
			}
		}
		//$this->response->setOutput(json_encode($json));
        echo json_encode($json);
	}

    function checkout_success() {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->database();

        $this->load_header();
        $this->load->view('cart/checkout_success.php');
        $this->load_footer();
    }

    function store_order() {
        $this->load->library('cart');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->database();

        $firstdata_transaction_id = $this->input->post("firstdata_response");;
        $subtotal = $this->input->post("subtotal");
        $taxamount = $this->input->post("taxamount");
        $total = $this->input->post("total");
        $email = $this->input->post("email");
        $total_num_items = $this->input->post("total_num_items");
        $num_classic = 0;
        $num_double_wrap = 0;
        $num_maduro = 0;
        $num_reserve = 0;
        $shipping_name = $this->input->post("shipping_name");
        $shipping_phone = $this->input->post("shipping_phone");
        $shipping_company_name = $this->input->post("shipping_company_name");
        $shipping_street_address = $this->input->post("shipping_street_address");
        $shipping_add_extra = $this->input->post("shipping_add_extra");
        $shipping_zip = $this->input->post("shipping_zip");
        //NEED TO CHANGE ONCE SHIPPING STUFF HAS BEEN SETUP
        $shipping_tracking_id = "0000";
        $billing_name = $this->input->post("billing_name");
        $billing_phone = $this->input->post("billing_phone");
        $billing_company_name = $this->input->post("billing_company_name");
        $billing_street_address = $this->input->post("billing_street_address");
        $billing_add_extra = $this->input->post("billing_add_extra");
        $billing_zip = $this->input->post("billing_zip");
        $datestring = "%Y-%m-%d %h:%i:%a";
        $time = time();
        $timestamp = mdate($datestring, $time);

        $cart_contents = $this->cart->contents();
        //'id' in $value['id] refers to the cigar product ID defined in the controllers/redirects.php file
        foreach ($cart_contents as $key => $value) {
            if ($value['id'] == 101) {
                $num_classic = $value['qty']; }
            if ($value['id'] == 102) {
                $num_double_wrap = $value['qty']; }
            if ($value['id'] == 103) {
                $num_maduro = $value['qty']; }
            if ($value['id'] == 104) {
                $num_reserve = $value['qty']; }
        }

        $sqlQuery = "INSERT INTO orders (firstdata_transaction_id, subtotal, taxamount, total, email, total_num_items, num_classic, num_double_wrap, num_maduro, num_reserve, shipping_name, shipping_phone, shipping_company_name, shipping_street_address, shipping_add_extra, shipping_zip, billing_name, billing_phone, billing_company_name, billing_street_address, billing_add_extra, billing_zip, shipping_tracking_id, order_date) 
        VALUES (".$this->db->escape($firstdata_transaction_id).", ".$this->db->escape($subtotal).", ".$this->db->escape($taxamount).", ".$this->db->escape($total).", ".$this->db->escape($email).", ".$this->db->escape($total_num_items).", ".$this->db->escape($num_classic).", ".$this->db->escape($num_double_wrap).", ".$this->db->escape($num_maduro).", ".$this->db->escape($num_reserve).", ".$this->db->escape($shipping_name).", ".$this->db->escape($shipping_phone).", ".$this->db->escape($shipping_company_name).", ".$this->db->escape($shipping_street_address).", ".$this->db->escape($shipping_add_extra).", ".$this->db->escape($shipping_zip).", ".$this->db->escape($billing_name).", ".$this->db->escape($billing_phone).", ".$this->db->escape($billing_company_name).", ".$this->db->escape($billing_street_address).", ".$this->db->escape($billing_add_extra).", ".$this->db->escape($billing_zip).", ".$this->db->escape($shipping_tracking_id).", ".$this->db->escape($timestamp).")";
        $this->db->query($sqlQuery);
        $order_num = $this->db->insert_id();

        self::send_email($order_num);

        $this->load_header();
        $this->load->view('cart/checkout_success.php');
        $this->load_footer();
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
        $this->email->subject('Briarmont & Co Order Confirmation');

        $Message = 
        "<b>Thanks for your order, ".$order->billing_name."!</b> <br><br>
        Your order is currently being processed and should be shipped soon. You will receive a tracking confirmation number once it has. <br><br>
        Here are your order details: <br><br> 
        <b>Shipping Information: </b><br>
        Name: ".$order->shipping_name." <br>
        Phone Number: ".$order->shipping_phone."<br>
        Email Address: ".$order->email."<br>
        Company Name (optional): ".$order->shipping_company_name."<br>
        Street Address: ".$order->shipping_street_address."<br>
        Apt, Suite, Bldg (optional): ".$order->shipping_add_extra."<br>
        Zip Code: ".$order->shipping_zip."<br><br>
        <b>Billing Information: </b><br>
        Name: ".$order->billing_name."<br>
        Phone Number: ".$order->billing_phone."<br>
        Company Name (optional): ".$order->billing_company_name."<br>
        Street Address: ".$order->billing_street_address."<br>
        Apt, Suite, Bldg (optional): ".$order->billing_add_extra."<br>
        Zip Code: ".$order->billing_zip."<br><br>
        <b>Order Details: </b><br>
        Number of Briarmont Classic Cigars: ".$order->num_classic."<br>
        Number of Briarmont Double Wrap Cigars: ".$order->num_double_wrap."<br>
        Number of Briarmont Maduro Cigars: ".$order->num_maduro."<br>
        Number of Briarmont Reserve Cigars: ".$order->num_reserve."<br><br>
        Subtotal: ".$order->subtotal."<br>
        Tax: ".$order->taxamount."<br>
        <b>Total: ".$order->total."</b><br><br> 
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

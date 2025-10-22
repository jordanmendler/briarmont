<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller
{
	function index()
	{
		$this->data['title'] = 'Contact';
		$this->load_header();
		$this->load_view();
		$this->load_footer();
	}
}


/*
	function send()
	{
		if (	$this->input->post('name') &&
			$this->input->post('email') &&
			$this->input->post('subject') &&
			$this->input->post('message')
		   )
		{
			# Loading email library of Codeigniter
			$this->load->library('email');

			# Loading configuration file mail_config.php
			$this->config->load('mail_config',true);

			# Setting email address and name of the person sending the email
			$this->email->from($this->input->post('email'),$this->input->post('name'));

			# Setting email address of the recipient
			$this->email->to('jordanmendler@gmail.com'); // FIXME

			# Setting email subject
			$this->email->subject($this->input->post('subject'));

			# Setting email message body
			$this->email->message($this->input->post('message',true));

			# If mail sending successful
			if ($this->email->send())
			{
				# If $mail_sent = true; it will show a success message.
			        echo "success";       
			}
			else
			{
				echo "failed";
			}  
		}
		else
		{
			echo 'FIXME';
		}
	}
}
*/

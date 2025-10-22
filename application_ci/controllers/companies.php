<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Companies extends MY_Controller
{
	function index()
	{
		//301 redirect to portfolio
		$this->load->helper('url');
		redirect('/portfolio','location',301);
	}
}

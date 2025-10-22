<?php Class Sitemap extends MY_Controller {
   //site map starts
function index()
    {
		$this->load->helper('url');
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap");
       }
}
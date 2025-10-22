<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Design_Test extends MY_Controller
{
        function index()
        {
                $this->load_header();
                $this->load->view('internships/design_test.php', $this->data);
                $this->load_footer();
        }
}


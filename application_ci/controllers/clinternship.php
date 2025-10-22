<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clinternship extends MY_Controller
{
        function index()
        {
                $this->data['title'] = 'Clinternship';
                $this->load_header();
	$this->load_view();
                $this->load_footer();
        }
}

?>

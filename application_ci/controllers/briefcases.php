<?php
class Briefcases extends MY_Controller {
        public function index()
        {
          
                $this->load_header();
                $this->load_view('pages/briefcases');
                $this->load_footer();
        }
}

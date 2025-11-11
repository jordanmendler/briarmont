<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends MY_Controller
{
	function index()
	{
        $this->uri->segment(1 , 'blog');
		$this->data['title'] = 'Portfolio';
		$this->load_header();
		$this->data['portfolio'] = $this->portfolio_model->get_portfolio_info();
		$this->data['types'] = $this->portfolio_model->get_types_info();
        foreach ($this->data['portfolio'] as $company) {
            if (!empty($company['embed_url'])) {
                $this->data['extra_body'] .= '
                <div id="modal-' . slugify($company['name']) . '" class="modal" style="display: none;">
                    <span data-slug="' . slugify($company['name']) . '" class="close-btn">&times;</span>
                    <div class="modal-content">
                        <iframe 
                            src="'. $company['embed_url'] .'" frameborder="0"
                            style="width: 100%; height: 100%;" allow="fullscreen; clipboard-write" allowfullscreen>
                        </iframe>
                    </div>
                </div>
                ';
            }
        }
		$this->load_view();
		$this->load_footer();
	}


	function companies()
	{
		$this->load->helper('url');
		redirect('/portfolio#Companies', 'location', 301);
	}


	function projects()
	{
		$this->load->helper('url');
		redirect('/portfolio#Projects', 'location', 301);
	}

}

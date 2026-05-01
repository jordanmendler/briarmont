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
                if ($this->isVideoUrl($company['embed_url'])) {
                    $this->data['extra_body'] .= '
                    <div id="modal-' . slugify($company['name']) . '" class="modal" style="display: none;">
                        <span data-slug="' . slugify($company['name']) . '" class="close-btn">&times;</span>
                        <div class="modal-content">
                            <video
                                id="video-' . slugify($company['name']) . '"
                                class="video-js vjs-fill"
                                controls
                                preload="auto"
                                data-setup="{}"
                                playsinline
                                muted
                            >
                                <source src="' . $company['embed_url'] . '" type="video/mp4" />
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a
                                    web browser that
                                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                                        >supports HTML5 video</a
                                    >
                                </p>
                            </video>
                        </div>
                    </div>
                    ';
                } else {
                    // Lazy-load iframe - don\'t set src until modal is opened
                    $this->data['extra_body'] .= '
                    <div id="modal-' . slugify($company['name']) . '" class="modal" style="display: none;" data-embed-url="' . $company['embed_url'] . '">
                        <span data-slug="' . slugify($company['name']) . '" class="close-btn">&times;</span>
                        <div class="modal-content">
                            <!-- iframe loaded lazily on modal open -->
                        </div>
                    </div>
                    ';
                }
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

    public function isVideoUrl($url)
    {
        $videoExtensions = ['.mp4', '.avi', '.mov', '.mkv', '.webm', '.ogg', '.wmv'];

        $parsed = parse_url($url, PHP_URL_PATH);

        if ($parsed === null) {
            return false;
        }

        $pathLower = strtolower($parsed);

        foreach ($videoExtensions as $ext) {
            if (substr($pathLower, -strlen($ext)) === $ext) {
                return true;
            }
        }

        return false;
    }

}

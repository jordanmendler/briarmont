<?php /*if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solutions extends MY_Controller
{
	function index()
	{
		// FIXME: Build out new veloz solutions site here
		$this->data['header'] =  '/images/divisions/headers/veloz-solutions.png';
		$this->load->model('divisions_model');
              	$this->data['division'] =  'Veloz Solutions';
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header_sol();
		$this->data['hexagon_row1']	= $this->solutions_model->first_row();
		$this->data['hexagon_row2']	= $this->solutions_model->second_row();
		$this->data['hexagon_row3']	= $this->solutions_model->third_row();
		$this->data['portfolio'] = $this->solutions_model->get_portfolio_info();
		$this->data['types'] = $this->solutions_model->get_types_info();
		$this->data['team_content']	= $this->solutions_model->our_team();
		$this->data['contact_content']	= $this->solutions_model->contact_us();
		$this->load_view();
		$this->load_view("solutions/what_we_do");
		$this->load_view("solutions/technologies");
		$this->load_view("solutions/portfolio");
		$this->load_view("solutions/our_team");
		$this->load_view("solutions/contactus");
		$this->load_footer();
	
	}

function team_1()
	{
		$this->load_view("solutions/our_team/team_1");
	}
function team_2()
	{
		$this->load_view("solutions/our_team/team_2");
	}
function team_3()
	{
		$this->load_view("solutions/our_team/team_3");
	}
function team_4()
	{
		$this->load_view("solutions/our_team/team_4");
	}
function team_5()
	{
		$this->load_view("solutions/our_team/team_5");
	}
}*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solutions extends MY_Controller
{
	function index()
	{
                $this->load->helper('url');
                redirect('https://www.veloz-solutions.com', 'location', 301);	

		// FIXME: Build out new veloz solutions site here
		$this->data['header'] =  '/images/divisions/headers/veloz-solutions.png';
		$this->load->model('divisions_model');
              	$this->data['division'] =  'Veloz Solutions';
		$this->data['info'] = $this->divisions_model->get_division_info( $this->data['division'] );
		$this->data['color'] = $this->data['info']['color'];

		$this->load_header();
		$this->load_view("home/divisions");
		$this->load_footer();
	}
}


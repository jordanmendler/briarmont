<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller
{
	function index()
	{
		$this->data['title'] = 'About Us';
		$this->load_header();
		$this->data['quotes']	= $this->about_model->get_quotes();
		$this->data['content']	= $this->about_model->get_content();
		$this->load_view();
		$this->load_footer();
	}


	function executive_team()
	{
		$this->data['title'] = 'Leadership';
		$this->load_header();
		$this->data['people'] = $this->about_model->get_executive_team();
		$this->load_view('about/people');
		$this->load_footer();
	}


	function team_of_innovators()
	{
		//$this->data['title'] = 'Team of Innovators';
		$this->load_header();

		$arr =  $this->about_model->get_innovations_team();
		$this->data['intro'] = $arr['intro'];
		$this->data['quotes'] = $arr['quotes'];
		$this->data['conclusion'] = $arr['conclusion'];

		$this->load_view();
		$this->load_footer();
	}


	function innovation_center()
	{
		$this->load_header();
		$arr =  $this->about_model->get_innovation_center();
		$this->data['intro'] = $arr['intro'];
		
		$this->load_view();
		$this->load_footer();
	}
	
	function distribution_center()
	{
		$this->load_header();
		$arr =  $this->about_model->get_distribution_center();
		$this->data['intro'] = $arr['intro'];
		$this->data['images'] = $arr['images'];
		$this->load_view();
		$this->load_footer();
	}
	
    function engineering_team()
	{
		$this->load_header();
		$arr =  $this->about_model->engineering_team();
		$this->load_view();
		$this->load_footer();
	}
	
 function business_team()
	{
		$this->load_header();
		$arr =  $this->about_model->business_team();
		$this->load_view();
		$this->load_footer();
	}
}

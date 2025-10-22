<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobs extends MY_Controller
{
	function index()
	{
		$this->data['title'] = 'Jobs';
		$this->data['intro'] = $this->jobs_model->get_intro();
		$this->data['jobs'] = $this->jobs_model->get_jobs();


		if (isset($_GET['feed']) && $_GET['feed'] == 'xml')
		{
			header('Content-type: text/xml');
			$this->load_view('jobs/xml');
		}
		else
		{
			$this->load_header();
			$this->load_view();
			$this->load_footer();
		}
	}

	function display($jobname)
	{
		$this->load_header();
		$this->load->helper('url');
		$this->data['intro'] = $this->jobs_model->get_intro();
		$this->data['jobs'] = $jobs = $this->jobs_model->get_jobs();
		$this->data['jobname'] = $jobname;
		$found = false;
		foreach ($jobs as $category)
		{
		        foreach ($category['joblists'] as $joblist)
		        {
				if($jobname == strtolower(str_replace(' ', '-', str_replace('&', 'and', $joblist['jobtitle']))))
			        {
			        	$found = true;
				}
			}
		}
		if($found == false)
			redirect('/jobs', 'refresh', 301);
		$this->load_view();
		$this->load_footer();
	}
}

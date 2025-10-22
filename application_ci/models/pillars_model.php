<?php

class Pillars_Model extends CI_Model
{
	var $data = array(
			array(
				'name'		=> 	'Entrepreneurship',
				'summary'	=>	'We pursue entrepreneurial opportunities across different industries, taking ideas and turning them into businesses that we develop and operate.',
				'icon'		=>	'/images/pillars/veloz-purple.png',
				'color'		=>	'#6450bc',
				'heading'	=>	'#6355a5',
			),
			array(
				'name'		=> 	'Technology',
				'summary'	=>	'We bring an advanced skill set and expertise in technology through our team of deeply accomplished technologists to each of our ventures.',
				'icon'		=>	'/images/pillars/veloz-green.png',
				'color'		=>	'#5dcf06',
				'heading'	=>	'#6abd45',
			),
			array(
				'name'		=>	'Innovation',
				'summary'	=>	'We endeavor to remove the bureaucratic hurdles that regularly stifle creativity, innovation and outside the box thinking.',
				'icon'		=>	'/images/pillars/veloz-yellow.png',
				'color'		=>	'#f0b310',
				'heading'	=>	'#f0b419',
			),
			array(
				'name'          =>      'Culture',
				'summary'	=>	'We have created and maintain a unique and defining corporate culture shaped by our personal and professional experiences and shared values.',
				'color'         =>      '#3BB9FF',
				'heading'	=>	'#57b4e5',
				'icon'		=>      '/images/pillars/veloz-blue.png',
			),
			array(
				'name'		=>	'Collaboration',
				'summary'	=>	'We value team-oriented people across our organization and place a premium on the active sharing of knowledge and ideas.',
				'icon'		=>	'/images/pillars/veloz-gray.png',
				'color'		=>	'#9aa3a8',
				'heading'	=>	'#99a3a8',
			),
			array(
				'name'		=>	'Empowerment',
				'summary'	=>	' We foster a professional environment geared toward empowering each member of our team to reach his or her full potential.',
				'icon'		=>	'/images/pillars/veloz-red.png',
				'color'		=>	'#972a08',
				'heading'	=>	'#962c1f',
			),
	);


	function get_pillars()
	{
		return $this->data;
	}
}

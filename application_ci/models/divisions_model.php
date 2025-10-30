<?php

class Divisions_Model extends CI_Model {

    var $data = array(
        array(
            'name' => 'Realty',
            'display' => true,
            'summary' => 'Briarmont is a full service real estate investment firm',
            'link' => '/',
            'color' => '#972a08',
            'icon' => '/images/briarmont-logo-transparent.png',
            'header' => '',
        ),
        array(
            'name' => 'Industrial Center',
            'display' => true,
            'summary' => 'Briarmont owns and operates value-add industrial real estate',
            'link' => '/',
            'color' => '#3BB9FF',
            'icon' => '/images/briarmont-logo-transparent.png',
            'header' => '',
        ),
        array(
            'name' => 'Central Storage',
            'display' => true,
            'summary' => 'Briarmont owns Self-Storage facilities which operate using best-in-class automation',
            'link' => '/',
            'color' => '#f0b310',
            'icon' => '/images/briarmont-logo-transparent.png',
            'header' => '',
        ),
        array(
            'name' => 'Estates',
            'display' => true,
            'summary' => 'Build-to-rent multifamily residential communities using modular construction',
            'link' => '/',
            'color' => '#6450bc',
            'icon' => '/images/briarmont-logo-transparent.png',
            'header' => '',
        ),
        array(
            'name' => 'Mansion',
            'display' => true,
            'summary' => 'Luxurious single family homes operating as AirBNB and long-term residential rentals',
            'link' => '/',
            'color' => '#5dcf06',
            'icon' => '/images/briarmont-logo-transparent.png',
            'header' => '',
        ),
        array(
            'name' => 'Container City',
            'display' => true,
            'summary' => 'Multi-generational, mixed-use project developed from upcycled shipping containers',
            'link' => '/',
            'color' => '#9aa3a8',
            'icon' => '/images/briarmont-logo-transparent.png',
            'header' => '',
        ),
    );
    var $extras = array(
    );

    function get_divisions() {
	$retval = array_merge($this->data, $this->extras);

	return $retval;
    }

    function get_active_divisions() {
	$retval = array();

	foreach (array_merge($this->data, $this->extras) as $item) {
	    if ($item['display'] == true) {
		array_push($retval, $item);
	    }
	}

	return $retval;
    }

    function get_division_info($division = 'all', $element = 'all') {
	if ($division == 'all') {
	    return $this->data;
	} else {
	    foreach ($this->data as $item) {
		if ($item['name'] == $division) {
		    return $item;
		}
	    }

	    if ($element == 'all') {
		return $this->data[$division];
	    } else {
		return $this->data[$division][$element];
	    }
	}
    }

    function get_services() {
	return $this->data;
    }

}

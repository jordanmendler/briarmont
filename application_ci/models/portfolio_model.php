<?php

/* NOTES:
 * Each business has divisions and types. Divions can be any of the list below, types needs to be EITHER Companies or Projects. Type must be in an array with one thing.
 */

class Portfolio_Model extends CI_Model {

    var $divisions = array('Capital', 'Ventures', 'Industries', 'Innovations', 'Entertainment',);
    var $types = array('Industrial', 'Self-Storage', 'Retail', 'Multifamily', 'Holdings', 'Opportunities');
    var $data = array(
            array(
                'name' => 'Rochester Medical',
                'summary' => "Rochester, NY<br/>50,816 SF",
                'image' => '/images/portfolio/Rochester.jpg',
                'types' => array('Opportunities', 'Medical-Office'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Columbia Mobile Home Park',
                'summary' => "Columbia, SC<br/>13 units",
                'image' => '/images/portfolio/8460-Old-Percival.jpg',
                'types' => array('Opportunities', 'Multifamily'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Container City',
                'summary' => "In Development",
                'image' => '/images/portfolio/Container_City.jpg',
                'types' => array('Industrial', 'Opportunities', 'Self-Storage', 'Retail', 'Multifamily', 'Medical-Office'),
                'embed_url' => 'https://drive.google.com/file/d/16GAdx3HcF06JMKRp1IVYIjftTg6jfhH-/view',
            ),
            array(
                'name' => 'Rosamond & 48th',
                'summary' => "Rosamond, CA<br/>29.3 acres",
                'image' => '/images/portfolio/Rosamond.jpg',
                'types' => array('Opportunities', 'Multifamily'),
                'embed_url' => 'https://docs.google.com/presentation/d/1LMrvslPtiTrCMSkO6X2v9oW5wRwOjItomP0nhOL9OzE',
            ),
            array(
                'name' => 'Briarmont SBD',
                'summary' => "San Bernardino, CA<br/>27,000 SF",
                'image' => '/images/portfolio/Briarmont_SBD.jpg',
                'types' => array('Opportunities', 'Self-Storage'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vS_4SPHKmpOB4wbVd9B82QmtoYwBH0jHqW_YQUA6ON3ujyEEPH71t6r3-QXbb0F16MwYmmObMRngmhK/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Briarmont Estates, Lake Palmdale',
                'summary' => "52 homes<br/>13.7 acres",
                'image' => '/images/portfolio/Briarmont_Estates_Lake_Palmdale.png',
                'types' => array('Multifamily', 'Self-Storage', 'Opportunities'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vSpTSMeNwxhrXEesVCxONdYNQQpLsc-rzBETV67Sy0upQ381LXqtOBXzU437opz0oKGTCFFNFlop8Zf/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Lancaster Auto Row',
                'summary' => "Lancaster, CA<br/>25,400 SF",
                'image' => '/images/portfolio/45003-45021-Yucca-Ave-Lancaster-CA-Building-Photo-5-LargeHighDefinition.jpg',
                'types' => array('Retail', 'Self-Storage', 'Industrial', 'Holdings'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Queens Mixed-Use',
                'summary' => "Queens, NY<br/>4,527 SF",
                'image' => '/images/portfolio/70-10-74th-St-Middle-Village-NY-Building-Photo-1-LargeHighDefinition.jpg',
                'types' => array('Industrial', 'Retail', 'Holdings'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Baltimore Residential Portfolio',
                'summary' => "Baltimore, MD<br/>4 units",
                'image' => '/images/portfolio/Baltimore.png',
                'types' => array('Multifamily', 'Holdings'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Briarmont Estates, Jacksonville',
                'summary' => "Jacksonville, FL<br/>13 units",
                'image' => '/images/portfolio/jax.png',
                'types' => array('Multifamily', 'Holdings'),
                'embed_url' => '',
            ),


/*
            array(
                'name' => 'Fresno Industrial Center',
                'summary' => "Fresno, CA<br/>125,958 SF",
                'image' => '/images/portfolio/Fresno_Industrial_Center.png',
                'types' => array('Industrial', 'Opportunities'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vQKz8wQqqegAYV4TzroFpYp6mZ3L4FcDX45ZWrjo6JoMXY-j9ltqYco8xd1KXqxepTpkQefFukvaemu/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Palmdale Central Storage',
                'summary' => "Palmdale, CA<br/>13,627 SF",
                'image' => '/images/portfolio/826-E-Avenue-R-Palmdale-CA-Building-Photo-1-Large.jpg',
                'types' => array('Retail', 'Self-Storage'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Palmdale Industrial Center',
                'summary' => "Palmdale, CA<br/>16,000 SF",
                'image' => '/images/portfolio/37631-6th-St-E-Palmdale-CA-Building-Photo-1-Large.jpg',
                'types' => array('Industrial'),
                'embed_url' => '',
            ),
            array(
                'name' => 'The Shops at Pacific View',
                'summary' => "Ventura, CA<br/>164,433 SF",
                'image' => '/images/portfolio/Seritage-Ventura-Building-Photo-2-LargeHighDefinition.png',
                'types' => array('Retail'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Pacific View Automotive',
                'summary' => "Ventura, CA<br/>14,130 SF",
                'image' => '/images/portfolio/3217-S-Garfield-Ave-Commerce-CA-Building-Photo-2-LargeHighDefinition.jpg',
                'types' => array('Industrial'),
                'embed_url' => '',
            ),
            array(
                'name' => 'The Kauai Post',
                'summary' => "Lihue, HI<br/>10,620 SF",
                'image' => '/images/portfolio/4441-Rice-St-Lihue-HI-USPS-Lihue-1-LargeHighDefinition.jpg',
                'types' => array('Retail'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Port of LA Industrial Center',
                'summary' => "San Pedro, CA<br/>25,710 SF",
                'image' => '/images/portfolio/1002-S-Gaffey-St-San-Pedro-CA-Gaffey-Side-1-LargeHighDefinition.jpg',
                'types' => array('Industrial'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Stott Building',
                'summary' => "Detroit, MI<br/>202,194 SF",
                'image' => '/images/portfolio/95908_500x650.jpg',
                'types' => array('Retail'),
                'embed_url' => '',
            ),
            array(
                'name' => 'The United Staffing Building',
                'summary' => "Ventura, CA<br/>32,825 SF",
                'image' => '/images/portfolio/545-555-S-A-St-Oxnard-CA-Building-Photo-9-LargeHighDefinition.jpg',
                'types' => array('Retail'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Yuma Industrial Center',
                'summary' => "Yuma, AZ<br/>124,500 SF",
                'image' => '/images/portfolio/2198-S-Pacific-Ave-Yuma-AZ-Primary-Photo-1-Large.jpg',
                'types' => array('Industrial'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Bakersfield Industrial Center',
                'summary' => "Bakersfield, CA<br/>61,118 SF",
                'image' => '/images/portfolio/Oildale-Industrial-Portfolio-Aerial-1-LargeHighDefinition.jpg',
                'types' => array('Industrial'),
                'embed_url' => '',
	    ),
*/
    );

    function get_company_info($company = 'all', $element = 'all') {
	$companies = array();
	foreach ($this->data as $a_company) {
	    if ($a_company['types'][0] == 'Active') {
		array_push($companies, $a_company);
	    }
	}
	if ($company == 'all') {
	    return $companies;
	} else {
	    if ($element == 'all') {
		return $companies[$company];
	    } else {
		return $companies[$company][$element];
	    }
	}
    }

    function get_project_info($company = 'all', $element = 'all') {
	$companies = array();
	foreach ($this->data as $a_company) {
	    if ($a_company['types'][0] == 'Development') {
		array_push($companies, $a_company);
	    }
	}
	if ($company == 'all') {
	    return $companies;
	} else {
	    if ($element == 'all') {
		return $companies[$company];
	    } else {
		return $companies[$company][$element];
	    }
	}
    }

    function get_select_projects_info($company = 'all', $element = 'all') {
	$companies = array();
	foreach ($this->data as $a_company) {
	    if ($a_company['types'][0] == 'Projects') {
		array_push($companies, $a_company);
	    }
	}
	if ($company == 'all') {
	    return $companies;
	} else {
	    if ($element == 'all') {
		return $companies[$company];
	    } else {
		return $companies[$company][$element];
	    }
	}
    }

    function get_portfolio_info($company = 'all', $element = 'all') {
        if ($company == 'all') {
            $return_data = $this->data;
            shuffle($return_data);
            return $return_data;
        } else {
            if ($element == 'all') {
                return $this->data[$company];
            } else {
                return $this->data[$company][$element];
            }
        }
    }

    function get_divisions_info() {
	return $this->divisions;
    }

    function get_types_info() {
	return $this->types;
    }

    /* 	function get_services()
      {
      $retval = array();

      foreach (array_keys($this->data) as $company)
      {
      array_push( $retval,	array($company => $this->data[$company]['services']) );
      }

      return $retval;
      } */
}

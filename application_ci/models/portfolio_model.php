<?php

/* NOTES:
 * Each business has divisions and types. Divions can be any of the list below, types needs to be EITHER Companies or Projects. Type must be in an array with one thing.
 */

class Portfolio_Model extends CI_Model {

    var $divisions = array('Capital', 'Ventures', 'Industries', 'Innovations', 'Entertainment',);
    var $types = array('Development', 'Projects', 'Industrial', 'Self-Storage', 'Retail', 'Multifamily', 'Holdings', 'Past-Projects', 'Opportunities');
    var $data = array(
            array(
                'name' => 'Fresno Industrial Center',
                'summary' => "Fresno, CA<br/>125,958 SF",
                'icon' => '/images/portfolio/Fresno_Industrial_Center.png',
                'blog_image' => '/images/portfolio/Fresno_Industrial_Center.png',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Fresno_Industrial_Center.png',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Opportunities'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vQKz8wQqqegAYV4TzroFpYp6mZ3L4FcDX45ZWrjo6JoMXY-j9ltqYco8xd1KXqxepTpkQefFukvaemu/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Briarmont SBD',
                'summary' => "San Bernardino, CA<br/>27,000SF",
                'icon' => '/images/portfolio/Briarmont_SBD.png',
                'blog_image' => '/images/portfolio/Briarmont_SBD.png',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Briarmont_SBD.png',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Opportunities', 'Self-Storage'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vS_4SPHKmpOB4wbVd9B82QmtoYwBH0jHqW_YQUA6ON3ujyEEPH71t6r3-QXbb0F16MwYmmObMRngmhK/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Briarmont Estates, Sylmar',
                'summary' => "20 homes<br/>2 acres",
                'icon' => '/images/portfolio/Briarmont_Estates_Sylmar.jpg',
                'blog_image' => '/images/portfolio/Briarmont_Estates_Sylmar.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Briarmont_Estates_Sylmar.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Multifamily',
                'types' => array('Multifamily', 'Development', 'Self-Storage', 'Opportunities'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vSBPSD0H6-XTqXFleIAJaIniWeIUrHbXe0nu1BUMWQsi7Wv8aPUKBBkWGWBTCUtakNjY0JtRRAZqcbH/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Briarmont Estates, Lake Palmdale',
                'summary' => "52 homes<br/>13.7 acres",
                'icon' => '/images/portfolio/Briarmont_Estates_Lake_Palmdale.png',
                'blog_image' => '/images/portfolio/Briarmont_Estates_Lake_Palmdale.png',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Briarmont_Estates_Lake_Palmdale.png',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Multifamily',
                'types' => array('Multifamily', 'Development', 'Self-Storage', 'Opportunities'),
                'embed_url' => 'https://docs.google.com/presentation/d/e/2PACX-1vSpTSMeNwxhrXEesVCxONdYNQQpLsc-rzBETV67Sy0upQ381LXqtOBXzU437opz0oKGTCFFNFlop8Zf/pubembed?start=false&loop=false&delayms=5000',
            ),
            array(
                'name' => 'Lancaster Auto Row',
                'summary' => "Lancaster, CA<br/>25,400 SF",
                'icon' => '/images/portfolio/45003-45021-Yucca-Ave-Lancaster-CA-Building-Photo-5-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/45003-45021-Yucca-Ave-Lancaster-CA-Building-Photo-5-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/45003-45021-Yucca-Ave-Lancaster-CA-Building-Photo-5-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Retail', 'Self-Storage', 'Industrial', 'Holdings', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Palmdale Central Storage',
                'summary' => "Palmdale, CA<br/>13,627 SF",
                'icon' => '/images/portfolio/826-E-Avenue-R-Palmdale-CA-Building-Photo-1-Large.jpg',
                'blog_image' => '/images/portfolio/826-E-Avenue-R-Palmdale-CA-Building-Photo-1-Large.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/826-E-Avenue-R-Palmdale-CA-Building-Photo-1-Large.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Retail', 'Self-Storage', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Palmdale Industrial Center',
                'summary' => "Palmdale, CA<br/>16,000 SF",
                'icon' => '/images/portfolio/37631-6th-St-E-Palmdale-CA-Building-Photo-1-Large.jpg',
                'blog_image' => '/images/portfolio/37631-6th-St-E-Palmdale-CA-Building-Photo-1-Large.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/37631-6th-St-E-Palmdale-CA-Building-Photo-1-Large.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'The Shops at Pacific View',
                'summary' => "Ventura, CA<br/>164,433 SF",
                'icon' => '/images/portfolio/Seritage-Ventura-Building-Photo-2-LargeHighDefinition.png',
                'blog_image' => '/images/portfolio/Seritage-Ventura-Building-Photo-2-LargeHighDefinition.png',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Seritage-Ventura-Building-Photo-2-LargeHighDefinition.png',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Retail', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Pacific View Automotive',
                'summary' => "Ventura, CA<br/>14,130 SF",
                'icon' => '/images/portfolio/3217-S-Garfield-Ave-Commerce-CA-Building-Photo-2-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/3217-S-Garfield-Ave-Commerce-CA-Building-Photo-2-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/3217-S-Garfield-Ave-Commerce-CA-Building-Photo-2-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'The Kauai Post',
                'summary' => "Lihue, HI<br/>10,620 SF",
                'icon' => '/images/portfolio/4441-Rice-St-Lihue-HI-USPS-Lihue-1-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/4441-Rice-St-Lihue-HI-USPS-Lihue-1-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/4441-Rice-St-Lihue-HI-USPS-Lihue-1-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Retail', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Port of LA Industrial Center',
                'summary' => "San Pedro, CA<br/>25,710 SF",
                'icon' => '/images/portfolio/1002-S-Gaffey-St-San-Pedro-CA-Gaffey-Side-1-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/1002-S-Gaffey-St-San-Pedro-CA-Gaffey-Side-1-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/1002-S-Gaffey-St-San-Pedro-CA-Gaffey-Side-1-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Stott Building',
                'summary' => "Detroit, MI<br/>202,194 SF",
                'icon' => '/images/portfolio/95908_500x650.jpg',
                'blog_image' => '/images/portfolio/95908_500x650.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/95908_500x650.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Retail', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'The United Staffing Building',
                'summary' => "Ventura, CA<br/>32,825 SF",
                'icon' => '/images/portfolio/545-555-S-A-St-Oxnard-CA-Building-Photo-9-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/545-555-S-A-St-Oxnard-CA-Building-Photo-9-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/545-555-S-A-St-Oxnard-CA-Building-Photo-9-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Retail', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Queens Industrial Center',
                'summary' => "Queens, NY<br/>45,827 SF",
                'icon' => '/images/portfolio/70-10-74th-St-Middle-Village-NY-Building-Photo-1-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/70-10-74th-St-Middle-Village-NY-Building-Photo-1-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/70-10-74th-St-Middle-Village-NY-Building-Photo-1-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Industrial', 'Retail', 'Holdings'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Container City',
                'summary' => "In Development",
                'icon' => '/images/portfolio/Container_City.jpg',
                'blog_image' => '/images/portfolio/Container_City.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Container_City.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Development', 'Industrial', 'Projects', 'Opportunities', 'Self-Storage', 'Retail', 'Multifamily', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Yuma Industrial Center',
                'summary' => "Yuma, AZ<br/>124,500 SF",
                'icon' => '/images/portfolio/2198-S-Pacific-Ave-Yuma-AZ-Primary-Photo-1-Large.jpg',
                'blog_image' => '/images/portfolio/2198-S-Pacific-Ave-Yuma-AZ-Primary-Photo-1-Large.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/2198-S-Pacific-Ave-Yuma-AZ-Primary-Photo-1-Large.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Retail',
                'types' => array('Industrial', 'Past-Projects'),
                'embed_url' => '',
            ),
            array(
                'name' => 'Bakersfield Industrial Center',
                'summary' => "Bakersfield, CA<br/>61,118 SF",
                'icon' => '/images/portfolio/Oildale-Industrial-Portfolio-Aerial-1-LargeHighDefinition.jpg',
                'blog_image' => '/images/portfolio/Oildale-Industrial-Portfolio-Aerial-1-LargeHighDefinition.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Oildale-Industrial-Portfolio-Aerial-1-LargeHighDefinition.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Past-Projects'),
                'embed_url' => '',
            ),
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

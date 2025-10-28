<?php

class Navmenu_Model extends CI_Model
{
	function get_navmenu()
	{
		return	array(
				/*array(	"/divisions"				=> "Divisions",
					"/divisions/veloz-ventures"		=> "Veloz Ventures",
					"/divisions/veloz-innovations"		=> "Veloz Innovations",
					"/solutions"				=> "Veloz Solutions",
					"/divisions/veloz-global"		=> "Veloz Global",
					"/divisions/veloz-industries"		=> "Veloz Industries",
					
//					"/divisions/veloz-entertainment"	=> "Veloz Entertainment",
//					"/divisions/veloz-capital"		=> "Veloz Capital",
				),*/
				/* Companies was split into Portfolio companies or projects
				 * Companies now redirects to Portfolio
				*/
				array(	"/portfolio"				=> "Portfolio",
					"#Holdings"				=> "Holdings",
					"#Past-Projects"				=> "Past Projects",
					"#Opportunities"				=> "Opportunities",
				),
				array(	"/about"				=> "About Us",
					"/about/executive-team"			=> "Leadership",
					"/about/business-team"			=> "Our Team",
					//"/about/engineering-team"		=> "Engineering",
					//"/about/team-of-innovators"		=> "Team of Innovators",
					//"/about/innovation-center"		=> "Innovation Center",
					//"/about/distribution-center"		=> "Distribution Center",
				),
				array(	"/press"				=> "Press",
				),
				//array(	"/social-media"				=> "Social Media",
					//"/social-media#blog"			=> "Blog",
					//"/social-media#videos"		=> "Videos",
					//"/social-media#follow-us" 		=> "Follow Us",
				//),
/*
				array(  "/jobs"					=> "Careers",
					#"/jobs#leadership"			=> "Leadership",
					#"/jobs#sales"				=> "Sales",
					#"/jobs#other"				=> "Other",
					#"/jobs#job-application"		=> "Join Us",
				),
				array(	"/internships"				=> "Internships",
					//"/internships#about"			=> "About",
					//"/internships#business-internships"	=> "Business",
					//"/internships#engineering-internships" 	=> "Engineering",
					//"/internships#media-internships"	=> "Media",
					//"/internships#internship-application" 	=> "Join Us",
				),
*/				
				/*array(	"/foundation"				=> "Foundation",
				),*/

				array(
                    "/acquisitions" => "Acquisitions",
				),
				array(	"/contact"				=> "Contact",
				),
		);
	}
}

<?php
	class Solutions_model extends CI_Model
	{
		                
	function first_row()
	{
		
	$hexagon_row1 = array(
				
				array(			'image'	=>	"/images/solutions/hexagon-green.png",
								'title'   => '',
								'hover_text'	=> '',
								'timer'	=> '0.4s',
								'link'  => ''
				),

				array(			'image'	=>	"/images/solutions/hexagon-white1.png",
								'title'   => 'What We Do',
								'hover_text'	=> 'What We Do',
								'timer'	=> '3s',
								'link'  => '#what-we-do'
								),
				
				array(			'image'	=>	"/images/solutions/image-1.jpg",
								'title'   => '',
								'hover_text'	=> '',
								'timer'	=> '1.6s',
							'link'  => ''
								),
						
						array(			'image'	=>	"/images/solutions/hexagon-white1.png",
										'title'   => 'Our Team',
								'hover_text'	=> 'Our Team',
								'timer'	=> '3s',
								'link'  => '#our-team'
								),
						
						);

		return $hexagon_row1;
	}
	
	
	function second_row()
	{
		
	$hexagon_row2 =  array(
				
				array(			'image'	=>	"/images/solutions/hexagon-green.png",
								'title'   => '',
								'hover_text'	=> '',
								'timer'	=> '1000000s',
								'link'  => ''
				),

				array(			'image'	=>	"/images/solutions/hexagon-white1.png",
								'title'   => 'Portfolio',
								'hover_text'	=> 'Portfolio',
								'timer'	=> '3s',
								'link'  => '#portfolio'
								),
				
				array(			'image'	=>	"/images/solutions/hexagon-green.png",
								'title'   => '',
								'hover_text'	=> '',
								'timer'	=> '2.4s',
								'link'  => ''
								),
						
						array(			'image'	=>	"/images/solutions/hexagon-white1.png",
										'title'   => 'Contact Us',
								'hover_text'	=> 'Contact Us',
								'timer'	=> '3s',
								'link'  => '#contactus'
								),
						array(			'image'	=>	"/images/solutions/hexagon-green.png",
										'title'   => '',
								'hover_text'	=> '',
								'timer'	=> '0.8s',
								'link'  => '',
								),
						
						);
	return $hexagon_row2;
	}
	function third_row()
	{
		
	$hexagon_row3 =  array(
				
				array(			'image'	=>	"/images/solutions/hexagon-green.png",
								'hover_text'	=> '',
								'timer'	=> '1000000s',
								'link'  => '',
				),

				array(			'image'	=>	"/images/solutions/hexagon-green.png",
								'hover_text'	=> '',
								'timer'	=> '1.2s',
								'link'  => '',
								),
				
				array(			'image'	=>	"/images/solutions/image-2.jpg",
								'hover_text'	=> '',
								'timer'	=> '2.0s',
								'link'  => '',
								),
						
						array(			'image'	=>	"/images/solutions/hexagon-green.png",
								'hover_text'	=> '',
								'timer'	=> '1000000s',
								'link'  => '',
								),
						
						);
	return $hexagon_row3;
	}
	
	/*team content*/
	function our_team()
	{
		
	$team_content =  array(
				
				array(			'image'	=>	"/images/solutions/team/adam.png",
								'main_title'	=> 'Adam Mendler',
								'designation'    => 'Chief Executive Officer',
								'team_name'			=> 'team_1',
								'back_title'    => 'Adam mendler',
								'back_content_id'    => 'team-1',
				
								'back_content'    => '<div id="team-1">
<p><b><span style="color:#5dcf06;">Adam Mendler</span></b> - Since launching Briarmont Estates & Mansion, Adam has co-founded and served as the CEO of e-commerce businesses 
in the office furniture and cigar industries. Under Adams leadership, Briarmont Estates & Mansion has built a strong cross-functional,
 multinational team. Adam has managed an extremely diverse set of internal and external projects ranging from high-end software
  development to large-scale grassroots recruiting and has established offshore business, engineering and design units for 
  Briarmont Estates & Mansion and portfolio companies. </p>

<p>Adam previously worked as a private banker at Credit Suisse, where he 
worked on investment banking and wealth management deals, and served in a variety of roles at D.E. Shaw & Co., 
a leading global hedge fund, including leading teams of India-based engineers on a series of business automation projects.</p>
</div>',
								'timer'          =>  '1s',
								
				),

				array(			'image'	=>	"/images/solutions/team/jordan.png",
								'main_title'	=> 'Jordan Mendler',
								'designation'    => 'President & Chief Technology Officer',
								'team_name'			=> 'team_2',
								'back_title'    => 'Jordan Mendler',
								'back_content_id'    => 'team-2',
								'back_content'    => '<div id="team-2">
<p><b><span style="color:#5dcf06;">Jordan Mendler</span></b> - As the President & Chief Technology Officer of Briarmont Estates & Mansion, Jordan provides technical leadership and direction
 across a broad set of industries, services and projects, while driving both the technical strategy and the Veloz engineering team.</p>

<p>Before co-founding Veloz, Jordan led the computing team at UCLAs Genetic Sequencing Core where he designed and built 
computational clusters with thousands of processors and thousands of hard drives and wrote genetics processing pipelines 
to revolutionize the handling of large-scale datasets for Next-Gen Sequencing. Jordan simultaneously consulted on big data
 and high-performance computing at the UCLA School of Medicine, the Laboratory of Neuroimaging, and several other academic and research departments at UCLA, Stanford, USC, City of Hope and Cedars Sinai. Jordan also served as Chief Technology Officer of TinyTube Networks, helping pioneer mobile streaming platforms while building their server farms for highly available web serving and distributed video encoding, and as a Tech Advisor for several start ups. Jordan has also led and contributed code to
 dozens of open-source projects and is known within the open-source community as the lead developer of FlySpray.</p>
</div>',
								'timer'          =>  '1.5s'
				),
				array(			'image'	=>	"/images/solutions/team/us-leadership.png",
								'main_title'	=> 'U.S. Leadership',
								'team_name'			=> 'team_3',
				                'designation'    => '',
								'back_title'    => 'U.S. Leadership',
								'back_content_id'    => 'team-3',
								'back_content'    => '<div id="team-3">
<p><b><span style="color:#5dcf06;">U.S. Leadership</span></b> - Our local Technical Management Team consists of CTOs and Technical Co-Founders from companies including Acclaim Games, 
eMind, Mota Motors, SkyBound and more. They developed systems as technology leads for AMCs The Walking Dead and dozens of
 startup companies and built the intranet for Hilton.</p>

<p>Serving as engineers at the NASA Jet Propulsion Laboratory, the Air Forces Aerospace Corporation, and innovator
Orbital Sciences Corporation, members of our US-based Senior Leadership solved algorithmic challenges and optimized hardware
 and software systems to push the frontiers of space travel and develop military analytics systems.</p>
</div>',
								'timer'          =>  '2s'
				
				),
				
				
						
						array(			'image'	=>	"/images/solutions/team/india-leadership.png",
										'main_title'	=> 'India Leadership',
										'team_name'			=> 'team_4',
										'designation'    => '',
										'back_title'    => 'India Leadership',
										'back_content_id'    => 'team-4',
										'back_content'    => '<div id="team-4">
<p><b><span style="color:#5dcf06;">India Leadership</span></b>Our leadership team in India consists of project managers and technical managers who have 
overseen projects on various platforms. They led project management at AOL for AOL UK, AOL Japan, AOL 
Stylelist and more and supervised CEO wide efforts to drive cross-platform integration of more than 80 AOL portfolio channels.
 India management also oversaw Cisco Offshore Development Center with more than 800 engineers and supervised 
 engineering teams for Moviefone, EMC & HCL. </p>

<p>The Technical Team created mobile applications for Mashable and expanded the back-end for integration. 
They also created the developer portal for AMD, including front-end, back-end and conversion optimization and 
led core architecture and development of news platform for Huffington Post. The technical team also led data warehousing,
 UX and data integration for AOL Daily Finance and financial charting platform</p>
</div>',
										'timer'          =>  '2.5s'
						),
						
						array(			'image'	=>	"/images/solutions/team/our-engineers.png",
										'main_title'	=> 'Engineering',
										'team_name'  => 'team_5',
										'designation'    => '',
										'back_title'    => 'Engineering',
										'back_content_id'    => 'team-5',
										'back_content'    => '<div id="team-5">
<p><b><span style="color:#5dcf06;">Engineering</span></b> - Our Bangalore based engineering team consists of a mix of Senior Software Engineers, Systems Administrators, Architects and Analysts that can skillfully design, build and maintain applications in nearly every major language. Our engineers have decades of experience across a host of industries, and have coded many large applications including the AMD Developer Portal, Realthinclient, Mashables mobile app, AOL Daily Finance, AOL News, AOL UK/Japan Portals, Beverly Hills Chairs, Custom Tobacco and dozens of other mobile, web, desktop, and cloud applications.</p>
<p>Well-versed in most major languages and platforms, our Web Applications team includes experts in PHP,
 Ruby, Python, Perl, Java, C, C++, C#, jQuery, JavaScript, HTML5 and CSS, amongst others. We regularly 
 develop large production-scale applications in Wordpress, CodeIgniter, Ruby on Rails, NodeJS, AngularJS, 
 BackboneJS, ASP .NET, Java Spring, Perl Catalyst, OpenCart, Magento, Shophify, and a host of other frameworks. 
 Likewise, our Mobile Applications team has developed numerous large applications using Native iOS, Native Android, 
 Phonegap, Sencha and a host of other frameworks, often designing the applications to tie a cloud-based back-end. 
 Working closely with our application teams, our Systems Engineering team has built and maintained extremely large 
 production systems across local datacenters, private clouds, and public clouds like Amazon AWS and Microsoft Azure, 
 with a deep mastery of system and process automatic using Bash/Linux Shell Scripting, Windows Powershell, and a host 
 of of other technologies to build, automate and monitor large production systems. As such, Big Data and scalable applications 
 are a big part of what we do, having built large-scale applications and clusters utilizing Hadoop, Solr, Apache, MySQL, Sun Grid 
 Engine, and host of other leading technologies.

</p>
</div>',
										'timer'          =>  '3s'
						),
						
						);
	return $team_content;
	}
	
	
		/*contact content*/
	function contact_us()
	{
		
	$contact_content =  array(
				
				
						);
	return $contact_content;
	}
		var $divisions = 	array (	'Capital', 'Ventures', 'Industries', 'Innovations', 'Entertainment', );
	var $types     = 	array ( 'Web', 'Mobile','Ecommerce','Embedded', 'Big Data' );
/*
	var $divisions =	array(	'Consumer Products', 'Electronics', 'Entertainment & Leisure', 'Technology', 'Automotive', 'Brokerage', 'Transportation', 'Retail & Wholesale', 'Apparel & Accessories', 'Food Beverages & Tobacco', 'Manufacturing', 'Services', 'Consulting', 'Financial Services', 'Legal', 'Service', 'Software');
*/
	var $data =	array(	
	array(	
						'name'		=> 'Custom Tobacco',
						'summary'	=> 'A one-stop online shop for custom cigars and accessories with personalized emblems, CustomTobacco.com caters to customers of all stripes, from cigar aficionados and tobacco stores to those in search of the perfect gift.',
						'icon'		=> '/images/companies/custom-tobacco.png',
						'blog_image'	=> '/images/companies/custom-tobacco-blog.png',
						'link'		=> 'http://www.customtobacco.com',
						'launch'	=> '',
						'tagline'	=> 'Unique blends. Personalized labeling. One-stop shopping',
						'images'	=> array(
									'/images/companies/custom-tobacco/slide1.jpg',
									),
						'logo-timer' => 'data-wow-duration=".4s" data-wow-delay=".4s"',
						'divisions'	=> array(
									'Industries',
									'Ventures',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale, Food Beverage & Tobacco',
						'types'		=> array ( 'Ecommerce', ),
					),
					
					array(	
						'name'		=> 'Beverly Hills Chairs',	
						'summary'	=> 'A boutique shopping experience offline and online, Beverly Hills Chairs furnishes office offices and seats executives around the country by offering the best furniture across all price points and designs.',
						'icon'		=> '/images/solutions/portfolio/beverlyhills.png',
						'blog_image'	=> '/images/companies/beverly-hills-chairs-blog.png',
						'link'		=> 'http://www.beverlyhillschairs.com',
						'launch'	=> '',
						'tagline'	=> 'Affordable luxury for a Beverly Hills caliber office',
						'images'	=> array(
									'/images/companies/beverly-hills-chairs/slide1.jpg',
									),
						'logo-timer' => 'data-wow-duration=".6s" data-wow-delay=".6s"',
						'divisions'	=> array(
									'Industries',
									'Ventures',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale',
						'types'		=> array ( 'Ecommerce', ),
					),
					
					array(	
						'name'		=> 'Ergonomics Direct',
						'summary'	=> 'A market leader and trusted name in discounted high-end ergonomic seating, Ergonomics Direct offers customers great prices on top-of-the-line chairs, desks, and accessories.',
						'icon'		=> '/images/solutions/portfolio/ergonomics-direct.jpg',
						'blog_image'	=> '/images/companies/ergonomics-direct-blog.jpg',
						'link'		=> 'http://www.ergonomicsdirect.com',
						'launch'	=> '',  //July 2013
						'tagline'	=> 'The leader in ergonomic seating',
						'images'	=> array(
									'/images/companies/ergonomics-direct/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration=".9s" data-wow-delay=".9s"',
						'divisions'	=> array(
									'Industries',
									'Ventures',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale',
						'types'		=> array ( 'Ecommerce', ),
					),

					array(	
						'name'		=> 'Beverly Hills Auto Group',
						'summary'	=> 'Through an innovative e-commerce model and an entrepreneurial international sales network, The Beverly Hills Automotive Group offers unmatched pricing on the sales and leasing of new and used vehicles of all kind.',
						'icon'		=> '/images/companies/beverly-hills-auto.png',
						'blog_image'	=> '/images/companies/beverly-hills-auto-blog.png',
						'link'		=> 'http://www.bhautogroup.com',
						'launch'	=> '',
						'tagline'	=> 'The brand name in sales and leasing',
						'images'	=> array(
									'/images/companies/beverly-hills-auto/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="1.2s" data-wow-delay="1.2s"',
						'divisions'	=> array(
									'Capital',
									),
						'industries'	=> 'Automotive, Brokerage, Transportation',
						'types'		=> array ( 'Web', ),
					),
					
					array(	
						'name'		=> 'Wapi Gaming',
						'summary'	=> 'Drawing upon experience in the casino industry and expertise in gaming platforms, Wapi Gaming utilizes innovative technology solutions to help established casino operators exploit online gaming opportunities.',
						'icon'		=> '/images/solutions/portfolio/wapi-gaming.jpg',
						'blog_image'	=> '/images/companies/wapi-gaming-blog.jpg',
						'link'		=> 'http://www.wapigaming.com',
						'launch'	=> '', //February 2012
						'tagline'	=> 'Next Generation Casino Solutions',
						'images'	=> array(
									'/images/companies/wapi-gaming/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="1.5s" data-wow-delay="1.5s"',
						'divisions'	=> array(
									'Entertainment',
									'Ventures',
									),
						'industries'	=> 'Entertainment & Leisure, Service, Software, Technology',
						'types'		=> array ( 'Web', ),
					),
					
					
					array(	
						'name'		=> 'Briarmont Co',
						'summary'	=> 'Catering to a sophisticated clientele with a distinct appreciation for the most refined goods, Briarmont & Co. offers a distinguished line of branded products and serves as the parent company for related businesses.',
						'icon'		=> '/images/companies/briarmont.png',
						'blog_image'	=> '/images/companies/briarmont-blog.png',
						'link'		=> 'http://www.briarmontco.com',
						'launch'	=> '',
						'tagline'	=> 'Refined goods for the sophisticated gentleman',
						'images'	=> array(
									'/images/companies/briarmont/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="1.8s" data-wow-delay="1.8s"',
						'divisions'	=> array(
									'Industries',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale, Apparel & Accessories',
						'types'		=> array ( 'Web', ),
					),
					
					array(	
						'name'		=> 'Flyspray',
						'summary'	=> 'A straight-forward, user-friendly, web-based task management system, Flyspray provides a platform for businesses, software developers, and project managers to more efficiently track work flow, and in turn, effectively manage and complete important projects.',
						'icon'		=> '/images/companies/flyspray.png',
						'blog_image'	=> '/images/companies/flyspray-blog.png',
						'link'		=> 'http://www.flyspray.org',
						'launch'	=> '',  //November 2003
						'tagline'	=> 'Project management simplified',
						'images'	=> array(
									'/images/companies/flyspray/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="2.1s" data-wow-delay="2.1s"',
						'divisions'	=> array(
									'Ventures',
									),
						'industries'	=> 'Computer, Technology',
						'types'		=> array ( 'Web', ),
					),
					
					array(	
						'name'		=> 'Fashionable Furnishings',
						'summary'	=> 'Fashionable Furnishings was created with the forward-thinking office in mind. Sit in luxury with our carefully chosen line of ergonomic and exciting office chairs, desk sets, and office accessories.',
						'icon'		=> '/images/companies/fashionable-furnishings.png',
						'blog_image'	=> '/images/companies/fashionable-furnishings.png',
						'link'		=> 'http://www.fashionablefurnishings.com',
						'launch'	=> '',   //October 2014
						'tagline'	=> 'Modern designs for the modern office',
						'images'	=> array(
									'/images/companies/boutique-chairs/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="2.4s" data-wow-delay="2.4s"',
						'divisions'	=> array(
									'Industries',
									'Ventures',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale',
						'types'		=> array ( 'Ecommerce', ),
					),
					
					array(	
						'name'		=> 'Glazing Products',
						'summary'	=> 'Grounded in more than fifty years of unmatched customer service and  industry expertise, Glazing Products, a New York-based glass and mirror company provides the highest quality supplies to glaziers across the country.',
						'icon'		=> '/images/solutions/portfolio/glazing-product-logo.png',
						'blog_image'	=> '/images/companies/glazing-product-logo-blog.png',
						'link'		=> 'http://www.glazing-products.com',
						'launch'	=> '',  //January 1960
						'tagline'	=> 'Family operated since 1960',
						'images'	=> array(
									'/images/companies/glazing-products/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="1s" data-wow-delay="1s"',
						'divisions'	=> array(
									'Industries',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale, Manufacturing, Service',
						'types'		=> array ( 'Web', ),
					),
					
					array(	
						'name'		=> 'Magnopic',
						'summary'	=> 'Reflective of the culture and ideals that define Southern California, Magnopic is on the verge of disrupting the marketplace by introducing revolutionary products destined to captivate the next generation of trendsetters.',
						'icon'		=> '/images/companies/magnopic.png',
						'blog_image'	=> '/images/companies/magnopic-blog.png',
						'link'		=> 'http://www.magnopic.com', 
						'launch'	=> '',  //Summer 2014
						'tagline'	=> 'Something big is gonna happen',
						'images'	=> array(
									'/images/companies/magnopic/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="1.2s" data-wow-delay="1.2s"',
						'divisions'	=> array(
									'Innovations',
									'Industries',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale, Manufacturing, Apparel & Accessories, Entertainment & Leisure',
						'types'		=> array ( 'Web', ),
					),
					
					array(
						'name'		=> 'Taylor Advisory',
						'summary'	=> 'Taylor Advisory Insurance and Financial Services provides personalized solutions to meet your financial needs, from life insurance and investment planning to retirement and estate planning.',
						'icon'		=> '/images/companies/taylor-advisory.png',
						'blog_image'	=> '/images/companies/taylor-advisory-blog.png',
						'link'		=> 'http://www.tayloradvisory.com',
						'launch'	=> '',  //June 2013
						'tagline'	=> 'Enriching Today, Ensuring Tomorrow',
						'images'	=> array(
									'/images/companies/taylor-advisory/slide1.gif',
									),
									'logo-timer' => 'data-wow-duration="1.5s" data-wow-delay="1.5s"',
						'divisions'	=> array(
									'Capital',
									),
						'industries'	=> 'Brokerage, Financial Services',
						'types'		=> array ( 'Web', ),
					),

					array(	
						'name'		=> 'Westholme',
						'summary'	=> 'Westholme chairs are perfect for any business looking to upgrade with more classic, professional designs.',
						'icon'		=> '/images/companies/westholme.jpg',
						'blog_image'	=> '/images/companies/westholme-blog.jpg',
						'link'		=> 'http://www.westholmedesign.com',
						'launch'	=> '', //Summer 2013
						'tagline'	=> 'Classic chairs, luxurious designs',
						'images'	=> array(
									'/images/companies/westholme/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="1.8s" data-wow-delay="1.8s"',
						'divisions'	=> array(
									'Industries',
									'Ventures',
									),
						'industries'	=> 'Consumer Products, Retail & Wholesale',
						'types'		=> array ( 'Web', ),
					),
	
					array(	
						'name'		=> 'Veloz Recruiting',
						'summary'	=> 'With first-hand knowledge of the work habits and capabilities of each professional ready for placement, Veloz Recruiting connects companies with top graduates of the Veloz Internship Program.',
						'icon'		=> '/images/solutions/portfolio/veloz-recruiting.png',
						'blog_image'	=> '/images/companies/veloz-recruiting.png',
						'link'		=> 'http://www.velozrecruiting.com',
						'launch'	=> '', //June 2013
						'tagline'	=> 'Trained, tested, and proven professionals',
						'images'	=> array(
									'/images/companies/veloz-recruiting/slide1.jpg',
									),
									'logo-timer' => 'data-wow-duration="2.1s" data-wow-delay="2.1s"',
						'divisions'	=> array(
									'Capital, Innovations',
									),
						'industries'	=> 'Service, Staffing',
						'types'		=> array ( 'Web', ),
					),
					
					
										

					array(
						'name'		=> 'The Veloz Group',
						'summary'	=> 'The Veloz Group builds businesses across a variety of industries. Utilizing our technological, operational and managerial expertise, we start, run and grow our own companies, and serve as technology partners to other organizations.',
						'icon'		=> '/images/solutions/portfolio/veloz.png',
						'blog_image'	=> '/images/solutions/portfolio/veloz.png',
						'link'		=> 'http://www.thevelozgroup.com', 
						'launch'	=> '',  //December 2011
						'tagline'	=> '',
						'images'	=> array(
									'/images/solutions/portfolio/veloz-popup.png',
									),
									'logo-timer' => 'data-wow-duration="2.4s" data-wow-delay="2.4s"',
						'divisions'	=> array(
									'Capital',
									),
						'industries'	=> '',
						'types'		=> array ( 'Web', ),
					),

					array(
						'name'		=> 'Mashable',
						'summary'	=> 'Mashable is the leading digital media company for the Connected Generation delivering the news today that everyone else will be talking about tomorrow. We are your source for digital culture, breaking news, innovation, inspiration and entertainment.',
						'icon'		=> '/images/companies/mashable.png',
						'blog_image'	=> '/images/companies/mashable.png',
						'link'		=> '', //https://itunes.apple.com/us/app/mashable/id910775754?mt=8
						'launch'	=> '',  //December 2011
						'tagline'	=> '',
						'images'	=> array(
									'/images/companies/mashable.png',
									),
									'logo-timer' => 'data-wow-duration="2.7s" data-wow-delay="2.7s"',
						'divisions'	=> array(
									'',
									),
						'industries'	=> '',
						'types'		=> array ( 'Mobile', ),
					),
					array(
						'name'		=> 'PageQuest',
						'summary'	=> 'The first mobile social book club for teens.',
						'icon'		=> '/images/companies/pagequest.png',
						'blog_image'	=> '/images/companies/pagequest.png',
						'link'		=> '', //https://itunes.apple.com/us/app/pagequest/id666106897?mt=8
						'launch'	=> '',  //December 2011
						'tagline'	=> '',
						'images'	=> array(
									'/images/companies/pagequest.png	',
									),
									'logo-timer' => 'data-wow-duration="3s" data-wow-delay="3s"',
						'divisions'	=> array(
									'',
									),
						'industries'	=> '',
						'types'		=> array ( 'Mobile', ),
					),
					
					
							);
	
	function get_company_info($company = 'all', $element = 'all')
	{
		$companies = array();

		/* Debugging
		echo "this data: <br>";
		var_dump($this->data);
		echo "<br><br>";*/

		foreach($this->data as $a_company) {
			/*echo "a_company:";
			var_dump($a_company);
			echo "<br><br>";*/
			if($a_company['types'][0] == 'Web'){
				array_push( $companies, $a_company );
			}
		}
		/*echo "companies:";
		var_dump($companies);*/
		if ($company == 'all')
		{
			return $companies;
		}
		else
		{
			if ($element == 'all')
			{
				return $companies[$company];
			}
			else
			{
				return $companies[$company][$element];
			}
		}
	}

	function get_project_info($company = 'all', $element = 'all')
	{
		$companies = array();

		 //Debugging
		/*echo "this data: <br>";
		var_dump($this->data);
		echo "<br><br>";*/

		foreach($this->data as $a_company) {
			/*echo "a_company:";
			var_dump($a_company);
			echo "<br><br>";*/
			if($a_company['types'][0] == 'Ecommerce'){
				array_push( $companies, $a_company );
			}
		}
		/*echo "companies:";
		var_dump($companies);*/
		if ($company == 'all')
		{
			return $companies;
		}
		else
		{
			if ($element == 'all')
			{
				return $companies[$company];
			}
			else
			{
				return $companies[$company][$element];
			}
		}
	}

	function get_portfolio_info($company = 'all', $element = 'all')
	{
		if ($company == 'all')
		{
			return $this->data;
		}
		else
		{
			if ($element == 'all')
			{
				return $this->data[$company];
			}
			else
			{
				return $this->data[$company][$element];
			}
		}
	}

	function get_divisions_info()
	{
		return $this->divisions;
	}
	function get_types_info()
	{
		return $this->types;
	}
							



	}
?>

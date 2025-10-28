<?php

/* NOTES:
 * Each business has divisions and types. Divions can be any of the list below, types needs to be EITHER Companies or Projects. Type must be in an array with one thing.
 */

class Portfolio_Model extends CI_Model {

    var $divisions = array('Capital', 'Ventures', 'Industries', 'Innovations', 'Entertainment',);
    var $types = array('Development', 'Projects', 'Industrial', 'Self-Storage', 'Retail', 'Multifamily', 'Holdings', 'Past-Projects', 'Opportunities');
    /*
      var $divisions =	array(	'Consumer Products', 'Electronics', 'Entertainment & Leisure', 'Technology', 'Automotive', 'Brokerage', 'Transportation', 'Retail & Wholesale', 'Apparel & Accessories', 'Food Beverages & Tobacco', 'Manufacturing', 'Services', 'Consulting', 'Financial Services', 'Legal', 'Service', 'Software');
     */
    var $data = array(
	/* array(
	  'name'		=> 'Arcade Buffs',
	  'summary'	=> 'Passionate about bringing the classic arcade experience back to life, Arcade Buffs is focused on returning the timeless arcade games you know and love to your home or business.',
	  'icon'		=> '/images/companies/arcade-buffs.png',
	  'blog_image'	=> '/images/companies/arcade-buffs-blog.png',
	  'link'		=> '',  //http://www.arcadebuffs.com
	  'launch'	=> '',
	  'tagline'	=> 'Bringing back the arcade experience',
	  'images'	=> array(
	  '/images/companies/arcade-buffs/slide1.jpg',
	  ),
	  'divisions'	=> array(
	  'Industries',
	  'Ventures',
	  'Entertainment',
	  ),
	  'industries'	=> 'Comsumer Products, Electronics, Entertainment & Leisure, Technology',
	  'types'		=> array ( 'Projects', ),
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
	  'divisions'	=> array(
	  'Capital',
	  ),
	  'industries'	=> 'Automotive, Brokerage, Transportation',
	  'types'		=> array ( 'Projects', ),
	  ), */

	/* array(
	    'name' => 'Beverly Hills Chairs',
	    'summary' => 'The leading refurbisher and reseller of Herman Miller Aeron office chairs in the country, Beverly Hills Chairs furnishes offices and seats executives nationwide. By providing high-end ergonomic office furniture affordably, we help companies enhance their professional environments, improve productivity and employee satisfaction, and reduce liability and exposure.',
	    'icon' => '/images/companies/beverlyhills.png',
	    'blog_image' => '/images/companies/beverly-hills-chairs-blog.png',
	    'link' => 'http://www.beverlyhillschairs.com',
	    'launch' => '',
	    'tagline' => 'Bestselling Ergonomic Office Furniture Affordably',
	    'images' => array(
		'/images/companies/beverly-hills-chairs/slide1.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale',
	    'types' => array('Active',),
	), */
	/* array(
	    'name' => 'ShipMe',
	    'summary' => 'ShipMe is a technology-first 4PL that uses data analytics to streamline and optimize logistics for its customers. The easy to use platform helps customers realize vast savings along with faster delivery times and a better customer experience.',
	    'icon' => '/images/companies/shipme.png',
	    'blog_image' => '/images/companies/shipme.png',
	    'link' => 'https://shipme.xyz',
	    'launch' => '',
	    'tagline' => 'The lowest price on shipping, every time',
	    'images' => array(
		'/images/companies/shipme/slide1.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale',
	    'types' => array('Development',),
	), */
	/* array(
	    'name' => 'KM Squared',
	    'summary' => 'KM² uses data analytics to identify undervalued assets in multi-family and commercial real estate. Working with our partners we then execute upon these value-add opportunities to realize strong rates of returns for partners and investors alike.',
	    'icon' => '/images/companies/km-squared.png',
	    'blog_image' => '/images/companies/km-squared.png',
	    'link' => 'https://km2.ai/',
	    'launch' => '',
	    'tagline' => 'Computational Real Estate Investment',
	    'images' => array(
		'/images/companies/km-squared/slide1.jpg',
	    ),
	    'divisions' => array(
		'Industries',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale, Apparel & Accessories',
	    'types' => array('Active',),
	), */
	/* array(
	    'name' => 'Briarmont',
	    'summary' => 'Briarmont is a lifestyle brand that offers a line of premium, hand-crafted cigars. Our tobacco is sourced from the Dominican Republic and Nicaragua, and we offer only products of the finest quality. Our cigars are offered in limited quantities exclusively through Custom Tobacco and a select number of partners.',
	    'icon' => '/images/companies/briarmont.png',
	    'blog_image' => '/images/companies/briarmont-blog.png',
	    'link' => 'http://www.briarmont.com',
	    'launch' => '',
	    'tagline' => 'Exclusive Cigar Offerings',
	    'images' => array(
		'/images/companies/briarmont/slide1.jpg',
	    ),
	    'divisions' => array(
		'Industries',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale, Apparel & Accessories',
	    'types' => array('Active',),
	), */
	/* array(
	    'name' => 'Westholme',
	    'summary' => 'Something big is coming soon!',
	    'icon' => '/images/companies/westholme/logo.png',
	    'blog_image' => '/images/companies/westholme/open-office-spacecropped2-800x450.jpg',
	    'link' => 'https://www.westholmedesign.com/',
	    'launch' => '',
	    'tagline' => 'The Future of Seating',
	    'images' => array(
		'/images/companies/westholme/open-office-spacecropped2-800x450.jpg',
	    ),
	    'divisions' => array(
		'Industries',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale, Apparel & Accessories',
	    'types' => array('Development',),
	), */
	/* array(
	    'name' => 'BeCalm',
	    'summary' => 'Something big is coming soon!',
	    'icon' => '/images/companies/becalm/logo.png',
	    'blog_image' => '/images/companies/becalm/ergonomic-seating.jpg',
	    'link' => 'https://www.becalm.today/',
	    'launch' => '',
	    'tagline' => 'Ergonomic Accessories',
	    'images' => array(
		'/images/companies/becalm/ergonomic-seating.jpg',
	    ),
	    'divisions' => array(
		'Industries',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale, Apparel & Accessories',
	    'types' => array('Development',),
	), */
	/* array(
	    'name' => 'Bjorn',
	    'summary' => 'Something big is coming soon!',
	    'icon' => '/images/companies/bjornoffice/logo.png',
	    'blog_image' => '/images/companies/bjornoffice/Clubhouse_Blog.jpg',
	    'link' => 'https://www.bjornoffice.com/',
	    'launch' => '',
	    'tagline' => 'Cutting Edge Workspaces',
	    'images' => array(
		'/images/companies/bjornoffice/Clubhouse_Blog.jpg',
	    ),
	    'divisions' => array(
		'Industries',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale, Apparel & Accessories',
	    'types' => array('Development',),
	), */
	/* array(
	    'name' => 'Custom Lobby',
	    'summary' => 'Custom Lobby owns and operates a portfolio of e-commerce sites that allow users to purchase customized products. Using a proprietary software platform developed in-house, Custom Lobby targets niche products across industries.',
	    'icon' => '/images/companies/customlobby.png',
	    'blog_image' => '/images/companies/customlobby.png',
	    'link' => 'http://www.customlobby.com',
	    'launch' => '',
	    'tagline' => 'The Personalized Products Firm',
	    'images' => array(
		'/images/companies/customlobby/box.png',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Software, Industries',
	    'types' => array('Development',),
	), */
	/* array(
	    'name' => 'Custom Tobacco',
	    'summary' => 'A one-of-a-kind online platform that enables users to create customized premium cigars in real time, Custom Tobacco provides customers with a fun and easy way to design and purchase private label custom cigars. Custom Tobacco caters to individuals in search of the perfect gift; companies seeking a unique promotional item; event organizers hoping to elevate their party, wedding, golf tournament, etc.; and cigar aficionados.',
	    'icon' => '/images/companies/custom-tobacco.png',
	    'blog_image' => '/images/companies/custom-tobacco-blog.png',
	    'link' => 'http://www.customtobacco.com',
	    'launch' => '',
	    'tagline' => 'Premium Personalized Cigars',
	    'images' => array(
		'/images/companies/custom-tobacco/slide1.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Consumer Products, Retail & Wholesale, Food Beverage & Tobacco',
	    'types' => array('Active',),
	), */
	/* array(
	    'name' => 'Flyspray',
	    'summary' => 'An open-source web-based task management system, Flyspray provides a platform for businesses, software developers and project managers to more simply and efficiently track work flow, and in turn, effectively manage and complete important projects. Briarmont Estates & Mansion is the lead developer of Flyspray.',
	    'icon' => '/images/companies/flyspray.png',
	    'blog_image' => '/images/companies/flyspray-blog.png',
	    'link' => 'http://www.flyspray.org',
	    'launch' => '', //November 2003
	    'tagline' => 'Project Management Simplified',
	    'images' => array(
		'/images/companies/flyspray/slide1.jpg',
	    ),
	    'divisions' => array(
		'Ventures',
	    ),
	    'industries' => 'Computer, Technology',
	    'types' => array('Projects',),
	), */
	/* array(
	    'name' => 'Gay.com',
	    'summary' => 'Briarmont Estates & Mansion led a technology takeover and revitalization of Gay.com, a dating application and website with more than three million members that was once the market leader in gay dating. Gay.com was acquired four months into the turnaround.',
	    'icon' => '/images/companies/gay_logo.png',
	    'blog_image' => '/images/companies/gay_logo.png',
	    'link' => 'http://www.gay.com',
	    'launch' => '',
	    'tagline' => 'Revitalizing a Once-Great Brand',
	    'images' => array(
		'/images/companies/gay/gay-pic.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Gay.com, Online Dating',
	    'types' => array('Projects',),
	), */

	     /*  array(
	      'name'		=> 'The Taylor Method',
	      'summary'	=> 'The Taylor Method is a leading Software as a Service (SaaS) product for financial advisors. Taylor provides clients with a Learning Management System (LMS) and a variety of sales management tools to help advisors grow their practices. The Veloz Group serves as the technology arm of The Taylor Method forging a strong partnership that has produced ever-growing results.',
	      'icon'		=> '/images/companies/taylor-method.png',
	      'blog_image'	=> '/images/companies/taylor-method.png',
	      'link'		=> 'http://www.taylormethod.com',
	      'launch'	=> '',  //June 2013
	      'tagline'	=> 'Enriching Today, Ensuring Tomorrow',
	      'images'	=> array(
	      '/images/companies/taylor-method/slide1.gif',
	      ),
	      'divisions'	=> array(
	      'Capital',
	      ),
	      'industries'	=> 'Brokerage, Financial Services',
	      'types'		=> array ( 'Projects', ),
	      ), */
	/*
	  array(
	  'name'		=> 'KiwiSpider',
	  'summary'	=> 'A full-service platform that seamlessly integrates lead generation, customer analytics, and marketing automation. KiwiSpider uses unique predictive algorithms to find and contact top leads. Our simple CRM allows sales reps to remain focused on their job of selling, while leaving the rest to us.',
	  'icon'		=> '/images/companies/kiwispider.png',
	  'blog_image'	=> '/images/companies/kiwispider.png',
	  'link'		=> 'http://www.kiwispider.com/',
	  'launch'	=> '',
	  'tagline'	=> 'Next Generation Lead Generation',
	  'images'	=> array(
	  '/images/companies/kiwispider/slide1.jpg',
	  ),
	  'divisions'	=> array(
	  'Industries',
	  'Ventures',
	  ),
	  'industries'	=> '',
	  'types'		=> array ( 'Development	', ),
	  ),
	  array(
	  'name'		=> 'RepRoll',
	  'summary'	=> 'We are in the process of working toward solving a significant problem faced by many people in their personal and professional lives. Stay tuned for more details, as we hope to roll out RepRoll in the months ahead.',
	  'icon'		=> '/images/companies/reproll.png',
	  'blog_image'	=> '/images/companies/reproll.png',
	  'link'		=> 'http://www.reproll.com/',
	  'launch'	=> '',
	  'tagline'	=> 'Next Generation Reputation Verification',
	  'images'	=> array(
	  '/images/companies/reproll/slide1.jpg',
	  ),
	  'divisions'	=> array(
	  'Industries',
	  'Ventures',
	  ),
	  'industries'	=> '',
	  'types'		=> array ( 'Companies', ),
	  ),
	 */
	/* array(
	  'name'		=> 'Market of Design',
	  'summary'	=> 'A cutting-edge shopping experience that enhances the process of buying chairs, desks, lighting and accessories to furnishing the perfect office.',
	  'icon'		=> '/images/companies/market.png',
	  'blog_image'	=> '/images/companies/vs-logo.png',
	  'link'		=> 'http://www.marketofdesign.com',
	  'launch'	=> '',
	  'tagline'	=> 'Revolutionizing The Office Furniture Experience',
	  'images'	=> array(
	  '/images/companies/market-of-design/market.jpg',
	  ),
	  'divisions'	=> array(
	  'Industries',
	  'Ventures',
	  ),
	  'industries'	=> 'Market, Design',
	  'types'		=> array ( 'Development', ),
	  ), */
	/* array(
	    'name' => 'Veloz Solutions',
	    'summary' => 'Veloz Solutions helps organizations utilize technology in creative ways to resolve pain points and capitalize on new opportunities. Leveraging our team of CTO-level technologists and Google-caliber engineers, through advanced technology consulting and custom software development, we craft innovative technology solutions to solve challenging business problems.',
	    'icon' => '/images/companies/vs-logo.png',
	    'blog_image' => '/images/companies/vs-logo.png',
	    'link' => 'http://www.veloz-solutions.com/',
	    'launch' => '',
	    'tagline' => 'Custom Software Development and Technology Consulting',
	    'images' => array(
		'/images/companies/veloz-solutions/veloz-solutions.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Ideas, Solutions',
	    'types' => array('Active',),
	), */
	/* array(
	    'name' => 'Virtually Israel',
	    'summary' => "Virtually Israel brings Israel to life and to countless people across the globe through virtual reality experiences showcasing Israel's two most prominent cities, Tel Aviv and Jerusalem. The Veloz Group produced the Virtually Israel VR experiences, which are currently utilized by organizations around the world, including Israel's Ministry of Tourism.",
	    'icon' => '/images/companies/vr-logo.png',
	    'blog_image' => '/images/companies/vr-logo.png',
	    'link' => 'http://www.virtuallyisrael.org',
	    'launch' => '',
	    'tagline' => 'Experience Israel Through Virtual Reality',
	    'images' => array(
		'/images/companies/virtual-israel/vr.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Virtual Reality',
	    'types' => array('Projects',),
	), */
	/*array(
	    'name' => 'Brand Engagement Partners',
	    'summary' => "Brand Engagement Partners specializes in aligning clients with earned media opportunities in nationally recognized outlets. Through enhanced exposure and strategic branding, we help companies broaden their audience and customer base and more effectively engage existing customers and prospects.",
	    'icon' => '/images/companies/brand-engagement-partners.png',
	    'blog_image' => '/images/companies/brand-engagement-partners.png',
	    'link' => 'https://brandengagementpartners.com',
	    'launch' => '',
	    'tagline' => 'Earned Media in Nationally Outlets',
	    'images' => array(
		'/images/companies/brand-engagement-partners/brand-engagement-partners.jpg',
	    ),
	    'divisions' => array(
		'Industries',
		'Ventures',
	    ),
	    'industries' => 'Ideas, Solutions',
	    'types' => array('Active'),
	),*/
	    /* array(
	      'name'		=> 'Drunken Entertainment',
	      'summary'	=> 'Through unique physical and mobile holiday-themed games, Drunken Entertainment brings out the best of the holiday season year-round.',
	      'icon'		=> '/images/companies/drunken-entertainment.png',
	      'blog_image'	=> '/images/companies/drunken-entertainment-blog.png',
	      'link'	=> '',   //http://www.drunkenentertainment.com
	      'launch'	=> '',
	      'tagline'	=> 'Holiday spirit year-round',
	      'images'	=> array(
	      '/images/companies/drunken-entertainment/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Entertainment',
	      'Ventures',
	      'Innovations',
	      ),
	      'industries'	=> 'Entertainment & Leisure, Consumer Products, Retail & Wholesale',
	      'types'		=> array ( 'Projects', ),
	      ),

	      array(
	      'name'		=> 'Ergonomics Direct',
	      'summary'	=> 'A market leader and trusted name in discounted high-end ergonomic seating, Ergonomics Direct offers customers great prices on top-of-the-line chairs, desks, and accessories.',
	      'icon'		=> '/images/companies/ergonomics-direct.jpg',
	      'blog_image'	=> '/images/companies/ergonomics-direct-blog.jpg',
	      'link'		=> 'http://www.ergonomicsdirect.com',
	      'launch'	=> '',  //July 2013
	      'tagline'	=> 'The leader in ergonomic seating',
	      'images'	=> array(
	      '/images/companies/ergonomics-direct/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Industries',
	      'Ventures',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale',
	      'types'		=> array ( 'Companies', ),
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
	      'divisions'	=> array(
	      'Industries',
	      'Ventures',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale',
	      'types'		=> array ( 'Companies', ),
	      ), */


	    /* array(
	      'name'		=> 'Glazing Products',
	      'summary'	=> 'Grounded in more than fifty years of unmatched customer service and  industry expertise, Glazing Products, a New York-based glass and mirror company provides the highest quality supplies to glaziers across the country.',
	      'icon'		=> '/images/companies/glazing-product-logo.png',
	      'blog_image'	=> '/images/companies/glazing-product-logo-blog.png',
	      'link'		=> 'http://www.glazing-products.com',
	      'launch'	=> '',  //January 1960
	      'tagline'	=> 'Family operated since 1960',
	      'images'	=> array(
	      '/images/companies/glazing-products/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Industries',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale, Manufacturing, Service',
	      'types'		=> array ( 'Projects', ),
	      ),
	      array(
	      'name'		=> 'Luxury Humidors',
	      'summary'	=> 'Centered in the heart of Beverly Hills, Luxury Humidors focuses on enriching the quality of the cigar smoker’s experience, offering the finest selection of humidors and accessories at unbeatable prices.',
	      'icon'		=> '/images/companies/luxury-humidors.png',
	      'blog_image'	=> '/images/companies/luxury-humidors-blog.png',
	      'link'		=> '',  //http://www.luxuryhumidors.com
	      'launch'	=> '',  //Fall 2013
	      'tagline'	=> 'The finest selection of humidors and accessories at unbeatable prices',
	      'images'	=> array(
	      '/images/companies/luxury-humidors/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Industries',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale',
	      'types'		=> array ( 'Projects', ),
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
	      'divisions'	=> array(
	      'Innovations',
	      'Industries',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale, Manufacturing, Apparel & Accessories, Entertainment & Leisure',
	      'types'		=> array ( 'Projects', ),
	      ),

	      array(
	      'name'		=> 'Smith & Walker Tools',
	      'summary'	=> 'Dedicated to delivering America\'s best tools to craftsmen across the country at unbeatable prices, Smith & Walker Tools takes pride in being known as the "All-American Tool Company."',
	      'icon'		=> '/images/companies/smith-and-walker.png',
	      'blog_image'	=> '/images/companies/smith-and-walker-blog.png',
	      'link'		=> '',  //http://www.smithandwalkertools.com
	      'launch'	=> '',  //Summer 2014
	      'tagline'	=> 'The All-American Tool Company',
	      'images'	=> array(
	      '/images/companies/smith-and-walker/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Industries',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale',
	      'types'		=> array ( 'Projects', ),
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
	      'divisions'	=> array(
	      'Capital',
	      ),
	      'industries'	=> 'Brokerage, Financial Services',
	      'types'		=> array ( 'Projects', ),
	      ),

	      array(
	      'name'		=> 'Veloz International Advisors',
	      'summary'	=> 'A full-service strategic advisory and consulting firm, Veloz International Advisors provides creative and comprehensive solutions to the tax, investment and visa challenges faced by international clients.',
	      'icon'		=> '/images/companies/veloz-international-advisors.png',
	      'blog_image'	=> '/images/companies/veloz-international-advisors-blog.png',
	      'link'		=> 'http://www.velozadvisors.com',
	      'launch'	=> '',  //December 2011
	      'tagline'	=> 'Meeting the complex legal, financial and immigration needs of international families',
	      'images'	=> array(
	      '/images/companies/veloz-international/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Capital',
	      ),
	      'industries'	=> 'Consulting, Financial Services, Legal, Service',
	      'types'		=> array ( 'Projects', ),
	      ),

	      array(
	      'name'		=> 'Veloz Recruiting',
	      'summary'	=> 'With first-hand knowledge of the work habits and capabilities of each professional ready for placement, Veloz Recruiting connects companies with top graduates of the Veloz Internship Program.',
	      'icon'		=> '/images/companies/veloz-recruiting.png',
	      'blog_image'	=> '/images/companies/veloz-recruiting.png',
	      'link'		=> 'http://www.velozrecruiting.com',
	      'launch'	=> '', //June 2013
	      'tagline'	=> 'Trained, tested, and proven professionals',
	      'images'	=> array(
	      '/images/companies/veloz-recruiting/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Capital, Innovations',
	      ),
	      'industries'	=> 'Service, Staffing',
	      'types'		=> array ( 'Proejcts', ),
	      ),

	      array(
	      'name'		=> 'Wapi Gaming',
	      'summary'	=> 'Drawing upon experience in the casino industry and expertise in gaming platforms, Wapi Gaming utilizes innovative technology solutions to help established casino operators exploit online gaming opportunities.',
	      'icon'		=> '/images/companies/wapi-gaming.jpg',
	      'blog_image'	=> '/images/companies/wapi-gaming-blog.jpg',
	      'link'		=> 'http://www.wapigaming.com',
	      'launch'	=> '', //February 2012
	      'tagline'	=> 'Next Generation Casino Solutions',
	      'images'	=> array(
	      '/images/companies/wapi-gaming/slide1.jpg',
	      ),
	      'divisions'	=> array(
	      'Entertainment',
	      'Ventures',
	      ),
	      'industries'	=> 'Entertainment & Leisure, Service, Software, Technology',
	      'types'		=> array ( 'Projects', ),
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
	      'divisions'	=> array(
	      'Industries',
	      'Ventures',
	      ),
	      'industries'	=> 'Consumer Products, Retail & Wholesale',
	      'types'		=> array ( 'Projects', ),
	      ), */
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
                'types' => array('Industrial', 'Opportunities'),
            ),
            array(
                'name' => 'Briarmont Estates, Sylmar',
                'summary' => "20 homes on 2 acres",
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
                'types' => array('Multifamily', 'Self-Storage', 'Opportunities'),
            ),
            array(
                'name' => 'Briarmont Estates, Lake Palmdale',
                'summary' => "52 homes on 13.7 acres",
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
                'types' => array('Multifamily', 'Self-Storage', 'Opportunities'),
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
                'types' => array('Retail', 'Self-Storage'),
            ),
            array(
                'name' => 'Industrial Center, Palmdale',
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
            ),
            array(
                'name' => 'Oxnard Auto Row',
                'summary' => "Oxnard, CA<br/>7,104 SF",
                'icon' => '/images/portfolio/0c7487d33ca14cf3914993c5747b34c5_3000x2000_resize.jpg',
                'blog_image' => '/images/portfolio/0c7487d33ca14cf3914993c5747b34c5_3000x2000_resize.jpg',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/0c7487d33ca14cf3914993c5747b34c5_3000x2000_resize.jpg',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Past-Projects'),
            ),
            array(
                'name' => 'Industrial Center, Port of LA',
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
            ),
            array(
                'name' => 'Industrial Center, Middle Village',
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
                'types' => array('Industrial', 'Retail', 'Past-Projects'),
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
                'types' => array('Development', 'Projects', 'Industrial', 'Self-Storage', 'Retail', 'Multifamily', 'Past-Projects'),
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
            ),
            array(
                'name' => 'Bakersfield Industrial Technologies Center',
                'summary' => "61,118 SF",
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
            ),
            array(
                'name' => 'Ontario Auto Row',
                'summary' => "Hold Length: 60 months<br/>Exit Multiple: 7-cap",
                'icon' => '/images/portfolio/Ontario_Auto_Row.png',
                'blog_image' => '/images/portfolio/Ontario_Auto_Row.png',
                'link' => '',
                'launch' => '',
                'tagline' => '',
                'images' => array(
                    '/images/portfolio/Ontario_Auto_Row.png',
                ),
                'divisions' => array(
                
                ),
                'industries' => 'Industrial',
                'types' => array('Industrial', 'Past-Projects'),
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
	    return $this->data;
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

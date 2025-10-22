<?php

class Jobs_Model extends CI_Model
{
	function get_intro()
	{
		return '<p>We are interested in identifying, onboarding and developing the next generation of leaders and innovators, as well as experienced individuals interested in pursuing "intrapreneurial" opportunities within our organization. We are seeking candidates who possess the personal characteristics needed to flourish at Briarmont Estates & Mansion - people who are smart, driven, self-motivated, detail-oriented, personable, team-oriented and well-suited for the positions they aspire to fill. We strongly encourage applicants of all professional and educational backgrounds and experience levels who believe that they would excel in our unique entrepreneurial environment and culture to consider joining our team.
			</p><br/><p>
			Please closely read the compensation details before applying. To apply, please submit your application at the bottom of the page.</a></p>';
	}

	function get_jobs()
	{
/*
		array(	'category-name' => 'Leadership',
			'joblists' =>	array(
					array(	'jobtitle'     => 'General Manager',
						'location'     => 'Los Angeles',
						'compensation' => 'Profit-share; Vesting equity; Deferred (non-guaranteed) base salary',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>The Veloz Group is hiring General Managers to direct business strategy and manage day-to-day operations of individual <a href="http://www.thevelozgroup.com/companies">Veloz portfolio startup companies</a>. Reporting directly to the CEO and President of The Veloz Group, General Managers are responsible for driving the profitability and growth of the startup venture they are assigned to, while working with Veloz leadership to oversee all functional areas across their portfolio company, including sales, marketing and operations. While industry experience is not required, General Manager candidates must possess strong leadership, managerial and organizational skills and must be ready personally and professionally to work in a highly entrepreneurial setting.</p><br/>
<p>General Managers can enter The Veloz Group as Vice Presidents (with an MBA and/or significant professional or entrepreneurial experience) or as Associates (pre-MBA; 0-5 years of full-time post-college work experience). Candidates will be considered for startup ventures deemed appropriate based on their professional and educational backgrounds, skill-sets and interests. There is no guaranteed base salary; compensation, including the deferred salary, is tied to the General Manager’s ability to drive profitability.</p><br/>'
					),
					array(  'jobtitle'     => 'Sales Leadership Associate',
					        'location'     => 'Southern California',
						'compensation' => 'Commission both for direct sales and for developing the sales force',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>The Veloz Group is hiring Sales Leadership Associates to drive business development across <a href="/companies">Veloz portfolio companies</a> through a combination of direct sales and leadership in building out a national sales force. Working closely with the full Veloz leadership team, including the CEO and the President of The Veloz Group and the General Managers of each Veloz portfolio company, and reporting directly to the Head of Sales, Sales Leadership Associates will receive sales and leadership training, and will gain hands-on experience across all aspects of the sales cycle, including segment identification, appointment setting, product presentation and closing the sale, while learning about recruiting, marketing and management. Ultimately, Sales Leadership Associates will have the opportunity to recruit, develop and build their own teams.</p><br/>

<p>Candidates must be personable, outgoing, and driven to succeed and possess leadership capacity and initiative. While qualified individuals of all personal, professional and educational backgrounds are encouraged to apply, the Sales Leadership Associate role is designed for applicants with 0-4 years of full-time post-college work experience interested in gaining sales, marketing and leadership experience through both direct hands-on application and training. There is no base salary; compensation is directly tied to performance. Sales Leadership Associates earn uncapped commissions through direct sales and receive a per-person bonus as they develop the sales force.</p><br/>'
),
				array(  'jobtitle'     => 'Operations Associate',
				        'location'     => 'Los Angeles',
					'compensation' => '$10 / hour',
					'hours'        => 'parttime',
					'experience'   => 'No experience required',
					'education'    => 'Bachelors',
					'description'  => '
<p>The Veloz Group is hiring a part-time Operations Associate to provide administrative and operational support to the Veloz executive team for approximately twenty hours a week. Candidates must be organizationally strong, detail-oriented and extremely diligent, as responsibilities will include managing and fulfilling customer orders and interacting with customers to ensure their satisfaction, in addition to a wide variety of administrative projects assigned by the Veloz leadership team.
</p><br/><p>
As a part-time position (ideally four to five hours a day, Monday through Thursday), interested UCLA and USC students and recent graduates, in addition to more experienced candidates, are strongly encouraged to apply. Candidates must have their own car; a positive, can-do attitude; a strong work ethic; good communication skills and an extremely high level of attentiveness to detail.</p><br/>',
						),
						array(  'jobtitle'     => 'Assistant to the CEO',
						        'location'     => 'Los Angeles',
							'compensation' => '$15 / hour',
							'hours'        => 'parttime',
							'experience'   => 'No experience required',
							'education'    => 'Bachelors',
							'schedule'     => 'Monday - Thursday (30 hours/week)',
							'description'  => '
<p>
The Veloz Group is filling a newly-created position: Assistant to the CEO. The Assistant to the CEO will gain unique exposure to the inner workings of a startup company and will develop professionally through hands-on experience in an entrepreneurial environment and by working directly with our CEO.
</p><br/>
<p>
Primary day-to-day responsibilities will consist of interfacing with prospective and existing customers and clients of underlying Veloz business, including Beverly Hills Chairs, Ergonomics Direct and Custom Tobacco; developing and managing relationships with suppliers; and providing administrative and operational support on projects managed by our CEO, including sales and business development deals.
</p><br/>
<p>
Recent graduates (or seniors in college ready to start) and experienced candidates alike will be considered, but all applicants must possess very strong organizational and communication skills: candidates must be highly-motivated, detail-oriented and extremely diligent, as well as personable, outgoing and comfortable interacting with all types of people on the phone, over email and in person. Candidates must have their own car, must be able to work well both individually and in a team-setting, and should enjoy, but must be able to succeed in our relatively unstructured, highly-entrepreneurial atmosphere and corporate culture.
</p><br/>
							',
						),
						array(  'jobtitle'     => 'Sales Associate',
						        'location'     => 'Los Angeles',
							'compensation' => 'See Above Description',
							'hours'        => 'fulltime',
							'experience'   => 'Sales experience required',
							'education'    => 'Bachelors',
							'description'  => '
<p>The Veloz Group is hiring one to two full-time Sales Associate to sell products and develop relationships for one of our portfolio companies. Sales Associates will report directly to the CEO of The Veloz Group and will divide their time between driving direct sales and working with company leadership to develop and advance new business relationships. Sales Associates will gain hands-on experience across all aspects of the sales cycle, including segment identification, appointment setting, product presentation and closing the sale.</p><br/>

<p>Sales Associates will receive a small monthly draw ($1,500 a month for 2-3 months) contingent on meeting pre-determined targets, and will enjoy commissions on both direct sales generated and new relationships cultivated that lead to sales. Candidates must be personable, outgoing, driven to succeed and able to work both independently and in a collaborative setting. For this position, we only are considering candidates who are ready to start full-time within a month of applying. Candidates available part-time only should consider other positions listed on our website.</p><br/>'
						),
						array(  'jobtitle'     => 'Senior Sales Representative',
						        'location'     => 'Southern California',
							'compensation' => 'Commission only',
							'hours'        => 'fulltime',
							'experience'   => 'No experience required',
							'education'    => 'Bachelors',
							'description'  => '
<p>The Veloz Group is hiring full-time and part-time Senior Sales Representatives across Southern California (including Los Angeles, Orange County, San Diego, Riverside County, Ventura County and Santa Barbara) to build market share for products sold by <a href="/companies">Veloz companies</a>. Senior Sales Representatives must be comfortable working independently and in a team setting, and will ultimately be responsible for managing and developing relationships with identified companies. Utilizing solution-based selling over a complex sales cycle, Senior Sales Representatives will meet with large account prospects and develop client-focused solutions through products offered across Veloz portfolio companies. Candidates must possess a minimum of five years of sales experience; an advanced understanding of the sales process; and a track record of closing significant deals and managing high-dollar contracts. Senior Sales Representatives will be trained by The Veloz Group on each of the products they represent.</p><br />'
						),
						array(  'jobtitle'     => 'Sales Manager',
						        'location'     => 'Southern California',
							'compensation' => 'See above description',
							'hours'        => 'fulltime',
							'experience'   => 'No experience required',
							'education'    => 'Bachelors',
							'description'  => '
<p>The Veloz Group is hiring full-time Sales Managers across Southern California (including Los Angeles, Orange County, San Diego, Riverside County, Ventura County and Santa Barbara) to build and manage their own sales teams within The Veloz Group. Reporting directly to the Head of Sales, Sales Managers will be responsible for recruiting and managing a team of salespeople, while also enjoying the opportunity to directly sell a diverse set of products across Veloz companies. Candidates must possess an advanced understanding of the sales process; a track record of closing significant deals and managing high-dollar contracts; and a demonstrated ability to manage and lead. Sales Managers will be trained by The Veloz Group on each of the products they represent. There is no base salary; Sales Managers receive a bonus for each effective hire, uncapped commissions for direct sales, and a percentage of the revenue generated by members of their sales team.</p><br/>'

						)
						array(  'jobtitle'     => 'Strategic Buyer',
						        'location'     => 'Nationwide',
							'compensation' => 'Commission only',
							'hours'        => 'fulltime',
							'experience'   => 'No experience required',
							'education'    => 'Bachelors',
							'description'  => '
        <p>The Veloz Group is hiring Strategic Buyers to acquire products on a commision-basis for <a href="http://www.thevelozgroup.com/companies">businesses owned by The Veloz Group</a>, including <a href="http://www.beverlyhillschairs.com">Beverly Hills Chairs</a>, <a href="http://www.smithandwalkertools.com">Smith & Walker</a> and <a href="http://www.arcadebuffs.com">Arcade Buffs</a>. Working with Veloz management, Strategic Buyers identify and acquire relevant discounted items that can be re-sold by a Veloz portfolio company. Candidates must be self-motivated, able to work independently, and possess a knack for and interest in finding products at bargain prices. Strategic Buyers are expected to work remotely, while utilizing the internal resources offered by The Veloz Group.</p><br />'
						),
						array(  'jobtitle'     => 'Executive Assistant',
						        'location'     => 'Los Angeles',
							'compensation' => '$8 / hour',
							'hours'        => 'fulltime',
							'experience'   => 'No experience required',
							'education'    => 'Bachelors',
							'description'  => '
        <p>The Veloz Group is hiring a part-time Executive Assistant to provide administrative support to the Veloz executive team for approximately eight hours a week. Candidates must be organizationally strong, detail-oriented and extremely diligent, as responsibilities will include managing important paperwork and executing on tasks pertaining to a wide variety of projects. Interested UCLA and USC students and recent graduates with a demonstrated track record of taking initiative and succeeding inside and outside the classroom are strongly encouraged to apply.</p><br />'
						)
					)
				)
*/
		return array(
			array(	'category-name' => 'Leadership',
				'joblists' =>	array(
					/*array(  'jobtitle'     => 'General Manager, Veloz Solutions',
					        'location'     => 'Los Angeles',
						'compensation' => 'Revenue Share (no base salary; significant percentage of new revenues generated)',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => "
<p>The Veloz Group is hiring a General Manager to lead day-to-day operations and drive growth for Veloz Solutions (<a href='https://www.veloz-solutions.com/'>www.veloz-solutions.com</a>), a Veloz portfolio company that provides organizations with access to CTO-level technologists and Google-caliber engineers for services including custom software development and technology consulting. In our operational model, the General Manager serves as the leader of the portfolio company, in charge of overseeing all aspects related to the company's daily operations and responsible for leading the company to short-term and long-term growth. Each General Manager enjoys significant autonomy over his or her respective portfolio company and reports directly to the CEO and President of The Veloz Group. The General Manager of Veloz Solutions will primarily be tasked with building out the 'front-end' of the operation - driving sales and business development efforts - so the 'back-end' of our operation - our blue-chip engineering team - can be more regularly deployed. The General Manager will be responsible initially for directly sourcing new business, and ultimately for building out and overseeing a sales team. Candidates must be highly-entrepreneurial, deeply-driven to succeed and able to work both independently and in a collaborative setting. Direct sales experience and success is strongly preferred.</p><br>"
					),*/
					/* array(  'jobtitle'     => 'PR & Operations Associate, Custom Tobacco',
					        'location'     => 'Los Angeles',
						'compensation' => '$12-15 per hour based on experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => "
<p>Custom Tobacco is hiring a PR and Operations Associate. We are seeking a uniquely skilled, creative and highly self-motivated individual interested in working hand in hand with our executive team on a startup company and capable of thriving in our highly-collaborative entrepreneurial environment . The role will be very heavily focused on Operations, Public Relations, Social Media Marketing and Content Writing.</p><br/>

<p>The PR and Operations Associate will be responsible for properly fulfilling all orders in an organized and timely manner; interfacing with customers to assure that they have an excellent customer experience; leading research projects for the President and management team; driving and implementing a public relations strategy and building relationships with influencers; driving and implementing social media strategy that aligns with our brand; and writing content for the website. The Associate will gain hands-on experience working on public relations and social media campaigns, hands-on experience writing for Search Engine Optimization and deep operational experience for an e-commerce startup. Strong writing, communication and organizational skills are required.</p><br>"
						), */
					/* array(  'jobtitle'     => 'Sales Associate, Beverly Hills Chairs',
					        'location'     => 'Los Angeles',
						'compensation' => '$12-15 per hour based on experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => "
<p>The Veloz Group is hiring a dynamic salesman who can handle warm leads and inquiries. This position involves replying to inquires via email and telephone. The majority of this position will involve answering questions and helping customers complete their purchase online or by telephone. This position requires strong organizational skills and attention to detail. An ideal fit will be someone who is comfortable talking to people on the phone, in person, and via email. Applicant must be able to multi-task in this position. Part of this position involves posting on Craigslist as well as general office work such as scanning, printing, and mailing letters and documents. Reliable transportation is a must. Full training will be provided for this position.</p><br>"
					), */
					/*array(  'jobtitle'     => 'Senior Sales Representative, Veloz Solutions',
					        'location'     => 'National',
						'compensation' => 'Commission only (no base salary; significant percentage of sales generated)',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => "
<p>The Veloz Group is hiring a Senior Sales Representatives to drive sales, business development and strategic relationship management for Veloz Solutions (<a href='https://www.veloz-solutions.com/'>www.veloz-solutions.com</a>), a Veloz portfolio company that provides organizations with access to CTO-level technologists and Google-caliber engineers for services including custom software development and technology consulting. Senior Sales Representatives will be responsible for driving all aspects of the sales cycle, including segment identification, appointment setting, product presentation and closing the sale. Senior Sales Representatives will have the ability to offer all services provided by Veloz Solutions to prospective clients and will enjoy significant upside in the form of lucrative commissions for deals closed. Candidates must be personable, outgoing, driven to succeed and able to work both independently and in a collaborative setting, and direct sales experience and success is strongly preferred.</p><br>"
						),*/
					/* array(  'jobtitle'     => 'Web & Mobile Designer, The Veloz Group',
					        'location'     => 'Los Angeles',
						'compensation' => '$15-$25 per hour',
						'hours'        => 'parttime',
						'experience'   => '',
						'education'    => '',
						'description'  => '
<p>The Veloz Group is hiring a part-time freelance Web & Mobile Designer to work on design projects across our portfolio companies. Projects may include web, mobile, logo, layout and print design. The designer will work directly with our management team in a highly-collaborative, creative and entrepreneurial setting and will be provided with a unique opportunity to further develop his or her portfolio by virtue of the end-to-end nature of our projects and the diversity of our portfolio businesses. We are seeking candidates with strong technical skills (e.g.  proficiency with the Adobe creative suite) as well as great creativity and vision. Applicants must have extensive experience designing web and mobile applications. Applicants possessing a degree (or at least having taken significant coursework) in Design, Graphic Design, Fine Arts, Illustration, etc. are strongly preferred, as are candidates with experience in UX and Conversion Optimization. The ideal candidate is extremely detail-oriented, diligent and responsible; creative, passionate about design and visual storytelling; and eager to drive real-world graphic design projects. The schedule, including overall number of hours, is extremely flexible and will vary based on projects in the pipeline.</p><br>'
					), */
					array(  'jobtitle'     => 'Lead Software Engineer',
					        'location'     => 'Remote in Ukraine',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>The Briarmont Estates & Mansion is hiring Lead Software Engineers to provide technical leadership to variety of <a href="http://www.thevelozgroup.com/companies">technology ventures</a>. Reporting directly to our CTO & Vice Presidents, Lead Software Engineers will work collaboratively on a wide variety of projects in PHP, and to a lesser-degree Python, while overseeing one or more engineers. Engineers must possess strong software development skills and web development experience. Applicants must be self-motivated, eager to learn, and possess natural curiosity. 
<br>
<br>Candidates must be well versed in:
<br>- PHP
<br>- MySQL
<br>- JavaScript
<br>- CSS
<br>- Working in a command-line Linux environment
<br>- Distributed architectures
<br>
<br>The following are a plus, but are not required:
<br>- SysAdmin/DevOps
<br>- ReactJS, Vue.js, jQuery, and at least one other javascript framework
<br>- Mongo, Cassandra, and other NoSQL Databases
<br>- Prior project management experience
<br>- Experience with e-commerce, conversion optimization and performance optimization
<br>
<br>A Bachelors, Masters or PhD in Computer Science is strongly preferred, but exceptions will be made for those with commensurate programming experience.</p><br>'
					),
					array(  'jobtitle'     => 'Senior Frontend Engineer',
					        'location'     => 'Remote in Ukraine',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>Briarmont Estates & Mansion is hiring a Senior Frontend Software Engineer to provide frontend development for a variety of <a href="http://www.thevelozgroup.com/companies">technology ventures</a>. Reporting directly to our CTO, Vice Presidents and Lead Software Engineers, Frontend developers will work with Veloz leadership and engineering teams, gaining direct mentorship from very senior technologists. Engineers must possess strong software development skills and web development experience. Applicants must be self-motivated, eager to learn, and possess natural curiosity. Senior engineers must have atleast 7-10 years of related work experience.
<br>
<br>Candidates must be well versed in:
<br>- HTML5
<br>- CSS3 
<br>- JavaScript
<br>- Git
<br>- Basic knowledge of Bootstrap and/or Tailwind
<br>- PHP or Python 
<br>- Working in a command-line Linux environment
<br>- Working with a LAMP stack
<br>
<br>The following are a plus, but are not required:
<br>- ReactJS, Vue.js, jQuery, and at least one other javascript framework
<br>- Experience with e-commerce, conversion optimization and performance optimization
<br>
<br>A Bachelors, Masters or PhD in Computer Science is strongly preferred, but exceptions will be made for those with commensurate programming experience.</p><br>'
					),
					array(  'jobtitle'     => 'Junior Frontend Engineer',
					        'location'     => 'Remote in Ukraine',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>Briarmont Estates & Mansion is hiring a Junior Frontend Software Engineer to provide frontend development for a variety of <a href="http://www.thevelozgroup.com/companies">technology ventures</a>. Reporting directly to our CTO, Vice Presidents and Lead Software Engineers, Frontend developers will work with Veloz leadership and engineering teams, gaining direct mentorship from very senior technologists. Engineers must possess strong software development skills and web development experience. Applicants must be self-motivated, eager to learn, and possess natural curiosity.
<br>
<br>Candidates must be well versed in:
<br>- HTML5
<br>- CSS3 
<br>- JavaScript
<br>- Git
<br>- Basic knowledge of Bootstrap and/or Tailwind
<br>- PHP or Python 
<br>- Working in a command-line Linux environment
<br>- Working with a LAMP stack
<br>
<br>The following are a plus, but are not required:
<br>- ReactJS, Vue.js, jQuery, and at least one other javascript framework
<br>- Experience with e-commerce, conversion optimization and performance optimization
<br>
<br>A Bachelors, Masters or PhD in Computer Science is strongly preferred, but exceptions will be made for those with commensurate programming experience.</p><br>'
					),
					array(  'jobtitle'     => 'Senior Business Operations Associate',
					        'location'     => 'Remote in Philippines',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>Briarmont Estates & Mansion is hiring a virtual Senior Business Operations Associate. Candidates must be detail-oriented, self-motivated, and possess excellent research and analytical skills as well as strong communication skills.
<br>
<br>Applicants must have:
<br>- At least 10 years of full-time experience
<br>- Experience working on product sourcing, import/export, or similar projects
<br>- Fluency in technology or professional experience that demonstrates a strong technical background
<br>- Ability to multi-task and work autonomously
<br>- Strong analytical skills
<br>- Strong organizational skills
<br>- Strong English language skills
<br>
<br>The following professional experience, while not a prerequisite, is preferred:
<br>- Experience with e-commerce, Amazon, eBay, and other online marketplaces
<br>- Experience with SEO, PPC, keyword research, conversion optimization, or other aspects of digital marketing
<br>- Experience with negotiation, inventory and supplier management, freight optimizations, or other forms of manufacturing and/or logistics
<br>
<br>The key elements of the job are:
<br>- Assisting with sourcing and procurement projects
<br>- Assisting with miscellaneous research and operations projects
<br>- Assisting with projects related to SEO and digital marketing</p><br>'
					),
					array(  'jobtitle'     => 'Customer Service Assistant',
					        'location'     => 'Remote in Philippines',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>Briarmont Estates & Mansion is hiring a virtual Customer Service Assistant.
<br>
<br>the key elements of the job are:
<br>- Responding to customer phone calls
<br>- Responding to customer emails
<br>- Interacting with customers through live chat
<br>- Executing on daily operational responsibilities
<br>
<br>Strong written and verbal communication skills are required. The position is full-time. Working hours will track U.S. business hours.</p><br>'
					),
					array(  'jobtitle'     => 'Executive Assistant',
					        'location'     => 'Remote in Philippines',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'fulltime',
						'experience'   => 'No experience required',
						'education'    => 'Bachelors',
						'description'  => '
<p>Briarmont Estates & Mansion is hiring an Executive Assistant. The Executive Assistant will gain unique exposure to the inner workings of a startup company and will develop professionally through hands-on experience in an entrepreneurial environment and by working directly with our CEO.
<br>
<br>Primary day-to-day responsibilities will consist of scheduling meetings and maintaining the calendars of our C-level executives, while filtering their emails to bring their attention to the most important issues at any given point in time. The Executive Assistant will also draft emails and make phone calls on behalf of our executives, handling small and medium sized issues they can address without needing the attention of the executive team. 
<br>
<br>All applicants must possess very strong organizational and communication skills: both verbal and written. Candidates must be highly-motivated, detail-oriented and extremely diligent, as well as personable, outgoing and comfortable interacting with all types of people on the phone and by email. Candidates must be able to work well both individually and in a team-setting, and should enjoy, but must be able to succeed in our relatively unstructured, highly-entrepreneurial atmosphere and corporate culture.</p><br>'
					),
					array(  'jobtitle'     => 'Warehouse Associate',
					        'location'     => 'Chatsworth, California, USA',
						'compensation' => 'Negotiable Based on Experience',
						'hours'        => 'Monday-Friday, 7am-3pm',
						'experience'   => 'No experience required',
						'education'    => 'High School or GED',
						'description'  => '
<p>Briarmont Estates & Mansion is hiring a Warehouse Associate. Associates will be responsible for refurbishing and packaging office chairs for shipping, and fulfilling customer orders. Associates will also load and unload pallets and shipping containers, help maintain inventory, and help maintain a clean and well-organized warehouse. The position is full-time and we are looking to hire immediately.
<br>
<br>Warehouse Associates will receive on the job training, including around the use of technology tools to improve warehouse performance and efficiency. Associates will also receive in-depth training, experience, and mechanical expertise in building, maintaining and refurbishing furniture, as well as learning the ins and outs of efficient and safe packaging and warehouse operations. Training will also be provided on the safe use of power tools and warehouse devices such as forklifts and cranes. While mechanical experience or past experience working in a warehouse environment is preferred -- no specific skills are required. Briarmont Estates & Mansion also has a culture of promoting from within the organization and offers weekly bonuses for strong performance.
<br>
<br>Candidates must be self-motivated and possess a strong work ethic. Candidates must be willing to perform manual labor, which includes lifting 50-70lb boxes.</p><br>'
					)
				)
			)
		);
	}		
}
?>

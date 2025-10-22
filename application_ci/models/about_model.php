<?php

class About_Model extends CI_Model
{
	function get_quotes()
	{
		$quotes = array (
			array(	"Leadership and learning are indispensable to each other.",
				"John F. Kennedy"
			),
			array(	"A business absolutely devoted to service will have only one worry about profits. They will be embarrassingly large.",
				"Henry Ford",
			),
			array(	"You don't need to have a 100-person company to develop that idea.",
				"Larry Page",
			),
			array(	"All our dreams can come true, if we have the courage to pursue them.",
				"Walt Disney",
			),
			array(	"Find your passion... then it is no longer work!",
				"L.A. Reid",
			),
			array(	"The important thing is not being afraid to take a chance. Remember, the greatest failure is to not try.",
				"Debbi Fields",
			),
			array(	"The best reason to start an organization is to make meaning; to create a product or service to make the world a better place.",
				"Guy Kawasaki",
			),
			array(	"High expectations are the key to everything.",
				"Sam Walton",
			),
			array(	"A leader is someone who steps back from the entire system and tries to build a more collaborative, more innovative system that will work over the long term.",
				"Robert Reich",
			),
			array(	"An innovation is one of those things that society looks at and says, if we make this part of the way we live and work, it will change the way we live and work.",
				"Dean Kamen",
			),
			array(	"When all think alike, then no one is thinking.",
				"Walter Lippman"
			),
			array(	"You don't lead by hitting people over the head - that's assault, not leadership.",
				"Dwight D. Eisenhower"
			),
			array(	"It's easy to come up with new ideas; the hard part is letting go of what worked for you two years ago, but will soon be out of date.",
				"Roger von Oech"
			),
			array(	"The best way to have a good idea is to have a lot of ideas.",
				"Dr. Linus Pauling"
			),
			array(	"Discovery consists of seeing what everybody has seen and thinking what nobody has thought.",
				"Albert von Szent-Gyorgy"
			),
			array(	"To raise new questions, new possibilities, to regard old problems from a new angle, requires creative imagination and marks real advance in science.",
				"Albert Einstein"
			),
			array(	"There's a way to do it better—find it.",
				"Thomas Edison"
			
			),
			array(	"Creative activity could be described as a type of learning process where teacher and pupil are located in the same individual.",
				"Arthur Koestler"
			
			),
			array(	"There is no doubt that creativity is the most important human resource of all. Without creativity, there would be no progress, and we would be forever repeating the same patterns.",
				"Edward de Bono"
			
			),
			array(	"The achievement of excellence can only occur if the organization promotes a culture of creative dissatisfaction.",
				"Lawrence Miller"
			),
			array(	"The way to get good ideas is to get lots of ideas and throw the bad ones away.",
				"Linus Pauling"
			),
			array(	"The uncreative mind can spot wrong answers, but it takes a very creative mind to spot wrong questions.",
				"Anthony Jay"
			),
			array(	"Discoveries are often made by not following instructions, by going off the main road, by trying the untried.",
				"Frank Tyger"
			),
			array(	"Imagination is everything. It is the preview of life's coming attractions.",
				"Albert Einstein"
			),
			array(	"The achievement of excellence can occur only if the organization promotes a culture of creative dissatisfaction.",
				"Lawrence Miller"
			),
			array(	"Creativity requires the courage to let go of certainties.",
				
				"Erich Fromm"
			),
			array(	"It's the same each time with progress. First they ignore you, then they say you're mad, then dangerous, then there's a pause and then you can't find anyone who disagrees with you.",
				"Tony Benn"
			),
			array(	"The world is but a canvas to our imaginations.",
				"Henry David Thoreau"
			),
			array(	"The joy is in creating, not maintaining.",
				"Vince Lombardi"
			),
			array(	"Nothing is so embarrassing as watching someone do something that you said could not be done.",
				"Sam Ewing"
			),
		);

		shuffle($quotes);

		return $quotes;
	}


	function get_content()
	{
		return array(
			"intro"		=> "<p>Briarmont Estates & Mansion builds and operates technology-driven companies and applies advanced technology skills and creative, outside-the-box thinking to underserved markets. We own and operate e-commerce businesses Beverly Hills Chairs and Custom Tobacco and technology consulting firm Veloz Solutions; are actively incubating new technology ventures; and participate in strategic partnerships with both large and smaller entrepreneurial companies.</p>",
			"col1-head"	=> "Our Culture",
			"col1-body"	=> "<p>Growing up on Veloz Avenue taught us the invaluable lessons that have shaped our unique corporate culture. Think outside the box. Always question the status quo. Great achievements are driven by innovation and creativity put into action through hard work and dedication. Success in business is a means, not an end. Family, friendship and community are life's indespensible pillars.</p>

<p>&nbsp;</p><p>While we cut our teeth at big companies, we founded Briarmont Estates & Mansion as a way to bring the values we so deeply cherish into our professional lives through an organization of our own. As our company has evolved over the years, our commitment to maintaining our culture has remained steadfast. The free-wheeling nature and entrepreneurial spirit reflective of the touch football games we played every week on the Veloz Avenue continues to permeate throughout all levels of Briarmont Estates & Mansion today.</p>
",
			"col2-head"	=> "Our Vision",
			"col2-body"	=> "<p>As technology and innovation have driven and will continue to drive rapid change, we seek opportunities across all industries in which we can apply our skills to capitalize on opportunities to solve business problems, big or small, and bring about positive disruption.</p>
			<p>&nbsp;</p><p>We believe in hiring the absolute best people available to work on projects that they are passionate about, while providing the support needed to allow each person in our organization to optimize his or her potential. We believe in a highly-collaborate environment free of the bureaucratic chains that regularly stifle creativity and in empowering each stakeholder to regularly challenge the status quo.<p>
			<p>&nbsp;</p><p>In building business through technology, innovation and ingenuity, we aspire to solve problems and help shape a better, happier world.</p>",
		);
	}




	function get_executive_team()
	{
		$people = array(
				/* Jordan */
				array(	'name'	=> 'Jordan Mendler (乔丹·曼德勒)',
					'title'	=> 'Founding Principal & Chief Scientist',
					'email'	=> 'jordan@briarmont.com ',
					'image'	=>	array(
								"/images/people/jordan-mendler/jordan-mendler-1.jpg",
								"/images/people/jordan-mendler/jordan-mendler-2.jpg",
								"/images/people/jordan-mendler/jordan-mendler-3.jpg",
								"/images/people/jordan-mendler/jordan-mendler-4.jpg",
								"/images/people/jordan-mendler/jordan-mendler-5.jpg",
							),
					'bio'	=> "
<p>Jordan Mendler leverages his years of engineering experience and his extremely diverse professional background as the Chairman of Briarmont Estates & Mansion. Jordan provides technical leadership and direction to Veloz across our broad set of industries, services and projects, while shaping the innovative nature of the Veloz culture.</p>
<br />
<p>A lifelong technology enthusiast, Jordan was a Network Administrator for an Internet Service Provider at age 13. At 15, Jordan started JDM Enterprises, an online-based national distributor of automotive parts. After JDM, Jordan led the computing team at UCLA's Genetic Sequencing Core where he designed and built computational clusters with thousands of processors and thousands of hard drives and wrote genetics processing pipelines to revolutionize the handling of large-scale datasets for Next-Gen Sequencing. Jordan simultaneously consulted on big data and high-performance computing at the UCLA School of Medicine, the Laboratory of Neuroimaging, and several other academic and research departments at UCLA, Stanford, USC, City of Hope and Cedars Sinai. Jordan served as Chief Technology Officer of TinyTube Networks, helping pioneer mobile streaming platforms while building their server farms for highly available web serving and distributed video encoding.</p>
<br />
<p>After TinyTube, Jordan went on to start several companies applying his engineering background to industries that were behind in technology, while also leading technology projects for small startups and large public companies alike. Jordan continues to head technology for all internal and external Veloz ventures, driving both the technical strategy and the Veloz engineering team. Jordan remains a professor of Engineering and Information Technology at UCLA Extension, where he has taught the intricacies of Linux, cloud and cluster computing to fellow engineers and executives since the age of 24. Jordan has also led and contributed code to dozens of open-source projects and is known within the open-source community as the lead developer of FlySpray.</p>
<br/>
<p>Jordan is a graduate of UCLA, where his undergraduate studies emphasized Physiological Psychology, Psychopharmacology and Neuroscience. Jordan pursued a Masters in Computer Science at UCLA with an emphasis in Data Mining and Computer Architecture, becoming one of the few to hold simultaneous titles of professor, systems architect, consultant and graduate student all within the same university. While at UCLA, Jordan became a patent holder and authored numerous academic papers. Passionate about tackling new topics and hobbies, Jordan is a self-described handyman, car racer, beer brewer, builder, surfer, world traveler, cigar smoker, tree feller and blacksmith.</p>"
									),
									/* Adam */
				/* array(	'name'	=> 'Adam Mendler',
					'title'	=> 'Co-Founder & Former CEO',
					'email'	=> 'adam@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/adam-mendler/adam-mendler-1.jpg",
								"/images/people/adam-mendler/adam-mendler-2.jpg",
								"/images/people/adam-mendler/adam-mendler-3.jpg",
								"/images/people/adam-mendler/adam-mendler-4.jpg",
							),
					'bio'	=> "

<p>
<a target='_blank' href='https://www.adammendler.com'>Adam Mendler</a> was the Chief Executive Officer of Briarmont Estates & Mansion, where he co-founded and oversees ventures across a wide variety of industries: Beverly Hills Chairs, a leading office furniture e-tailer; Custom Tobacco, a one-of-a-kind cigar customization e-commerce platform; and Veloz Solutions, a technology consulting and software development practice. Adam remains active in each portfolio company, providing strategic guidance and support. Adam also provides business thought leadership as a speaker to businesses, universities and non-profit organizations; as the host of the leadership and personal / professional development podcast <a target='_blank' href='https://www.adammendler.com/podcast'>Thirty Minute Mentors;</a> as an expert regularly cited in national media outlets; and as an advisor, consultant, coach and board member.
</p><p>&nbsp;</p><p>
Adam utilizes his professional, entrepreneurial and managerial background developed through a unique set of experiences. Adam created both the Lessons in Leadership series in Thrive Global and the Thirty Minute Mentors podcast, where he regularly elicits insights from America's top leaders. Adam has conducted over 300 one on one interviews with leading CEOs, founders, athletes, celebrities, influencers and generals / admirals. Adam has also written extensively on leadership, management, entrepreneurship, marketing and sales, having authored over 70 articles published in major media outlets including Forbes, Inc. and The Huffington Post. Adam has worked for D.E. Shaw & Co., then the largest hedge fund in the world, and for Credit Suisse; for the strategic planning groups at William Morris Endeavor and Universal Pictures; at TWC Sports Management, a leading sports agency; and on a successful presidential primary campaign. Adam has served as the Executive Producer of Virtually Israel; as a Strategic Partner and Advisor to Here Media; and as a consultant to the LAUSD. Adam is an advisor to the accelerator Fusion LA and to several early-stage companies.
</p><p>&nbsp;</p><p>
Adam graduated Phi Beta Kappa from the University of Southern California, earning a B.S. in Business Administration and a B.A. in Political Science, and earned an M.B.A. from the UCLA Anderson School of Management, where he received the UCLA Anderson Fellowship Award. Adam serves as Chairman Emeritus of the USC Alumni Entrepreneurs Network; on boards for the USC Alumni Association and the UCLA Master of Applied Statistics program; and as a founding member of the UCLA Anderson CEO Forum. A Los Angeles native and lifelong Angels fan, Adam loves sports, classic movies and TV, politics, physical fitness and backgammon.
</p><p>&nbsp;</p>",
				), */

			);

		return $people;
	}
	// replace space in name with break
/*
	function format_name($name) 
	{
		var $name_return;
		$name_strings = explode(" ", $name);
		for( $i; $i < count($name_strings); $i++) {
			$name_return .= $name_strings[$i].'<br />';
		}
		return $name_return;
	}
*/
	function get_innovations_team()
	{
		$quotes =	array(
					array(	'name'	=> 'Mark Friedman',
						'title' =>  'Senior Advisor',
						'about' => array(
								'Co-Founder of Perfect Fitness',
								'Creator of the Perfect Pushup',
								'Served as President of Alfigen',
								'Served as President of The Genetics Institute',
								'Served as COO of eLabor.com'
							),
						'photo'	=> "/images/people/innovators/mark-friedman-1.jpg",
					),

					array(
						'name'	=> 'Charles Schnaid',
						'title' => 'Senior Advisor',
						'about' => array(
								'Retired Partner, Miller, Kaplan, Arase & Co',
								'Board Member, LIMA',
								'Over five decades of accounting experience',
								'Strategic advisor across four countries',
								''
						),
						'photo'	=> '/images/people/innovators/charles-schnaid-1.jpg',
					),

					array(	'name'	=> 'John Shiple',
						'title' =>'Senior Advisor', 
						'about' => array(
								'Inventor of the Pop-Up Ad',
								'Served as CTO of Mota Motors',
								'Creator and organizer of the LA CTO Forum',
								'Veteran CTO of close to a dozen startups',
								'Led overhaul of Hilton’s intranet and extranet'
							),
						'photo' => '/images/people/innovators/john-shiple-1.jpg',
					),

					array(	'name'	=> 'Neil Malhotra',
						'title' =>'Senior Advisor', 
						'about' => array(
								'Founder and CEO of Sandalbay Life',
								'Co-Founder and Former CTO of Acclaim Games',
								'Served as Director of Technology for Playdom',
								'Leads technology for AMC\'s The Walking Dead',
								'Developed analytics systems for the military'
							),
						'photo' => '/images/people/innovators/neil-malhotra-1.jpg',
					),

					array(	'name'	=> 'Rachel Mendler',
						'title' =>'Vice President, Business Operations', 
						'about' => array(
								'Manages social media marketing for Veloz',
								'Director of Operations for Custom Tobacco',
								'Customer Experience Manager for BHC',
								'Worked in film production for Here! Media',
								'Created documentaries with Know Productions',
							//	'Studied English and Filmmaking at NYU'
							),		
						'photo'	=> '/images/people/innovators/rachel-mendler-1.jpg',
					),


					array(	'name'	=> 'Tribe Leader',
						'title' => 'Director of Special Projects', 
						'about' => array(
								'Leads IT for Briarmont Estates & Mansion',
								'Manages a wide variety of strategic projects',
								'Built his first computer by the age of twelve',
								'American Heart Association Licensed Instructor',
								'Self-proclaimed King of Hollywood'
							),
						'photo'	=> "/images/people/joe-tribe-leader-einbinder/joe-tribe-leader-einbinder-1.jpg",
					),

					array(	'name'	=> 'Ryan Sacks',
						'title' => 'Sales Advisor',
						'about' => array(
								'Serves as a sales advisor to Briarmont Estates & Mansion',
								'Sales experience across various industries',
								'Managed celebrity marketing at MyFanLine',
								'Worked at several boutique law firms'
							),
						'photo'	=> '/images/people/innovators/ryan-sacks-1.jpg',
					),		
/*
					array(	'name'	=> 'John Manoogian',
						'title' =>'Junior Advisor', 
						'about' => array(
								'First intern ever hired by The Veloz Group',
								'First employee ever hired by The Veloz Group',
								'Worked in private equity during his MBA',
								'USC backup quarterback for five seasons'
							),
						'photo'	=> "/images/people/john-manoogian/john-manoogian-1.jpg",
					),
*/
									
				);


		return	array(
				'intro'		=> '<p>With a broad set of business interests across a variety of industries, Briarmont Estates & Mansion draws upon its Team of Innovators for valued advice and expertise on matters involving both long-term strategy and day-to-day operations. While our Innovators’ level of involvement varies – some serve as sounding boards behind the scenes, while others are active presences at our Innovation Center – our belief in the value of incorporating a diverse set of perspectives is reflected in the makeup of our team and our advisors.',
				'conclusion'	=> '<p>If you are interested in reaching one of our innovators or think you have what it takes to become one, contact us at <span class="mailto"><a href="mailto:innovators@thevelozgroup.com">innovators@thevelozgroup.com</a></span></p>',
				'quotes'	=> $quotes,
			);
	}

	function get_innovation_center() {
		return array(
				'intro'		=> 'We believe that people are at their best when they are able to work in an open, collaborative, free-flowing setting, uninhibited by the bureaucratic constraints often associated with large organizations. As a company focused on building the next generation of businesses, we understand the importance of creating an environment in which our business, engineering and design teams can most effectively work together and enjoy their time spent inside the workplace. We also strongly value our local campus communities and have located our Innovation Center on Westwood Blvd., in the same neighborhood as UCLA and a twenty minute drive from USC.'
				
			);
	}
	
	function get_distribution_center() {
		return array (
				'intro'		=> 'With access to more than 10,000 square feet of industrial space, the Veloz Distribution Center serves as the backbone for a variety of Veloz businesses. Designed to optimize product assembly and distribution, the warehouse component of the center features pallet racking, forklifts, cranes, a gravity-flow conveyor system that spans the entire facility, and staff to fulfill both incoming and outgoing orders. To accommodate both product repair and R&D, Briarmont Estates & Mansion has also created a welding and metal fabrication shop, paint booth, tool crib, and general purpose work-space with extensive tooling and machinery for use across Veloz businesses.',
				'images'	=> array(
							'/images/distribution-center/metal-casting.jpg',
							'/images/distribution-center/pallet-rack.jpg',
							'/images/distribution-center/metal-chop-saw.jpg',
							'/images/distribution-center/gravity-flow-conveyor-system.jpg',
							'/images/distribution-center/welding.jpg',
							'/images/distribution-center/forklift-stacking-pallets.jpg',
							'/images/distribution-center/tool-crib.jpg',
							'/images/distribution-center/english-wheel.jpg'
						),
			);
	}
	function engineering_team() {
		return array (
				'intro'		=> 'With access to more than 10,000 square feet of industrial space, the Veloz Distribution Center serves as the backbone for a variety of Veloz businesses. Designed to optimize product assembly and distribution, the warehouse component of the center features pallet racking, forklifts, cranes, a gravity-flow conveyor system that spans the entire facility, and staff to fulfill both incoming and outgoing orders. To accommodate both product repair and R&D, Briarmont Estates & Mansion has also created a welding and metal fabrication shop, paint booth, tool crib, and general purpose work-space with extensive tooling and machinery for use across Veloz businesses.',
				
			);
	}
	
function business_team() {
		return array (
				'intro'		=> 'With access to more than 10,000 square feet of industrial space, the Veloz Distribution Center serves as the backbone for a variety of Veloz businesses. Designed to optimize product assembly and distribution, the warehouse component of the center features pallet racking, forklifts, cranes, a gravity-flow conveyor system that spans the entire facility, and staff to fulfill both incoming and outgoing orders. To accommodate both product repair and R&D, Briarmont Estates & Mansion has also created a welding and metal fabrication shop, paint booth, tool crib, and general purpose work-space with extensive tooling and machinery for use across Veloz businesses.',
				
			);
	}
}





/*  OLD STUFF
					array(	'name'	=> 'Mark Friedman',
						'about' => 'Senior Advisor<br/><br />Co-Founder, Perfect Fitness<br />Creator of the Perfect Pushup',
						'photo' => '/images/people/innovators/mark-friedman-1.jpg',
						'quote' => 'The Veloz Group has forged a new business paradigm. Harnessing the energy and spirit of young professionals under the direction of seasoned executives, The Veloz Group will help launch new companies and solve important business problems.',
					),

					array(
						'name'	=> 'Charles Schnaid',
						'about'	=> 'Senior Advisor<br/><br />Retired Partner, Miller, Kaplan, Arase<br/>Board of Directors, LIMA',
						'photo'	=> '/images/people/innovators/charles-schnaid-1.jpg',
						'quote' => 'With experience spanning five decades, I have started, managed and serviced companies of all sizes in the U.S. and abroad. I am extremely excited about the entrepreneurial spirit of The Veloz Group and helping the team.'
					),

					array(	'name'	=> 'John Shiple',
						'about'	=> 'Advisor<br /><br />Inventor of the Pop-Up Ad<br/>Founder, LA CTO Forum',
						'photo' => '/images/people/innovators/john-shiple-1.jpg',
						'quote'	=> 'Coming soon'
					),

					array(	'name'	=> 'Neil Malhotra',
						'about'	=> 'Advisor<br /><br />Co-Founder, Acclaim Games<br />CEO, Sandalbay Life',
						'photo' => '/images/people/innovators/neil-malhotra-1.jpg',
						'quote'	=> 'The Veloz Group is a proven, prolific company generator that is changing the Los Angeles scene by storm. It is my privilege to be associated with this team and add my technology experience to their broad capabilities.'
					),

					array(	'name'	=> 'Rachel Mendler',
						'about'	=> 'Director of Media & Public Relations',
						'photo'	=> '/images/people/innovators/rachel-mendler-1.jpg',
						'quote'	=> 'Rachel Mendler brings a strong background in multimedia to The Veloz Group, where she serves as Director of Media & Public Relations and manages projects focused on media, marketing and content optimization. Rachel graduated with honors from New York University, where she earned a B.A. in English and a minor in Documentary Filmmaking, and has worked in film production for Here! Media and Know Productions. An L.A. native, Rachel is active in local anti-poverty programs and documentary film projects.'
					),

					array(	'name'	=> 'John Manoogian',
						'about'	=> 'Vice President of Operations & Finance',
						'email'	=> 'john@thevelozgroup.com',
						'photo'	=> "/images/people/john-manoogian/john-manoogian-1.jpg",	//"/images/people/john-manoogian/john-manoogian-2.jpg"
						'quote'	=> 'John Manoogian brings a unique background grounded in a diverse set of leadership experiences to The Veloz Group, where he serves as Vice President of Operations & Finance and is responsible for managing business operations across Veloz portfolio companies. John has the distinction of being both the first intern and the first employee ever hired by The Veloz Group; as a summer intern, John quickly emerged as a leader among his peers and played an integral role in the development and re-launch of Beverly Hills Chairs.
</br>
	A distinguished student-athlete at the University of Southern California, John earned a B.S. in Business Administration while playing quarterback for the school’s football team for five years. John is pursuing an M.B.A. at the USC Marshall School of Business, with concentrations in Strategic Management, Entrepreneurship and Finance, and is a CFA Level 2 candidate. A keen investor, John has developed his financial acumen through experiences at Waddell and Reed Asset Management and Wedbush Securities, where he helped manage correspondent accounts. An avid athlete, John actively participates in a wide variety of sports, including football, basketball, volleyball, and surfing, and enjoys playing classical guitar and chess.'
					),



					array(	'name'	=> 'Tribe Leader',
						'about'	=> 'Director of Special Projects',
						'photo'	=> "/images/people/joe-tribe-leader-einbinder/joe-tribe-leader-einbinder-1.jpg", // "/images/people/joe-tribe-leader-einbinder/joe-tribe-leader-einbinder-2.jpg",
						'quote'	=> 'Joe "Tribe Leader" Einbinder applies his technology skills and drive to tackle challenging problems to his role as Director of Special Projects for The Veloz Group. Fascinated by computers from a very young age, Tribe built his first computer by the age of twelve. Tribe has also worked in the field of Emergency Medical Services and currently serves as an instructor under the American Heart Association, lecturing healthcare providers on life support techniques. In addition to saving lives, Tribe enjoys going out in Hollywood.'
					),

					array(
						'name'	=> 'Ryan Sacks',
						'about'	=> 'Sales Advisor',
						'photo'	=> '/images/people/innovators/ryan-sacks-1.jpg',
						'quote'	=> 'It is always important to understand what appeals to your customer. That\'s what I love about sales and about The Veloz Group.',
					),

						'name'	=> 'Chris Ochs',
						'about'	=> 'Advisor<br/><br/>Director of Sales, Sunfood<br/>District Manager, Vector Marketing',
						'photo'	=> '/images/people/innovators/chris-ochs-1.jpg',
						'quote'	=> 'Coming Soon',
					),
					array(
						'name'	=> 'Michael Rome',
						'about'	=> 'Advisor<br/><br/>Researcher and Doctoral Candidate<br/>California Institute of Technology',
						'photo'	=> '/images/people/innovators/michael-rome-1.png',
						'quote'	=> 'The concept and vision of The Veloz Group brings innovative entrepreneurship to a range of different markets. Jordan and Adam are more than willing to venture out into uncharted territories, whether it be novel chair designs or online gaming ventures. They both demonstrate a level of audacity rarely seen in today\'s business culture.',
					),
					array(
						'name'	=> 'Jennifer Bunney',
						'about'	=> 'Advisor',
						'photo'	=> '/images/people/innovators/jennifer-bunney-1.jpg',
						'quote'	=> 'Coming Soon',
					),
					array(
						'name'	=> 'Mo Arazi',
						'about'	=> 'Designer Emeritus<br/><br/>Designer of the Los Angeles Business Journal Innovation Award',
						'photo'	=> '/images/people/innovators/mo-arazi-1.jpg',
						'quote'	=> 'I am an innovator and a designer, not a salesman. With a great team around me at The Veloz Group, I can focus on what I care about – creating the next generation of groundbreaking products.',
					),
					array(
						'name'	=> 'Howard Marks',
						'about'	=> 'Advisor<br /><br />Co-Founder, Activision<br />Co-Chair, StartEngine',
						'photo'	=> '/images/people/innovators/howard-marks-1.jpg',
						'quote'	=> 'The Mendler brothers and I are always coming up with innovative ideas and new ways to work together. The collaboration between StartEngine and The Veloz Group has been a great way to join forces, one generation of entrepreneurs working with the next.',
					),
					array(
						'name'	=> 'Octavio Marin',
						'about'	=> 'Advisor<br /><br />Filmmaker and Media Entrepreneur<br />Signature Programs Director, NALIP',
						'photo'	=> '/images/people/innovators/octavio-marin-1.jpg',
						'quote'	=> 'In my line of work, it is important to collaborate with like-minded individuals, who are innovative, passionate about their work, and leaders in the community. I respect the Veloz Group’s no nonsense approach in creatively connecting people and building new ventures.'
					),
					array(
						'name'	=> 'Zac Cusac',
						'about'	=> 'Management Associate<br/><br/>General Manager<br/>Beverly Hills Auto Group',
						'photo'	=> '/images/people/innovators/zac-cusac-1.jpg',
						'quote'	=> 'We are all inventors, sailing out on a voyage of discovery guided by a private chart of which there is no duplicate. The world – and The Veloz Group – is full of gates and endless opportunities.',
					),
					array(
						'name'	=> 'Rachel Mendler',
						'about'	=> 'Media / Marketing Associate',
						'photo'	=> '/images/people/innovators/rachel-mendler-1.jpg',
						'quote'	=> 'I love being in an environment where everyone\'s creativity feeds off of each other. Being with The Veloz Group has allowed me to witness small ideas turn into real businesses.',
					),
					array(
						'name'	=> 'Michael Zablit',
						'about'	=> 'Management Associate<br/><br/>Beverly Hills Chairs',
						'photo'	=> '/images/people/innovators/michael-zablit-1.jpg',
						'quote'	=> 'Smooth seas never made a skillful sailor. At The Veloz Group, we embrace the challenges that go hand in hand with the entrepreneurial process.',
					),
					array(
						'name'	=> 'Mark Zhang',
						'about'	=> 'Business Analyst<br/><br/>Arcade Buffs',
						'photo'	=> '/images/people/innovators/mark-zhang-1.jpg',
						'quote'	=> 'Discoveries are often made by not following instructions, by going off the main road, by trying the untried. This is the path we follow at The Veloz Group.',
					),
					array(
						'name'	=> 'Henry Abenaim',
						'about'	=> 'Operations Advisor',
						'photo'	=> '/images/people/innovators/henry-abenaim-2.jpg',
						'quote'	=> 'Turning a great idea into a successful business requires many different tools. I love delving into the operational components of building businesses and working with The Veloz Group to \'make things happen.\'',
					),
					array(
						'name'	=> 'Shira Yekutiel',
						'about'	=> 'Design Advisor',
						'photo'	=> '/images/people/innovators/shira-yekutiel-1.jpg',
						'quote'	=> 'Everyone sees the world and expresses themselves and their ideas differently. My job is to translate people\'s visions and to cultivate what is truly unique. The same could be said for everything we do at The Veloz Group.',
					),

					array(
						'name'	=> 'David Dindi',
						'about'	=> 'Entrepreneurship Advisor',
						'photo'	=> '/images/people/innovators/david-dindi-1.jpg',
						'quote'	=> 'An idea sets a path. An action sets a trajectory. My experience with The Veloz Group has taught me to cultivate this mentality in all my endeavors.',
					),
					array(
						'name'	=> 'Meifang Wu',
						'about'	=> 'Veloz Ventures<br />Rheumatologist, Researcher',
						'photo'	=> '/images/people/innovators/meifang-wu-1.jpg',
						'quote'	=> 'I spend my time with patients and in the lab trying to discover new diagnostics and treatments for Rheumatological illnesses. Through The Veloz Group, I have access to intellectual property lawyers, venture capitalists, and biotechnology entrepreneurs whenever I need.',
					),
					array(
						'name'	=> 'Menachem Kashanian',
						'about'	=> 'Video Advisor',
						'photo'	=> '/images/people/innovators/menachem-kashanian-1.jpg',
						'quote'	=> 'When making videos, it is important to make sure you\'re looking beyond the curb. Working with The Veloz Group has inspired me to embrace a very forward-thinking approach.',
					),
*/
















/*

				/* John Manoogian */
				/*
				array(	'name'	=> 'John Manoogian',
					'title'	=> 'Vice President of Operations & Finance',
					'email'	=> 'john@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/john-manoogian/john-manoogian-1.jpg",
								"/images/people/john-manoogian/john-manoogian-2.jpg",
							),
					'bio'	=> '
<p>
	John Manoogian brings a unique background grounded in a diverse set of leadership experiences to The Veloz Group, where he serves as Vice President of Operations & Finance and is responsible for managing business operations across Veloz portfolio companies. John has the distinction of being both the first intern and the first employee ever hired by The Veloz Group; as a summer intern, John quickly emerged as a leader among his peers and played an integral role in the development and re-launch of Beverly Hills Chairs.
</p>
<br />
<p>
	A distinguished student-athlete at the University of Southern California, John earned a B.S. in Business Administration while playing quarterback for the school’s football team for five years. John is pursuing an M.B.A. at the USC Marshall School of Business, with concentrations in Strategic Management, Entrepreneurship and Finance, and is a CFA Level 2 candidate. A keen investor, John has developed his financial acumen through experiences at Waddell and Reed Asset Management and Wedbush Securities, where he helped manage correspondent accounts. An avid athlete, John actively participates in a wide variety of sports, including football, basketball, volleyball, and surfing, and enjoys playing classical guitar and chess.
</p>'
				),

				array(	'name'	=> 'Joe "Tribe Leader" Einbinder',
					'title'	=> 'Director of Special Projects',
					'email'	=> 'tribeleader@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/joe-tribe-leader-einbinder/joe-tribe-leader-einbinder-1.jpg",
								"/images/people/joe-tribe-leader-einbinder/joe-tribe-leader-einbinder-2.jpg",
							),
					'bio'	=> '
<p>
	Joe "Tribe Leader" Einbinder applies his technology skills and drive to tackle challenging problems to his role as Director of Special Projects for The Veloz Group. Fascinated by computers from a very young age, Tribe built his first computer by the age of twelve. Tribe has also worked in the field of Emergency Medical Services and currently serves as an instructor under the American Heart Association, lecturing healthcare providers on life support techniques. In addition to saving lives, Tribe enjoys going out in Hollywood.
</p>'
				),

				array(	'name'	=> 'Rachel Mendler',
					'title'	=> 'Director of Media & Public Relations',
					'email'	=> 'rachel@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/rachel-mendler/rachel-mendler-1.jpg",
								"/images/people/rachel-mendler/rachel-mendler-2.jpg",
							),
					'bio'	=> '
<p>
	Rachel Mendler brings a strong background in multimedia to The Veloz Group, where she serves as Director of Media & Public Relations and manages projects focused on media, marketing and content optimization. Rachel graduated with honors from New York University, where she earned a B.A. in English and a minor in Documentary Filmmaking, and has worked in film production for Here! Media and Know Productions. An L.A. native, Rachel is active in local anti-poverty programs and documentary film projects.
</p>'
				),
				*/
/*
				array(	'name'	=> 'Zac Cusac',
					'title'	=> 'Vice President of Sales',
					'email'	=> 'zac@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/zac-cusac/zac-cusac-1.jpg",
								"/images/people/zac-cusac/zac-cusac-2.jpg",
							),
					'bio'	=> '
<p>
	Zac Cusac brings a strong background in sales, marketing and business development to The Veloz Group, where he serves as Vice President of Sales and leads sales recruiting and development initiatives across the company. Prior to joining The Veloz Group, Zac worked for the Long Beach Chamber of Commerce, where he advocated on behalf of small businesses, and served in sales leadership roles with Kaplan Test Prep and Skilled Wound Care, where he also gained extensive hands-on direct sales experience.
</p>
<br />
<p>
	Zac is a graduate of California State University, Long Beach, where he earned a B.S. in Finance and served as the president of his fraternity, Sigma Alpha Epsilon, for two terms. Zac was born in Chicago, but spent time in New York and Atlanta before coming to Southern California. A passionate sports fan, Zac loves competing on the golf course and rooting for the Atlanta Braves and Falcons.
</p>'
				),

				array(	'name'	=> 'Chris Ochs',
					'title'	=> 'Head of Sales',
					'email'	=> 'chris@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/chris-ochs/chris-ochs-1.jpg",
								"/images/people/chris-ochs/chris-ochs-2.jpg",
							),
					'bio'	=> '
<p>
	Chris Ochs brings over twenty years of sales management experience across a diverse set of products and a wide range of industries to his role as Head of Sales of The Veloz Group. With extensive experience in technology, consumer products, software as a service, consumer packaged goods, insurance and ski apparel, Chris has managed multi-functional international sales teams, developed sales programs for the leading provider of email deliverability tools and built vendor relationships for one of the top organic food companies.
</p>
<br />
<p>
	Chris is an Honors College graduate of the University of Houston, where he earned a degree in Spanish and played on the college football team, and is pursuing an Executive M.B.A. from the UCLA Anderson School of Management, where he will graduate with certificates in Entrepreneurship, Marketing and Advanced International Management in June. A San Diego native, Chris came to Los Angeles from Boulder, CO and enjoys skiing, volleyball, golf, trail running and whitewater rafting. An avid athlete, Chris has completed more than fifty triathlons, including two Ironman-distance races.
</p>'
				),

				array(	'name'	=> 'Michael Zablit',
					'title'	=> 'Director of Business Operations',
					'email'	=> 'michael@thevelozgroup.com',
					'image'	=>	array(
								"/images/people/michael-zablit/michael-zablit-1.jpg",
								"/images/people/michael-zablit/michael-zablit-2.jpg",
							),
					'bio'	=> '
<p>
	Michael Zablit brings a unique background to The Veloz Group, where he serves as Director of Business Operations. Mike joined The Veloz Group as an intern and played an instrumental role in developing Beverly Hills Chairs. Mike holds a B.S. in Neuroscience from UCLA, where he graduated with honors and served as a Clinical and Research Associate at the UCLA Medical Center; worked for AB Science in Paris; and founded a tutoring company in Los Angeles. A San Diego native, Mike is an avid sports fan, scuba diver and music lover.
</p>'
				),

				array(	'name'	=> 'Jennifer Bunney',
					'title'	=> 'Vice President',
					'email'	=> 'jennifer@briarmontco.com',
					'image'	=>	array(
								"/images/people/jennifer-bunney/jennifer-bunney-1.jpg",
								"/images/people/jennifer-bunney/jennifer-bunney-2.jpg",
							),
					'bio'	=> '
<p>
Jennifer Bunney brings an extraordinarily diverse background to her role as Vice President, leading Custom Tobacco and Briarmont. Jennifer previously worked in product development for Genentech/Roche Inc. and on deal analysis for Bay City Capital, a life sciences venture capital firm. Jennifer\'s expertise ranges from neurological research to social media: she has presented on her published research to world renowned scientists, including Nobel Laureates, and has tactically cultivated an extensive online following.
</p><br/>
<p>
Jennifer attended the University of Southern California, where she earned a B.A. in Neuroscience and Natural Sciences and graduated with honors. After turning down an opportunity to attend the University of Texas Medical School, Jennifer completed an M.B.A. where she graduated first in her class. Jennifer is a member of the Healthcare Businesswomen’s Association and has won multiple awards related to product development over the course of her career. Jennifer is also highly passionate about charity work and giving back to the community; she has led various initiatives, including Open Your Eyes, a teenage suicide prevention organization, and regularly donates free time to homeless shelters in Southern California. Jennifer loves cooking innovative meals, pilates, hosting cocktail parties and reading as many non-fiction books as she can get her hands on.
</p>'
				),
*/


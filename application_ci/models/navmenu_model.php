<?php

class Navmenu_Model extends CI_Model
{
	function get_navmenu()
	{
		return	array(
				// FIXME: Update this array to reflect the side pages on this site
				array(	"/home"			=> "HOME",
				),
				array(	"/about"		=> "ABOUT",
				),
				array(	"/cigars"		=> "CIGARS",
					"/cigars/classic"	=> "Classic",
					"/cigars/doublewrap"	=> "Double Wrap",
				"/cigars/maduro"	=> "Maduro",
				"/cigars/reserve"	=> "Reserve",
				),
				array(	"/cart"		=> "SHOP",
                ),
				array(	"/contact"		=> "CONTACT",
				),
		);
	}
}

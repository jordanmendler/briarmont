featuredcontentglider.init({
	gliderid: "companies-glider", //ID of main glider container
	contentclass: "glidecontent", //Shared CSS class name of each glider content
	togglerid: "p-select", //ID of toggler container
	remotecontent: "", //Get gliding contents from external file on server? "filename" or "" to disable
	selected: 0, //Default selected content index (0=1st)
	persiststate: false, //Remember last content shown within browser session (true/false)?
	speed: 1500, //Glide animation duration (in milliseconds)
	direction: "leftright", //set direction of glide: "updown", "downup", "leftright", or "rightleft"
	autorotate: true, //Auto rotate contents (true/false)?
	autorotateconfig: [20000, 0] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
})

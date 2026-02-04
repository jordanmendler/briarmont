<link href="css/popup.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	$(document).ready(function() {
		$(".pic_hover").hide();
		$(".pic_hover").css('left', '1000px');  // 2012/12/11 Pics will fly from off screen because of 1000px.
		$(".pic_hover").css('position', 'relative');
		$(".plus").css('margin-top', '-800px');
		$("#main").css('overflow', 'visible');
		$("#content").css('overflow', 'visible');
		//$("#wrapper").css('width', '100%');
		$("#wrapper").css('overflow', 'hidden');
		

		show_next();
	});

	
	function show_next()
	{
		var $changed = false;
		$(".pic_hover").each(function() {
			// If already moved, skip
			if (  $(this).css('left') == '0px' )
			{
				return;
			}
			else if ($changed == true)
			{
				return;
			}
			else
			{
				$(this).show();
				$(this).animate({"left": "0px"}, 800);
				$changed = true;
				setTimeout('show_next()', 1);
			}
		});
		if ($changed == false)
		{
			setTimeout('add_plus()', 1);
		}
	}

	function add_plus()
	{
		$changed = false;
		$(".plus").each(function() {
			$(this).animate({"margin-top": "-26px"}, 1200);
		});

		setTimeout('expand()', 2000);
	}

	function expand()
	{
		$("#content").css('overflow', 'auto');
                $(".plus").hide(1000);
                $(".hide_content").show(1000);
                $(".min").show(1000);

		setTimeout('close()', 1600);
	}

	function dim()
	{
		$('.pf_gallery li').each(function() {
			$('.pf_gallery li').not($(this)).stop().animate({opacity: .3}, 1000);
		});

		//setTimeout('window.location = "/pillars"', 700);
	}


	function undim()
	{
		$('.pf_gallery li').each(function() {
			$('.pf_gallery li').not($(this)).stop().animate({opacity: 1}, 1000);
		});
	}

	function close()
	{
                $(".hide_content").hide(1000);
                $(".plus").show(1000);
                $(".min").hide();

		//setTimeout('dim()', 1000);
		//setTimeout('undim()', 3000);
	}
</script>

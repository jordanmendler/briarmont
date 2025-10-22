		</div>
		<div id="footer">
			<div class="left">&copy; Copyright 2011-<?= date('Y') ?>. <a href="/">Briarmont Estates & Mansion</a>. All Rights Reserved</div>
			<div class="right">Site by <a href="https://www.veloz-solutions.com">Veloz Solutions</a></div>
			<div class="clear"></div>
		</div>

			</div><!-- close div main -->
		<div class="clear"></div>
		</div><!-- close div inside -->
	</div><!-- close div wrapper -->
	<script type="text/javascript">
	    $(document).on('click', '.project-filter', function (){
		var triger = $(this).attr('data-trigger');		
		$('#filtering-nav li').find('a.'+ triger).trigger('click');
	    });
	</script>
</body>
</html>

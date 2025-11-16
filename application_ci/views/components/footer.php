		</div>
		<div id="footer">
			<div class="left">&copy; Copyright 2011-<?= date('Y') ?>. <a href="/">Briarmont</a>. All Rights Reserved</div>
			
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
    <?php if (isset($extra_body)) echo $extra_body; ?>
    <script src="https://vjs.zencdn.net/8.23.4/video.min.js"></script>
</body>
</html>

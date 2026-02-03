<ul class="pf_gallery gallery">

<?php
	$i = 0;

	foreach ($divisions as $data)
	{
		$i++;
		echo '<li>';
?>

<?php
		$color = substr($data['color'], 1);

		list($r, $g, $b) = array($color[0].$color[1],
			$color[2].$color[3],
			$color[4].$color[5]);

		$r = hexdec($r); $g = hexdec($g); $b = hexdec($b);

		$color = 'rgba(' . $r . ',' . $g  . ',' . $b . ',' . 0.2 . ')';
?>

		<div class="pic_hover round-image" style="background:<?= $color ?>">
			<div class="rounded"></div>	

			<a class="image">
				<span class="rollover"></span>
                <!-- img src="<?= $data['icon'] ?>" alt="<?= $data['name'] ?>"/-->
                <div class="text-in-rounded">Briarmont</div>
                <div class="text-in-rounded"><?=$data['name']?></div>
			</a>
		</div>
		<div class="plus"></div>

		<div class="hide_content">
			<div class="inner" style="background:<?= $color ?>">
				<div class="name"><b><?= $data['name'] ?></b></div>
				<div class="clear"></div>
				<div class="summary"><?= $data['summary'] ?></div>
				<div class="clear"></div>
<!--				<div class="learn-more"><a href="<?= $data['link'] ?>"
					style="color:<?= $data['color'] ?>"
					onmouseover="this.style.color='#777';" 
					onmouseout="this.style.color='<?= $data['color'] ?>';"
				>Learn more</a></div>-->
				<div class="clear"></div><!-- clear div -->
			</div><!-- close inner -->						 
			<div class="min"></div><!-- minimize button -->
		</div>
        </li>
<?php
        }
?>
</ul>

<?php
	if ($_SERVER['REQUEST_URI'] == '/pillars')
	{
		echo '<link rel="canonical" href="/">';
	}
?>

<ul class="pf_gallery gallery">

<?php
	$i = 0;

	foreach ($pillars as $data)
	{
		$i++;

                if ( $i > 3 &&  $i % 3 == 1)
                {
			echo '<li class="clear">';
                }
                else
                {
                        echo '<li>';
                }
?>

<?php
		$color = substr($data['color'], 1);

		list($r, $g, $b) = array($color[0].$color[1],
			$color[2].$color[3],
			$color[4].$color[5]);

		$r = hexdec($r); $g = hexdec($g); $b = hexdec($b);

		$color = 'rgba(' . $r . ',' . $g  . ',' . $b . ',' . 0.2 . ')';
?>

		<div class="pic_hover pillars-round-image" style="background:<?= $color ?>">
			<div class="rounded"></div>	

			<a class="image">
				<span class="rollover"></span><img src="<?= $data['icon'] ?>" alt="<?= $data['name'] ?>"/>
<!--				<div class="pillar-name"><?= $data['name'] ?></div>-->
				<!-- <div class="pillar-name" style="color: <?= $data['heading'] ?>"><?= $data['name'] ?></div> -->
			</a>
		</div>
		<div class="plus"></div>

		<div class="hide_content">
			<div class="inner" style="background:<?= $color ?>">
				<div class="name" style="margin:10px">
					<span style="color:<?= $data['color'] ?>">
						<b><?= $data['name'] ?></b>
					</span>
				</div>
				<div class="clear"></div>
				<div class="summary"><?= $data['summary'] ?></div>
				<br />
				<div class="clear"></div><!-- clear div -->
			</div><!-- close inner -->						 
			<div class="min"></div><!-- minimize button -->
		</div>
        </li>
<?php
        }
?>
</ul>

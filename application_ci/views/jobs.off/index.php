<!-- for future formatting changes, can use masonry js to better fit for the contents -->
<h2>Job Openings</h2>
<div class="jobs">
	<img src="/images/jobs/jobs_background.jpg" style="margin-bottom:10px;">
	<!--
	<div class="nav-links">
		<div class="clear" style="height:20px;"></div>
		<li><a href="#sales-rep">Sales Representative</a></li>
		<li><a href="#sr-sales-rep">Senior Sales Representative</a></li>
		<li><a href="#strategic-buyer">Strategic Buyer</a></li>
		<li><a href="#executive-assistant">Executive Assistant</a></li>
	</div>
	-->
<?= $intro ?>
<div class="line"></div>

<div id="positions" style="float:left;">
<?php
$catnum = 0;
foreach ($jobs as $category)
{
	if (count($jobs) > 1)
	{
		echo '<h2 id="' . strtolower($category['category-name']) . '" style="padding-bottom: 10px;">' . $category['category-name'] . '</h2>';
	}
	$index = 0;
	foreach ($category['joblists'] as $joblist)
	{
		if($index == (count($category['joblists'])-1))
			echo '<div>';
		else
			echo '<div class="joblist">';
		echo '<h5>'. $joblist['jobtitle'] .'</h5>';
	        echo $joblist['description'];
		echo '<p>Location: ' . $joblist['location'] . '. Compensation: ' . $joblist['compensation'];
		if (array_key_exists('schedule', $joblist))
		{
			echo '. ' . $joblist['schedule'] . '.';
		}
                echo '</p>';
		echo '</div>';

		if ($index < (count($category['joblists']) - 1) )
		{
			echo '<div class="line" style="height: 2px; margin: 20px 0;"></div>';
		}
		$index++;
	}
	echo '<div class="line"></div>';
	$catnum++;
}
?>
</div>
<!-- close div positions -->



<!--
<div id="job-side">
	<img src="/images/jobs/side2.jpg" style="width:280px; height:280px; margin-bottom:10px; position:relative">
	<div class="box" style="margin-bottom:10px;  position:relative">
		<div class="box-heading">Why Join?</div>
			<div class="box-content">
				<ul>
					<li>Build a financially-lucrative book of business through commission-based buying and selling opportunities<li>
					<li>Work on several Veloz businesses across a variety of different industries</li>
					<li>Utilize our resources and infrastructure to enhance your business development abilities</li>
					<li>Enjoy a flexible work schedule inside and outside of the office<li>
					<li>Engage in our unique corporate culture, defined by our dedication to empowering people to help us build innovative businesses the right way</li>
					<li>Develop your career through mentorship from our executive team</li>
				</ul>
			</div>
		</div>
	</div>
	<img src="/images/jobs/side1.jpg" style="float:right; width:280px; margin-bottom:10px; margin-left 20px; position:relative">
-->
</div>
<!-- close div job-side -->

<div id="job-application" style="float:left; width:640px;">
	<h3 style="margin-bottom:0px">Join Our Team</h3>
	<br>
	<a href ="https://forms.gle/xJsxQyr6nbjHErkN6" target="_blank">To apply for a position at Briarmont Estates & Mansion, please complete our Job Application by clicking here</a>
</div>



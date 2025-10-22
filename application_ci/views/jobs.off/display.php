<h2>Job Openings</h2>
<div class="jobs">
<img src="/images/jobs/jobs_background.jpg" style="margin-bottom:10px;">

<?= $intro ?>
<div class="line"></div>

<div id="positions" style="float:left;">
<?php
$found = false;
foreach ($jobs as $category)
{
	foreach ($category['joblists'] as $joblist)
	{
		if($jobname == strtolower(str_replace(' ', '-', str_replace('&', 'and', $joblist['jobtitle']))))
		{
			echo '<div>';
			echo '<h5>' . $joblist['jobtitle'] . '</h5>';
			echo $joblist['description'];
			echo '<p>Location: ' . $joblist['location']	. '. Compensation: ' . $joblist['compensation'] . '</p>';
			echo '</div>';
			$found = true;
		}
	}
}

?>
</div>
<div class="line"></div>


<div id="job-application">
        <h3 style="margin-bottom:0px">Join Our Team</h3>
        <script type="text/javascript" src="https://form.jotform.us/jsform/21866646558165"></script>
</div>

<div class="clear" style="margin-bottom:40px"></div>




<?php
	echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<source>
	<publisher>Briarmont Estates & Mansion</publisher>
	<publisherurl>http://www.briarmont.com</publisherurl>
	<lastBuildDate><?= date("r") ?></lastBuildDate>




	<?
	foreach ($jobs as $category)
	{
		foreach ($category['joblists'] as $job)
		{
			$jobname = str_replace(' ', '-', strtolower($job['jobtitle']));
	?>
			<job>
				<title><?= '<![CDATA[' . $job['jobtitle'] . ']]>' ?></title>
				<date><?= '<![CDATA[' . date("r") . ']]>' ?></date>
				<referencenumber><?= '<![CDATA[' . $jobname . ']]>' ?></referencenumber>
				<url><?= '<![CDATA[http://www.briarmont.com/jobs/' . $jobname . ']]>' ?></url>
				<company><?= '<![CDATA[Briarmont Estates & Mansion]]>' ?></company>
				<city><?= '<![CDATA[' . $job['location'] . ']]>' ?></city>
				<state><?= '<![CDATA[CA]]>' ?> </state>
				<country><?= '<![CDATA[US]]>' ?></country>
				<postalcode><?= '<![CDATA[90024]]>' ?></postalcode>
				<description><?= '<![CDATA[' . $job['description'] . ']]>' ?></description>
				<salary><?= '<![CDATA[' . $job['compensation'] . ']]>' ?></salary>
				<education><?= '<![CDATA[' . $job['education'] . ']]>' ?></education>
				<jobtype><?= '<![CDATA[' . $job['hours'] .']]>' ?></jobtype>
				<category><?= '<![CDATA[' . $category['category-name']. ']]>' ?></category>
				<experience><?= '<![CDATA[' . $job['experience'] . ']]>' ?></experience>
			</job>
	<?
		}
	}
	?>


</source>


<?
/*
		echo '<h5><a href="/jobs/' . strtolower(str_replace(' ', '-', $joblist['jobtitle'])) . '">'. $joblist['jobtitle'] .'</a></h5>';
	        echo $joblist['description'];
	        echo '<p>Location: ' . $joblist['location'] . '. Compensation: ' . $joblist['compensation'] . '</p>';
 */
?>

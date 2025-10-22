<?php
	class Socialmedia_Model extends CI_Model
	{
		//Parse the RSS feed using SimplePie to get all the posts                
		function getYoutubeFeed_veloz($site = '')
		{
			// List of feeds
			$feeds = array(
			 	'TheVelozGroup' => 'UCEgK7-UFovJqI7CAZCPG_Nw',
				//'CustomTobacco' => 'UC6BPodXqii9lMAiNXEQoV4A',
				//'BeverlyHillsChairs' => 'BeverlyHillsChairs7'
			);


			// Grab site if specified
			if ($site != '')
			{
				$feeds = array($site => $feeds[$site]);
			}

			// Fetch meta on all videos from all channels
			$videos_veloz = array();
			foreach (array_keys($feeds) as $feed)
			{
				$xml = simplexml_load_file( "https://gdata.youtube.com/feeds/api/users/" . $feeds[ $feed ] . "/uploads");
				$namespaces = $xml->getNamespaces(true);


				foreach ($xml->entry as $item)
				{
					$videos_veloz[] = array(
						'title'		=> $item->title,
						'video_id'	=> end(explode("/", $item->id)),
						'date'		=> $item->published,
						'company'	=> $feed,
						'channel'	=> $feeds[ $feed ]
					);
				}

			}

			return $videos_veloz;
		}
		
		function getYoutubeFeed_ct($site = '')
		{
			// List of feeds
			$feeds = array(
			 	//'TheVelozGroup' => 'UCEgK7-UFovJqI7CAZCPG_Nw',
				'CustomTobacco' => 'UC6BPodXqii9lMAiNXEQoV4A',
				//'BeverlyHillsChairs' => 'BeverlyHillsChairs7'
			);


			// Grab site if specified
			if ($site != '')
			{
				$feeds = array($site => $feeds[$site]);
			}

			// Fetch meta on all videos from all channels
			$videos_ct = array();
			foreach (array_keys($feeds) as $feed)
			{
				$xml = simplexml_load_file( "https://gdata.youtube.com/feeds/api/users/" . $feeds[ $feed ] . "/uploads");
				$namespaces = $xml->getNamespaces(true);


				foreach ($xml->entry as $item)
				{
					$videos[] = array(
						'title'		=> $item->title,
						'video_id'	=> end(explode("/", $item->id)),
						'date'		=> $item->published,
						'company'	=> $feed,
						'channel'	=> $feeds[ $feed ]
					);
				}

			}

			return $videos;
		}
		
		
		function getYoutubeFeed_bhc($site = '')
		{
			// List of feeds
			$feeds = array(
			 	//'TheVelozGroup' => 'UCEgK7-UFovJqI7CAZCPG_Nw',
				//'CustomTobacco' => 'UC6BPodXqii9lMAiNXEQoV4A',
				'BeverlyHillsChairs' => 'BeverlyHillsChairs7'
			);


			// Grab site if specified
			if ($site != '')
			{
				$feeds = array($site => $feeds[$site]);
			}

			// Fetch meta on all videos from all channels
			$videos_bhc = array();
			foreach (array_keys($feeds) as $feed)
			{
				$xml = simplexml_load_file( "https://gdata.youtube.com/feeds/api/users/" . $feeds[ $feed ] . "/uploads");
				$namespaces = $xml->getNamespaces(true);


				foreach ($xml->entry as $item)
				{
					$videos_bhc[] = array(
						'title'		=> $item->title,
						'video_id'	=> end(explode("/", $item->id)),
						'date'		=> $item->published,
						'company'	=> $feed,
						'channel'	=> $feeds[ $feed ]
					);
				}

			}

			return $videos_bhc;
		}
		

	}
?>

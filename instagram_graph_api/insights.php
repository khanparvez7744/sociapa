<?php
	include 'defines.php';

	$mediaObject = array( // media post we are working with
		'id' => '17916996011297140',
		'caption' => "Fun time

            #fun #cat #diet #hard #fittness #fit",
		'media_url' => 'https://video-sin6-4.cdninstagram.com/v/t50.16885-16/270295206_397322275518541_7470713210174360724_n.mp4?_nc_cat=100&vs=956862168252925_4285011525&_nc_vs=HBksFQAYJEdLWmdIQkJOX0JmTlhHa0JBSlRNUWtjVlRxMW5idlZCQUFBRhUAAsgBABUAGCRHQmc5SFJBVUtNS2N3YlVCQUJUVjk1ZTZTQ3hlYnZWQkFBQUYVAgLIAQAoABgAGwGIB3VzZV9vaWwBMRUAACaq4KmkxrfMPxUCKAJDMywXQC4UeuFHrhQYEmRhc2hfYmFzZWxpbmVfMV92MREAdewHAA%3D%3D&ccb=1-5&_nc_sid=59939d&efg=eyJ2ZW5jb2RlX3RhZyI6InZ0c192b2RfdXJsZ2VuLjcyMC5pZ3R2In0%3D&_nc_ohc=2f0AFFrWt4UAX_elQrT&_nc_ht=video-sin6-4.cdninstagram.com&edm=AL-3X8kEAAAA&oh=00_AT_cBc-qkF6d8X5W9hrUArAiVTgMl6_3izVGBwxFbqUeRA&oe=61CF607D&_nc_rid=f4ad25c63d',
		'permalink' => 'https://www.instagram.com/tv/CYJUBh4pgLc/',
		'media_type' => "VIDEO"
	);

	function makeApiCall( $endpoint, $type, $params ) {
		$ch = curl_init();

		if ( 'POST' == $type ) {
			curl_setopt( $ch, CURLOPT_URL, $endpoint );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params ) );
			curl_setopt( $ch, CURLOPT_POST, 1 );
		} elseif ( 'GET' == $type ) {
			curl_setopt( $ch, CURLOPT_URL, $endpoint . '?' . http_build_query( $params ) );
		}

		curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

		$response = curl_exec( $ch );
		curl_close( $ch );

		return json_decode( $response, true );
	}

	$mediaInsightsEndpoingFormat = ENDPOINT_BASE . '{ig-media-id}/insights?metric=engagement,impressions,reach,saved,video_views&access_token={access-token}';
	$userInsightsEndpoingFormat = ENDPOINT_BASE . '{ig-user-id}/insights?metric=follower_count,impressions,profile_views,reach&period=day&access_token={access-token}';

	// get media insights
	$mediaInsightsEndpoint = ENDPOINT_BASE . $mediaObject['id'] . '/insights';
	$mediaInsightParams = array(
		'metric' => 'engagement,impressions,reach,saved,video_views',
		'access_token' => $accessToken
	);
	$mediaInsights = makeApiCall( $mediaInsightsEndpoint, 'GET', $mediaInsightParams );

	// get user insights
	$userInsightsEndpoint = ENDPOINT_BASE . $instagramAccountId . '/insights';
	$userInsightParams = array(
		'metric' => 'follower_count,impressions,profile_views,reach',
		'period' => 'day',
		'access_token' => $accessToken
	);
	$userInsights = makeApiCall( $userInsightsEndpoint, 'GET', $userInsightParams );

	// get instagram user metadata endpoint
	$userInfoEndpointFormat = ENDPOINT_BASE . '{ig-user-id}?fields=business_discovery.username({ig-username}){username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count,media{caption,like_count,comments_count,media_url,permalink,media_type}}&access_token={access-token}';
	$userInfoEndpoint = ENDPOINT_BASE . $instagramAccountId;
	$username = '2be_harder';
	// endpoint params
	$userInfoParams = array(
		'fields' => 'business_discovery.username(' . $username . '){username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count,media{caption,like_count,comments_count,media_url,permalink,media_type}}',
		'access_token' => $accessToken
	);
	$userInfo = makeApiCall( $userInfoEndpoint, 'GET', $userInfoParams );
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Getting Insights on Instagram Posts and User Accounts with the Instagram Graph API</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Getting Insights on Instagram Posts and User Accounts with the Instagram Graph API</h1>
		<hr />
		<br />
		<?php
		    $img = $userInfo['business_discovery']['media']['data'];
		    for ($i = 0 ; $i < 3; $i++) {
		        echo $img[$i]['id']."<br/>";
		        echo $img[$i]['caption'];
		?>
		
		<!--<img style="width:100px;border-radius:50%;" src="<?php echo $img[$i]['media_url']; ?>" class="" alt="clocks">-->
		<?php } ?>
		<h2>User Info</h2>
		<div style="display:inline-block;width:100%">
			<div style="float:left">
				<img style="width:50px;border-radius:50%;" src="<?php echo $userInfo['business_discovery']['profile_picture_url']; ?>" />
			</div>
			<div style="float:left;margin-left:20px">
				<a target="_blank" href="https://www.instagram.com/<?php echo $userInfo['business_discovery']['username']; ?>">
					<h3><?php echo $userInfo['business_discovery']['username']; ?></h3>
				</a>
				<div style="display:inline-block">
					<b><?php echo $userInfo['business_discovery']['media_count']; ?></b> posts
				</div>
				<div style="display:inline-block;margin-left:20px">
					<b><?php echo $userInfo['business_discovery']['followers_count']; ?></b> followers
				</div>
				<div style="display:inline-block;margin-left:20px">
					<b><?php echo $userInfo['business_discovery']['follows_count']; ?></b> following
				</div>
				
				<div style="float:left">
				
			</div>
				
			</div>
		</div>
		
		<h2>User Insights</h2>
		<!--<?php print_r($userInsights['data']); ?>-->
		
		<ul>
			<?php foreach($userInsights['data'] as $insight){ ?>
				<li>
					<div>
						<b><?php echo $insight['title']." "; ?></b>
					</div>
					<div>
						<?php foreach($insight['values'] as $value){ ?>
							<div>Value: <?php echo $value['value']; ?> <?php echo $value['end_time']; ?>
						<?php } ?>
					</div>
					</div>
				</li>
			<?php } ?>
		</ul>
		<br />
		<hr />
		<br />
		<h2>Media Object<h2>
		<div style="width:100%;display:inline-block">
			<div style="float:left">
				<video height="390" width="310" controls="">
					<source src="<?php echo $mediaObject['media_url']; ?>">
				</video>
			</div>
			<div style="float:left;margin-left:20px;">
				<a target="_blank" href="<?php echo $mediaObject['permalink']; ?>">
					<h3>
						<?php echo $mediaObject['caption']; ?>
					</h3>
				</a>
			</div>
		</div>
		
		<!--$mediaInsightsEndpoint = ENDPOINT_BASE . $mediaObject['id'] . '/insights';
	        $mediaInsightParams = array(
		    'metric' => 'engagement,impressions,reach,saved,video_views',
		    'access_token' => $accessToken);
	        $mediaInsights = makeApiCall( $mediaInsightsEndpoint, 'GET', $mediaInsightParams );-->
		
		<h3>Media Object Insights</h3>
		<?php print_r($mediaInsights); ?>
		<ul>
		    
			<?php foreach ( $mediaInsights['data'] as $insight ) { ?>
				<li>
					<div>
						<b><?php echo $insight['title']; ?></b>
					</div>
					<div>
						<?php foreach ( $insight['values'] as $value ) { ?>
							<div>Value: <?php echo $value['value']; ?> 
						<?php } ?>
					</div>
				</li>
			<?php } ?>
		</ul>
		<h3>
			Get Media Insights Endpoint: <?php echo $mediaInsightsEndpoingFormat; ?>
		</h3>
		<h4>Response<h4>
		<textarea style="width:100%;height:300px"><?php print_r( $mediaInsights ); ?></textarea>
		<h3>
			Get User Insights Endpoint: <?php echo $userInsightsEndpoingFormat; ?>
		</h3>
		<h4>Response<h4>
		<textarea style="width:100%;height:300px"><?php print_r( $userInsights ); ?></textarea>
		<h4>Response<h4>
		<textarea style="width:100%;height:300px"><?php print_r( $userInfo ); ?></textarea>
	</body>
</html>
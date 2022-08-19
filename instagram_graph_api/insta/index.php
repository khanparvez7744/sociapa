<form id="myForm" method="post">
        <input type="text" name="username" id="username" placeholder="Enter Your UserName">
        <input name="submit" type="submit" value="Search">
</form>
		
<?php
	include '../defines.php';
	
// 	insight code starts here

$mediaObject = array( // media post we are working with
		'id' => '17908649842399636',
		'caption' => "Can you spot me in the video?! ðŸ˜†ðŸ¤£ Coding tonight against the Instagram Graph API and getting a users metadata!
.
The metadata we can get from the Instagram Graph API for a user includes, profile image url, account I'd, username, website, name, biography, follow count, follower count, media count.
.
#coding #instagram #coder #tech #php #html #fullstackdeveloper #webdevelopment #webstagram #computers #frontenddeveloper #instagramgraphapi #instagramapi #api #backend #website #softwareengineer #code #programming #facebook",
		'media_url' => 'https://scontent.xx.fbcdn.net/v/t50.31694-16/82877274_168580704395389_6442072919343833857_n.mp4?_nc_cat=102&_nc_ohc=pfuRI1wD3twAX8AvCD6&_nc_ht=scontent.xx&oh=225a7ef08d9a72cf7f5b40580cb45923&oe=5ED484E7',
		'permalink' => 'https://www.instagram.com/p/B7pYqdPAezS/',
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
	foreach($userInsights['data'] as $insight){
	    echo $insight['title']." ";
	    foreach($insight['values'] as $value){
	        echo $value['value']."<br/>";
	    }
	}
echo"<br/>";
	// get instagram user metadata endpoint
	$userInfoEndpointFormat = ENDPOINT_BASE . '{ig-user-id}?fields=business_discovery.username({ig-username}){username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count,media{caption,like_count,comments_count,media_url,permalink,media_type}}&access_token={access-token}';
	$userInfoEndpoint = ENDPOINT_BASE . $instagramAccountId;
	$username = @$_POST['username'];
	// endpoint params
	$userInfoParams = array(
		'fields' => 'business_discovery.username(' . $username . '){username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count,media{caption,like_count,comments_count,media_url,permalink,media_type}}',
		'access_token' => $accessToken
	);
	$userInfo = makeApiCall( $userInfoEndpoint, 'GET', $userInfoParams );

// insight code ends here ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	if(isset($_POST['submit'])){
   echo $user = $_POST['username'];
	// get instagram user metadata endpoint
	$endpointFormat = ENDPOINT_BASE . '{ig-user-id}?fields=business_discovery.username({ig-username}){username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count,media{caption,like_count,comments_count,media_url,permalink,media_type}}&access_token={access-token}';
	$endpoint = ENDPOINT_BASE . $instagramAccountId;

	// username
	$username = "$user";

	// endpoint params
	$igParams = array(
		'fields' => 'business_discovery.username(' . $username . '){username,website,name,ig_id,id,profile_picture_url,biography,follows_count,followers_count,media_count,media{caption,like_count,comments_count,media_url,permalink,media_type}}',
		'access_token' => $accessToken
	);

	// add params to endpoint
	$endpoint .= '?' . http_build_query( $igParams );

	// setup curl
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $endpoint );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

	// make call and get response
	$response = curl_exec( $ch );
	curl_close( $ch );
	$responseArray = json_decode( $response, true );
	if($username==@$responseArray['business_discovery']['username']){
	
?>
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--	<head>-->
<!--		<title>Getting an Instagram Users Metadata</title>-->
<!--		<meta charset="utf-8" />-->
<!--	</head>-->
<!--	<body>-->
<!--	    <h1>Getting an Instagram Users Metadata</h1>-->
<!--		<hr />-->
<!--		<br />-->
<!--		<div style="display:inline-block;width:100%">-->
<!--			<div style="float:left">-->
<!--				<img style="width:50px;border-radius:50%;" src="" />-->
<!--			</div>-->
<!--			<div style="float:left;margin-left:20px">-->
<!--				<a target="_blank" href="https://www.instagram.com/<?php echo $responseArray['business_discovery']['username']; ?>">-->
<!--					<h3><?php echo $responseArray['business_discovery']['username']; ?></h3>-->
<!--				</a>-->
<!--				<div style="display:inline-block">-->
<!--					<b></b> posts-->
<!--				</div>-->
<!--				<div style="display:inline-block;margin-left:20px">-->
<!--					<b></b> followers-->
<!--				</div>-->
<!--				<div style="display:inline-block;margin-left:20px">-->
<!--					<b></b> following-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div>-->
<!--			<h4><?php echo $responseArray['business_discovery']['name']; ?></h4>-->
<!--			<div>-->
				
<!--			</div>-->
<!--			<div>-->
<!--				<a target="_blank" href="<?php echo $responseArray['business_discovery']['website']; ?>">-->
<!--					<h3><?php echo $responseArray['business_discovery']['website']; ?></h3>-->
<!--				</a>-->
<!--			</div>-->
<!--		</div>-->
<!--		<br />-->
<!--		<hr />-->
<!--		<h3>Endpoint: <?php echo $endpointFormat; ?></h3>-->
<!--		<hr />-->
<!--		<h3>Raw Response</h3>-->
<!--		<textarea style="width:100%;height:300px;"><?php print_r( $responseArray ); ?></textarea>-->
<!--	</body>-->
<!--</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Profile</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header>

<div class="container">

    <div class="profile">

        <div class="profile-image">

            <img style="width:152px;height:152px;border-radius:50%;" src="<?php echo $responseArray['business_discovery']['profile_picture_url']; ?>" alt="">

        </div>

        <div class="profile-user-settings">

            <h1 class="profile-user-name"><a target="_blank" href="https://www.instagram.com/<?php echo $responseArray['business_discovery']['username']; ?>">
					<?php echo $responseArray['business_discovery']['username']; ?>
				</a></h1>

            <!--<button class="btn profile-edit-btn">Edit Profile</button>-->

            <!--<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>-->

        </div>

        <div class="profile-stats">

            <ul>
                <li><span class="profile-stat-count"><?php echo $responseArray['business_discovery']['media_count']; ?></span> posts</li>
                <?php
				        $followers = $responseArray['business_discovery']['followers_count'];
                        if ($followers < 1000) {
                            // Anything less than a million
                        $fformat = number_format($followers);
                            }    
                        else if ($followers < 1000000) {
                            // Anything less than a millio
                        $fformat = number_format($followers / 1000, 2). 'K';
                        } else if ($followers < 1000000000) {
                            // Anything less than a billion
                            $fformat = number_format($followers / 1000000) . 'M';
                        } else {
                                // At least a billion
                        $fformat = number_format($followers / 1000000000, 2) . 'B';
                        }
    
				    ?>
                <li><span class="profile-stat-count"><?php echo $fformat; ?></span> followers</li>
                <li><span class="profile-stat-count"><?php echo $responseArray['business_discovery']['follows_count']; ?></span> following</li>
            </ul>

        </div>

        <div class="profile-bio">

            <p><span class="profile-real-name"><?php $responseArray['business_discovery']['username']; ?></span> <?php echo nl2br( $responseArray['business_discovery']['biography'] ); ?></p>

        </div>

    </div>
    <!-- End of profile section -->

</div>
<!-- End of container -->

</header>

<main>

<div class="container">

    <div class="gallery">

        

        <?php
		    $img = $responseArray['business_discovery']['media']['data'];
		    for ($i = 0 ; $i < 5; $i++) {?>
	<a href="<?php echo $img[$i]['permalink']; ?>">	    
        <div class="gallery-item" tabindex="0">

            <img src="<?php echo $img[$i]['media_url']; ?>" class="gallery-image" alt="">

            <div class="gallery-item-info">

                <ul>
                    
                    <?php
				        $like = $img[$i]['like_count'];
                        if ($like < 1000) {
                            // Anything less than a million
                        $likeFormat = number_format($like);
                            }    
                        else if ($like < 1000000) {
                            // Anything less than a millio
                        $likeFormat = number_format($like / 1000, 1). 'K';
                        } else if ($like < 1000000000) {
                            // Anything less than a billion
                            $likeFormat = number_format($like / 1000000, 1) . 'M';
                        } else {
                                // At least a billion
                        $likeFormat = number_format($like / 1000000000, 2) . 'B';
                        }
    
				    ?>
                    
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i><?php echo" " . $likeFormat; ?></li>
                    
                    
                    <?php
				        $comments = $img[$i]['comments_count'];
                        if ($comments < 1000) {
                            // Anything less than a million
                        $comFormat = number_format($comments);
                            }    
                        else if ($comments < 1000000) {
                            // Anything less than a millio
                        $comFormat = number_format($comments / 1000, 1). 'K';
                        } else if ($comments < 1000000000) {
                            // Anything less than a billion
                            $comFormat = number_format($comments / 1000000, 1) . 'M';
                        } else {
                                // At least a billion
                        $comFormat = number_format($comments / 1000000000, 2) . 'B';
                        }
    
				    ?>
                    
                    
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i><?php echo " " . $comFormat;  ?></li>
                </ul>

            </div>

        </div>
    </a>        
<?php
}
?>
        


    </div>
    <!-- End of gallery -->

<!--Show data in table-->

<h2 class="text-center">Recent Post Insight<h2> <br/>
		<table class="table table-hover table-striped">
        <tr>
        <th>Post</th>
        <th>Followers</th>
        <th>Like</th>
        <th>comments</th>
        <!--<th>Engagement</th>-->
        </tr>
		<?php
		    $img = $responseArray['business_discovery']['media']['data'];
		    
		    for ($i = 0 ; $i < 6; $i++) {
		        
        //print_r ($img).'<br/>';?>
		<!--<img style="width:50px;border-radius:50%;" src="<?php echo $img[$i]['media_url']; ?>" />-->

  <tr>
    <td><img style="width:50px;border-radius:50%;" src="<?php echo $img[$i]['media_url']; ?>" /></td>
    <td><?php echo $fformat; ?></td>
    <td><?php echo $img[$i]['like_count']; ?></td>
    <td><?php echo $img[$i]['comments_count']; ?></td>
    <!--<td><?php echo $mediaInsights['data'][0]['title']; ?></td>-->
  
		            
		<?php
                }
		
		?>    
		</tr>
</table>
<!--End Show data in table-->


</div>
<!-- End of container -->

</main>
                    <?php
				        $like = max(array_column($img, 'like_count'));
                        if ($like < 1000) {
                            // Anything less than a million
                        $MaxLike = number_format($like);
                            }    
                        else if ($like < 1000000) {
                            // Anything less than a millio
                        $MaxLike = number_format($like / 1000, 1). 'K';
                        } else if ($like < 1000000000) {
                            // Anything less than a billion
                            $MaxLike = number_format($like / 1000000, 1) . 'M';
                        } else {
                                // At least a billion
                        $MaxLike = number_format($like / 1000000000, 2) . 'B';
                        }
    
				    ?>
<h2 class="text-center">Highest Likes On Post is : <b><?php echo $MaxLike;  ?></b></h2><br/>

                    <?php
				        $comments = max(array_column($img, 'comments_count'));
                        if ($comments < 1000) {
                            // Anything less than a million
                        $Maxcomments = number_format($comments);
                            }    
                        else if ($comments < 1000000) {
                            // Anything less than a millio
                        $Maxcomments = number_format($comments / 1000, 1). 'K';
                        } else if ($comments < 1000000000) {
                            // Anything less than a billion
                            $Maxcomments = number_format($comments / 1000000, 1) . 'M';
                        } else {
                                // At least a billion
                        $Maxcomments = number_format($comments / 1000000000, 2) . 'B';
                        }
    
				    ?>

<h2 class="text-center">Highest Comments On Post is :<b><?php echo $Maxcomments;  ?></b></h2>

</body>
</html>
<?php
}
else if($username!=@$responseArray['business_discovery']['username']){
    echo"<br/>"."Private Account/User not found";
}
}
?>
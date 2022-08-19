<form id="myForm" method="post">
        <input type="text" name="username" id="username" placeholder="Enter Your UserName">
        <input name="submit" type="submit" value="Search">
        </form>
		
<?php
	include 'defines.php';
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
<!DOCTYPE html>
<html>
	<head>
		<title>Getting an Instagram Users Metadata</title>
		<meta charset="utf-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            html,body{
                overflow-x:hidden;
            }
            
        </style>
	</head>
	<body>
	    <h1>Getting an Instagram Users Metadata</h1>
		<hr />
		<br />
		<div style="display:inline-block;width:100%">
			<div style="float:left">
				<img style="width:50px;border-radius:50%;" src="<?php echo $responseArray['business_discovery']['profile_picture_url']; ?>" />
			</div>
			<div style="float:left;margin-left:20px">
				<a target="_blank" href="https://www.instagram.com/<?php echo $responseArray['business_discovery']['username']; ?>">
					<h3><?php echo $responseArray['business_discovery']['username']; ?></h3>
				</a>
				<div style="display:inline-block">
				    <?php
				        $media = $responseArray['business_discovery']['media_count'];
                        // if ($media < 1000) {
                        //     // Anything less than a million
                        // $mformat = number_format($media);
                        //     }    
                        // else if ($media < 1000000) {
                        //     // Anything less than a million
                        // $mformat = number_format($media / 1000, 2). 'K';
                        // } else if ($media < 1000000000) {
                        //     // Anything less than a billion
                        //     $mformat = number_format($media / 1000000, 2) . 'M';
                        // } else {
                        //         // At least a billion
                        // $mformat = number_format($media / 1000000000, 2) . 'B';
                        // }
    
				    ?>
					<b><?php echo $media ?></b> posts
				</div>
				<div style="display:inline-block;margin-left:20px">
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
					<b><?php echo $fformat; ?></b> followers
				</div>
				<div style="display:inline-block;margin-left:20px">
				    <?php
				        $following = $responseArray['business_discovery']['follows_count'];
                        // if ($following < 1000) {
                        //     // Anything less than a million
                        // $flformat = number_format($following);
                        //     }    
                        // else if ($following < 1000000) {
                        //     // Anything less than a millio
                        // $flformat = number_format($following / 1000, 2). 'K';
                        // } else if ($following < 1000000000) {
                        //     // Anything less than a billion
                        //     $flformat = number_format($following / 1000000, 2) . 'M';
                        // } else {
                        //         // At least a billion
                        // $flformat = number_format($following / 1000000000, 2) . 'B';
                        // }
                        ?>
					<b> <?php echo $following;  ?> </b> following
				</div>
			</div>
		</div>
		<div>
			<h4><?php echo $responseArray['business_discovery']['name']; ?></h4>
			<div>
				<?php echo nl2br( $responseArray['business_discovery']['biography'] ); ?>
			</div>
			<div>
				<a target="_blank" href="<?php echo $responseArray['business_discovery']['website']; ?>">
					<h3><?php echo $responseArray['business_discovery']['website']; ?></h3>
				</a>
			</div>
		</div>
		<br />
		<hr />
		<h3>Endpoint: <?php echo $endpointFormat; ?></h3>
		<hr />
		<h3>Raw Response</h3>
		<textarea style="width:100%;height:300px;"><?php print_r( $responseArray ); ?></textarea>
		<!--<h3><?php echo $responseArray['business_discovery']['media']['data'][0]['media_url']; ?></h3>-->
		<br/>
		<br/>
		<h2 class="text-center">Recent Post Insight<h2> <br/>
		<table class="table table-hover table-striped">
        <tr>
        <th>Post</th>
        <th>Followers</th>
        <th>Like</th>
        <th>comments</th>
        </tr>
		<?php
		    $img = $responseArray['business_discovery']['media']['data'];
		    
		    for ($i = 0 ; $i < 6; $i++) {
		        
        //print_r ($img).'<br/>';?>
		<!--<img style="width:50px;border-radius:50%;" src="<?php echo $img[$i]['media_url']; ?>" />-->
		
<!--Show data in table-->

  <tr>
    <td><img style="width:50px;border-radius:50%;" src="<?php echo $img[$i]['media_url']; ?>" /></td>
    <td><?php echo $fformat; ?></td>
    <td><?php echo $img[$i]['like_count']; ?></td>
    <td><?php echo $img[$i]['comments_count']; ?></td>
  
		            
		<?php
                }
		
		?>    
		</tr>
</table>
<!--End Show data in table-->
		        <?php
				        $like = max(array_column($img, 'like_count'));
				        // $id = $responseArray['business_discovery']['media']['data'][21];
                        if ($like < 1000) {
                            // Anything less than a million
                        $Maxlike = number_format($$like);
                            }    
                        else if ($like < 1000000) {
                            // Anything less than a millio
                        $Maxlike = number_format($like / 1000, 1). 'K';
                        } else if ($like < 1000000000) {
                            // Anything less than a billion
                            $Maxlike = number_format($like / 1000000, 1) . 'M';
                        } else {
                                // At least a billion
                        $Maxlike = number_format($like / 1000000000, 2) . 'B';
                        }
                        //  $p = $id['like_count'];
                        //  if($p==$like){
                        //      $imge = $id['media_url'];
                        //      $per = $id['permalink'];
                             
                        //  echo "<a href='$per'><img style='width:50px;border-radius:50%;' src='$imge'></a>";
                        //  }
				    ?>
		        
                             
		
		    <h3><b>Highest Like On Post:<?php echo $Maxlike; ?></b></h3>
		    
		    
		            <?php
				        $comments = max(array_column($img, 'comments_count'));
				        // $id = $responseArray['business_discovery']['media']['data'][21];
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
                        //  $p = $id['comments_count'];
                        //  if($p==$comments){
                        //      $imge = $id['media_url'];
                        //      $per = $id['permalink'];
                             
                        //  echo "<a href='$per'><img style='width:50px;border-radius:50%;' src='$imge'></a>";
                        //  }
				    ?>
		<h3><b>Highest Comments On Post:<?php echo $Maxcomments; ?></b></h3>







	</body>
</html>
<?php
}
    else if($username!=@$responseArray['business_discovery']['username']){
    echo"<br/>"."Private Account/User not found";
}
}
?>
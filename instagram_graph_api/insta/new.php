
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html,
        body {
            background: whitesmoke;
        }
.serchBtn{
    margin-left:-10px;
}
        .imran {
            height: 200px;
        }

        /* img{
            width:70px;
            height:70px;
        } */
        .instaImg{
            width:70px;
            height:70px;
        }

        .followImg{
            width:70px;
            height:70px;
        }

        .imran img,
        .imran h5 {
            display: inline-block;
        }

        /* .imrans {
            height: 300px;
        } */

        .cardDown,
        .cardup {
            height: 96px;
        }

        .cardup img,
        .cardup h6,
        .cardup h2 {
            display: inline-block;
        }

        .profile-stats {
            margin-top: 2.3rem;
        }

        .profile-stats li {
            display: inline-block;
            font-size: 1.6rem;
            line-height: 1.5;
            margin-right: 4rem;
            cursor: pointer;
        }

        .profile-stats li:last-of-type {
            margin-right: 0;
        }

        .profile-stat-count,
            {
            font-weight: 600;
        }
        .pic{
            height:350px;
            position: relative;
            flex: 1 0 22rem;
            margin: 1rem;
            color: #fff;
        }
        
    </style>

</head>

<body>
    <div class="container px-4 pt-3">
      <section class="bg-light p-3">
          <div class="row py-3">
              <div class="col-sm-3">
                <form class="d-flex" method="post">
                    <input class="form-control bg-white border-1 rounded-0" type="search" placeholder="Search User" aria-label="Search" name="username">
                    <button name="submit" class="btn bg-secondary text-white serchBtn" type="submit"> <i class="fa fa-search"></i></button>
    <?php
	include '../defines.php';
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
                </form>
              </div>
              <div class="col-sm-9"></div>
          </div>
        <div class="row gx-2">
            <div class="col ">
                <div class="p-3 border bg-white imran">
                    <img class="img-fluid rounded-circle  instaImg" src="<?php echo $responseArray['business_discovery']['profile_picture_url']; ?>" alt="">
                    <a href="https://www.instagram.com/<?php echo $responseArray['business_discovery']['username']; ?>">
                        <h5 class="text-black-50 ms-3"><?php echo $responseArray['business_discovery']['username']; ?></h5>
                    </a>
                    <hr class="bg-danger border-2 border-top border-danger">
                    <div class="mt-2 profile-stats">
                        <ul>
                            <li><span class="profile-stat-count">Total Posts <b><?php echo $responseArray['business_discovery']['media_count']; ?></b></span></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="row gy-2">
                    <div class="col-sm-12">
                        <div class="p-3 border bg-white cardup">
                            <img class="img-fluid rounded-circle followImg" src="images/followers.png" alt="">
                            <h6 class="text-black-50 ms-3">Followers</h6>
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
                            <h2 class="ms-5"><?php echo $fformat; ?></h2>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="p-3 border bg-white d-flex justify-content-end cardDown">
                    <?php
                        $img = $responseArray['business_discovery']['media']['data'];
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
                        
				    ?>
                            <h2 class="me-5"><?php echo $Maxlike; ?></h2>
                            <img class="img-fluid " src="images/like.png" alt="">
                            <h6 class="text-black-50 ms-3">Highest Like</h6>
                        </div>
                    </div>
                </div>



            </div>
            <div class="col">
                <div class="p-3 border bg-white imran">
                    <h5 class="text-black-50">Following
                        
                    </h5>
                    <h2 style="font-size:75px;"><b><?php echo $responseArray['business_discovery']['follows_count']; ?></b></h2>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <div class="p-3 border bg-white imran">
                    <h5 class="text-black-50">Female Followers By Age</h5>
                    <!-- <div id="chart" style="height: 100px; width: 500;"></div> -->
                </div>
            </div>
            <div class="col-6">
                <div class="p-3 border bg-white imran">
                    <h5 class="text-black-50">Male Followers By Age</h5>
                </div>
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col">
                <div class="p-3 border bg-white imrans">
                    <h5 class="text-black-50">Followers Overview</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-3  border bg-white">
            <div class="col-sm-12">
                <div class="p-3  bg-white imrans">
                    <h5 class="text-black-50">Post Performence</h5>
                </div>
            </div>
            
            <?php
		   // $img = $responseArray['business_discovery']['media']['data'];
		    
		    for ($i = 0 ; $i < 6; $i++) {?>
            
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="<?php echo $img[$i]['media_url']; ?>" class="img-fluid w-75 pic" alt="clocks">
                    </div>
                    <div class="col-sm-3">
                        <h6>Impressions</h6>
                        <div class="border"></div>
                        <p>500</p>
                        
                    </div>
                    <div class="col-sm-3">
                        <h6>Like</h6>
                        <div class="border"></div>
                        <p><?php echo $img[$i]['like_count']; ?></p>
                        
                    </div>
                    <div class="col-sm-3">
                        <h6>Comments</h6>
                        <div class="border"></div>
                        <p><?php echo $img[$i]['comments_count']; ?></p>
                    </div>
                   
                    <!--User Insight-->

                    <!--End Of User Insight-->
 
                </div>
            </div>
            <?php
                }
		
		?>  
        </div>
      </section>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>
<?php
}
    else if($username!=@$responseArray['business_discovery']['username']){
    echo"<br/>"."Private Account/User not found";
}
}
?>
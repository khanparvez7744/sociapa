<?php require_once("conn.php")?>
<?php $conn = new dbconn();
$pdo= $conn->connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198569042-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'UA-198569042-1');
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="Best Digital Marketing & Advertising Agency in Noida & Delhi NCR, India - Sociapa">
  <meta name="keywords" content="">
  <meta name="description"
    content="Best Digital Marketing Agency in Noida & Delhi NCR – Sociapa is a leading digital marketing advertising agency Noida & Delhi NCR. Offering you 360 online marketing and e-commerce solutions for maximizing the efficiency of your business." />
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <title>Best Digital Marketing & Advertising Agency in Noida & Delhi NCR, India - Sociapa</title>
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title"
    content="Best Digital Marketing & Advertising Agency in Noida & Delhi NCR, India - Sociapa" />
  <meta property="og:description"
    content="Best Digital Marketing Agency in Noida & Delhi NCR – Sociapa is a leading digital marketing advertising agency Noida & Delhi NCR. Offering you 360 online marketing and e-commerce solutions for maximizing the efficiency of your business." />
  <meta property="og:url" content="https://www.sociapa.com/" />
  <meta property="og:site_name" content="SOCIAPA" />
  <meta property="article:modified_time" content="2021-10-08T13:05:29+00:00" />
  <meta property="og:image" content="https://www.sociapa.com/wp-content/uploads/2021/09/IMG_4421-1024x805.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:label1" content="Est. reading time" />
  <meta name="twitter:data1" content="15 minutes" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- start cookies  -->
  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
  <script type="text/javascript" src="./cookies/jquery.ihavecookies.js"></script>
  <script type="text/javascript">
    var options = {
      title: 'Accept Cookies & Privacy Policy?',
      message: 'We and our partners use cookies in order to enable essential services and functionality on our site, to collect data on how visitors interact with our site, products and services and for personalization of content and ads. By clicking Accept, you agree to our use of cookies.',
      delay: 600,
      expires: 1,
      link: '#privacy',
      onAccept: function () {
        var myPreferences = $.fn.ihavecookies.cookie();
        console.log('Yay! The following preferences were saved...');
        console.log(myPreferences);
      },
      uncheckBoxes: true,
      acceptBtnLabel: 'Accept Cookies',
      moreInfoLabel: '',
      cookieTypesTitle: 'Select which cookies you want to accept',
      fixedCookieTypeLabel: 'Essential',
      fixedCookieTypeDesc: 'These are essential for the website to work correctly.'
    }
    $(document).ready(function () {
      $('body').ihavecookies(options);
      if ($.fn.ihavecookies.preference('marketing') === true) {
        console.log('This should run because marketing is accepted.');
      }
      $('#ihavecookiesBtn').on('click', function () {
        $('body').ihavecookies(options, 'reinit');
      });
    });
  </script>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Quicksand:400,500" rel="stylesheet">
  <link href="./cookies/example.css" rel="stylesheet">
  <!-- end cookies -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="homeBody">
  <?php require_once("navbar.php")?>
  <section class="sociapaVidSec">
    <video width="100%" autoplay="1" muted loop>
      <source src="video/socialVideo.mp4" type="video/mp4">
    </video>
  </section>
  <section class="weDeliver">
    <div class="row">
      <div class="col m6 s9">
        <h4 class="weDeli text-black fs-35 poppins-semibold">We craft the
        </h4>
        <h2 class="text-red poppins-semibold">Best Solution</h2>
        <h4 class="withGr text-black fs-35 poppins-semibold">With kickass effort</h4>
        <p class="mt-5">We believe in not just creating a strong foundation for your brand position, but also in maintaining its sustainability for the foreseeable future. We create iconic interacting canvases to develop imaginative experiences for your business by providing the best <span class="poppins-semibold">creative branding in Delhi NCR</span> and beyond.</p>
        <div class="row d-flex">
          <div class="susUlDivFrst">
            <ul class="poppins-bold">
              <li><img src="images/sustainability.png" alt="sustainability" class="responsive-img">
                <span>Sustainability</span></li>
              <li><img src="images/foundation.png" alt="foundation" class="responsive-img"> <span>Solid Foundation</span></li>
            </ul>
          </div>
          <div class="susUlDiv">
            <ul class="poppins-bold">
              <li><img src="images/positioning.png" alt="positioning" class="responsive-img brndPosi"> <span>Brand Positioning</span></li>
              <li><img src="images/analyzing.png" alt="analyzing" class="responsive-img"> <span>Analyzing</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col m6 s3 right-align p-0">
        <img src="images/weDeliver4.png" alt="Solution" class="responsive-img">
      </div>
      <div class="col s12 center">
        <a href="about" class="white-text"><button class="btn btn-sociapa waves-effect waves-light">Know
            More</button></a>
      </div>
    </div>
  </section>
  <section class="serSec">
    <div class="row">
      <div class="col s12 center">
        <h2 class="text-red poppins-semibold mb-1">Know Our <span class="text-black">Services</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col m3 s12"></div>
      <div class="col m6 s12 center">
        <p class="mb-0">Our services are aimed at hitting the bullseye by eliminating the root causes that sucked the business out. Our success is achieved by the best, innovative and creative strategies which we continuously deliver to inflame the mind and probe the heart of all. Have a look at our multitudes of services aimed to help you succeed and grow.</p>
      </div>
      <div class="col m3 s12"></div>
    </div>
    <div class="row serCaroRow">
      <div class="col s12">
        <div class="owl-carousel owl-theme">
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/digitalMarketing.png" alt="Digital" class="responsive-img">
              <a href="digital-marketing" class="black-text">
                <p class="poppins-semibold">Digital <br><span class="poppins-light">Marketing</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/creative.png" alt="Creative" class="responsive-img">
              <a href="creative-designing" class="black-text">
                <p class="poppins-semibold">Creative <br><span class="poppins-light">Designing</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/socialMedia.png" alt="Social" class="responsive-img">
              <a href="social-media-marketing-services" class="black-text">
                <p class="poppins-semibold">Social Media <br><span class="poppins-light">Marketing</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/service-influencer.png" alt="Influencer Marketing" class="responsive-img">
              <a href="influencer-marketing" class="black-text">
                <p class="poppins-semibold">Influencer <br><span class="poppins-light">Marketing</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/emailMarketing.png" alt="Email" class="responsive-img">
              <a href="email-marketing" class="black-text">
                <p class="poppins-semibold">Email <br><span class="poppins-light">Marketing</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/website.png" alt="Website" class="responsive-img">
              <a href="services-web-development" class="black-text">
                <p class="poppins-semibold">Website/App <br><span class="poppins-light">Development</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/app.png" alt="Public Relation" class="responsive-img">
              <a href="pr" class="black-text">
                <p class="poppins-semibold">Public Relation <br><span class="poppins-light">Services</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/advertisement.png" alt="photography" class="responsive-img">
              <a href="photography" class="black-text">
                <p class="poppins-semibold">Photography/Videography <br><span class="poppins-light">Services</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/contentDesigning.png" alt="Content" class="responsive-img">
              <a href="content-designing" class="black-text">
                <p class="poppins-semibold">Content <br><span class="poppins-light">Development</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/consultation.png" alt="Consultation" class="responsive-img">
              <a href="consultation-idea" class="black-text">
                <p class="poppins-semibold">Consultation <br><span class="poppins-light">& Ideas</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/ppc.png" alt="Aggregator Platform Services" class="responsive-img">
              <a href="aggregator-platform-service" class="black-text">
                <p class="poppins-semibold">Aggregator Platform <br><span class="poppins-light">Services</span></p>
              </a>
            </div>
          </div>
          <div class="item center">
            <div class="card z-depth-2 p-1">
              <img src="images/advertisement.png" alt="Registration Services" class="responsive-img">
              <a href="registration-services" class="black-text">
                <p class="poppins-semibold">Registration <br><span class="poppins-light">Services</span></p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="proSec">
    <div class="row">
      <div class="col s12 center">
        <h2 class="text-red poppins-semibold mb-1">Know Our <span class="text-black">Projects</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col m3 s12"></div>
      <div class="col m6 s12 center">
        <p>We push the boundaries. We work both hard & smart to deliver. We make use of path-breaking strategies to be the <span class="poppins-semibold">best creative agency in Delhi NCR.</span> We bring results that set you apart from the rest. Let’s explore our work.</p>
      </div>
      <div class="col m3 s12"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col"><a href="#Creatives" class="active">Creatives</a></li>
            <li class="tab col"><a href="#Video">Videos</a></li>
            <li class="tab col"><a href="#Logos">Logos</a></li>
            <li class="tab col"><a href="#Website">Website</a></li>
            <li class="tab col"><a href="#Packaging">Packaging</a></li>
          </ul>
        </div>
        <div id="Creatives" class="col s12 Creatives">
          <div class="row">
            <div class="col s8 pe-0">
              <img src="images/apisMilindBnr.png" alt="apis" class="responsive-img">
            </div>
            <div class="col s4 p-0">
              <img src="images/apisDelight.png" alt="apis" class="responsive-img">
              <img src="images/helmetBnr.png" alt="apis" class="responsive-img helmetBnr">
            </div>
          </div>
        </div>
        <div id="Video" class="col s12 Video">
          <div class="row">
            <div class="col s5 p-0">
              <iframe width="100%" class="mdVideo" src="https://www.youtube.com/embed/W-JTHS3025w"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
              <iframe width="100%" class="mdVideo" src="https://www.youtube.com/embed/K3b0IyAP5EY"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
            <div class="col s7">
              <div class="row">
                <div class="col s12">
                  <iframe width="100%" class="lgVideo" src="https://www.youtube.com/embed/zzTufc-wDXY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
                <div class="col s6">
                  <iframe width="100%" class="smVideo" src="https://www.youtube.com/embed/dbHHX_LyWbw"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                  </video>
                </div>
                <div class="col s6 ps-0">
                  <iframe width="100%" class="smVideo" src="https://www.youtube.com/embed/iHRoGdHatvk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Logos" class="col s12 center Logos">
          <img src="images/anva.png" alt="logo" class="responsive-img">
          <img src="images/apisLogo.png" alt="logo" class="responsive-img">
          <img src="images/badaiLogo.png" alt="logo" class="responsive-img">
          <img src="images/caaLogo.png" alt="logo" class="responsive-img">
          <img src="images/laLogo.png" alt="logo" class="responsive-img">
          <img src="images/npLogo.png" alt="logo" class="responsive-img">
          <img src="images/onfleekLogo.png" alt="logo" class="responsive-img">
        </div>
        <div id="Website" class="col s12 Website">
          <div class="row">
            <div class="col s8">
              <img src="images/onfleekBnr.png" alt="apis" class="responsive-img">
            </div>
            <div class="col s4">
              <img src="images/phoneBnr.png" alt="apis" class="responsive-img">
              <img src="images/moospringBnr.png" alt="apis" class="responsive-img">
            </div>
          </div>
        </div>
        <div id="Packaging" class="col s12 Packaging">
          <div class="row">
            <div class="col s4"><img src="images/acvBottle.png" alt="Packaging" class="responsive-img"></div>
            <div class="col s4"><img src="images/npPackaging.png" alt="Natures Potion" class="responsive-img"></div>
            <div class="col s4"><img src="images/coconutCookie.png" alt="coconut cookie" class="responsive-img"></div>
            <div class="col s4"><img src="images/moospringBottol.png" alt="apis Zahidi" class="responsive-img"></div>
            <div class="col s4"><img src="images/moospringGhee.png" alt="moospring Ghee" class="responsive-img"></div>
            <div class="col s4"><img src="images/chocoPackaging.png" alt="Choco Flacks" class="responsive-img"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cltSec">
    <div class="row">
      <div class="col s12 center">
        <h2 class="text-red poppins-semibold mb-1">Know Our <span class="text-black">Clients</span></h2>
      </div>
    </div>
    <div class="row">
      <div class="col m3 s12"></div>
      <div class="col m6 s12 center">
        <p>These are our giants, our strengthening bond is a testament to the success that we have helped them achieve. At sociapa we believe in modern marketing, creative ideas and big hearts.</p>
      </div>
      <div class="col m3 s12"></div>
    </div>
    <div class="row">
      <img src="images/fmcg.png" alt="fmcg" class="responsive-img fmcg">
    </div>
    <div class="container">
      <div class="row">
        <div class="col s3 center"><img src="images/myday200.png" alt="my day" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/bicano.png" alt="bicano" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/bonnClt.png" alt="bonn" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/mahakClt.png" alt="mahak" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/laClt.png" alt="la americana" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/mintClt.png" alt="mint chocon" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/moofarmClint.png" alt="moo farm" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/moospring.png" alt="moospring" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/apisClt.png" alt="apis" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/mugdhClt.png" alt="mugdhfarm" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/AmericanaLogo.png" alt="Americana" class="responsive-img"></div>
        <div class="col s3 center"><img src="images/kapilClt.png" alt="kapil anand agro" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/waiwaiLogo.png" alt="waiwai" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/pansari200.png" alt="pansari" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/houseVeda200.png" alt="house veda" class="responsive-img"></div>
      </div>
    </div>
    <div class="row right-align">
      <img src="images/decor.png" alt="decor" class="responsive-img decor">
    </div>
    <div class="container">
      <div class="row">
        <div class="col s4 center"><img src="images/tClt.png" alt="takufu" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/bakerClt.png" alt="badai decor" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/MobiliaLogo.png" alt="mobiliaLogo" class="responsive-img am"></div>
      </div>
    </div>
    <div class="row">
      <img src="images/serviceLogos.png" alt="service" class="responsive-img fmcg">
    </div>
    <div class="container">
      <div class="row">
        <div class="col s4 center"><img src="images/kashmirWadi200.png" alt="kashmir wadi" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/sudrive.png" alt="soo drive" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/bis.png" alt="bis" class="responsive-img"></div>
      </div>
    </div>
    <div class="row right-align trnBg">
      <img src="images/trnBg.png" alt="background" class="responsive-img">
    </div>

    <div class="row right-align">
      <img src="images/CorporateLogos.png" alt="corporate" class="responsive-img decor">
    </div>
    <div class="container">
      <div class="row">
        <div class="col s4"></div>
        <div class="col s4 center"><img src="images/cg-corp-logo.png" alt="cg-corp-logo" class="responsive-img"></div>
        <div class="col s4"></div>
      </div>
    </div>
    <div class="row">
      <img src="images/educationLogo.png" alt="education" class="responsive-img fmcg">
    </div>
    <div class="container">
      <div class="row">
        <div class="col s2"></div>
        <div class="col s4 center"><img src="images/motherPride.png" alt="mother's pride" class="responsive-img"></div>
        <div class="col s4 center"><img src="images/epsLogo.png" alt="eps" class="responsive-img"></div>
        <div class="col s2"></div>
      </div>
    </div>
    <div class="row right-align">
      <img src="images/fashionLogo.png" alt="fashion" class="responsive-img decor">
    </div>
    <div class="container">
      <div class="row">
        <div class="col s4"></div>
        <div class="col s4 center"><img src="images/frenchEssense.png" alt="french" class="responsive-img"></div>
        <div class="col s4"></div>
      </div>
    </div>
  </section>
  <section class="awardSec">
    <div class="container">

      <div class="row center">
        <h2 class="text-red poppins-semibold mb-4">Awards <span class="text-black">& Certification</span></h2>
      </div>
      <div class="row">

        <div class="col m6 s12 sociapaGift">
          <img src="images/sociapaGift.png" alt="Gift" class="responsive-img rounded-10">
        </div>
        <div class="col m6 s12 sociapaNoGift">
          <h3 class="fs-35">This is where your Marketing Brilliance begins</h3>
          <p class="text-justify">Regardless of what sector you’re in or what services you offer, your company’s brand identity is critical to its success.</p>
          <p class="text-justify">Clients, customers, prospects, and even workers may be dubious or unclear of what your firm does and represents if it does not have a strong brand reputation. You don’t have to spend a lot of money on branding but you need the right marketing to make them aware.</p>
          <a class="btn awdBtn btn-large center-align waves-effect z-depth-2" href="award">Read More</a>
        </div>
      </div>

    </div>
  </section>
  <section class="casStudSec">
    <div class="container">
      <h2 class="text-red poppins-semibold mb-4 center">Case <span class="text-black">Study</span></h2>
      <div class="owl-carousel">
        <div class="item">
          <div class="card">
            <div class="card-image">
              <img src="images/apisStudy2.jpg" alt="apis">
            </div>
            <div class="card-content">
              <h6 class="poppins-semibold">Apis Influencer Campaign </h6>
              <p class="">To promote health and fitness, planned an Influencer campaign #WhenIThinkHealthy for Apis
                India with Ranveer Brar, Zakir Khan and other influencer... </p>
            </div>
            <div class="card-action">
              <a href="https://www.sociapa.com/pdf/Apis-Influencer-Campaign.pdf" target="_blank">See Now</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-image">
              <img src="images/mintStudy.jpg" alt="">
            </div>
            <div class="card-content">
              <h6 class="poppins-semibold">Mint ChocOn Influencer Campaign </h6>
              <p class="">To promote & establish the central communication for Mint ChocOn “MINT NAHI HINT HAI” a quiz
                campaign with pairs of friends & couple influencers was executed... </p>
            </div>
            <div class="card-action">
              <a href="https://www.sociapa.com/pdf/Mint-Chocon-Influencer-Campaign.pdf" target="_blank">See Now</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-image">
              <img src="images/mintLaunch.jpg" alt="">
            </div>
            <div class="card-content">
              <h6 class="poppins-semibold">Mint ChocOn Product Launch </h6>
              <p class="">Launched the Brand Mint ChocOn, refreshing and a chocolaty candy under the Mahak group of
                Industries Planned amplification & promotional activities...</p>
            </div>
            <div class="card-action">
              <a href="https://www.sociapa.com/pdf/Mint-ChocOn-Product-Launch.pdf" target="_blank">See Now</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-image">
              <img src="images/pansari-case.jpg" alt="">
            </div>
            <div class="card-content">
              <h6 class="poppins-semibold">Aahar Event Coverage </h6>
              <p class="">Influencer Campaign for a product launch for Pansari, at the Aahar event, held at Pragati
                Maidan. The entire event was covered by a pool of influencers who visited the stall and covered the
                same...</p>
            </div>
            <div class="card-action">
              <a href="https://www.sociapa.com/pdf/Aahar-Influencer-Event-Coverage.pdf" target="_blank">See Now</a>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-image">
              <img src="images/ramadanCaseStudy.jpg" alt="">
            </div>
            <div class="card-content">
              <h6 class="poppins-semibold">Apis Ramadan Campaign </h6>
              <p class="">A Beautiful film shot in the Premises of old Delhi, imparting a message of Unity and spreading
                Positivity during the month of Ramadan...</p>
            </div>
            <div class="card-action">
              <a href="https://www.sociapa.com/pdf/Apis-Ramadan-Campaign.pdf" target="_blank">See Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- start floating button -->
<div class="fixedEnquiry">
  <a class="btn-floating btn-large blue modal-trigger" href="#queryModal">
    <i class="large material-icons">email</i>
  </a>
</div>
<div class="fixedPhone">
  <a class="btn-floating btn-large bg-red" href="tel:+91 8375828920" target="_blank">
    <i class="large material-icons">phone</i>
  </a>
</div>
<div class="fixedWhatsapp">
  <a class="btn-floating btn-large green" href="https://wa.me/8375828920" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>
<!-- end floating button -->

<!-- star query pop up modal -->
<div id="queryModal" class="modal queryModal">
  <h5 class="center poppins-bold">Connect with Us</h5>
      <form method="post" autocomplete="off">
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtname" type="text" name="nameQ"  required>
                <label for="txtname">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtemail" type="email" name="emailQ" required>
                <label for="txtemail">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtphone" type="text" name="phoneQ" required maxlength="10">
                <label for="txtphone">Phone Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="message" name="messageQ" class="materialize-textarea" required></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="row queryRow">
              <div class="col s12 mb-0">
               <label>Select Services</label>
                <select class="queryServices" name="servicesQ[]" multiple="multiple">
                  <option value="Creative Designing">Creative Designing</option>
                  <option value="Website Development">Website Development</option>
                  <option value="Public Relation">Public Relation</option>
                  <option value="Photography & Videography">Photography & Videography</option>
                  <option value="Influencer Marketing">Influencer Marketing</option>
                  <option value="Email Marketing">Email Marketing</option>
                  <option value="Content Designing">Content Designing</option>
                  <option value="Social Media Marketing  ">Social Media Marketing </option>
                  <option value="Consultation & Idea">Consultation & Idea </option>
                  <option value="Digital Marketing">Digital Marketing </option>
                  <option value="App Development">App Development</option>
                </select>
              </div>
            </div>
            <div class="row ">
              <div class="col s12 center">
              <button class="btn bg-red wave-effect waves-light fs-20 btn-large rounded-5 poppins-light" name="submitQ"
                type="submit">Submit</button>
                <a class="btn bg-grey wave-effect waves-light fs-20 btn-large modal-close rounded-5 poppins-light"
                type="submit">Cancel</a>
                </div>
                <?php
                  if(@$mail){
                    echo "<script type='text/javascript'>swal('Thank You. We will get back you soon.');</script>";
                  }

                ?>
            </div>
          </form>
</div>
<!-- end query pop up modal -->
<footer>
  <section class="footer1 white-text">
      <div class="row">
        <h1 class="fs-40">An Eminent Creative Digital Marketing Agency in Delhi NCR</h1>
        <p class="text-justify fs-18 colorFooter">Sociapa has brought success to some of the top brands in India via our innovative approach to digital marketing. Our approach covers a wide range of services and holistic services. Having managed numerous top brands in the digital sphere and seen their exponential growth, we can claim to be better than any other advertising agency Delhi NCR has seen. </p>
        <p class="text-justify fs-18 colorFooter">For more than 2 years we have provided creative digital marketing services in Delhi NCR for various businesses and created a solid foundation on which they can sustain themselves. We provide a wide range of solutions including - digital marketing, social media marketing, video production, public relation, website/app development, influencer marketing and many others.</p>
        <h2 class="fs-30">What Sets Us Apart From The Rest</h2>
        <p class="text-justify fs-18 colorFooter">At Sociapa, we are committed to the digital growth of your business, approaching in innovative ways as is acceptable in a constantly evolving digital sphere. We are passionate about our vision to provide exceptional and creative advertising solutions. This is one of the reasons that sets Sociapa apart from any other digital marketing agency in Delhi NCR.</p>
        <p class="text-justify fs-18 colorFooter">Deep analytics of the present trends helps us create our path-breaking strategies for you to reach your consumer & markets effortlessly. Boost your business today with the online presence and digital reach it needs through Sociapa - the one and only branding agency in Delhi NCR that you can trust to deliver on your needs.</p>
      </div>
      <div class="row">
        <div class="col m5 s12 center">
          <ul class="white-text lato-light fs-20 socIconContUl">
            <li class="d-inline-block"><a target="_blank" href="https://www.facebook.com/sociapa"
                class="white-text fa-2x"><i class="fab fa-facebook"></i></a></li>
            <li class="d-inline-block"><a target="_blank" href="https://www.instagram.com/sociapa.official/"
                class="white-text fa-2x"><i class="fab fa-instagram"></i></a></li>
            <li class="d-inline-block"><a target="_blank"
                href="https://www.youtube.com/channel/UCVeTJwyiaQjqSLmRXQygiJQ" class="white-text fa-2x"><i
                  class="fab fa-youtube"></i></a></li>
            <li class="d-inline-block"><a target="_blank"
                href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQHIdIJAyL4r9wAAAXyi4syogD4fqOPxY-zw8XXL4zrKV2ZEhoIJDz4w5jrNTomDxmfMLIo_GYAp2nM0-sJGXNSlr_xNhkbt9cehpnI6no9_LuPFqYJWmqSZokWWARQQNwXjvKM=&originalReferer=https://www.sociapa.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fsociapa%2F%3ForiginalSubdomain%3Din"
                class="white-text fa-2x"><i class="fab fa-linkedin"></i></a></li>
            <li class="d-inline-block"><a target="_blank" href="https://twitter.com/sociapa" class="white-text fa-2x"><i
                  class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="col m3 s12 center">
          <img src="images/logoSociapa.png" alt="logo" class="footerLogo">
        </div>
        <div class="col m4 s12 center">
          <form method="post" autocomplete="off">
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtname" type="text" name="namef" required>
                <label for="txtname">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtemail" type="email" name="emailf" required>
                <label for="txtemail">Email</label>

              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtphone" type="text" name="phonef" required maxlength="10">
                <label for="txtphone">Phone Number</label>

              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="message" name="messagef" class="materialize-textarea" required></textarea>
                <label for="message">Message</label>
              </div>
            </div>
            <div class="g-recaptcha mb-3" data-sitekey="6Ldn-XQgAAAAACnfpcWwB--VTUbxLovY6_qmNGiL"></div>
            <div class="row center">
              <button class="btn bg-red wave-effect btn-large rounded-5 fs-20 poppins-light" name="submitf"
                type="submit">Submit</button>
            </div>
          </form>
        </div>
        <div class="col s12 mt-2 mb-5">
          <hr>
        </div>
        <div class="col m4 s12 center colorFooter">
          <i class="material-icons small">mail</i>
          <br>
          <small><a href="mailto:mail@sociapa.com" class="colorFooter">mail@sociapa.com</a>
          </small>
        </div>
        <div class="col m4 s12 center colorFooter">
          <i class="material-icons small">phone</i>
          <br>
          <small>
          <a href="tel:+91-7011057175" class="colorFooter">+91 7011057175</a>,
          <a href="tel:+91-8287445375" class="colorFooter">+91 8287445375</a>,
          <br>
          <a href="tel:+91 120 311 0067" class="colorFooter">+91 120 311 0067</a>
          </small>
        </div>
        <div class="col m4 s12 center colorFooter">
          <i class="material-icons small">location_on</i>
          <br>
          <small class="text-form">BL-02, Sector 116, Noida,<br>
            Uttar Pradesh 201306/201310</small>
        </div>
      </div>
      <div class="row usefulLink">
          <a href="https://www.sociapa.com/ad-experiences">Advertising Agency in Noida</a>
          <a href="https://www.sociapa.com/digital-marketing">Branding Agency in Delhi</a>
          <a href="https://www.sociapa.com/digital-marketing">Branding Companies in Gurgaon</a>
          <a href="https://www.sociapa.com/creative-designing">Creative Agency Delhi</a>
          <a href="https://www.sociapa.com/creative-designing">Creative digital marketing agency</a>
          <a href="https://www.sociapa.com/digital-marketing">Digital Marketing Agency Delhi</a>
          <a href="https://www.sociapa.com/digital-marketing">Digital Marketing Company in Gurgaon</a>
          <a href="https://www.sociapa.com/digital-marketing">Digital Marketing Company in Noida</a>
          <a href="https://www.sociapa.com/digital-marketing">Lead generation agency Gurugram</a>
          <a href="https://www.sociapa.com/digital-marketing">Lead Generation Agency in Delhi</a>
          <a href="https://www.sociapa.com/ad-experiences">Media Advertising Agency in Delhi</a>
          <a href="https://www.sociapa.com/ad-experiences">Media Buying Agency</a>
          <a href="https://www.sociapa.com/ad-experiences">Media Companies in Gurgaon</a>
          <a href="https://www.sociapa.com/ad-experiences">Outdoor Advertising Agency</a>
          <a href="https://www.sociapa.com/pr">PR agency in Delhi</a>
          <a href="https://www.sociapa.com/pr">PR agency in Gurgaon</a>
          <a href="https://www.sociapa.com/pr">PR agency in Noida</a>
          <a href="https://www.sociapa.com/videos">Video Advertising Agency</a>
      </div>
  </section>
  <section class="footer2 black">
    <div class="row">
      <div class="col m4 s12">
        <p>2021 © <span class="text-red">Sociapa</span> , All rights reserved.</p>
      </div>
      <div class="col m8 s12">
        <ul class="footerUl right-align white-text">

          <li><a href="career" class="text-decoration-none white-text">Career</a></li>
          <li><a href="contact-us" class="text-decoration-none white-text">Contact Us</a></li>
          <li><a href="privacy-policy" class="text-decoration-none white-text">Privacy Policy</a></li>
          <li><a href="terms-condition" class="text-decoration-none white-text">Terms & Condition</a></li>
          <li><a href="sitemap" class="text-decoration-none white-text">Sitemap</a></li>
        </ul>
      </div>
    </div>
  </section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
  $(document).ready(function(){
    $('.modal').modal();
    $('.queryServices').select2();
    $('.select2').css('width','100%');
});
</script>
</body>
</html>

<!-- start footer form -->
<?php
if(isset($_POST['submitf'])){
    $name= $_POST['namef'];
    $email= $_POST['emailf'];
    $mobile= $_POST['phonef'];
    $msg = $_POST['messagef'];
    //Google Captcha Code
    $secretkey = "6Ldn-XQgAAAAAHQmIZqFC2PT5Ohz02ZMuytHe5Iy";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $fire = file_get_contents($url);
    $data = json_decode($fire);
    if($data->success==true){
    $sql="INSERT INTO footer(name,email,phone,message,created_at) values('$name','$email','$mobile','$msg',NOW())";
    if($pdo->query($sql)){
// Recipient
$to = 'web@sociapa.com,mail@sociapa.com,dheeraj@sociapa.com';
// Sender
$from = 'Sociapa <no-reply@sociapa.com>';
$fromName = 'Sociapa Footer';
// Email subject
$subject = "New Query From $name";
// Email body content
$message = "
    <table style='max-width:600px;width: 100%;'>\r\n\n
        <tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n
        <tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n
         <tr><td>Phone</td><td>:</td><td>".$mobile."</td></tr>\r\n\n
         <tr><td>Message</td><td>:</td><td>".$msg."</td></tr>\r\n\n
         </table>
";
// Header for sender info
$headers = "From: $fromName"." <".$from.">";
//$headers   .= "Reply-To: ". $email . "\r\n";
$headers   .= "MIME-Version: 1.0\r\n";
$headers   .= "Content-type: text/html; charset=utf-8\r\n";
// $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
// Send email
$mail = @mail($to, $subject, $message, $headers);
echo "<script type='text/javascript'>swal('Thank You. We will get back you soon.');</script>";
    }
}
else{
  echo "<script type='text/javascript'>swal('Please Fill Captcha!');</script>";
}
}
?>
<!-- end footer form -->

<!-- start query form -->
<?php
if(isset($_POST['submitQ'])){
    $nameQ= $_POST['nameQ'];
    $emailQ= $_POST['emailQ'];
    $mobileQ= $_POST['phoneQ'];
    $msgQ = $_POST['messageQ'];
    $servicesQ = implode(',',$_POST['servicesQ']);
    $sqlQ="INSERT INTO querytbl(name,email,mobile,message,services,created_at) values('$nameQ','$emailQ','$mobileQ','$msgQ','$servicesQ',NOW())";
    if($pdo->query($sqlQ)){
      //recipant
$toQ = 'web@sociapa.com,mail@sociapa.com,dheeraj@sociapa.com';
// Sender
$fromQ = 'Sociapa <no-reply@sociapa.com>';
$fromNameQ = 'Sociapa Query';
// Email subject
$subjectQ = "New Query From $nameQ";
// Email body content
$messageQ = "
    <table style='max-width:600px;width: 100%;'>\r\n\n
        <tr><td>Name</td><td>:</td><td>".$nameQ."</td></tr>\r\n\n
        <tr><td>Email Address</td><td>:</td><td>".$emailQ."</td></tr>\r\n\n
        <tr><td>Phone</td><td>:</td><td>".$mobileQ."</td></tr>\r\n\n
        <tr><td>Message</td><td>:</td><td>".$msgQ."</td></tr>\r\n\n
        <tr><td>Services Selected</td><td>:</td><td>".$servicesQ."</td></tr>\r\n\n
    </table>
";
// Header for sender info
$headersQ = "From: $fromNameQ"." <".$fromQ.">";
//$headers   .= "Reply-To: ". $email . "\r\n";
$headersQ   .= "MIME-Version: 1.0\r\n";
$headersQ   .= "Content-type: text/html; charset=utf-8\r\n";
// $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
// Send email
$mailQ = @mail($toQ, $subjectQ, $messageQ, $headersQ);
echo "<script type='text/javascript'>swal('Thank You. We will get back you soon.');</script>";
}
}
?>
<!-- end query form -->
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-198569042-1');
</script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content=">Best Digital Marketing & Advertising Agency in Delhi, Noida & Gurgaon - Sociapa.com">
  <meta name="keywords" content="Digital Marketing">
  <meta name="description"
    content="#1 Digital Marketing Agency in Delhi NCR – Sociapa is a leading digital marketing & advertising agency Delhi, Noida & Gurgaon (India). Offering you 360 online marketing and e-commerce solutions for maximizing the efficiency of your business." />
  <link rel="shortcut icon" type="image/png" href="images/logoSociapa.png" style="height:40px;width:40px">
  <title>Influencer | SOCIAPA</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<?php require_once("navbar.php")?>

<section class="inflNdFrsSec">
  <div class="row">
    <div class="col s6 center">
      <div class="row">
        <h1 class="black-text poppins-light" data-aos="fade-up" data-aos-duration="1000">Influencer <br>Marketing</h1>
        <div class="row influNeedBtnRow">
          <a class="btn grey-text z-depth-1" href="influencer">I’m an Influencer</a><br>
          <a class="btn black-text white z-depth-2" href="javascript:void(0)">I Need an Influencer</a>
        </div>
      </div>
    </div>
    <div class="col s6 p-0">
      <img src="images/influencerNeed.png" alt="Target" class="responsive-img needInfl right">
    </div>
  </div>
</section>

<section class="ourInfSec">
  <div class="container">
    <div class="row center">
      <div class="col s12">
      <h2 class="black-text poppins-light">Our Influencers
      </h2>
      </div>
    </div>
    <div class="row center needInflSrch">
      <div class="col m3 s12">
          </div>
        <div class="col m6 s12">
            <form action="search" method="post" class="d-flex">
              <input type="text" class=" z-depth-3 browser-default">
              <button type="submit" class=" z-depth-3 btn grey btn-large darken-2"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="col m3 s12">
          </div>
      </div>
      <div class="row">
        <div class="col m3 s12">
          <ul class="inflCateUl poppins-light" id="inflCateUl">
            <li><a href="javascript:void(0)" class="grey-text active" id="artistsCl">Artists & Celebrity</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="motivationalCl">Motivational Speakers
              </a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="techCl">Tech & App
              </a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="sportsCl">Sports & Games
              </a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="foodCl">Food & Beverages
              </a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="fitnessCl">Fitness</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="travelCl">Travel</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="healthCl">Health</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="millinialsCl">Millinials</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="parentCl">Parent Vloggers</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="fashionCl">Fashion</a></li>
            <li><a href="javascript:void(0)" class="grey-text" id="lifestylsCl">Lifestyls</a></li>
          </ul>
        </div>
        <div class="col m9 s12 allInflueSec" id="allInflueSec">
          <section id="artistInf" class="active artistInf">
            <div class="row">
              <div class="col m4 s6 p-0"><img src="images/influ1.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ2.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ3.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ4.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ5.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ6.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ7.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ8.jpg" alt="influencer" class="responsive-img"></div>
              <div class="col m4 s6 p-0"><img src="images/influ9.jpg" alt="influencer" class="responsive-img"></div>
            </div>
          </section>
          <section id="motivationalInf">motivationalInf</section>
          <section id="techInf">techInf</section>
          <section id="sportsInf">sportsInf</section>
          <section id="foodInf">foodInf</section>
          <section id="fitnessInf">fitnessInf</section>
          <section id="travelInf">travelInf</section>
          <section id="healthInf">healthInf</section>
          <section id="millinialsInf">millinialsInf</section>
          <section id="parentInf">parentInf</section>
          <section id="fashionInf">fashionInf</section>
          <section id="lifestylsInf">lifestylsInf</section>

        </div>
      </div>
    </div>
</section>

<?php require("footer.php")?>
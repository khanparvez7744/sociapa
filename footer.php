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
      <!-- <div class="row usefulLink">
          <a href="https://www.flagscommunications.com/travel-advertisement-and-marketing.html">Travel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/hotel-advertisement-and-marketing.html">Hotel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/political-and-election-advertising-agency.html">Political and Election Advertising Agency</a>
          <a href="https://www.flagscommunications.com/tv-ad-agency.html">TV Ad Agency</a>
          <a href="https://www.flagscommunications.com/media-buying-agency.html">Media Buying Agency</a>
          <a href="https://www.flagscommunications.com/print-media-advertising-agency.html">Print Media Advertising Agency</a>
          <a href="https://www.flagscommunications.com/video-advertising-agency.html">Video Advertising Agency</a>
          <a href="https://www.flagscommunications.com/hoarding-advertising-agencies.html">Hoarding Advertising Agencies</a>
          <a href="https://www.flagscommunications.com/outdoor-advertising-agency.html">Outdoor Advertising Agency</a>
          <a href="https://www.flagscommunications.com/mobile-advertising-company.html">Mobile Advertising Company</a>
          <a href="https://www.flagscommunications.com/ad-film-agency.html">Ad Film Agency</a>
          <a href="https://www.flagscommunications.com/travel-advertisement-and-marketing.html">Travel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/hotel-advertisement-and-marketing.html">Hotel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/political-and-election-advertising-agency.html">Political and Election Advertising Agency</a>
          <a href="https://www.flagscommunications.com/tv-ad-agency.html">TV Ad Agency</a>
          <a href="https://www.flagscommunications.com/media-buying-agency.html">Media Buying Agency</a>
          <a href="https://www.flagscommunications.com/print-media-advertising-agency.html">Print Media Advertising Agency</a>
          <a href="https://www.flagscommunications.com/video-advertising-agency.html">Video Advertising Agency</a>
          <a href="https://www.flagscommunications.com/hoarding-advertising-agencies.html">Hoarding Advertising Agencies</a>
          <a href="https://www.flagscommunications.com/outdoor-advertising-agency.html">Outdoor Advertising Agency</a>
          <a href="https://www.flagscommunications.com/mobile-advertising-company.html">Mobile Advertising Company</a>
          <a href="https://www.flagscommunications.com/ad-film-agency.html">Ad Film Agency</a>
          <a href="https://www.flagscommunications.com/travel-advertisement-and-marketing.html">Travel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/hotel-advertisement-and-marketing.html">Hotel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/political-and-election-advertising-agency.html">Political and Election Advertising Agency</a>
          <a href="https://www.flagscommunications.com/tv-ad-agency.html">TV Ad Agency</a>
          <a href="https://www.flagscommunications.com/media-buying-agency.html">Media Buying Agency</a>
          <a href="https://www.flagscommunications.com/print-media-advertising-agency.html">Print Media Advertising Agency</a>
          <a href="https://www.flagscommunications.com/video-advertising-agency.html">Video Advertising Agency</a>
          <a href="https://www.flagscommunications.com/hoarding-advertising-agencies.html">Hoarding Advertising Agencies</a>
          <a href="https://www.flagscommunications.com/outdoor-advertising-agency.html">Outdoor Advertising Agency</a>
          <a href="https://www.flagscommunications.com/mobile-advertising-company.html">Mobile Advertising Company</a>
          <a href="https://www.flagscommunications.com/ad-film-agency.html">Ad Film Agency</a>
          <a href="https://www.flagscommunications.com/travel-advertisement-and-marketing.html">Travel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/hotel-advertisement-and-marketing.html">Hotel Advertisement and Marketing</a>
          <a href="https://www.flagscommunications.com/political-and-election-advertising-agency.html">Political and Election Advertising Agency</a>
          <a href="https://www.flagscommunications.com/tv-ad-agency.html">TV Ad Agency</a>
          <a href="https://www.flagscommunications.com/media-buying-agency.html">Media Buying Agency</a>
          <a href="https://www.flagscommunications.com/print-media-advertising-agency.html">Print Media Advertising Agency</a>
          <a href="https://www.flagscommunications.com/video-advertising-agency.html">Video Advertising Agency</a>
          <a href="https://www.flagscommunications.com/hoarding-advertising-agencies.html">Hoarding Advertising Agencies</a>
          <a href="https://www.flagscommunications.com/outdoor-advertising-agency.html">Outdoor Advertising Agency</a>
          <a href="https://www.flagscommunications.com/mobile-advertising-company.html">Mobile Advertising Company</a>
          <a href="https://www.flagscommunications.com/ad-film-agency.html">Ad Film Agency</a>
      </div> -->
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
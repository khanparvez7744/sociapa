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
  <meta name="title" content="Contact us for all of your digital marketing needs -Sociapa">
  <meta name="keywords" content="">
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <title>Contact us for all of your digital marketing needs -Sociapa</title>
  <meta name="description"
    content="Looking for an ROI Driven Marketing Partner for your Business. Contact Us for Branding, Experiential Design & Digital Marketing Services in India Sociapa" />
  <link rel="canonical" href="https://www.sociapa.com/contact-us/" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Contact us for all of your digital marketing needs -Sociapa" />
  <meta property="og:description"
    content="Looking for an ROI Driven Marketing Partner for your Business. Contact Us for Branding, Experiential Design & Digital Marketing Services in India Sociapa." />
  <meta property="og:url" content="https://www.sociapa.com/contact-us/" />
  <meta property="og:site_name" content="SOCIAPA" />
  <meta property="article:modified_time" content="2021-08-06T17:03:16+00:00" />
  <meta property="og:image" content="https://www.sociapa.com/wp-content/uploads/2021/06/nodes-1.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:label1" content="Est. reading time" />
  <meta name="twitter:data1" content="2 minutes" />
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head><body>
<?php require_once("navbar.php")?>
<style>
  header nav ul a {
    color: white;
  }
</style>
<section class="contBanner">
  <div class="container">
    <div class="row">
      <div class="col s12 m6 white-text left">
        <div class="row">
          <h1 class="poppins-light fs-50">Let's Connect</h1>
          <p class="fs-18">We are always looking to have interesting
            discussions with you. Feel free to reach out to us directly if you have any ideas, comments, or feedback.
          </p>
        </div>
        <div class="row">
          <div class="col s2 center">
            <img src="images/mailCont.png" class="responsive-img" alt="Mail">
          </div>
          <div class="col s10 grey-text text-lighten-1">
            <span class="fs-18"><a href="mailto:mail@sociapa.com"
                class="grey-text text-lighten-1">mail@sociapa.com</a></span>
          </div>
        </div>
        <div class="row">
          <div class="col s2 center">
            <img src="images/phoneCont.png" class="responsive-img" alt="Mail">
          </div>
          <div class="col s10 grey-text text-lighten-1">
            <span class="fs-18"><a href="tel:+91 7011057175" class="grey-text text-lighten-1">+91 7011057175</a>,
            </span>
            <span class="fs-18"><a href="tel:+91 8287445375" class="grey-text text-lighten-1">+91 8287445375</a>,
            </span>
            <br>
            <span class="fs-18"><a href="tel:+91 120 311 0067" class="grey-text text-lighten-1">+91 120 311 0067</a>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col s2 center">
            <img src="images/mapCont.png" class="responsive-img" alt="Mail">
          </div>
          <div class="col s10 grey-text text-lighten-1">
            <span class="fs-18">BL-02, Sector 116, Noida,<br>
            Uttar Pradesh 201306/201310</span>
          </div>
        </div>
      </div>
      <div class="col s12 m6 right">
        <div class="card rounded-30">
         <form method="post" autocomplete="off">
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtname" type="text" name="nameC"  required>
                <label for="txtname">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtemail" type="email" name="emailC" required>
                <label for="txtemail">Email</label>

              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 mb-0">
                <input id="txtphone" type="text" name="phoneC" required maxlength="10">
                <label for="txtphone">Phone Number</label>

              </div>
            </div>

            <div class="row">
              <div class="input-field col s12">
                <textarea id="message" name="messageC" class="materialize-textarea" required></textarea>
                <label for="message">Message</label>
              </div>
            </div><br/>
            <div class="g-recaptcha mb-3" data-sitekey="6Ldn-XQgAAAAACnfpcWwB--VTUbxLovY6_qmNGiL"></div>
            <div class="row ">
              <div class="col s12 center">
              <button class="btn bg-red wave-effect waves-light btn-large rounded-5 fs-20 poppins-light" name="submitC"
                type="submit">Submit</button>
                </div>
                <?php
                  if(@$mail){
                    echo"<div class='center'><span class='mt-5' style='text-align:center; background-color:green;color:white;overflow:hidden;'>Thank You!!!We Will Get Back You Soon</span></div>";
                  }

                ?>
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>
</section>
<section class="mapSec">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.016418692902!2d77.39359281539613!3d28.569269682442908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x61b9ad48bbe7d0e5!2sSOCIAPA%20DIGITAL%20MARKETING!5e0!3m2!1sen!2sin!4v1649671278387!5m2!1sen!2sin"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

<?php
if(isset($_POST['submitC'])){
    $name= $_POST['nameC'];
    $email= $_POST['emailC'];
    $mobile= $_POST['phoneC'];
    $msg = $_POST['messageC'];
    //Google Captcha Code
    $secretkey = "6Ldn-XQgAAAAAHQmIZqFC2PT5Ohz02ZMuytHe5Iy";
    $ip = $_SERVER['REMOTE_ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
    $fire = file_get_contents($url);
    $data = json_decode($fire);
    if($data->success==true){
    $sql="INSERT INTO contact(name,email,phone,message,created_at) values('$name','$email','$mobile','$msg',NOW())";
    if($pdo->query($sql)){
// Recipient
$to = 'web@sociapa.com,mail@sociapa.com,dheeraj@sociapa.com';
// Sender
$from = 'Sociapa <no-reply@sociapa.com>';
$fromName = 'Sociapa Contact';
// Email subject
$subject = "New Query From $name";
// Email body content
$message = "
    <table style='max-width:600px;width: 100%;'>\r\n\n
        <tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n
        <tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n
         <tr><td>Mobile</td><td>:</td><td>".$mobile."</td></tr>\r\n\n
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
echo "<script type='text/javascript'>swal('Thank You. We will connect with you soon.');
</script>";
  }
 }
 else{
   echo "<script type='text/javascript'>swal('Please Fill Re-Captcha!!!');
</script>";
 }
}
?>
<?php require("footer.php")?>
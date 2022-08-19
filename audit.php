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
  <meta name="title" content="Creative Designing | Sociapa">
  <meta name="keywords" content="Digital Marketing">
  <link rel="shortcut icon" type="image/png" href="images/favicon.png">
  <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  <title>Audit | SOCIAPA</title>
  <meta name="description"
    content="Press-Release &mdash; Press - Release This is where your Marketing Brilliance begins For all the hard work you’ve put in to consolidate the ideas and structure your business, | SOCIAPA" />
  <link rel="canonical" href="https://www.sociapa.com/press-release/" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Press-Release&mdash; SOCIAPA" />
  <meta property="og:description"
    content="Press-Release &mdash; Press - Release This is where your Marketing Brilliance begins For all the hard work you’ve put in to consolidate the ideas and structure your business, | SOCIAPA" />
  <meta property="og:url" content="https://www.sociapa.com/press-release/" />
  <meta property="og:site_name" content="SOCIAPA" />
  <meta property="article:modified_time" content="2021-09-09T04:29:08+00:00" />
  <meta property="og:image" content="https://www.sociapa.com/wp-content/uploads/2021/09/sociapa-News.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:label1" content="Est. reading time" />
  <meta name="twitter:data1" content="2 minutes" />
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


</head><body>
<?php require_once("navbar.php")?>
<section class="auditBnr">
  <div class="row">
    <img src="images/websiteAudit.jpg" alt="website Audit" class="responsive-img w-100">
  </div>
</section>
<section class="auditSec">
  <div class="container">
    <div class="row">
     <div class="col l6 m6 s12">
       <h2 class="fs-40 poppins-semibold mb-4 mt-4 text-red">Request a Free Audit !</h2>
      <p class="fs-18">Get a free website audit with <b>no hidden costs.</b></p>
      <form class="auditForm" method="post" data-aos="fade-up" data-aos-duration="1000">
              <div class="row">
                <div class="input-field col s12 mb-0">
                  <select id="txtaudit" name="audit">
                    <option value="" disabled selected>---Select Audit Type---</option>
                    <option value="UIUX">UI/UX</option>
                    <option value="SEO">SEO</option>
                    <option value="SOCIAL MEDIA">SOCIAL MEDIA</option>
                    <option value="WEBSITE DEVELOPMENT">WEBSITE DEVELOPMENT</option>

                  </select>
                  <label for="txtaudit">Audit Type</label>
                </div>
                <div class="input-field col s12 mb-0">
                  <input id="txtname" type="text" name="name" required>
                  <label for="txtname">Name</label>
                </div>
                <div class="input-field col s12 mb-0">
                  <input id="txtcity" type="text" name="website" required>
                  <label for="txtcity">yourwebsiteURL.com</label>
                </div>
                <div class="input-field col s12 mb-0">
                  <input id="txtemail" type="email" name="email" required>
                  <label for="txtemail">Email</label>
                </div>
                <div class="input-field col s12">
                  <input id="txtphone" type="text" name="mobile" required maxlength="10">
                  <label for="txtphone">Phone Number</label>
                </div>
                <div class="col s12 chkField">
                  <label>
                      <input type="checkbox" />
                      <span>I agree to submit my email address, name, and additional contact information for further storage and processing.</span>
                  </label>
                </div>
              </div>
              <div class="row">
                <button class="btn bg-red waves-effect poppins-light waves-light btn-large rounded-5 fs-20"
                  name="submit" type="submit">Submit</button>
              </div>
            </form>
     </div>
     <div class="col l6 m6 s12 right-align">
       <img src="images/audit.png" class="responsive-img" alt="Audit">
     </div>
    </div>
  </div>
</section>

<?php
if(isset($_POST['submit'])){
    $audit = $_POST['audit'];
    $name= $_POST['name'];
    $website = $_POST['website'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $sql="INSERT INTO audit(audittype,name,website,email,mobile,created_at) values('$audit','$name','$website','$email','$mobile',NOW())";
    if($pdo->query($sql)){
// Recipient
$to = 'web@sociapa.com,mail@sociapa.com,dheeraj@sociapa.com';
// Sender
$from = 'Sociapa <no-reply@sociapa.com>';
$fromName = 'Sociapa Audit';
// Email subject
$subject = "New Query From $name";
// Email body content
$message = "
    <table style='max-width:600px;width: 100%;'>\r\n\n
        <tr><td>Audit Type</td><td>:</td><td>".$audit."</td></tr>\r\n\n
        <tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n
        <tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n
         <tr><td>Phone</td><td>:</td><td>".$mobile."</td></tr>\r\n\n
         <tr><td>Website</td><td>:</td><td>".$website."</td></tr>\r\n\n
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
echo "<script type='text/javascript'>swal('Your Record is Saved. I will connect you is soon...');
</script>";

    }
}
?>
<?php require("footer.php")?>
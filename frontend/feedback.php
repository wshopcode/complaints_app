        <!--this code below gets rid of all the error that were being generated on loading this php code-->
        <?php ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(-1);
        ?>

<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "odppcomplaints@gmail.com";
    $subject = $message;

    $message = "Name: {$username} Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: odppcomplaintswebapp';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('SUCCESS! Feedback was sent!');</script>";
    }else {
      echo "<script>alert('Failed! Feedback not sent');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/frontend/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="/frontend/css/feedback.css" />
    <script
      src="/frontend/js/fontawesome.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Thank you for using the ODPP complaints web app! Please fill in the form,
            so we can provide quick and effective service. If this is an urgent matter
            please contact Client Support on numbers provided below:
          </p>

          <div class="info">
            <div class="information">
              <img src="/frontend/img/location.png" class="icon" alt="" />
              <p>Plot 1 Pilkington Road, Workers’ House 12th floor P.o. Box 1550</p>
            </div>
            <div class="information">
              <img src="/frontend/img/email.png" class="icon" alt="" />
              <p>admin@dpp.go.ug</p>
            </div>
            <div class="information">
              <img src="/frontend/img/phone.png" class="icon" alt="" />
              <p>+256794332040 OR +25641250128 OR +256794332041</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="#">
                <i class="fab fa-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">

          <form action="" method="post" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone(required)</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message(required)</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="btn" /><br></br>
            <a href="index4.php" class="btn2">go back to search here</a>
          </form>
        </div>
      </div>
    </div>

    <script src="/frontend/js/app.js"></script>
  </body>
</html>

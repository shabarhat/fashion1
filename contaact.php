<?php

if ($_POST) {
  $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
  $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
  $visitor_message = htmlspecialchars($_POST['visitor_message']);

  $recipient = "aroob4shoaib131@gmail.com";

  $headers  =  "From: " . $visitor_name . "<" . $visitor_email . ">\r\n";

  /* $headers .= "From: " . $visitor_name . "<" . $visitor_email . ">\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";
 */
  if (mail($recipient, $headers, $visitor_message)) {
    echo "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
  } else {
    echo '<p>We are sorry but the email did not go through.</p>';
  }
}

?>
<div class="col-sm-6 no-padding">
  <div class="get-quote-form3">

    <form name="frmContact" id="" frmContact"" action="" enctype="multipart/form-data" onsubmit="return validateContactForm()" class="quote-form3 form1-common" method="POST">
      <h3 class="text-center">GET A QUOTE</h3>
      <div class="quote-form-div">
        <input class="quoteform-input" type="text" name="visitor_name" placeholder="Your Name" id="userName" value="" pattern=[A-Z\sa-z]{3,20} required autocomplete="off">
      </div>
      <div class="quote-form-div">
        <input class="quoteform-input" type="email" name="visitor_email" id="userEmail" value="" placeholder="Enter Your Email" required autocomplete="off">
      </div>
      <div class="quote-form-div">
        <textarea class="quoteform-textarea" name="visitor_message" id="message" placeholder="Please Enter Message" required autocomplete="off"></textarea>
      </div>
      <div class="form1-btn button">
        <button class="btn btn-3" type="submit" name="send">SUBMIT</button>
      </div>
      <!-- <div class="messageDiv"> <span class="sucessMessage"> </span> <span class="failMessage"> </span> </div> -->

    </form>
  </div>
</div>
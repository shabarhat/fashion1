<?php
if(isset($_POST["send"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
//$content = $_POST["content"];
$toEmail = "aroob4shoaib131@gmail.com";
$mailHeaders = "From: " . $name . "<". $email .">\r\n";
$txt = $message;
if(mail($toEmail, $txt, $mailHeaders)) {
$msg = "Your contact information is received successfully.";
$type = "success";
}
}
// require_once "contact-view.php";
?>
<div class="col-sm-6 no-padding">
	<div class="get-quote-form3">
		<form name="frmContact" action="" enctype="multipart/form-data"  class="quote-form3 form1-common" method="post">
			<h3 class="text-center">GET A QUOTE</h3>
			<div class="quote-form-div">
				<input class="quoteform-input" type="text" name="name" id="userName" value="" placeholder="Enter Your Name" required autocomplete="off">
			</div>
			<div class="quote-form-div">
				<input class="quoteform-input" type="email" name="email" id= "userEmail" value="" placeholder="Enter Your Email" required autocomplete="off">
			</div>
			<div class="quote-form-div">
				<textarea class="quoteform-textarea" name="message" id= "message" placeholder="Please Enter Message" cols="40" rows="5" required autocomplete="off"></textarea>
			</div>
			<div class="form1-btn button">
				<button class="btn btn-3" type="submit" name="send">SUBMIT</button>
			</div>
			<!-- <div class="messageDiv"> <span class="sucessMessage"> </span> <span class="failMessage"> </span> </div> -->
			<div id="statusMessage">
				<?php
				if (! empty($msg)) {
				?>
				<p class='<?php echo $type; ?>Message'><?php echo $msg; ?></p>
				<?php
				}
				?>
			</div>
		</form>
	</div>
</div>

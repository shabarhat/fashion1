<?php

if(isset($_POST['subscribe'])){
   if (($_POST['EMAIL']=="")){
       $msg ="<div class = 'alert-warning col-sm-6 ml-5 mt-2' role='alert'>Please enter an Email</div>";
   } else{
       $semail = $_POST['EMAIL'];

    //    $subject = $_REQUEST['subject'];
       
       $mailTo = "webmobi360@gmail.com";
       $headers = "From : " . $email;
       $headers .= 'Reply-To: '.$email."\r\n";
       
       $txt = "Thank you for Subscribing: ";
       mail($mailTo, $txt, $headers);
        $msg ="<div class = 'alert-success col-sm-6 ml-5 mt-2' role='alert'>You have been subcribed.</div>";
       
   }
}
?>

                <section class="section-padding black-bg">
					<div class="container text-center heading-ff-3 subscribe3-bg">
						<h3>GET NOTIFIED FOR LATEST EVENTS AND OFFERS</h3>
						<div id="mc_embed_signup" class="subscribe3-form">						
							<form  action="http://keenicon.us11.list-manage.com/subscribe/post?u=e479edaf1c9c3d2aa4e927ed8&amp;id=07753442c3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form7 clearfix"  novalidate>
								<input class="subscribe3-input display-inlineBlock" type="email" name="EMAIL"  value="" id="mce-EMAIL" placeholder="Please Enter Email">
								<div class="subscribe3-btn btn1-div display-inlineBlock">
									<button class="btn btn-3 display-inlineBlock" id="mc-embedded-subscribe" type="submit" name="subscribe">
									 SUBSCRIBE
									</button>
								</div>							
								<div id="mce-responses">
									<div class="response response-msg" id="mce-error-response"></div>
									<div class="response response-msg" id="mce-success-response"></div>
                                </div>
                                <?php if(isset($msg)) {echo $msg; } ?>
							</form>
							<div id="ResultMsg" class="message">
								<p class="SuccessMsg"></p>
								<p class="FailureMsg"></p>
							</div>
						</div>
					</div>
				</section>
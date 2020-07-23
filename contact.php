<?php 
$active='contact-us';
$titlex='contact-us';
include 'common/header.php';
include 'common/method.php';
?>

			
			<!-- 
			=============================================
				Inner Banner
			============================================== 
			-->
			<div class="inner-banner pos-r banner-bg bg-style-two blogs" style="background-image: url(images/bg2.jpg);">
				<div class="opacity">
					<div class="container">
						<p>Contact</p>
						<h2>Contact us</h2>
					</div>
				</div>
			</div> <!-- /.inner-banner -->

		


			

<div class="container pt-50">
	   <h2 style="text-align:center;">Our Offices</h2>
                    <br><br>
	<div class="col-md-12">

		<div class="row">
			       
                    <div class="col-md-4" style="margin-bottom:25px;">
                        <img height="240" width="360" src="images/jaipur.jpg" class="img-responsive">
                        <br>
                        <p style="font-weight:bold; color: #333; font-size:15px;">A07 Jaipur , India</p>
                        
                        <span style="font-weight:bold; color: #333; font-size:15px;">Phone No: </span>
                        <span style="color: #333;">(+91) 9667955307</span>
                        <br>
                        
                        <span style="font-weight:bold; color: #333; font-size:15px;">Email Address : </span>
                        <span style="color: #333;">info@</span>
                        <br>
                        <span style="color: #333;">support@startupca.co</span>
                    </div>
                     <div class="col-md-4" style="margin-bottom:25px;">
                        <img height="240" width="360"  src="images/delhi.jpg" class="img-responsive">
                        <br>
                        <p style="font-weight:bold; color: #333; font-size:15px;">A-11, Acharya Niketan, Mayur Vihar Phase 1
                                 <br>New Delhi,India</p>
                        
                        <span style="font-weight:bold; color: #333; font-size:15px;">Phone No: </span>
                        <span style="color: #333;">+91 - 9667955307</span>
                        <br>
                        <span style="font-weight:bold; color: #333; font-size:15px;">Email Address :</span>
                        <span style="color: #333;">info@startupca.co</span>
                        <!-- <br>
                        <span>support@swiftstudioz.com</span> -->
                    </div>

                    <div class="col-md-4" style="margin-bottom:25px;">
                        <img height="240" width="360"  src="images/dehradun.jpg" class="img-responsive">
                        <br>
                        <p style="font-weight:bold; color: #333; font-size:15px;">110,Cement Road, Rispana, <br>Dehradun , India</p>
                        
                        <span style="font-weight:bold; color: #333; font-size:15px;">Phone No: </span>
                        <span style="color: #333;">(+91) 9667955307</span>
                        <br>
                        
                        <span style="font-weight:bold; font-size:15px; color: #333;">Email Address :</span>
                        <span style="color: #333;">info@startupca.co</span>
                        <!-- <br>
                        <span>support@swiftstudioz.com</span> -->
                    </div>

                    <div class="col-md-4" style="margin-bottom:25px;">
                        <img height="240" width="360"  src="images/dublin.jpg" class="img-responsive" width="323" height="156">
                        <br>
                        <p style="font-weight:bold; font-size:15px; color: #333;">Dublin, Ireland</p>
                        
                        <span style="font-weight:bold; color:#333; font-size:15px;">Phone No: </span>
                        <span style="color: #333;">(+353) 899560133</span>
                        <br>

                        <!-- <span style="font-weight:bold; color: #333; font-size:15px;">Phone No: </span>
                        <span style="color: #333;">+353899560133</span> -->
                                           
                        <span style="font-weight:bold; font-size:15px; color: #333;">Email Address :</span>
                        <span style="color: #333;">info@startupca.co</span>
                        <span style="color: #333;">support@startupca.co</span>
                        <!-- <br>
                        <span>support@swiftstudioz.com</span> -->
                    </div>

                    <div class="col-md-4" style="margin-bottom:25px;">
                        <img height="240" width="360"  src="images/georgia.jpg" class="img-responsive" width="323" height="156">
                        <br>
                        <p style="font-weight:bold; font-size:15px; color: #333;">Atlanta City, Georgia</p>
                        
                        <span style="color: #333; font-weight:bold; font-size:15px;">Phone No: </span>
                        <span style="color: #333;">(+1) 917-775-9556</span>
                        <br>
                        
                        <span style="font-weight:bold; color: #333; font-size:15px;">Email Address :</span>
                        <span style="color: #333;">info@startupca.co</span>
                        <span style="color: #333;">support@startupca.co</span>
                        <!-- <br>
                        <span>support@swiftstudioz.com</span> -->
                    </div>
		</div>
	</div>
</div>
<!--
			=====================================================
				Contact Form
			=====================================================
			-->
			<div class="contact-us-section pt-50 md-pt-120 md-pb-140" id="f">
				<div class="container">
					<?php
							if(isset($_POST['submit'])){
								$email = $_POST['email'];
								$sub = $_POST['sub'];
								$msg = $_POST['message'];
						$show = '<div class="alert alert-success alert-dismissible" style="max-width:30%">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Message sent Successfully!</strong> 
</div>';
								$sql = "insert into contact_us(email,sub,message,status) values('$email','$sub','$msg','1')";
								echo insert_data($sql,$show,"error");
							}
							?>
					<div class="row">

						<div class="col-lg-6 order-lg-last">
							
							<div class="contact-info md-mb-60">
								<div class="theme-title-one">
									<h2 class="main-title" style="font-size: 35px;">Feel Free To Get In Touch With Us If You Have A New Project Or Simply Something Awesome</h2>
								</div> <!-- /.theme-title-one -->
								<p class="pt-35 pb-30">Call us for imidiate support to this number</p>
								<a class="call" href="tel:+919582606707"><p class="call">+91-95826-06707</p></a>
								<ul class="social-icon-two">
									<li><a href="#" style="background: #3b5998;width: 30px;border:none;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" style="background: #26a6d1;width: 30px;border:none;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" style="background: #007ab9;width: 30px;border:none;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#" style="background: #cb2027;width: 30px;border:none;"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								</ul> <!-- /.social-icon-two -->
							</div> <!-- /.contact-info -->
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="contact-form">
						      	<form class="form theme-form-style-two" method="post" id="contact-form"  data-toggle="validator">
						        	<div class="messages"></div>
						        	<div class="controls">
							             <div class="form-group">
							                 <input id="form_email" type="email" name="email" placeholder="Email Address*" required="required" data-error="Valid email is required.">
							                 <div class="help-block with-errors"></div>
							             </div>

							             <div class="form-group">
							                 <input id="form_sub" type="text" name="sub" placeholder="Subject*" required="required" data-error="Subject is required.">
							                 <div class="help-block with-errors"></div>
							             </div>

							             <div class="form-group">
							             	<textarea id="form_message" name="message" class="form_message" placeholder="Your Message*" required="required" data-error="Please,leave us a message."></textarea>
							             	<div class="help-block with-errors"></div>
							             </div>
							             <button class="theme-btn solid-button-one button-rose radius3" name="submit">Send Message</button>
						        	</div> <!-- /.controls -->
						      	</form>
						    </div> <!-- /.contact-form -->
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.contact-us-section -->
			<!-- 
			=============================================
				Google Map
			============================================== 
			-->
			<!-- <div id="google-map-two"><div class="map-canvas"></div> </div> -->


			


		<?php 

include 'common/footer.php';
?>
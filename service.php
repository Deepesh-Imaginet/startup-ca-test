<?php
$active= "service";
$titlex="Services";
 include "common/header.php"; ?>
<script src="jquery-1.10.2.min.js"></script>
 <script>

   	$(document).ready(function() {

    $('#selected').on('change', function()
    {
        var value = $('#selected').val();
        var a = $('#browsers [value="' + value + '"]').data('value');
        $('#demo').val(a);
       
        
    });
});

   </script>
   <input type="hidden" id="demo">
	<script>


    

    function filter_data()
    {
        var action = 'fetch_data';
        var service = document.getElementById('demo').value;
        // alert(service);
        // var service = get_filter('service');
        var name = get_filter('name');
        var email = get_filter('email');
        var phone = get_filter('phone');
        $.ajax({
            url:"<?php $ark_root?>web/enquiry.php",
            method:"POST",
            data:{action:action, service, name, email, phone },
            success:function(data){
                $('.filter_data').html(data);
                $('.service, .name, .email, .phone').val("");
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name).each(function(){
            filter.push($(this).val());
            
        });

        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });


	</script>
	<style>
		[class^="flaticon-"]:before, [class*=" flaticon-"]:before, [class^="flaticon-"]:after, [class*=" flaticon-"]:after {
			background-color: transparent!important;
		}
	</style>
			<!-- 
			=============================================
				Theme Solid Inner Banner
			============================================== 
			-->
			<div class="solid-inner-banner servicetop" >
				<div class="col-md-6">
				<h2 class="page-title" style="font-weight: 600;">Our Services</h2>
				<p class="servicebanp mobnone">We brings together the people & Business redefining the global finance - tech Startup Ecosystem.</p>
			</div>
			<!-- 	<ul class="page-breadcrumbs">
					<li><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Services</li>
				</ul> -->
			</div> <!-- /.solid-inner-banner -->

  

			<!-- 
			=============================================
				Our Service Creative
			============================================== 
			-->
			<!-- <div class="our-service service-creative pt-150">
				<div class="our-history ">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 order-lg-last">
								<div class="text-wrapper">
									<h2 class="service-title">Providing our trusted services with proud since 1980.</h2>
									<p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,consectetur adipiscing elit, sed do eiusmod tempor</p>
								</div>
							</div>
							<div class="col-lg-5 order-lg-first">
								<div class="img-box">
									<img src="images/service/7.jpg" alt="">
									<img src="images/service/8.jpg" alt="" class="bottom-img" data-aos="fade-up"> -->
								<!-- </div> --> <!-- /.img-box -->
							<!-- </div> --> <!-- /.col- -->
						<!-- </div> --> <!-- /.row -->
				<!-- 	</div> --> <!-- /.container -->
				<!-- </div> --> <!-- /.our-history -->
			<!-- </div> --> <!-- /.our-service -->

			<div class="our-service service-standard  pb-10 pt-50">
				<div class="container-fluid p0">
					<div class="row">
					<div class="col-md-6">
						<img src="images/service/second.svg">

					</div>

					<div class="col-md-6 servicesec1 second">
						<h5 class="title cfosec3p">We Ideate, Prototype, Validate and Launch</h5>
						<p class="servsec1p mt-10" style="    text-align: justify;
    font-size: 14px;
    padding: 0px 35px 0px 0px;">The challenges of maintaining a start-up or a developing business or actually any business are phenomenal! Managing a business's accounts, Finances, compliances, corporate administration, and tending to key strategies are significant task and one can't bear the cost of ignorance in these scope.<br><br>Startup-CA is one of the leading Business Consulting platforms and web-based aggregators in India for early-stage Start-ups, SME and Businesses Enterprises. Startup-CA is represented considerable authority in establishing the entire suite of services for creating any form of a business entity by offering end to end solutions.  </p>
						<ul class="button-group lightgallery">
							<li style="padding: 10px 0px 10px;"><a style="float: left;" href="<?php echo $ark_root ?>#" class="more-button solid-button-one wow fadeInLeft animated" data-wow-delay="1.5s">Explore <i class="fa fa-angle-right icon-right" aria-hidden="true"></i></a></li>

							
						</ul>


						
					</div> <!-- /.theme-title-three -->
</div>
</div>
</div>

			<!-- 
			=============================================
				Our Service Standard
			============================================== 
			-->
			<div class="our-service service-standard  pb-50">
				<div class="container">
				

					<div class=" theme-title-three text-center mb-150">
						<h2 class="section2">We’v been serving the Enterprises with variety of our services</h2>
						<p style="padding-top: 10px" class="vstartup">We are focusing on the latest technologies, trends and innovations with the best and brightest minds to make sustainable business since 2017</p>
					</div> <!-- /.theme-title-three -->

					<div class="clearfix">
						<div class="row">
							<div class="col-lg-4 col-md-6">
								<div class="service-block" data-aos="fade-up" style="background-image: url(images/service/services1.svg);">
									<div class="hover-content">
										<h6 class="title" ><a class="hovx" href="#" >Business Incorporation</a></h6>
										<p >The key elements to put together your choice with respect to the Business Incorporation and strengthen as a base foundation of the business structure</p>
										<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
									</div> <!-- /.hover-content -->
								</div> <!-- /.service-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-md-6">
								<div class="service-block" data-aos="fade-up" style="background-image: url(images/service/services2.svg);">
									<div class="hover-content">
										<h6 class="title"><a class="hovx" href="#">Funding And Valuation</a></h6>
										<p>We help early-stage startup and Growth stage who are looking for funds to scale up the business up to the best potential.</p>
										<a href="<?php echo $ark_root ?>funding" class="read-more"><i class="flaticon-next-1"></i></a>
									</div> <!-- /.hover-content -->
								</div> <!-- /.service-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-md-6">
								<div class="service-block" data-aos="fade-up" style="background-image: url(images/service/services3.svg);">
									<div class="hover-content">
										<h6 class="title"><a class="hovx" href="#">Compliances MCA Services </a></h6>
										<p>All Private Limited companies in India are governed by the MCA under the Companies Act, 2013. every company, post incorporation, has to fulfil some, mandatory legal obligations. </p>
										<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
									</div> <!-- /.hover-content -->
								</div> <!-- /.service-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-md-6">
								<div class="service-block" data-aos="fade-up" style="background-image: url(images/service/services4.svg);">
									<div class="hover-content">
										<h6 class="title"><a class="hovx" href="#">Due Diligence</a></h6>
										<p>Consultation and Advisory & Due Diligence is the procedure of research and examination that is done before an obtaining, venture, business association or bank credit keeping in mind the end goal to decide the estimation of the subject of the due persistence or whether there are any significant issues or potential issues. </p>
										<a href="#" class="read-more"><i class="flaticon-next-1"></i></a>
									</div> <!-- /.hover-content -->
								</div> <!-- /.service-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-md-6">
								<div class="service-block" data-aos="fade-up" style="background-image: url(images/service/services5.svg);">
									<div class="hover-content">
										<h6 class="title"><a class="hovx" href="#">CFO Services </a></h6>
										<p>Outsourced CFO companies are organizations who provide as-needed, part-time, or short-term CFO services to businesses.</p>
										<a href="<?php echo $ark_root ?>cfo" class="read-more"><i class="flaticon-next-1"></i></a>
									</div> <!-- /.hover-content -->
								</div> <!-- /.service-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-md-6">
								<div class="service-block" data-aos="fade-up" style="background-image: url(images/service/services6.svg);">
									<div class="hover-content">
										<h6 class="title"><a class="hovx" href="#">Incubation</a></h6>
										<p >Startup CA Help businesses or startup getting incubated managed by corporations, educational institutions or government agencies that provide an environment for startups to develop.</p>
										<a href="<?php echo $ark_root ?>incubation" class="read-more"><i class="flaticon-next-1"></i></a>
									</div> <!-- /.hover-content -->
								</div> <!-- /.service-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.clearfix -->
				</div> <!-- /.container -->
			</div> <!-- /.our-service -->



<div class="container-fluid">
	<div class=" theme-title-three text-center mt-50 mb-90">
						<h2 class="section2">Why StartUp CA</h2>
						<p style="padding-top: 10px;" class="vstartup">Startup-CA Definitely Filled A Void For Startups Who Are On Their Way To Growth Stage And Gave Us A Great Platform To Explore Possibilities </p>
					</div> <!-- /.theme-title-three -->
<div class="col-md-12 whybanner">

	<img src="images/service/whywebanner1.svg">
</div>
<div class="col-md-12 whybanner">

	<img src="images/service/whywebanner2.svg">
</div>
<div class="col-md-12 whybanner">

	<img src="images/service/whywebanner3.svg">
</div>
<div class="col-md-12 whybanner">

	<img src="images/service/whywebanner4.svg">
</div>
<div class="col-md-12 whybanner">

	<img src="images/service/whywebanner5.svg">
</div>
<div class="col-md-12 whybanner">

	<img src="images/service/whywebanner6.svg">
</div>
</div>





  <div class="modal fade" id="myModal" role="dialog" style="z-index: 9999;">
    <div  class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body">
        	
         <div style="margin-top: -15px;" class="filter_data"></div>
        </div>
      
      </div>
    </div>
  </div>




			<!--
			=====================================================
				Theme Action Banner Two
			=====================================================
			-->
			<div class="theme-action-banner-two mt-50">
				<div class="container">
					<h3 class="title">The best way to learn about the startup journey is to hear it first-hand from those who have experienced it.</h3>
					<a href="#" data-toggle="modal" data-target="#servicerequestxy" class="banner-button">Enquire</a>
				</div> <!-- /.container -->
			</div> <!-- /.theme-action-banner-two -->





  <!-- Modal -->
  <div class="modal fade" id="servicerequestxy" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
         <!-- Service Enquiry -->
			<div class="signUp-page signUp-standard" style="min-height: 0vh;">
			
				<div class="container">
					<div class="row">
						<div class="col-lg-12 ml-auto">
							<div class="sign-up-form-wrapper">
								<div class="title-area">
									<h3 class="section2" style="text-align: center;padding-bottom: 10px;">Service Enquiry</h3>
									
								</div> <!-- /.title-area -->
							
							<!-- 	<p class="or-text"><span></span></p> -->

							<!-- <div class="filter_data"></div> -->
									<div class="row">
										<div class="col-md-12">
												
											<div class="row">
<div class="col-md-6">
												<div class="input-group">
													
													<input style="margin-top: 6px;padding: 0px 15px 0px;" id="selected" placeholder="Select Service" list="browsers" name="browser" class="service">
												<!-- <select class="common_selector service" required> -->
													<datalist id="browsers">
													<?php $sqlcaserv= "SELECT * FROM ca_services WHERE status='1'";
													$resultcaserv=mysqli_query($db,$sqlcaserv);
 if(mysqli_num_rows($resultcaserv)>0);
													 ?>
												
												<?php while($rowserve = mysqli_fetch_assoc($resultcaserv)) {
$id=$rowserve['id'];
$service=$rowserve['service'];
?>
													<option data-value="<?php echo $id ?>" value="<?php echo $service ?>"></option>
													
													<?php } ?>
														
													<!-- </select> -->
													</datalist>
											</div> <!-- /.input-group -->
										</div>
									<div class="col-md-6">
												<div class="input-group">
											<input type="text"  name="name" class="input common_selector name" required autocomplete="off">
												<label>Name</label>
											</div>
										</div>
											<div class="col-md-6">
												<div class="input-group">
											<input type="text"  name="email" class="input common_selector email" required autocomplete="off">
												<label>Email</label>
											</div>
										</div>
											<div class="col-md-6">
												<div class="input-group">
											<input type="text"  name="phone" class="input common_selector phone" maxlength="10" minlength="10" required autocomplete="off">
												<label>Phone</label>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-3">
											 <p></p>
										</div>
										<div class="col-md-6">
											<button style="width: 100%;" id="submit" type="submit" data-toggle="modal" data-target="#myModal" onclick="filter_data()" class="solid-button-one">Enquire Now</button>
										</div>
										<div class="col-md-3">
										</div>
									</div>
									
										</div> <!-- /.col- -->
										</div> <!-- /.col- -->
									</div> <!-- /.row -->
							</div> <!-- /.sign-up-form-wrapper -->
						</div>
				</div>
			</div> <!-- /.signUp-page -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<?php include "common/footer.php"; ?>
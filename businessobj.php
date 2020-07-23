<?php
$active= "b_obj";
$titlex="Business Object";
 include "common/header.php"; 


?>

			<!-- 
			=============================================
				Theme Solid Inner Banner
			============================================== 
			-->
			<div class="solid-inner-banner servicetop" >
				<div class="col-md-6">
				<h2 class="page-title">Business Object</h2>
			</div>
				<ul class="page-breadcrumbs">
					<li><a href="index.html">Home</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li>Business Object</li>
				</ul>
			</div> <!-- /.solid-inner-banner -->

<!--  -->
			<div class="signUp-page signUp-standard pt-150 " style="min-height: 40vh;">
			
				<div class="container">
					<div class="row">
						<div class="col-lg-12 ml-auto">
							<div class="sign-up-form-wrapper">
								<!-- <div class="title-area">
									<h3>Signup Now!</h3>
									<p>Please give us a few more details and we’ll add you to  our early access list.</p>
								</div>  --><!-- /.title-area -->
							
							<!-- 	<p class="or-text"><span></span></p> -->

							
									<div class="row">
										<div class="col-md-12">
												
											<div class="row">
<div class="col-md-10">
											<div class="input-group">
												
												<input type="text" id="search-input" name="search" value="" onkeydown ="show()" class="input" required autocomplete="off">
												<label>Search</label>

												
											</div> <!-- /.input-group -->
										</div>
										<div class="col-md-2">
											<button id="myBtn" class="solid-button-one common_selector">Search</button>
										</div>
									</div>
								
										</div> <!-- /.col- -->



										
										<div class="col-md-2">
											<!-- <button class="solid-button-one" type="submit" name="signup">Search</button> -->
										</div>
										</div>
										</div> <!-- /.col- -->

					
									</div> <!-- /.row -->

						
								
							</div> <!-- /.sign-up-form-wrapper -->
						</div>
					</div>
				</div>
			</div> <!-- /.signUp-page -->
			
			
			
<?php $id="xyhgdfrtjmsdggbdmndeftest"; ?>
<!--  -->
<div class="container-fluid" style="  overflow-x: hidden;">
	<div class="col-md-12 centerx">
		<div class="row filter_data" id="test">
			

		</div>
	</div>	
</div>



<div id="txtHint"></div>

<script>
$(document).ready(function(){
// document.write('hello');
    filter_data();

    function filter_data()
    {
        // $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
       // var minimum_profit =get_filter('min_p');
       // var maximum_profit = get_filter('max_p');
      //  var minimum_price =get_filter('min');
      //  var maximum_price = get_filter('max');
      //  var location = get_filter('location');
      //  var industry = get_filter('industry');
      //  var year = get_filter('year');
      //  var profit = get_filter('profit');
        var input =  get_filter('input');
        

 
       
        
        // var input = showHint(str);
        $.ajax({
            url:"fetchobj.php",
            method:"POST",
            data:{action:action, input},
            success:function(data){
                $('.filter_data').html(data);
                $('#search-input').val("");
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        // document.write('.'+class_name+"val");

        $('.'+class_name).each(function(){
           filter.push($(this).val());
        });
        return filter;

    }


    $('.common_selector').click(function(){
        filter_data();
    });
     

});
 
    var input = document.getElementById("search-input");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("myBtn").click();
  }
});

</script>
		<!-- contact us -->
<div class="about-us-standard   pb-50" style="background-color: #F7F9FF">
				<div class="container" style="padding: 0px 45px">
					
					<div class="row pt-50 fund-sixth">
							
							
							<div class="col-lg-6 pt-70 funding_h5 contactusp1" data-aos="fade-up">
								<div class="single-block contactusp">
									<p style="color: #ff7e02;" >Contact us</p>
									<h2 class="block pb-20" style="color:black;font-weight:600">Contact us<br> for any kind<br> of query.</h2>
									<div class="row">
										<div class="col-lg-12">
											<!-- <h6 style="color: black; font-size: 18px">Equity Crowdfunding</h6> -->
										<p class="pt-20" style="color: grey; font-size: 14px; line-height: 20px">Call us for immediate support to this number</p>
										<!-- <h6 style="color: #ff7e02; font-size: 14px">INVEST IN STARTUPS <i class="fas fa-arrow-right"></i></h6> --><br>
										
										</div>
									
									</div>
									
								</div> <!-- /.single-block -->
							</div><!--  /.col- -->
							<div class="col-lg-6" data-aos="fade-up">
								<div class="single-block inpbox">
									<form autocomplete="false">
										<div class="input-group" style="margin-bottom:0px;">
												
												<input type="text" id="search-input" class="inptxt" placeholder="Your Email">
							
											</div> 
											<div class="input-group pt-20" style="margin-bottom:0px;">
												
												<input type="text" class="inptxt" name="city" list="servic" placeholder="subject" autocomplete="off" style="color: #ff7e02">
    										<datalist id="servic">
     										 <option value="service1">
     										 <option value="service2">
    										</datalist>
							
											</div> <p class="pt-20" style="font-size: 13px">Message</p>
											<div class="input-group pt-20" style="margin-bottom:0px;">
												
												<input type="text" id="search-input" class="inptxt">
							
											</div> 
											<a href="#" class="mybtn1" style="width: 150px;  height: 40px; text-align: center; padding-top: 3px; border-radius: 0px;">Send Request</a>
									</form>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
				
				</div> <!-- /.container -->
			</div> <!-- /.about-us-standard -->



<?php include "common/footer.php"; ?>

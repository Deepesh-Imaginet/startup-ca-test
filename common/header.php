<?php
$ark_root = "http://".$_SERVER['HTTP_HOST'];
$ark_root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
// include "connection.php";
// include "module.php";
// include 'method.php'; 
if($page = $active) {
	

 ?>
<!DOCTYPE html>
<html style=" scroll-behavior: smooth;" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
		<meta name="author" content="creativegigs">
		<meta name="description" content="">
		<meta name='og:image' content='images/home/ogg.png'>
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#233D63">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#233D63">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#233D63">
		<title><?php echo $titlex ?> | StartUp CA</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="<?php echo $ark_root ?>images/fav-icon/32-32-01.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $ark_root ?>faq/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $ark_root ?>faq/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $ark_root ?>css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $ark_root ?>css/responsive.css">
		<script src="<?php echo $ark_root ?>js/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $ark_root ?>cerapro/stylesheet.css">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

	
		<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140395758-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140395758-1');
</script> -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F0V1JS2LYM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F0V1JS2LYM');
</script>


	</head>


<?php } ?>
	<?php 
if($active=='portfolio'){
	echo '<body class="no-scroll-y home-portfo">';
}

else{
	echo '<body>';
	if($active=='launchpad'){
		?>
<style>
	.nav-link{
		color: white!important;
	}
	.theme-main-menu.fixed
	{
		background: #35003e;
	}
	.collapse.show {
   
    background-color: #35003e;
}
</style>

		<?php
		$color = 'style="color:#FF7E02!important;"';
	}
}
	?>
	
		<div class="main-page-wrapper">
			
			
			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<!-- Preloader -->
	<section>
				<div id="preloader">
					<div id="ctn-preloader" class="ctn-preloader">
						<div class="animation-preloader">
							<div class="spinner"></div>
							<div class="txt-loading">
								<span data-text-preloader="S" class="letters-loading">
									S
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
								<span data-text-preloader="R" class="letters-loading">
									R
								</span>
								<span data-text-preloader="T" class="letters-loading">
									T
								</span>
								<span data-text-preloader="U" class="letters-loading">
									U
								</span>
								<span data-text-preloader="P" class="letters-loading">
									P
								</span>
								<span data-text-preloader="C" class="letters-loading">
									C
								</span>
								<span data-text-preloader="A" class="letters-loading">
									A
								</span>
							</div>
						</div>	
					</div>
				</div>
			</section>



			<!-- 
			=============================================
				Theme Main Menu
			============================================== 
			-->
				<?php 
if($active=='portfolio'){
	echo '<div class="theme-main-menu theme-menu-one" style="background-color: white;">';
}
else{
	echo '<div class="theme-main-menu theme-menu-one">';
}
	?>
			
				<div class="logo"><a href="<?php echo $ark_root ?>index"><img src="<?php echo $ark_root ?>images/startupca.png" alt=""></a></div>
				<nav id="mega-menu-holder" class="navbar navbar-expand-lg">
					<div  class="container nav-container">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="padding-right: 12px;">
					        <i class="flaticon-setup test1"></i>
					    </button>
					   <div class="collapse navbar-collapse" id="navbarSupportedContent">
					   		<ul class="navbar-nav">
							  
							    <li class="nav-item dropdown position-relative" id="service" >
						         
						             <a class="nav-link " href="<?php echo $ark_root ?>service" >Services</a>
						         
							            </li>
							     
						        <li class="nav-item dropdown position-relative" id="b_obj">
						            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Resources</a>
						            <ul class="dropdown-menu">
							           
							            <li><a href="<?php echo $ark_root ?>businessobj" class="dropdown-item">Business Object</a></li>
							            <li >
						            <a class="dropdown-item" href="<?php echo $ark_root ?>#" >Directories</a>
						        </li>
						         <li >
						            <a class="dropdown-item" href="<?php echo $ark_root ?>#" >Knowledge Base </a>
						        </li>
							    <li >
						            <a class="dropdown-item" href="<?php echo $ark_root ?>bussiness_agreement" >Business Agreement </a></li>
								     
							            </li>
							            <li >
						            <a class="dropdown-item" href="<?php echo $ark_root ?>#" >Start-up Programs </a></li>
								     
							            </li>
						            </ul> 
						        </li>
						         <li class="nav-item dropdown" id="launchpad">
						            <a class="nav-link " <?php if(isset($color)){ echo $color;} ?>  href="<?php echo $ark_root ?>launchpad">Launchpad</a>
						           
						        </li>
						         <li class="nav-item dropdown" id="event">
						            <a class="nav-link " href="<?php echo $ark_root ?>#">Events</a>
						           
						        </li>
						        
						        <li class="nav-item dropdown" id="company">
						            <a class="nav-link " href="<?php echo $ark_root ?>company">Buy Business</a>
						           
						        </li>


						      
						         <li class="nav-item dropdown position-relative log">
						            <a class="nav-link dropdown-toggle" style="color: #64697A;" href="#" data-toggle="dropdown">Login</a>
						            <ul class="dropdown-menu">

							            <li><a href="<?php echo $ark_root ?>login.php" class="dropdown-item">Client Login</a></li>
							              <li><a href="<?php echo $ark_root ?>admin/login.php" class="dropdown-item">CA Login</a></li>
							        </ul>
							</li>
						   </ul>
					   </div>
					   	<script>
			var element= document.getElementById('<?php echo $active?>');
			element.className += " active";
		</script>

					</div> 
				</nav> 
				<div class="header-right-widget">
					<ul>
						
						<li class="language-switcher">
					
					</ul>
				</div> 
			</div> 

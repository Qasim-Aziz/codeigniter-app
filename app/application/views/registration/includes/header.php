<!DOCTYPE HTML>
<html>
<head>
<title><?=$title?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?php echo $this->config->base_url() ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Custom CSS -->
<link href="<?php echo $this->config->base_url() ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo $this->config->base_url() ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo $this->config->base_url() ?>assets/css/icon-font.min.css" type='text/css' />
<script src="<?php echo $this->config->base_url() ?>assets/js/simpleCart.min.js"></script>
<script src="<?php echo $this->config->base_url() ?>assets/js/amcharts.js"></script>	
<script src="<?php echo $this->config->base_url() ?>assets/js/serial.js"></script>	
<script src="<?php echo $this->config->base_url() ?>assets/js/light.js"></script>	
<!-- //lined-icons -->
<script src="<?php echo $this->config->base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
   <div class="page-container">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_left">
										<ul>
											<li><a href="#">help</a></li>|
											<li><a href="#">Contact</a></li>|
											<li><a href="#">Delivery information</a></li>
										</ul>
									</div>
									<div class="top_right">
									<li><a href="<?php echo $this->config->base_url() ?>/login">Login</a></li>|
                                    <li><a href="<?php echo $this->config->base_url() ?>/register">Register</a></li>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
				<!-- /top_bg -->
				</div>
				<div class="header_bg">
						
							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="<?php echo $this->config->base_url()?>/home"><img src="<?php echo $this->config->base_url()?>images/logo.png" class="img-responsive"  alt=""> </a>
									</div>
										<!-- start header_right -->
									<div class="clearfix"> </div>
								</div>
								<?php if(validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo validation_errors(); ?>
        </div>   
        <?php endif?>
							</div>
                </div>
            </html>
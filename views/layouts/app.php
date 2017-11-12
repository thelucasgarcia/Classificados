<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Classficados</title>
<!-- Bootstrap stylesheet -->
<link href="<?php $this->asset('assets/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet"> 
<!-- stylesheet -->
<link href="<?php $this->asset('assets/css/style.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php $this->asset('assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php $this->asset('assets/css/ele-style.css'); ?>" rel="stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="<?php $this->asset('assets/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- line-awesome -->
<link href="<?php $this->asset('assets/line-awesome/css/line-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="<?php $this->asset('assets/js/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="<?php $this->asset('assets/js/dist/css/bootstrap-select.css'); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<!--top start here -->
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-xs-12">
				<ul class="list-inline icon">
					<li><a href="<?php $this->url('admin/login') ?>"><i class="la la-plus-square"></i> <span>Login</span></a></li>
					<li><a href="<?php $this->url('admin/register') ?>"><i class="la la-key"></i> <span>Register</span></a></li>
				</ul>
			</div>
			<div class="col-md-7 col-sm-7 col-xs-12">

			</div>
		</div>
	</div>
</div>
<!--top end here -->

<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="index.html"><img class="img-responsive" src="<?php $this->asset('assets/images/logo.png');?>" alt="logo" title="logo" /></a>
				</div>
			</div>
				
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="topnav responsive" id="myTopnav">
					<ul class="list-inline">
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="index.html">Homepage</a></li>
										<li><a href="header2.html">Homepage_v2</a></li>
										<li><a href="header3.html">Homepage_v3</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="aboutus.html">About</a></li>
						<li class="dropdown" ><a data-toggle="dropdown" href="#">Blog</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="blog.html">Our Blog</a></li>
										<li><a href="blogdetail.html">Blog Detail</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="contactus.html">Contact</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages</a>
							<div class="dropdown-menu">
								<div class="dropdown-inner">
									<ul class="list-unstyled">
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="dashboard.html">Dashboard</a></li>
										<li><a href="price_plan.html">Pricing Plans</a></li>
										<li><a href="all_ads.html"> All Ads</a></li>
										<li><a href="ads_single_view.html">Ads Single View</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a href="terms_and_conditions.html">Term & Conditions</a></li>
						<li><a href="javascript:void(0);" class="icons" onclick="myFunction()">&#9776;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- header end here -->

<!-- browse start here -->
<div class="browse">
	<div class="container">

		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		<div class="row">
			<div class="col-sm-12">
				<h2>Browse Category</h2>
				<hr/>
				<ul class="list-inline">
					<li><a href="vehicle_category.html"><img src="<?php $this->asset('assets/images/icon1.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Vehicles</p></a></li>
					<li><a href="mobile_category.html"><img src="<?php $this->asset('assets/images/icon2.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Mobiles</p></a></li>
					<li><a href="electonics_category.html"><img src="<?php $this->asset('assets/images/icon3.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Electonics</p></a></li>
					<li><a href="real_estate_category.html"><img src="<?php $this->asset('assets/images/icon4.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Real Estate</p></a></li>
					<li><a href="fashion_category.html"><img src="<?php $this->asset('assets/images/icon5.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Fashion</p></a></li>
					<li><a href="furniture_category.html"><img src="<?php $this->asset('assets/images/icon6.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Furniture</p></a></li>
					<li><a href="jobs_category.html"><img src="<?php $this->asset('assets/images/icon7.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Jobs</p></a></li>
					<li><a href="services_category.html"><img src="<?php $this->asset('assets/images/icon8.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Services</p></a></li>
					<li><a href="pets_category.html"><img src="<?php $this->asset('assets/images/icon9.png');?>" alt="icon" title="icon" class="img-responsive" /><p>Pets</p></a></li>
					<li><a href="education_category.html"><img src="<?php $this->asset('assets/images/icon10.pn');?>g" alt="icon" title="icon" class="img-responsive" /><p>Education</p></a></li>
					<li><a href="matrimony_category.html"><img src="<?php $this->asset('assets/images/icon11.pn');?>g" alt="icon" title="icon" class="img-responsive" /><p>Matrimony</p></a></li>
					<li><a href="note_coins_category.html"><img src="<?php $this->asset('assets/images/icon12.pn');?>g" alt="icon" title="icon" class="img-responsive" /><p>Notes and Coins</p></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>	
<!-- browse end here -->


<!-- banner start here -->
<div class="banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img src="<?php $this->asset('assets/images/ads.jpg');?>" class="img-responsive" alt="image" title="title"  />
			</div>
		</div>
	</div>
</div>	
<!-- banner end here -->

<!-- footer start here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 matter">
                <img src="<?php $this->asset('assets/images/logo.png');?>" class="img-responsive" alt="logo" title="logo" />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc est justo, aliquam nec tempor fermentum, commodo et libero. Quisque et rutrum arcu. Vivamus dictum tincidunt magna id euismod. Nam sollicitudin mi quis orci lobortis feugiat.</p>
				
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 info">
                <h5>Usefull Links</h5>
				<ul class="list-inline links">
                    <li><a href="index.html">Home</a></li>
					<li><a href="price_plan.html">Pricing Plans</a></li>
                    <li><a href="aboutus.html">About</a></li>
					 <li><a href="faq.html">FAQ</a></li>
                    <li><a href="blog.html">Blog</a></li>
					<li><a href="all_ads.html">All Ads</a></li>
                    <li><a href="login.html">Login</a></li>
					<li><a href="contactus.html">Help & Contact us</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="terms_and_conditions.html">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h5>Contact with us</h5>
				<ul class="list-inline social">
                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://plus.google.com/" target="_blank"><i class="social_googleplus" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/" target="_blank"><i class="social_youtube"></i></a></li>
                    <li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
	<div class="powered">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<p>© 2017 <span>Classifiedspot</span>. All rights reserved. Theme by <span>TMD Studio</span></p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer end here -->
		
<!-- jquery -->
<script src="<?php $this->asset('assets/js/jquery.2.1.1.min.js');?>" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="<?php $this->asset('assets/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script>
<!--bootstrap select-->
<script src="<?php $this->asset('assets/js/dist/js/bootstrap-select.js');?>" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="<?php $this->asset('assets/js/owl-carousel/owl.carousel.min.js');?>" type="text/javascript"></script>
<!--internal js-->
<script src="<?php $this->asset('assets/js/internal.js');?>" type="text/javascript"></script>
</body>
</html>

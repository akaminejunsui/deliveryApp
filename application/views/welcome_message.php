<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Delivery App</title>
		<?php include('header.php') ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(),'/assets/css/welcome.css'; ?>">
	</head>
	<body>
		<div id="container">
			<div class = 'menubar row align-items-center justify-content-between'>
				<div class = 'col'></div>
				<div class = 'col'>
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto menu_category">
								<li class="nav-item">
									<a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#blog">Blog</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#customer" tabindex="-1">Customer</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#driver" tabindex="-1">Driver</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact" tabindex="-1">Contact us</a>
								</li>
							</ul>					
						</div>
					</nav>
				</div>
			</div>
			<div id="pagetop" class="card text-white FirstHome">
				<div class = 'banner'>
					<img src="<?php echo base_url(),'/assets/images/fullscreen.jpg'; ?>" class="card-img" alt="...">
				</div>
				<div class="card-img-overlay banner_title">
					<div class = 'row justify-content-end align-items-center' style = 'height:100%;'>
						<div class = 'col-6'>
							<h3 class="card-title text-center">Delivery Company</h3>
							<h1 class="card-title text-center">Main Title Here</h1>
							<p class="card-text text-center">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<div class = 'text-center'>
								<button type="button" class="btn btn-outline-secondary btn-lg banner_btn">How to it work</button>
								<button type="button" class="btn btn-outline-secondary btn-lg banner_btn">Book a delivery</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box" id="home">  
				<div class = 'exam row align-items-end'>
					
					<div class="input-group mb-3 col-6 load">
						<input type="text" class="form-control" placeholder="Pick up" aria-label="Recipient's username" aria-describedby="button-addon2">
						<input type="text" class="form-control" placeholder="Destination" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-success" type="button" id="button-addon2">Get a Free Quote</button>
						</div>
					</div>
				</div>
				<div class = 'container row item'>
					<div class = 'col-md-3 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/1.png'; ?>'>
						<h5>On-Demand</h5>
						<span>Hundreds of drivers ready to deliver instantly 24/7.</span>
					</div>
					<div class = 'col-md-3 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/2.png'; ?>'>
						<h5>Transparent</h5>
						<span>Clear and concise pricing with no hidden fees.</span>
					</div>
					<div class = 'col-md-3 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/3.png'; ?>'>
						<h5>Insurance</h5>
						<span>Insurance coverage for all items. T&C applies.</span>
					</div>
					<div class = 'col-md-3 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/4.png'; ?>'>
						<h5>Secure</h5>
						<span>Track your item during delivery.</span>
					</div>
				</div>
			</div>
			<div class = 'section-1'></div>
            <div class="box" id="blog">
				
				<div class = 'container item'>
					<h1>Our Service</h1>
					<div class = 'row'>
						<div class = 'col-8 main_blog row align-items-end'>
							<div class = 'col description_main'>
								<h3>Here your promotion Texts</h3>
								<span>Please insert your Promotion texts in here Please insert your Promotion texts in here Please insert your Promotion texts in here Please insert your Promotion texts in here Please insert your Promotion texts in here</span>
							</div>
							<img src = '<?php echo base_url(),'/assets/images/main_blog.jpg'; ?>'>
						</div>
						<div class = 'col-4'>
							<div class = 'sideimg1 row align-items-end'>
								<div class = 'col description'>
									<h3>Here your promotion</h3>
									<span>Please insert your Promotion texts in here</span>
								</div>
								<img src = '<?php echo base_url(),'/assets/images/sideimg1.jpg'; ?>'>	
							</div>
							<div class = 'sideimg2 row align-items-end'>
								<div class = 'col description'>
									<h3>Here your promotion</h3>
									<span>Please insert your Promotion texts in here</span>
								</div>
								<img src = '<?php echo base_url(),'/assets/images/sideimg2.jpg'; ?>'>
							</div>
						</div>
					</div>
				</div>
				<div class = 'container row item' style = 'height:200px;'></div>
			</div>
			<div class = 'section-2'></div>
			<div class = 'box' id = 'driver'>
				<div class = 'row driverscreen'>
					<div class = 'col-2'></div>
					<div class = 'col-4 align-self-center'>
						<h1 style = 'margin-bottom:50px;'>Our Drivers</h1>
						<span>We ensure your package is in safe hands by only allowing approved and trained drivers to deliver your package. All of our drivers have a valid driving license and their vehicles are up to FastFast's safety standards. All vehicles and drivers are insured and reviewed on half a yearly basis so you can be assured that your package gets to its destination safety.</span>
					</div>
				</div>
				<div class = 'container row item'>
					<div class = 'col-4 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/face1.png'; ?>'>
					</div>
					<div class = 'col-4 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/face2.png'; ?>'>
					</div>
					<div class = 'col-4 text-center'>
						<img src = '<?php echo base_url(),'/assets/images/face3.png'; ?>'>
					</div>
				</div>
			</div>
			<div class = 'box' id = 'contact'></div>
			<div class = 'arrow_up hidden'>
				<a href="#pagetop"><img width = '50' src="<?php echo base_url(),'/assets/images/arrow-up.png'; ?>"></a>
			</div>
		</div>
	</body>
</html>
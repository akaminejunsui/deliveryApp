<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login | Signup</title>
		<?php include('header.php') ?>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(),'/assets/css/welcome.css'; ?>">
	</head>
	<body>
		<div class = 'menubar row align-items-center justify-content-between scrollBar'>
		
		</div>
		<div class="form-wrap">
			<div class="col-lg-4">
				<form class="form-signin">
					<h1 class="text-center">Sign up</h1>
					<h4 class="text-center">as a fastfast driver</h4>
					<p>
						<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
						<input type="text" id="inputPassword" class="form-control w-50 fa-pull-left" placeholder="Password" required="">
						<input type="text" id="inputPassword" class="form-control w-50" placeholder="Password" required="">
					</p>
					<div class="pl-md-3 pr-md-3">
						Upload a photo of your NRIC
						<div class="img-wrap fa-pull-right">
						<span class="btn-file">
							<img class='img-upload image_preview'/>
							<input type="file" name="files" class="imgInp">
						</span>
						</div>
						<div class="img-wrap fa-pull-right">
						<span class="btn-file">
							<img class='img-upload image_preview'/>
							<input type="file" name="files" class="imgInp">
						</span>
						</div>
					</div>
					<hr>
					<p>
						<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
						<input type="text" id="inputPassword" class="form-control" placeholder="Password" required="">
					</p>
					<hr>
					<p>
						<select class="form-control w-50 fa-pull-left">
							<option value="1">Car</option>
							<option value="2">Van</option>
							<option value="3">Bicycle</option>
							<option value="4">Motorcycle</option>
						</select>
						<input type="text" id="inputPassword" class="form-control w-50" placeholder="Password" required="">
					</p>
					<div class="pl-md-3 pr-md-3">
					Upload a photo of driver's/rider's license
						<div class="img-wrap fa-pull-right">
						<span class="btn-file">
							<img class='img-upload image_preview'/>
							<input type="file" name="files" class="imgInp">
						</span>
						</div>
						<div class="img-wrap fa-pull-right">
						<span class="btn-file">
							<img class='img-upload image_preview'/>
							<input type="file" name="files" class="imgInp">
						</span>
						</div>
					</div>
					<hr class="border-white">
					<div class="pl-md-3 pr-md-3 mb-5">
						Upload a photo of your vehicle and the car plate together
						<div class="img-wrap fa-pull-right">
						<span class="btn-file">
							<img class='img-upload image_preview'/>
							<input type="file" name="files" class="imgInp">
						</span>
						</div>
						<div class="img-wrap fa-pull-right">
						<span class="btn-file">
							<img class='img-upload image_preview'/>
							<input type="file" name="files" class="imgInp">
						</span>
						</div>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					<p class="mt-5 mb-2 text-muted">© 2018-2020</p>
				</form>
			</div>
		</div>
	</body>
</html>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/brand-info.php"); ?>
	<title>Industries Healthcare | <?php echo "$brandName";?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/style.php"); ?></head>

<body>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/header.php"); ?>
	<div class="banner inner bgc-white">
		<div class="shape pos-bg-inner">
			<img src="/pixelappy/assets/img/bg/contact-ng.png" alt="">
		</div>
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="banner-content">
					<h1 class="cl-black">Connect With Us!</h1>
					<p class="cl-black">Get in touch with us to explore endless possibilities and discuss how we can turn your ideas into exceptional digital solutions. Reach out today for a collaborative journey toward success.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="stripe-3">
		<div class="container">
		<ul class="contact-list">
			<li>
				<div class="contact-img img-100" data-aos="fade-up">
					<img src="/pixelappy/assets/img/mix/contact-img.png" alt="">
				</div>
			</li>
				<li>
					<form action="#" class="form lets-form" data-aos="zoom-out">
						<h3 class="cl-white text-center">Lets Talk!</h3>
						<div class="form-group">
							<label class="label" for="firstname">First Name</label>
							<input type="text" class="form-control js-valGet" name="firstname" id="firstname" required>
						</div>
						<div class="form-group">
							<label class="label" for="cemail">Email</label>
							<input type="email" class="form-control js-valGet js-emailvalid" name="cemail" id="cemail" required>
						</div>
						<div class="form-group">
							<label class="label" for="phonenumber">Phone Number</label>
							<input type="tel" class="form-control js-valGet js-numbervalid" name="phonenumber" id="phonenumber" required>
						</div>
						<div class="form-checks">
							<label class="containers">I want to sign NDA first checkbox
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							  </label>
						</div>
						<div class="action-row">
							<button type="button" class="btn btn-white" onclick="getFormValues(this)">Get a quote</button>
						</div>
					</form>
				</li>
				<li>
					<div class="contact-content" data-aos="fade-left">
						<h6>Contact<br> Information</h6>
						<ul class="brand-list">
							<li>
								<div class="contact-ic">
									<i class="ic-23"></i> 
								</div>
								<div class="contact-detail">
									<h5>Email:</h5>
									<a href="javascript:;">Info.support@gmail.com</a>
								</div>
							</li>
							<li>
								<div class="contact-ic">
									<i class="ic-24"></i> 
								</div>
								<div class="contact-detail">
									<h5>Phone:</h5>
									<a href="javascript:;">(123)-456-7890</a>
								</div>
							</li>
							<li>
								<div class="contact-ic">
									<i class="ic-25"></i> 
								</div>
								<div class="contact-detail">
									<h5>Address:</h5>
									<a href="javascript:;">Lorem Ipsum is simply dummy text of the printing</a>
								</div>
							</li>
						</ul>
						<ul class="social-list">
							<li><a href="javascript:;"><i class="ic-26"></i></a></li>
							<li><a href="javascript:;"><i class="ic-27"></i></a></li>
							<li><a href="javascript:;"><i class="ic-28"></i></a></li>
							<li><a href="javascript:;"><i class="ic-29"></i></a></li>
						</ul>
					</div>
				</li>
		</ul>
		</div>
	</section>
	
	

	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/footer.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/scripts.php"); ?>
</body>
</html>
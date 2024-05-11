<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/brand-info.php"); ?>
	<title>Porfolio | <?php echo "$brandName";?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/style.php"); ?></head>

<body>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/header.php"); ?>
	<div class="banner inner">
		<div class="shape pos-bg">
			<img src="/pixelappy/assets/img/bg/inner-bg.png" alt="">
		</div>
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="col-lg-10">
					<div class="banner-content">
					<h1>Pixel Appy Portfolio: Where vision Meets Innovation</h1>
					<a href="javascript:;" class="btn btn-white">Discuss Project</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="stripe">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="heading" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<h3>Pioneering Digital Transformation in<br> Mobile App Development</h3>
						<p>Welcome to the Pixel Appy Portfolio - a showcase of our transformative journey in the realm of mobile app development. At Pixel Appy, we take pride in crafting digital experiences that transcend expectations, and our portfolio is a testament to our commitment to innovation, quality, and client satisfaction.</p>
						<a href="/portfolio.php" class="btn btn-primary">Read more</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="digital-mob" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
						<img src="/pixelappy/assets/img/mix/digital-mob.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="stripe brand-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
					<div class="web-heading">
						<h3>Awards &
							Recognitions</h3>
					</div>
				</div>
				<div class="col-lg-10">
					<ul class="brand-logos" data-aos="zoom-out" data-aos-duration="1000">
						<li><img src="/pixelappy/assets/img/mix/brand-1.png" alt=""></li>
						<li><img src="/pixelappy/assets/img/mix/brand-2.png" alt=""></li>
						<li><img src="/pixelappy/assets/img/mix/brand-3.png" alt=""></li>
						<li><img src="/pixelappy/assets/img/mix/brand-4.png" alt=""></li>
						<li><img src="/pixelappy/assets/img/mix/brand-5.png" alt=""></li>
						<li><img src="/pixelappy/assets/img/mix/brand-6.png" alt=""></li>
						<li><img src="/pixelappy/assets/img/mix/brand-7.png" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="stripe mob-sec">
	<div class="container-fluid">
		<div class="heading text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
			<h3>Our Portfolio</h3>
			<p>Using latest technologies and 100% satisfaction guarantees, we ensure<br> that we always bring out the best of your brand.</p>
		</div>
		<div class="mob-wraps carousel-sec" data-aos="fade-up">
		<ul class="mob-list js-mob" data-item-desktop="5" data-item-desktopmini="3" data-item-ipad-pro="3" data-item-tablet="1" data-item-mobile="1">
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/tandum-slide.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-8.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-9.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-10.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-11.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-12.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-13.jpg" alt=""></div></li>
			<li class="swiper-slide"><div class="mob-slide"><img src="/pixelappy/assets/img/mix/mob-14.jpg" alt=""></div></li>
		</ul>
		<div class="js-sliderArrows sliderArrows sty3" data-arrow-left="ic-1" data-arrow-right="ic-1"></div>
		<div class="js-sliderDots"></div>
		</div>
	</div>
</section>

	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/tabs-sec-2.php"); ?>

	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/project-sec.php"); ?>
	
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/footer.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT']."/pixelappy/includes/scripts.php"); ?>
</body>
</html>
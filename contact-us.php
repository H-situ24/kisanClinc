<?php include "includes/header.php"; ?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"> Contact Kisan Clinic</h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<span>
							<a title="" href="#" class="home"><span>Ready to Empower Your Farm? Let’s Connect</span></a>
						</span>
						<span class="sep">
							<i class="pbmit-base-icon-angle-right"></i>
						</span>
						<span><span class="post-root post post-post current-item"> Contact Us</span></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<!-- Contact Us Content -->
<div class="page-content">

	<!-- Ihbox -->
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xl-4">
					<div class="pbmit-ihbox-style-7">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-email"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title text-center">Mail us 24/7</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper d-flex justify-content-center">
								<div class="pbmit-heading-desc"><a href="mailto:info@kisanclinic.org" class="__cf_email__" data-cfemail="146476797d7a727b547570797d7a3a777b79">info@kisanclinic.org</a></div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="#">
								<span class="pbmit-button-text">Read More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="pbmit-ihbox-style-7 pt-md-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-call"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title text-center">Call us 24/7</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper d-flex justify-content-center">
								<div class="pbmit-heading-desc"><a href="telto:+91-8409921315">+91-8409921315</a>

								</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="#">
								<span class="pbmit-button-text">Read More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xl-4">
					<div class="pbmit-ihbox-style-7 pt-xl-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-pin"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title text-center">Our Locations</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper d-flex justify-content-center">
								<div class="pbmit-heading-desc">At+Po Barah, Patna, Bihar, India</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="#">
								<span class="pbmit-button-text">Read More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<p class="m-3">
					Whether you’re looking for advice, partnership opportunities, or specific services, our team is here to assist you. Fill out the form below, and we’ll get back to you within 24 hours.
				</p>
			</div>
		</div>
	</section>
	<!-- Ihbox End -->

	<!-- Contact Form -->
	<section>
		<div class="container">
			<div class="row g-0">
				<div class="col-md-12 col-xl-5">
					<div class="contact-img-box"></div>
				</div>
				<div class="col-md-12 col-xl-7">
					<div class="contact-form-area pbmit-bg-color-white">
						<div class="pbmit-heading-subheading animation-style4">
							<h4 class="pbmit-subtitle">Get to Contact us</h4>
							<h2 class="pbmit-title">Connect With Us Today</h2>
						</div>
						<form method="POST" action="submitform.php">
							<div class="row">

								<div class="col-md-6">
									<input id="name" type="text" placeholder="Your Name *" class="form-control" name="name" required>
								</div>
								<div class="col-md-6">
									<input id="email" class="form-control" placeholder="Your Email *" name="email" type="email" value="" required>
								</div>
								<div class="col-md-6">
									<input id="url" class="form-control"
										placeholder="Phone"
										oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
										name="phone" type="text" value="" required>
								</div>
								<div class="col-md-6">
									<input class="form-control" placeholder="Subject" name="subject" type="text" value="" required>
								</div>

								<div class="col-md-12">
									<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" name="message" required></textarea>
								</div>
								<div class="col-md-12">
									<button type="submit" class="pbmit-btn pbmit-btn-hover-global" name="submit">
										<span class="pbmit-button-text">Submit Now</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Form -->

	<!-- Client Start -->
	<section class="section-md">
		<div class="container">
			<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
				<div class="swiper-wrapper">
					<!-- Slide1 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
								<h4 class="pbmit-hide">Client 01</h4>
								<div class="pbmit-client-hover-img">
									<img src="images/client/client-logo-green-01.png" alt="">
								</div>
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/client/client-logo-01.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide2 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
								<h4 class="pbmit-hide">Client 01</h4>
								<div class="pbmit-client-hover-img">
									<img src="images/client/client-logo-green-02.png" alt="">
								</div>
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/client/client-logo-02.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide3 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
								<h4 class="pbmit-hide">Client 01</h4>
								<div class="pbmit-client-hover-img">
									<img src="images/client/client-logo-green-03.png" alt="">
								</div>
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/client/client-logo-03.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide4 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
								<h4 class="pbmit-hide">Client 01</h4>
								<div class="pbmit-client-hover-img">
									<img src="images/client/client-logo-green-04.png" alt="">
								</div>
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/client/client-logo-04.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide5 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
								<h4 class="pbmit-hide">Client 01</h4>
								<div class="pbmit-client-hover-img">
									<img src="images/client/client-logo-green-05.png" alt="">
								</div>
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/client/client-logo-05.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
					<!-- Slide6 -->
					<article class="pbmit-client-style-1 swiper-slide">
						<div class="pbmit-border-wrapper">
							<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
								<h4 class="pbmit-hide">Client 01</h4>
								<div class="pbmit-client-hover-img">
									<img src="images/client/client-logo-green-06.png" alt="">
								</div>
								<div class="pbmit-featured-img-wrapper">
									<div class="pbmit-featured-wrapper">
										<img src="images/client/client-logo-06.png" class="img-fluid" alt="">
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- Client End -->

	<!-- Iframe -->
	<section class="iframe-section section-lgb">
		<div class="container-fluid p-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28939.10711469595!2d83.98835863727162!3d24.9528971936406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398db0cc8035805f%3A0x186db1ffca1ea333!2sSasaram%2C%20Bihar%20821115!5e0!3m2!1sen!2sin!4v1734071864162!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<!-- Iframe End-->

</div>
<!-- Contact Us Content End -->
<?php include 'includes/sticky.php'; ?>
<?php include "includes/footer.php"; ?>
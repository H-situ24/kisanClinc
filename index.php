<?php include "includes/header.php"; ?>

<!-- page content -->
<div class="page-content pbmit-bg-color-light">



	<section class="banner-section style-v3 overflow-hidden position-relative">
		<div class="container">
			<div class="banner-wrapperv3 position-relative">
				<div class="row">
					<div class="col-xl-6 order-2 order-xl-1">
						<div class="hero-contentv03">
							<div class="sun-star wow fadeInDown" data-wow-delay=".3s">
								<img src="assets/img/icon/icon-sunstar.svg" alt="img" />Best
								farming
							</div>
							<h1 class="wow fadeInUp" data-wow-delay="0.4s">
								Empowering India’s
								<span> <br />
									Hilly <span style="color: #DCD671;">of Farmers with Agri-Tech Solutions</span>
								</span>
							</h1>
							<p class="wow fadeInUp" data-wow-delay="0.6s">
								Pioneering farming innovation for sustainable growth in India’s unique terrains.
							</p>
							<p class="wow fadeInUp" data-wow-delay="0.6s">
								From soil to market—We deliver tailored solutions for every step of your agricultural journey.

							</p>

							<div class="d-flex justify-content-start gap-3">
								<div>
									<a class="pbmit-btn pbmit-btn-secondary" href="our-profile.php">
										<span class="pbmit-button-text">Start Your Journey Today
										</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</a>
								</div>
								<div>
									<a class="pbmit-btn pbmit-btn-secondary" href="our-profile.php">
										<span class="pbmit-button-text">Discover Our Process
										</span>
										<span class="pbmit-button-icon-wrapper">
											<span class="pbmit-button-icon">
												<i class="pbmit-base-icon-black-arrow-1"></i>
											</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6  p-0 m-0 order-1 order-xl-2 ghoppa" style="position: relative; left:20px;height:100%;">
						<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">

								<?php
								include "admin/db-connect.php"; // Include database connection

								// Fetch slider data
								$query = "SELECT * FROM slider";
								$result = mysqli_query($myconn, $query);
								$row = mysqli_num_rows($result);

								if ($row > 0) {
									$isFirst = true; // Flag to track the first slide
									while ($data = mysqli_fetch_assoc($result)) {
								?>
										<div class="carousel-item <?php echo $isFirst ? 'active' : ''; ?>">
											<img src="admin/uploads/<?php echo $data['image']; ?>" class="d-block w-100 slideimage" alt="...">
										</div>
								<?php
										$isFirst = false; // Set the flag to false after the first iteration
									}
								}
								?>

							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>



					<!-- <div class="col-xl-6  p-0 m-0 order-1 order-xl-2 ghoppa" style="position: relative; left:20px;height:100%;">
						<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="assets/img/banner/hero-2.jpg" class="d-block w-100 slideimage" alt="...">
								</div>
								<div class="carousel-item">
									<img src="assets/img/banner/hero-3.jpg" class="d-block w-100 slideimage" alt="...">
								</div>
								<div class="carousel-item">
									<img src="assets/img/banner/hero-1.jpg" class="d-block w-100 slideimage" alt="...">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</section>
	<section class="ihbox-section-one">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-xl-3">
					<div class="pbmit-ihbox-style-7">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-tractor"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Introduction to Mustard Plant</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">The mustard plant is a fast-growing, versatile crop grown for its seeds, leaves, and oil.</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="our-profile.php">
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
				<div class="col-md-6 col-xl-3">
					<div class="pbmit-ihbox-style-7 pt-md-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-plant"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Germination and Growth Process</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">Mustard seeds germinate within 3-10 days in moist, fertile soil under ample sunlight. </div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="our-profile.php">
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
				<div class="col-md-6 col-xl-3">
					<div class="pbmit-ihbox-style-7 pt-xl-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-plant-5"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Leafy Growth Stage</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">Mustard greens (leaves) are rich in vitamins A, C, and K and are consumed in salads and cooked dishes.</div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="our-profile.php">
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
				<div class="col-md-6 col-xl-3">
					<div class="pbmit-ihbox-style-7 pt-xl-0 pt-4">
						<div class="pbmit-ihbox-box">
							<div class="pbmit-icon-wrapper d-flex align-items-center">
								<div class="pbmit-ihbox-icon">
									<div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
										<i class="pbmit-agrimo-icon pbmit-agrimo-icon-plant-6"></i>
									</div>
								</div>
								<div class="pbmit-title-wrap">
									<h2 class="pbmit-element-title">Conclusion</h2>
								</div>
							</div>
							<div class="pbmit-content-wrapper">
								<div class="pbmit-heading-desc">Mustard plants are multi-purpose crops vital for food, oil, and agricultural sustainability. </div>
							</div>
						</div>
						<div class="pbmit-ihbox-btn">
							<a href="our-profile.php">
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
			</div>
		</div>
	</section>
	<!-- Ihbox End -->


	<!-- About Us Start -->
	<section class="">
		<div class="container">
			<div class="row g-0">
				<div class="col-md-12 col-xl-6">
					<div class="about-us-three-content">
						<div class="pbmit-heading-subheading animation-style4">
							<h4 class="pbmit-subtitle">About Us </h4>
							<h3 class="">Welcome to Kisan Clinic
								For Best Agriculture and Organic farms </h3>
							<div class="pbmit-heading-desc">
								<p> Kisan Clinic is transforming agriculture in India’s hilly areas by empowering farmers with cutting-edge technology, expert guidance, and access to profitable markets. Designed specifically for the challenges of steep terrains, we provide end-to-end farming solutions—from soil testing and seed sowing to crop care and market-ready distribution.
								</p>
								<p>Join a community of progressive farmers who are cultivating success and reaping sustainable harvests with Kisan Clinic.
								</p>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
										</span>
										<span class="pbmit-icon-list-text">Garlic Farming</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
										</span>
										<span class="pbmit-icon-list-text">Lavender Farming</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
										</span>
										<span class="pbmit-icon-list-text">Gourmet Mushrooms</span>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
										</span>
										<span class="pbmit-icon-list-text">Fertilizer Distribution</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
										</span>
										<span class="pbmit-icon-list-text">Poultry Farming</span>
									</li>
									<li class="list-group-item">
										<span class="pbmit-icon-list-icon">
											<i aria-hidden="true" class="pbmit-agrimo-icon pbmit-agrimo-icon-checked"></i>
										</span>
										<span class="pbmit-icon-list-text">Organic Fertilizer</span>
									</li>
								</ul>
							</div>
						</div>
						<a class="pbmit-btn pbmit-btn-secondary" href="our-profile.php">
							<span class="pbmit-button-text">Explore Our Services</span>
							<span class="pbmit-button-icon-wrapper">
								<span class="pbmit-button-icon">
									<i class="pbmit-base-icon-black-arrow-1"></i>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<div class="who-we-are-one-leftbox">
						<div class="fid-style-area">
							<div class="pbminfotech-ele-fid-style-2">
								<div class="pbmit-fld-contents">
									<div class="pbmit-fld-wrap">
										<h4 class="pbmit-fid-inner">
											<span class="pbmit-fid-before"></span>
											<span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="435" data-interval="5" data-before="" data-before-style="" data-after="" data-after-style="">435</span>
											<span class="pbmit-fid"><sup>+</sup></span>
										</h4>
										<div class="pbmit-fid-sub">
											<div class="pbmit-heading-desc">Registered Farmers </div>
										</div>
									</div>
								</div>
								<div class="pbmit-sticky-corner  pbmit-bottom-left-corner">
									<svg width="30" height="30" viewbox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
									</svg>
								</div>
								<div class="pbmit-sticky-corner pbmit-top-right-corner">
									<svg width="30" height="30" viewbox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
										<path d="M30 30V0C30 16 16 30 0 30H30Z"></path>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- About Us End -->


	<!-- why chhose us start -->
	<section class="about-section style-v01 white-bg">
		<div class="container">
			<div class="about-wrapperv3">
				<div class="row g-4 align-items-center justify-content-center">
					<div class="col-lg-6 col-12 col-sm-8 order-md-0 order-1">
						<div
							class="about-thumv03 position-relative pe-xl-4 wow fadeInDown"
							data-wow-delay=".3s">
							<img
								src="assets/img/about/aboutv3.png"
								alt="img"
								class="mimg" />
							<div class="avarage-counting">
								<div class="avarag">
									<img src="assets/img/icon/agriculture.svg" alt="img" />
								</div>
								<div class="cont">
									<h5>Crop Growing</h5>
									<span>Plant, nurture, thrive</span>
								</div>

							</div>

						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="about-contentv1">
							<div class="section-title mb-40">
								<h5
									class="p1-clr text-uppercase wow fadeInLeft"
									data-wow-delay="0.4s">
									How We Help Farmers
								</h5>
								<h2 class="wow fadeInDown" data-wow-delay=".3s">
									Advantage of The Kisan Clinic
								</h2>


								<ul style="list-style: disc;" class="mb-4">
									<li><strong>Local Expertise:-</strong> Deep understanding of hilly terrains and their unique challenges.</li>
									<li><strong>Tailored Solutions:-</strong> Services designed to maximize output and reduce costs.
									</li>
									<li><strong>Innovative Technology:-</strong> Advanced tools and techniques to optimize farming.
									</li>
									<li><strong>Market Integration:-</strong> Connecting farmers directly to premium buyers for better profits.
									</li>
								</ul>
								<h2 class="wow fadeInDown" data-wow-delay=".3s">
									Stories of Transformation

								</h2>
								<p>Discover how Kisan Clinic has empowered farmers across India’s hilly regions:</p>
								<ul style="list-style: disc;" class="mb-4">
									<li>With Kisan Clinic’s guidance, I increased my yield by 60% in one season.” – Suresh, Manali
									</li>
									<li>Their market access program gave me better rates than ever before.” – Poonam, Darjeeling
									</li>
								</ul>
								<p class="wow fadeInUp" data-wow-delay=".4s">
									Farming with passion reflects a commitment to cultivating the land, nurturing crops, and raising livestock with dedication and care. It’s about embracing sustainable practices, innovation, and resilience to create a thriving agricultural ecosystem.
								</p>
								<a class="pbmit-btn pbmit-btn-secondary my-5" href="mission-and-vision.php">
									<span class="pbmit-button-text">Learn More</span>
									<span class="pbmit-button-icon-wrapper">
										<span class="pbmit-button-icon">
											<i class="pbmit-base-icon-black-arrow-1"></i>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>
	<!-- why choose end -->

	<!-- Marquee Start -->
	<section class="">
		<div class="container-fluid p-0">
			<div class="swiper-slider marquee">
				<div class="swiper-wrapper">
					<article class="pbmit-marquee-effect-style-1 swiper-slide">
						<div class="pbmit-tag-wrapper">
							<h2 class="pbmit-element-title" data-text="Agriculture">
								Agriculture
							</h2>
						</div>
					</article>
					<article class="pbmit-marquee-effect-style-1 swiper-slide">
						<div class="pbmit-tag-wrapper">
							<h2 class="pbmit-element-title" data-text="Farming">
								Farming
							</h2>
						</div>
					</article>
					<article class="pbmit-marquee-effect-style-1 swiper-slide">
						<div class="pbmit-tag-wrapper">
							<h2 class="pbmit-element-title" data-text="Organic">
								Organic
							</h2>
						</div>
					</article>
					<article class="pbmit-marquee-effect-style-1 swiper-slide">
						<div class="pbmit-tag-wrapper">
							<h2 class="pbmit-element-title" data-text="Vegetables">
								Vegetables
							</h2>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<!-- Marquee End -->

	<!-- why choose us strat  -->
	<section class="feature-sectionv02 p900-bg space-top pb-4">
		<div class="container">
			<div
				class="row g-4 align-items-lg-start align-items-center justify-content-center">
				<div class="col-xxl-5 col-xl-5 col-lg-5  pt-137 ">
					<div class="about-contentv1">
						<div class="section-title mb-40">
							<h5
								class="p1-clr text-uppercase wow fadeInLeft"
								data-wow-delay="0.4s">
								OUR FEATURES
							</h5>
							<h2
								class="text-white mb-24 wow fadeInDown"
								data-wow-delay=".3s">
								Growing strong,farm feeding futures
							</h2>
							<p
								class="text-white wow fadeInUp mb-lg-4 mb-3"
								data-wow-delay=".4s">
								Agriculture is the backbone of our world, supporting life by providing sustenance and stability. "Growing Strong" emphasizes the resilience and innovation of farmers who overcome challenges to cultivate the land with sustainable methods. Their dedication ensures thriving farms and flourishing ecosystems.
							</p>
							<p
								class="text-white wow fadeInUp mb-lg-4 mb-3"
								data-wow-delay=".4s">
								"Farm Feeding Futures" reflects a mission to nourish communities, inspire progress, and ensure food security for generations. Through advanced techniques and mindful practices, farmers contribute not just to today’s meals but to the foundation of a brighter, sustainable tomorrow.
							</p>
							<ul class="about-list2 mb-40 gap-2 pb-3">
								<li class="text-white">
									<img src="images/icons/checkmark.png" alt=""> Grow with Agriculture
								</li>
								<li class="text-white">
									<img src="images/icons/checkmark.png" alt=""> Farming for a Better
									Future
								</li>
								<li class="text-white">
									<img src="images/icons/checkmark.png" alt=""> From Farm to Table,
									Agriculture Matters
								</li>
							</ul>
							<a class="pbmit-btn pbmit-btn-secondary" href="services.php">
								<span class="pbmit-button-text">View More</span>
								<span class="pbmit-button-icon-wrapper">
									<span class="pbmit-button-icon">
										<i class="pbmit-base-icon-black-arrow-1"></i>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xxl-7 col-xl-7 col-lg-7  ps-lg-5">
					<div
						class="feature-thumv02 position-relative wow fadeInDown"
						data-wow-delay=".3s">
						<img
							src="assets/img/about/feature-thumb2.png"
							alt="img"
							class="w-100" />
					</div>
				</div>
			</div>
		</div>
		<img
			src="assets/img/element/feature-green2.png"
			alt="img"
			class="feature-element2" />
	</section>
	<!-- why chhose us end  -->

	<section class="rv-9-guides pt-60 pb-120">
		<div class="container">
			<div class="row gy-5 align-items-center justify-content-center rv-9-guides__row" style="opacity: 1; transform: none;">
				<div class="col-lg-4 col-md-6">
					<div class="sun-star wow fadeInDown pb-4" data-wow-delay=".3s">
						<img src="assets/img/icon/icon-sunstar.svg" alt="img" />From Scratch to Market—Step-by-Step Support
					</div>
					<div class="rv-8-service rv-9-guide">
						<div class="rv-9-service__icon"><img src="images/services/rv-9-guide-icon-2.png" alt="Icon"></div>
						<div class="rv-9-guide__txt">
							<h4 class="rv-3-service__title"><a href="#">Land Preparation:
								</a></h4>
							<p class="rv-3-service__descr m-1 p-0">Soil testing to determine fertility and nutrient levels.
							</p>
							<p class="rv-3-service__descr m-1 p-0">Advanced plowing techniques suited for steep terrains.
							</p>
						</div>
					</div>
					<div class="rv-8-service rv-9-guide">
						<div class="rv-9-service__icon"><img src="images/services/icon-3.png" alt="Icon"></div>
						<div class="rv-9-guide__txt">
							<h4 class="rv-3-service__title"><a href="#">Seed Sowing:
								</a></h4>
							<p class="rv-3-service__descr m-1 p-0">Expert advice on selecting high-yield seeds.
							</p>
							<p class="m-1 p-0">Precision planting for efficient resource use.
							</p>
						</div>
					</div>
					<div class="rv-8-service rv-9-guide">
						<div class="rv-9-service__icon"><img src="images/services/icon-4.png" alt="Icon"></div>
						<div class="rv-9-guide__txt">
							<h4 class="rv-3-service__title"><a href="#">Crop Care</a></h4>
							<p class="rv-3-service__descr m-1 p-0">Scheduled check-ins with farming experts
							</p>
							<p class="m-1 p-0">Access to eco-friendly pest control and irrigation systems.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-8 order-lg-1 order-md-2 order-1">
					<div class="rv-9-guides__img text-center"><img src="images/services/tree.png" alt=""></div>
				</div>
				<div class="col-lg-4 col-md-6 order-lg-2 order-md-1 order-2">
					<div class="rv-8-service rv-9-guide">
						<div class="rv-9-service__icon"><img src="images/services/icon-5.png" alt="Icon"></div>
						<div class="rv-9-guide__txt">
							<h4 class="rv-3-service__title"><a href="#">Market Integration</a></h4>
							<p class="rv-3-service__descr m-1 p-0">Connecting farmers directly with retailers and distributors.

							</p>
							<p class="m-1 p-0">Transparent pricing and no middlemen for maximum profits.

							</p>
						</div>
					</div>
					<div class="rv-8-service rv-9-guide">
						<div class="rv-9-service__icon"><img src="images/services/icon-6.png" alt="Icon"></div>
						<div class="rv-9-guide__txt">
							<h4 class="rv-3-service__title"><a href="#">Use Wind Turbines</a></h4>
							<p class="rv-3-service__descr">Fusce egestas viverra libero elementum maecenas sit lorem nec eros.</p>
						</div>
					</div>
					<div class="rv-8-service rv-9-guide">
						<div class="rv-9-service__icon"><img src="images/services/icon-7.png" alt="Icon"></div>
						<div class="rv-9-guide__txt">
							<h4 class="rv-3-service__title"><a href="#">Save Rain Water</a></h4>
							<p class="rv-3-service__descr">Fusce egestas viverra libero elementum maecenas sit lorem nec eros.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- gallery start -->
	<section>
		<div class="container">
			<div class="row pbmit-element-posts-wrapper">

				<div class="pbmit-heading-subheading animation-style4">
					<h4 class="pbmit-subtitle">Gallery</h4>
				</div>

				<article class="pbmit-portfolio-style-1 col-md-3">
					<div class="pbminfotech-post-content">
						<div class="pbmit-featured-img-wrapper">
							<a href="images/portfolio/portfolio-04b.jpg" data-lightbox="gallery" data-title="Fresh and Natural">
								<img src="images/portfolio/portfolio-04b.jpg" class="img-fluid" alt="Fresh and Natural">
							</a>
						</div>

					</div>
				</article>
				<article class="pbmit-portfolio-style-1 col-md-3">
					<div class="pbminfotech-post-content">
						<div class="pbmit-featured-img-wrapper">
							<a href="images/portfolio/portfolio-03b.jpg" data-lightbox="gallery" data-title="Agriculture Farming">
								<img src="images/portfolio/portfolio-03b.jpg" class="img-fluid" alt="Agriculture Farming">
							</a>
						</div>
					</div>
				</article>
				<article class="pbmit-portfolio-style-1 col-md-3">
					<div class="pbminfotech-post-content">
						<div class="pbmit-featured-img-wrapper">
							<a href="images/portfolio/portfolio-05b.jpg" data-lightbox="gallery" data-title="Fresh and Natural">
								<img src="images/portfolio/portfolio-05b.jpg" class="img-fluid" alt="Fresh and Natural">
							</a>
						</div>

					</div>
				</article>
				<article class="pbmit-portfolio-style-1 col-md-3">
					<div class="pbminfotech-post-content">
						<div class="pbmit-featured-img-wrapper">
							<a href="images/portfolio/portfolio-09b.jpg" data-lightbox="gallery" data-title="Fresh and Natural">
								<img src="images/portfolio/portfolio-09b.jpg" class="img-fluid" alt="Fresh and Natural">
							</a>
						</div>

					</div>
				</article>


			</div>
			<div class="d-flex justify-content-center">
				<a class="pbmit-btn pbmit-btn-secondary" href="gallery.php">
					<span class="pbmit-button-text">View More</span>
					<span class="pbmit-button-icon-wrapper">
						<span class="pbmit-button-icon">
							<i class="pbmit-base-icon-black-arrow-1"></i>
						</span>
					</span>
				</a>
			</div>
		</div>
	</section>
	<!-- gallery end  -->
	<!-- Testimonial Start -->
	<?php include "includes/testimonial.php"; ?>
	<section>
		<div class="container">
			<div class="client-area">
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
		</div>
	</section>
	<!-- Client End -->



	<!-- FAQ start  -->
	<section class="">
		<div class="container">
			<div class="row g-0">
				<div class="col-md-12 col-xl-5">
					<div class="pe-xl-3">
						<div class="pbmit-heading-subheading">
							<h4 class="pbmit-subtitle">Most Ask</h4>
							<h2 class="pbmit-title">General Questions</h2>
						</div>
						<div class="accordion" id="accordionExample">
							<div class="accordion-item active">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg class="e-font-icon-svg e-fas-chevron-down" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg class="e-font-icon-svg e-fas-chevron-up" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
												</svg>
											</span>
										</span>
										<span class="pbmit-accordion-title">
											01. What is Agricultural Biotechnology?
										</span>
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Agricultural Biotechnology is the application of scientific techniques, including genetic engineering, molecular biology, and plant and animal tissue culture, to enhance agricultural practices and products. It involves modifying the genetic makeup of crops, animals, and microorganisms to improve their quality, productivity, resistance to pests and diseases, and adaptability to environmental conditions.
									</div>
								</div>
							</div>
							<!-- ths is 2 faq  -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg class="e-font-icon-svg e-fas-chevron-down" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg class="e-font-icon-svg e-fas-chevron-up" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
												</svg>
											</span>
										</span>
										<span class="pbmit-accordion-title">
											02. Can the products be applied during rainy season?
										</span>
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										Yes, many agricultural biotechnology products, such as genetically modified (GM) crops and biofertilizers, can be applied during the rainy season. GM crops with built-in resistance to pests and diseases remain effective regardless of weather conditions. However, the application of biopesticides or fertilizers may need adjustments to avoid runoff and ensure effectiveness.
									</div>
								</div>
							</div>
							<!-- this is 3 faq  -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingThree">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg class="e-font-icon-svg e-fas-chevron-down" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg class="e-font-icon-svg e-fas-chevron-up" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
												</svg>
											</span>
										</span>
										<span class="pbmit-accordion-title">
											03. What vegetables can I grow in my hothouse?
										</span>
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
									<div class="accordion-body">

										A hothouse (or greenhouse) provides a controlled environment ideal for growing a variety of vegetables year-round, regardless of external weather conditions. Here are some vegetables you can grow in a hothouse:
									</div>
								</div>
							</div>

							<!-- this is 4 faq -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading4">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg class="e-font-icon-svg e-fas-chevron-down" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg class="e-font-icon-svg e-fas-chevron-up" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
												</svg>
											</span>
										</span>
										<span class="pbmit-accordion-title">
											04. What is modern agriculture?
										</span>
									</button>
								</h2>
								<div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample1">
									<div class="accordion-body">

										Modern agriculture refers to the advanced farming practices and technologies used to enhance the efficiency, productivity, and sustainability of agricultural activities. It integrates science, technology, and innovation to meet the growing global demand for food, fiber, and fuel while minimizing environmental impact.
									</div>

								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg class="e-font-icon-svg e-fas-chevron-down" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg class="e-font-icon-svg e-fas-chevron-up" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
												</svg>
											</span>
										</span>
										<span class="pbmit-accordion-title">
											05. What are the 2 main types of farming?
										</span>
									</button>
								</h2>
								<div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample1">
									<div class="accordion-body">
										<h3> Subsistence Farming</h3>
										<p>A type of farming where the primary goal is to produce enough food to meet the needs of the farmer's family, with little or no surplus for sale.</p>
										<ul style="list-style:disc;">
											<li>Small-scale operations.</li>
											<li>Traditional methods and minimal use of technology.</li>
											<li>Crops grown often include staple foods like rice, wheat, and maize.</li>
											<li>May involve mixed farming (crops and livestock).</li>
										</ul>
									</div>
									<div class="accordion-body">
										<h3>Commercial Farming</h3>
										<p> A type of farming focused on producing crops and livestock for sale in local, national, or international markets to earn profits.</p>
										<ul style="list-style:disc;">
											<li>Large-scale operations.</li>
											<li>Use of advanced technology, machinery, and modern techniques.</li>
											<li>Monocropping or specialized farming is common (e.g., growing a single crop like cotton or wheat)..</li>
											<li>High investment in seeds, fertilizers, and irrigation systems.
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- this is 6 faq -->
							<div class="accordion-item">
								<h2 class="accordion-header" id="heading3">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
										<span class="pbmit-accordion-icon pbmit-accordion-icon-right">
											<span class="pbmit-accordion-icon-closed">
												<svg class="e-font-icon-svg e-fas-chevron-down" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path>
												</svg>
											</span>
											<span class="pbmit-accordion-icon-opened">
												<svg class="e-font-icon-svg e-fas-chevron-up" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
													<path d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"></path>
												</svg>
											</span>
										</span>
										<span class="pbmit-accordion-title">
											06. What are the different types of greenhouse?
										</span>
									</button>
								</h2>
								<div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample1">
									<div class="accordion-body">
										<h3>Based on Functionality:</h3>
										<p>Cold Frame Greenhouse
										</p>
										<ul style="list-style: disc;">
											<li>
												Simple, unheated structure for starting seedlings or protecting plants.</li>

										</ul>
									</div>
									<div class="accordion-body">
										<p>Heated Greenhouse</p>

										<ul style="list-style: disc;">
											<li>Equipped with artificial heating for year-round cultivation.</li>

										</ul>
									</div>
									<div class="accordion-body">
										<p>Hydroponic Greenhouse</p>

										<ul style="list-style: disc;">
											<li>Specially designed for soil-less farming using water-based nutrient solutions.</li>

										</ul>
									</div>
									<div class="accordion-body">
										<h3>Based on Shape</h3>
										<p>A-Frame Greenhouse</p>
										<ul style="list-style: disc;">
											<li>Triangular roof design resembling the letter "A."</li>
											<li>Easy to construct and cost-effective.</li>
										</ul>
									</div>
									<div class="accordion-body">
										<p>Dome-Shaped Greenhouse</p>

										<ul style="list-style: disc;">
											<li>Circular base with a geodesic dome structure.</li>
											<li>Provides excellent air circulation and withstands strong winds.</li>
										</ul>
									</div>
									<div class="accordion-body">
										<p>Quonset Greenhouse</p>

										<ul style="list-style: disc;">
											<li>Semi-circular structure with curved roofs.</li>
											<li>Popular for small-scale operations and economical use of materials.</li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
				<div class="col-md-12 col-xl-7">
					<div>
						<img src="assets/img/about/faq.jpg" width="800px" alt="" style="border-radius: 30px;">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ End  -->

</div>
<!-- page content End -->
<?php include 'includes/sticky.php'; ?>

<?php include "includes/footer.php"; ?>
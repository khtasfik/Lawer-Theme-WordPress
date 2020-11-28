<?php
/* Template Name: home  */
get_header();
?>
<?php
$lawerSliders = get_option('main_slider');
$lawerSlidersTitle = get_option('slider_title');
$lawerSlidersCaption = get_option('slider_caption');
$lawerSlidersIndecator = get_option('slider_indecator');
$lawerSlidersButton = get_option('slider_button');
?>
<section class="home-slider js-fullheight owl-carousel">
	<?php

	foreach ($lawerSliders as $key => $lawerSlider) {
	?>
		<div class="slider-item js-fullheight" style="background-image:url(<?php echo $lawerSlider ?>);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
					<div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
						<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lawerSlidersTitle[$key] ?></h1>
						<p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $lawerSlidersCaption[$key] ?></p>
						<p>
							<?php
							if ($lawerSlidersButton) {
								for ($i = 1; $i < count($lawerSliders); $i++) {
									if ($i == 1) {
										echo '<a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3" data-toggle="modal" data-target="#modalRequest">Make an Appointment</a>';
									}
								}
							}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>
</section>

<section class="ftco-section ftco-services">
	<div class="container">
		<?php
		$lawerHomeFrom = get_option('lawers_from');
		?>
		<div class="row">
			<?php
			if ($lawerHomeFrom) {
			?>
				<div class="col-md-5 col-lg-4">
					<form action="#" class="getaquote-form">
						<h3>Contact Us</h3>
						<div class="wrap">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email Address">
							</div>
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
							</div>
						<?php } ?>
						</div>
					</form>
				</div>
				<?php

				$lawerMediatitles = get_option('lawers_media_title');
				$lawerMediacaption = get_option('lawers_media_caption');
				$lawerMediaflaticon = get_option('lawers_media_flaticon');
				$lawerMediaflaticonButton = get_option('lawers_media_flaticon_button');

				?>
				<div class="col-md-7 col-lg-8">
					<div class="row pl-md-4">
						<?php
						foreach ($lawerMediatitles as $key => $lawerMediatitle) {

						?>
							<div class="col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon d-flex justify-content-center align-items-center">
										<!-- <span class="flaticon-family-room"></span> -->
										<img src='<?php echo $lawerMediaflaticonButton[$key] ?>' width="32px">
									</div>
									<div class="media-body pl-4">
										<h3 class="heading"><?php echo $lawerMediatitles[$key] ?></h3>
										<p><?php echo $lawerMediacaption[$key] ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
		</div>
	</div>
</section>

<?php
$companyTitle = get_option('lawers_company_title');
$companyUrl = get_option('lawers_company_url');
$companyOverview = get_option('lawers_company_overview');
$companyImg = get_option('lawers_company_img');
?>
<section class="ftco-section ftc-no-pb">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $companyImg ?>);">
				<a href="<?php echo $companyUrl ?>" class="icon popup-vimeo d-flex justify-content-center align-items-center">
					<span class="icon-play"></span>
				</a>
			</div>
			<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
				<div class="heading-section mb-5 pl-md-5">
					<div class="pl-md-5 ml-md-5">
						<span class="subheading">Company Overview</span>
						<h2 class="mb-4"><?php echo $companyTitle ?></h2>
					</div>
				</div>
				<div class="pl-md-5 ml-md-5 mb-5">
					<p><?php echo $companyOverview ?></p>
					<p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-lg-4">
				<div class="heading-section pl-md-5 heading-section-white">
					<div class="ftco-animate">
						<span class="subheading">Some</span>
						<h2 class="mb-4">Interesting Facts</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="18000">0</strong>
								<span>Trusted clients</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="1000">0</strong>
								<span>Solved Cases</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="1230">0</strong>
								<span>Awards Win</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18 text-center">
							<div class="text">
								<strong class="number" data-number="800">0</strong>
								<span>Winning Case</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$lawersCompanyHelpIntro = get_option('lawers_company_help_intro_overview');
$lawersCompanyHelpIntroImg = get_option('lawers_company_help_intro_overview_img');
$lawersCompanyHelptitles = get_option('lawers_company_help_intro_title');
$lawersCompanyHelpdescription = get_option('lawers_company_help_intro_description');
$lawersCompanyHelpflacticon = get_option('lawers_company_help_intro_flacticon');
?>

<section class="ftco-section ftc-no-pb">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url(<?php echo $companyImg ?>);">
			</div>
			<div class="col-md-7 wrap-about ftco-animate">
				<div class="heading-section mb-5 pl-md-5">
					<div class="pr-md-5 mr-md-5 text-md-right">
						<span class="subheading">Company Help Intro</span>
						<h2 class="mb-4"><?php echo $lawersCompanyHelpIntro ?></h2>
					</div>
				</div>
				<?php
				foreach ($lawersCompanyHelptitles as $key => $lawersCompanyHelptitle) {
				?>
					<div class="pr-md-5 pl-md-5 mr-md-5 mb-5">
						<div class="services-wrap d-flex">
							<div class="icon d-flex justify-content-center align-items-center">
								<img src='<?php echo $lawersCompanyHelpflacticon[$key] ?>' width="32px">
							</div>
							<div class="media-body pr-4 order-md-first text-md-right">
								<h3 class="heading"><?php echo $lawersCompanyHelptitles[$key] ?></h3>
								<p><?php echo $lawersCompanyHelpdescription[$key] ?></p>
							</div>
						</div>

					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<?php
$testimonyTitle = get_option('lawers_company_testimony_main_title');
$testimonyDescription = get_option('lawers_company_testimony_main_description');
$testimonyBodyDescriptions = get_option('lawers_company_testimony_body_description');
$testimonyBodyUser = get_option('lawers_company_testimony_body_user');
$testimonyBodyDesignation = get_option('lawers_company_testimony_body_designation');
$testimonyBodyImg = get_option('lawers_company_testimony_body_img');
?>

<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Testimony</span>
				<h2 class="mb-4"><?php echo $testimonyTitle ?></h2>
				<p><?php echo $testimonyDescription ?></p>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<?php
					foreach ($testimonyBodyDescriptions as $key => $testimonyBodyDescription) {
					?>
						<div class="item">
							<div class="testimony-wrap p-4 pb-5">
								<div class="user-img mb-5" style="background-image: url(<?php echo $testimonyBodyImg[$key] ?>)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-5 pl-4 line"><?php echo $testimonyBodyDescription ?></p>
									<p class="name"><?php echo $testimonyBodyUser[$key] ?></p>
									<span class="position"><?php echo $testimonyBodyDesignation[$key] ?></span>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-primary">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Working Process</span>
				<h2 class="mb-4">Our Working Way</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
			</div>
		</div>
		<div class="row steps d-flex">
			<div class="col-md-4 d-flex ftco-animate">
				<div class="step d-flex align-self-stretch">
					<span>#01</span>
					<h3>Analyzing Case</h3>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="step d-flex align-self-stretch">
					<span>#02</span>
					<h3>Research &amp; Investigation</h3>
				</div>
			</div>
			<div class="col-md-4 d-flex ftco-animate">
				<div class="step d-flex align-self-stretch">
					<span>#03</span>
					<h3>Court of Law Success</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$attorneyTitle = get_option('lawers_company_attorney_main_title');
$attorneyDescription = get_option('lawers_company_attorney_main_description');
$attorneyNames = get_option('lawers_company_attorney_name');
$attorneyDesignation = get_option('lawers_company_attorney_designation');
$lawersAttorneyDescription = get_option('lawers_company_attorney_description');
$attorneyImage = get_option('lawers_company_attorney_image');
?>
<section class="ftco-section mt-5">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Experienced Attorneys</span>
				<h2 class="mb-4"><?php echo $attorneyTitle ?></h2>
				<p><?php echo $attorneyDescription ?></p>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($attorneyNames as $key => $attorneyName) {
			?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(<?php echo $attorneyImage[$key] ?>);"></div>
						<div class="text pt-4">
							<h3><?php echo $attorneyName ?></h3>
							<span class="position mb-2"><?php echo $attorneyDesignation[$key] ?></span>
							<p><?php echo $lawersAttorneyDescription[$key] ?></p>
							<ul class="ftco-social d-flex">
								<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate">
				<span class="subheading">Our latest Blog</span>
				<h2 class="mb-4">Case Study</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
			</div>
		</div>

		<div class="row">
			<?php
			include get_template_directory() . '/template-parts/feature-post.php';
			?>
		</div>
	</div>
</section>
<?php
$contactTitle = get_option('lawers_company_contact_title');
$contactPhone = get_option('lawers_company_contact_phone');
$contactFax = get_option('lawers_company_contact_fax');
$contactAddress = get_option('lawers_company_contact_address');
$contactEmail = get_option('lawers_company_contact_email');
?>
<section class="ftco-section ftc-no-pb ftc-no-pt bg-light">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5" id="map">
			</div>
			<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
				<div class="heading-section mb-md-5 pl-md-5 mt-5 pt-3">
					<div class="pl-md-5 ml-md-5">
						<span class="subheading">Contact Information</span>
						<h2 class="mb-4"><?php echo $contactTitle ?></h2>
					</div>
				</div>
				<div class="pl-md-5 ml-md-5">
					<div class="info-contact mb-5">
						<p><span>Phone:</span> <span><?php echo $contactPhone ?></span></p>
						<p><span>Fax:</span> <span><?php echo $contactFax ?></span></p>
						<p><span>E-Mail:</span> <span><a href="#"><?php echo $contactEmail ?></a></span></p>
					</div>
					<div class="info-contact mb-5">
						<h3>Address Information</h3>
						<p><span>Address</span> <span> <?php echo $contactAddress ?></span></p>
						<p><span>Fax:</span> <span><?php echo $contactFax ?></span></p>
						<p><span>E-Mail:</span> <span><a href="#"><?php echo $contactEmail ?></a></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>
<?php
/* Template Name: about  */
get_header();
?>
<?php
$aboutImg = get_option('lawers_advise_about_img');
?>
<section class="home-slider js-fullheight owl-carousel">
	<div class="slider-item js-fullheight" style="background-image:url(<?php echo $aboutImg ?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">About</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
$aboutMainTitle = get_option('lawers_advise_about_main_title');
$aboutMainOverview = get_option('lawers_advise_about_Main_description');
$aboutMainImg = get_option('lawers_advise_about_main_img');
?>
<section class="ftco-section ftc-no-pb">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo $aboutMainImg ?>);">
				<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
					<span class="icon-play"></span>
				</a>
			</div>
			<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
				<div class="heading-section mb-5 pl-md-5">
					<div class="pl-md-5 ml-md-5">
						<span class="subheading">Company Overview</span>
						<h2 class="mb-4"><?php echo $aboutMainTitle ?></h2>
					</div>
				</div>
				<div class="pl-md-5 ml-md-5 mb-5">
					<p><?php echo $aboutMainOverview ?></p>
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
$lawersAboutHelpTitle = get_option('lawers_advise_about_help_title');
$lawersAboutHelpIntroImg = get_option('lawers_advise_about_help_img');
$lawersAboutHelptitles = get_option('lawers_advise_about_help_font_title');
$lawersAboutHelpdescription = get_option('lawers_advise_about_help_details');
$lawersAboutHelpflacticon = get_option('lawers_advise_about_help_fonticon');
?>
<section class="ftco-section ftc-no-pb">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image: url(<?php echo $aboutMainImg ?>);">
			</div>
			<div class="col-md-7 wrap-about ftco-animate">
				<div class="heading-section mb-5 pl-md-5">
					<div class="pr-md-5 mr-md-5 text-md-right">
						<span class="subheading">Company Help Intro</span>
						<h2 class="mb-4"><?php echo $lawersAboutHelpTitle ?></h2>
					</div>
				</div>
				<div class="pr-md-5 pl-md-5 mr-md-5 mb-5">
					<?php
					foreach ($lawersAboutHelptitles as $key => $lawersAboutHelptitle) {
					?>
						<div class="services-wrap d-flex">
							<div class="icon d-flex justify-content-center align-items-center">
								<img src='<?php echo $lawersAboutHelpflacticon[$key] ?>' width="32px">
							</div>
							<div class="media-body pr-4 order-md-first text-md-right">
								<h3 class="heading"><?php echo $lawersAboutHelptitle ?></h3>
								<p><?php echo $lawersAboutHelpdescription[$key] ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
?>
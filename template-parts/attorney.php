<?php
/* Template Name: attorney  */
get_header();
?>
<?php
$attorneyImg = get_option('lawers_advise_attorney_img');
?>
<section class="home-slider js-fullheight owl-carousel">
	<div class="slider-item js-fullheight" style="background-image:url(<?php echo $attorneyImg ?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Attorneys</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Attorneys</span></p>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
$attorneyMainTitle = get_option('lawers_advise_attorney_main_title');
$attorneyMainOverview = get_option('lawers_advise_attorney_main_description');
$attorneyBodyImg = get_option('lawers_advise_attorney_body_img');
$attorneyUserNames = get_option('lawers_advise_attorney_body_user_name');
$attorneyUserTitle = get_option('lawers_advise_attorney_body_user_title');
$attorneyUserDescription = get_option('lawers_advise_attorney_body_user_description');
$attorneyUserFacebook = get_option('lawers_advise_attorney_body_user_facebook');
$attorneyUserTwitter = get_option('lawers_advise_attorney_body_user_twitter');
$attorneyUserGoogle = get_option('lawers_advise_attorney_body_user_google');
$attorneyUserInstagram = get_option('lawers_advise_attorney_body_user_instagram');

?>
<section class="ftco-section mt-5">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Experienced Attorneys</span>
				<h2 class="mb-4"><?php echo $attorneyMainTitle  ?></h2>
				<p><?php echo $attorneyMainOverview  ?></p>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($attorneyUserNames as $key => $attorneyUserName) {
			?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(<?php echo $attorneyBodyImg[$key]  ?>);"></div>
						<div class="text pt-4">
							<h3><?php echo $attorneyUserName  ?></h3>
							<span class="position mb-2"><?php echo $attorneyUserTitle[$key]  ?></span>
							<p><?php echo $attorneyUserDescription[$key]  ?></p>
							<ul class="ftco-social d-flex">
								<?php
								if ($attorneyUserFacebook) {
								?>
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
								<?php } ?>
								<?php
								if ($attorneyUserTwitter) {
								?>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
								<?php } ?>
								<?php
								if ($attorneyUserGoogle) {
								?>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
								<?php } ?>
								<?php
								if ($attorneyUserInstagram) {
								?>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php
get_footer();
?>
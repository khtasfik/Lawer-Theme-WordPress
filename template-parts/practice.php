<?php
/* Template Name: practice  */
get_header();
?>

<?php
$practiceImg = get_option('lawers_advise_practice_img');
?>
<section class="home-slider js-fullheight owl-carousel">
	<div class="slider-item js-fullheight" style="background-image:url(<?php echo $practiceImg ?>);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center">

				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Practice Areas</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Practice</span></p>
				</div>

			</div>
		</div>
	</div>
</section>

<?php
$practiceBodyImgs = get_option('lawers_advise_practice_body_img');
$practiceBodyTitle = get_option('lawers_advise_practice_body_title');
$practiceBodyDes = get_option('lawers_advise_practice_body_description');
?>
<section class="ftco-section">
	<div class="container">
		<div class="row">
			<?php
			foreach ($practiceBodyImgs as $key => $practiceBodyImg) {
			?>
				<div class="col-md-4">
					<div class="practice">
						<a href="#" class="img" style="background-image: url(<?php echo $practiceBodyImg ?>);"></a>
						<div class="info">
							<h3><a href="#"><?php echo $practiceBodyTitle[$key] ?></a></h3>
							<p><?php echo $practiceBodyDes[$key] ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
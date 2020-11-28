<?php
/* Template Name: contact  */
get_header();
?>
<?php
$contactImage = get_option('lawers_advise_contact_img');
?>
<section class="home-slider js-fullheight owl-carousel">
  <div class="slider-item js-fullheight" style="background-image:url(<?php echo $contactImage ?>);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
$contactInformationAddress = get_option('lawers_advise_contact_information_address');
$contactInformationPhone = get_option('lawers_advise_contact_information_phone');
$contactInformationEmail = get_option('lawers_advise_contact_information_email');
$contactInformationDomain = get_option('lawers_advise_contact_information_domain');
?>
<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Address:</span> <?php echo $contactInformationAddress ?></p>
      </div>
      <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://1234567920"><?php echo $contactInformationPhone ?></a></p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php echo $contactInformationEmail ?></a></p>
      </div>
      <div class="col-md-3">
        <p><span>Website: </span> <a href="#"><?php echo $contactInformationDomain ?></a></p>
      </div>
    </div>
    <?php
    $contactInformationFrom = get_option('lawers_advise_contact_from');
    ?>
    <div class="row block-9">
      <?php
      if ($contactInformationFrom) {
      ?>
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>
      <?php } ?>
      <div class="col-md-6 d-flex">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>
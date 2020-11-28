<?php
/* Template Name: single  */
get_header();
?>
<?php
$blogImg = get_option('lawers_advise_blog_img');
$blogbackgroundTitle = get_option('lawers_advise_blog_background_title');
$blogbackgroundShortTitle = get_option('lawers_advise_blog_background_short_title');
?>
<section class="home-slider js-fullheight owl-carousel">
  <div class="slider-item js-fullheight" style="background-image:url(<?php echo $blogImg ?>);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread"><?php echo $blogbackgroundTitle ?></h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span><?php echo $blogbackgroundShortTitle ?></span></p>
        </div>

      </div>
    </div>
  </div>
</section>
<section class="ftco-section">
  <div class="container">
    <div class="row">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          get_template_part('template-parts/single', get_post_format());
        endwhile;
      else :
        _e('Sorry, no posts were found.', 'textdomain');
      endif;
      ?>
      <div class="col-lg-4 sidebar ftco-animate">
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon icon-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Categories</h3>
          <ul class="categories">
            <li><a href="#">Family Law <span>(6)</span></a></li>
            <li><a href="#">Criminal Law <span>(8)</span></a></li>
            <li><a href="#">Business Law <span>(2)</span></a></li>
            <li><a href="#">Insurance Law <span>(2)</span></a></li>
            <li><a href="#">Drug Control Law <span>(7)</span></a></li>
          </ul>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Popular Articles</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Oct. 04, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Tag Cloud</h3>
          <ul class="tagcloud">
            <a href="#" class="tag-cloud-link">dish</a>
            <a href="#" class="tag-cloud-link">menu</a>
            <a href="#" class="tag-cloud-link">food</a>
            <a href="#" class="tag-cloud-link">sweet</a>
            <a href="#" class="tag-cloud-link">tasty</a>
            <a href="#" class="tag-cloud-link">delicious</a>
            <a href="#" class="tag-cloud-link">desserts</a>
            <a href="#" class="tag-cloud-link">drinks</a>
          </ul>
        </div>
        <div class="sidebar-box subs-wrap">
          <h3>Subcribe to our Newsletter</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia</p>
          <form action="#" class="subscribe-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Address">
              <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Archives</h3>
          <ul class="categories">
            <li><a href="#">September 2018 <span>(6)</span></a></li>
            <li><a href="#">August 2018 <span>(8)</span></a></li>
            <li><a href="#">July 2018 <span>(2)</span></a></li>
            <li><a href="#">June 2018 <span>(7)</span></a></li>
            <li><a href="#">May 2018 <span>(5)</span></a></li>
            <li><a href="#">April 2018 <span>(3)</span></a></li>
          </ul>
        </div>
        <div class="sidebar-box ftco-animate">
          <h3>Paragraph</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
        </div>
      </div><!-- END COL -->
    </div>
  </div>
</section> <!-- .section -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row mb-5 d-flex">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">PrimeLaw</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Usefull Links</h2>
          <ul class="list-unstyled">
            <li><a href="#">Family Law</a></li>
            <li><a href="#">Drug Law</a></li>
            <li><a href="#">Insurance Law</a></li>
            <li><a href="#">Criminal Law</a></li>
            <li><a href="#">Business Law</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Practice Areas</a></li>
            <li><a href="#">Appointment</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have a Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
              <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
              <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAppointmentLabel">Request a Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="form-group">
            <label for="appointment_name" class="text-black">Full Name</label>
            <input type="text" class="form-control" id="appointment_name">
          </div>
          <div class="form-group">
            <label for="appointment_email" class="text-black">Email</label>
            <input type="text" class="form-control" id="appointment_email">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="appointment_date" class="text-black">Date</label>
                <input type="text" class="form-control" id="appointment_date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="appointment_time" class="text-black">Time</label>
                <input type="text" class="form-control" id="appointment_time">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="appointment_message" class="text-black">Message</label>
            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>
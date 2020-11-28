<?php
/* Template Name: blog  */
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
<?php
$blogBodyTitle = get_option('lawers_advise_blog_body_title');
$blogBodyShortTitle = get_option('lawers_advise_blog_body_short_title');
$blogBodyDescription = get_option('lawers_advise_blog_body_description');
?>
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading"><?php echo $blogBodyTitle ?></span>
        <h2 class="mb-4"><?php echo $blogBodyShortTitle ?></h2>
        <p><?php echo $blogBodyDescription ?></p>
      </div>
    </div>

    <div class="row">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
          get_template_part('template-parts/content', get_post_format());
        endwhile;
      else :
        _e('Sorry, no posts were found.', 'textdomain');
      endif;
      ?>
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
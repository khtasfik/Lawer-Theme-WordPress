<div class="col-md-4 ftco-animate">
  <div class="blog-entry">
    <a class="block-20">
      <?php the_post_thumbnail('medium', array('class' => 'block-20')); ?>
    </a>

    <div class="text d-flex py-4">
      <div class="meta mb-3">
        <div><a href="#"><?php echo isdb_post_meta() ?></a></div>
        <div><a href="#"><?php the_title() ?></a></div>
        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
      </div>
      <div class="desc pl-3">
        <h3 class="heading"><a href="<?php the_permalink() ?>"><?php echo wp_trim_words(get_the_content(), 15); ?></a></h3>
      </div>
    </div>
  </div>
</div>
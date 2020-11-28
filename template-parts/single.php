<div class="col-lg-8 ftco-animate">
    <h2 class="mb-3"><?php the_title() ?></h2>
    <p>
        <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
    </p>

    <p><?php the_content() ?></p>

    <div class="tag-widget post-tag-container mb-5 mt-5">
        <div class="tagcloud">
            <?php echo isdb_post_meta() ?>
        </div>
    </div>


</div> <!-- .col-md-8 -->
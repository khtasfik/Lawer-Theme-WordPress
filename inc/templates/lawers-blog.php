<form action="options.php" method="post">

    <?php
    settings_fields('lawers-blog-setting');
    do_settings_sections('lawers-advise-blog');
    submit_button();
    ?>

</form>
<form action="options.php" method="post">

    <?php
    settings_fields('lawers-about-setting');
    do_settings_sections('lawers-advise-about');
    submit_button();
    ?>

</form>
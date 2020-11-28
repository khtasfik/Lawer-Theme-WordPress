<form action="options.php" method="post">

    <?php
    settings_fields('lawers-Contact-setting');
    do_settings_sections('lawers-advise-contact');
    submit_button();
    ?>

</form>
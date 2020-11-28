<form action="options.php" method="post">

    <?php
    settings_fields('lawers-attorney-setting');
    do_settings_sections('lawers-advise-attorney');
    submit_button();
    ?>

</form>
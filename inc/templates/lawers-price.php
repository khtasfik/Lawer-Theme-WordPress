<form action="options.php" method="post">

    <?php
    settings_fields('lawers-price-setting');
    do_settings_sections('lawers-advise-price');
    submit_button();
    ?>

</form>
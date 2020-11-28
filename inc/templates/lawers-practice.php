<form action="options.php" method="post">

    <?php
    settings_fields('lawers-practice-setting');
    do_settings_sections('lawers-advise-practice');
    submit_button();
    ?>

</form>
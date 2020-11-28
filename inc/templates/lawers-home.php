<form action="options.php" method="post">

<?php
    settings_fields('lawers-Home-setting');
    do_settings_sections('lawers-advise-home');
    submit_button();
?>

</form>
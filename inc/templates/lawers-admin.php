<form action="options.php" method="post">

<?php
    settings_fields('lawers-setting-group');
    do_settings_sections('lawers-advise');
    submit_button();
?>

</form>
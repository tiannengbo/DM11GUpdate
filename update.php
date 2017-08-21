<?php
    require("auth.inc.php");
    system("sudo sh /usr/local/sbin/update_dash.sh");
    echo 'Update finished, please restart the devices!';
?>


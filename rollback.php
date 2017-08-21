<?php
    require("auth.inc.php");
    #system("sudo killall cgminer");
    system("sudo sh /usr/local/sbin/rollback_dash.sh ");
    echo 'Device has rollback to the last version!';
?>


<?php
    require("auth.inc.php");
    //system("sudo killall cgminer");
    system("sudo /usr/local/sbin/restore_dash.sh ");
    echo 'system restore factory settings and cgminer version, please restart the devices!';
?>


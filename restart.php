<?php
    require("auth.inc.php");
    echo 'Cgminer will restart!';
    system("sudo /etc/init.d/xtcminer restart &");
?>

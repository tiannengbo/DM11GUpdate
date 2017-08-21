<?php
    require("auth.inc.php");
    echo 'PI system will reboot!';
    system("sudo /etc/init.d/xtcminer stop");
    sleep(3);		// added by ZWW
//	system("sudo /etc/init.d/cgminer start");
    system("sudo sh /usr/local/bin/reboot.sh ");
?>

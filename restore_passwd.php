<?php
require("auth.inc.php");
system("sudo /usr/local/sbin/restore_passwd.sh");
$home_url = 'login.php';
header('Location: '.$home_url);
?>

<?php
require("auth.inc.php");
$json_string = file_get_contents('/home/orangepi/share/cgminer.conf.xtc');
$data = json_decode($json_string, true);
$cmd = "sudo /usr/local/sbin/send_passwd.sh"." ".$data['api-mailuser']." ".$data['api-mailpassword']." ".$data['api-mailserver']." ".$data['api-warnemail'];
//echo "<script type='text/javascript'> alert('".$cmd."'); </script>";
system($cmd);
sleep(1);
$home_url = 'login.php';
header('Location: '.$home_url);
?>

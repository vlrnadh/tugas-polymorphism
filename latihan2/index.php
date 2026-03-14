<?php

require_once "email.php";
require_once "sms.php";
require_once "whatsapp.php";

$e = new email();
$s = new sms();
$w = new whatsapp();

echo $e->kirim();
echo "<br>";

echo $s->kirim();
echo "<br>";

echo $w->kirim();

?>
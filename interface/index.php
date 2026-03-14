<?php

include "pembayaran.php";
include "transferbank.php";
include "ewallet.php";
include "kartukredit.php";

$p1 = new transferbank();
$p2 = new ewallet();
$p3 = new kartukredit();

$p1->prosespembayaran();
echo "<br>";

$p2->prosespembayaran();
echo "<br>";

$p3->prosespembayaran();

?>
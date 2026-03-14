<?php

include "kendaraan.php";
include "mobil.php";
include "kapal.php";

$mobil = new mobil();
$kapal = new kapal();

$mobil->berjalan();
echo "<br>";

$kapal->berjalan();

?>
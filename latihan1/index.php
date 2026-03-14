<?php

include_once "persegi.php";
include_once "lingkaran.php";
include_once "segitiga.php";

$p = new Persegi();
$l = new Lingkaran();
$s = new Segitiga();

$p->hitungLuas();
echo "<br>";

$l->hitungLuas();
echo "<br>";

$s->hitungLuas();

?>
<?php

require_once "kucing.php";
require_once "anjing.php";

$k = new kucing();
$a = new anjing();

echo $k->suara();
echo "<br>";
echo $a->suara();

?>
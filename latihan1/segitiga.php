<?php

include_once "bangundatar.php";

class Segitiga extends BangunDatar{

    public function hitungLuas(){
        $a = 6;
        $t = 4;
        echo "Luas Segitiga = " . (0.5 * $a * $t);
    }

}

?>
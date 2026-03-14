<?php

include_once "bangundatar.php";

class Lingkaran extends BangunDatar{

    public function hitungLuas(){
        $r = 7;
        echo "Luas Lingkaran = " . (3.14 * $r * $r);
    }

}

?>
<?php

include_once "bangundatar.php";

class Persegi extends BangunDatar{

    public function hitungLuas(){
        $sisi = 4;
        echo "Luas Persegi = " . ($sisi * $sisi);
    }

}
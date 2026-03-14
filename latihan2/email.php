<?php

require_once "notifikasi.php";

class email implements notifikasi {

    public function kirim() {
        return "notifikasi dikirim melalui email";
    }

}

?>
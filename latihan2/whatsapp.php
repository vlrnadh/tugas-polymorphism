<?php

require_once "notifikasi.php";

class whatsapp implements notifikasi {

    public function kirim() {
        return "notifikasi dikirim melalui whatsapp";
    }

}

?>
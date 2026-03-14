<?php

require_once "notifikasi.php";

class sms implements notifikasi {

    public function kirim() {
        return "notifikasi dikirim melalui sms";
    }

}

?>

<?php 
    // sesi dimulai
    session_start();

    // supaya panggil tidak menyertakan mysqli_query($con, sql perintah) lagi, melainkan langsung q();
    function q($q){
        $ss=new mysqli("localhost","root","","db_hemat");
        return $ss->query($q);
        $ss->close();
    }

    // fungsi crud

    // fungsi diskon

    // fungsi tambah

    // fungsi kurang
    // fungsi select

?>

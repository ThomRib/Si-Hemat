<?php 
	// sesi dimulai
    session_start();

	// supaya panggil tidak menyertakan mysqli_query($con, sql perintah) lagi, melainkan langsung q();
	function q($q){
        $ss=new mysqli("localhost","root","","");
        return $ss->query($q);
        $ss->close();
    }
?>
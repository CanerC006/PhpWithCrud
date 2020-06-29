<?php
    session_start();
    $vt = @new mysqli('127.0.0.1','root','','stajyerdb');
    if($vt->connect_error)
    {
        die("Bağlantı Hatası : ( " . $vt->connect_errno . ") " . $vt->connect_error );
    }
    $vt->set_charset("utf8");
?>

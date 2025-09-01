<?php
    $serverName = "LAPTOP-SH40GF02\SQLEXPRESS";
    $connectionOptions = array(
        "Database" => "prakwebdb", 
        "Uid" => "",           
        "PWD" => "",            
        "CharacterSet" => "UTF-8"
    );

    $koneksi = sqlsrv_connect($serverName, $connectionOptions);

    if ($koneksi === false) {
        die("Koneksi database gagal: " . print_r(sqlsrv_errors(), true));
    }
?>
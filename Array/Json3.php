<?php
 $Datasiswa = ' [
        {
            "Nama" : "Huda",
            "Alamat" : "Bandung"
        },

        {
            "Nama" : "Ilhami",
            "Alamat" : "Surabaya"
        }
    ] ';

    $List = json_decode($Datasiswa);

    foreach ($List as $Mahasiswa) {
        echo "Nama :" . ($Mahasiswa ->Nama) . "<br>";
        echo "Nama :" . ($Mahasiswa ->Alamat) . "<br>";
        echo "<hr>";
    }

?>
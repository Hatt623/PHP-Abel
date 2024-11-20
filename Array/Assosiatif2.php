<?php
    $Siswa = [
        [
            "Nama" => "Muhammad Nabeel Hikaru AThaillah",
            "Jenis_Kelamin" => "Pria",
            "Kelas" => "XI RPL 1"
        ],

        [
            "Nama" => "Ridho",
            "Jenis_Kelamin" => "Pria",
            "Kelas" => "X RPL 2"
        ]

    ];

    foreach ($Siswa as $Murid){
        echo "Nama :" . $Murid["Nama"] . "<br>";
        echo "Jenis Kelamin :" . $Murid["Jenis_Kelamin"] . "<br>";
        echo "Kelas :" . $Murid["Kelas"] . "<br>";
        echo "<hr>";
    }

?>
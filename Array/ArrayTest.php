<?php
    $Siswa = [
        [
        "Nis" => "1001",
        "Nama" => "Abel",
        "Kelas" => "XI RPL 1",
        "Ekskul" => [
                    // Cara Pertama
                    0 => "Inggris",
                    1 => "Band"
                ]

        ],

        [
            "Nis" => "1002",
            "Nama" => "Ridho",
            "Kelas" => "XI RPL 200",
            "Ekskul" => [
                        // Cara Kedua
                        0 => "Masak wkwkwkwk", "Lawak Club", "Speaking club"
                    ]

        ]

    ];

    

    foreach ($Siswa as $Murid) {
        echo "NIS :" . $Murid["Nis"] . "<br>";
        echo "Nama :" . $Murid["Nama"] . "<br>";
        echo "Kelas :" . $Murid["Kelas"] . "<br>";
        echo "Ekskul :";

        // Ini Juga Bisa
        // foreach ($Murid["Ekskul"] as $Ekskul) {
        //     echo "<ul>";
        //         echo "<li>" . $Ekskul . "</li>";
        //     echo "</ul>";
        // }

        // Ahay Sendiri pake For
        for ($i=0; $i <count($Murid["Ekskul"]) ; $i++) { 
            echo "<ul>";
                echo "<li>" . $Murid["Ekskul"][$i] . "</li>";
            echo "</ul>";
        }

        echo "<hr>";

        
    }

?>
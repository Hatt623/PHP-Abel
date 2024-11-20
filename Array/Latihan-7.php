<?php
    $Hobi = [
        [
            "Nama" => "Muhammad Nabeel Hikaru Athaillah",
            "Buah" => [ 
                        0 => "Anggur"
            ],

            "Buahan" => [
                        0 => "Anggur Ijo", "Anggur Putih",
                        ] 

            

            ],

        [
            "Nama" => "Fajl",
            "Buah" => [

                        0 => "Alpukat",
                        1 => "Apel"
            ],

            "Buahan" => [ 
                         0 => "Alpukat Mentega", "Alpukat Biasa",
                        ],

                        [ 
                         1 => "Apel Merah", "Apel Hijau"
                        ]  

        ]

    ];

    foreach ($Hobi as $Hobby) {
        echo "Nama Pemilik:" . $Hobby["Nama"] . "<br>";

        foreach ($Hobby["Buah"] as $Buah) {
            echo "<ul>";
                echo "<li>" . $Buah . "</li>";

                foreach ($Hobby["Buahan"] as $Buahan) {
                    echo "<ul>";
                        echo "<li>" . $Buahan . "</li>";
                    echo "</ul>";
                }
            echo "</ul>";

        }

        echo "<hr>";
        
    }

?>
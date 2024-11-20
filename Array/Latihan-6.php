<?php
    $Novel = [
        [
            "Judul" => "Eragon",
            "Penulis" => "Christopher Paolini",
            "Tanggal_rilis" => "30 Sep 2024",
            "Penerbit" => "Gramedia Pustaka Utama"
        ],

        [
            "Judul" => "Jini Jinny",
            "Penulis" => "Jeong You-Jeong",
            "Tanggal_rilis" => "20 Juni 2024",
            "Penerbit" => "Gramedia Pustaka Utama"
        ],

        [
            "Judul" => "Heart Of The Sun Warrior",
            "Penulis" => "Sue Lynn Tan",
            "Tanggal_rilis" => "17 September 2024",
            "Penerbit" => "Gramedia Pustaka Utama"
        ],

        [
            "Judul" => "The Atala",
            "Penulis" => "Lyraemon",
            "Tanggal_rilis" => "5 Juli 2024",
            "Penerbit" => "Gramedia Pustaka Utama"
        ],

        [
            "Judul" => "The Night Country (The Hazel Wood #2)",
            "Penulis" => "Melissa Albert",
            "Tanggal_rilis" => "11 Jul 2024",
            "Penerbit" => "Gramedia Pustaka Utama"
        ]

    ];

    foreach ($Novel as $Buku){
        echo "Judul :" . $Buku["Judul"] . "<br>";
        echo "Penulis :" . $Buku["Penulis"] . "<br>";
        echo "Tanggalrilis :" . $Buku["Tanggal_rilis"] . "<br>";
        echo "Penerbit :" . $Buku["Penerbit"] . "<br>";
        echo "<hr>";
    }

?>
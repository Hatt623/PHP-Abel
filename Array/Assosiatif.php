<?php
    $Artikel = [
        "Judul" => "Belajar Pemrograman PHP",
        "Penulis" => "Petani Kode",
        "View" => 128,
        "Tanggal" => "20 Juni 2008"

    ];

    echo "<p>" .  $Artikel['Judul'] . "</p>";
    echo "<p> Oleh: " .  $Artikel['Penulis'] . "</p>";
    echo "<p> View: " .  $Artikel['View'] . "</p>";
    echo "<p> Tanggal: " .  $Artikel['Tanggal'] . "</p>";

?>

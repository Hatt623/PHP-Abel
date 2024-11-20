<?php
    $Nama = "Abel";
    $Gender = "Pria";
    $Jenis = "Makanan";
    $Menu = "Nasi Goreng";
    $Jumlah = 1;

    // Output
    echo "<h2>RESTORAN SELALU RAME</h2>";
    echo "<hr>";

    echo "Nama : $Nama <br>";
    echo "Nama : $Gender <br>";
    echo "Nama : $Jenis <br>";
    echo "Nama : $Menu <br>";
    // Hitung Harga
    if ($Jenis == "Makanan" || $Jenis == "makanan") {
        if ($Menu == "Nasi Goreng") {
            $Harga = 10000;

            $Total = $Harga * $Jumlah;

            echo "Harga : $Total <br>";
        }

        else if ($Menu == "Mie Goreng") {
            $Harga = 15000;

            $Total = $Harga * $Jumlah;

            echo "Harga : $Total <br>";
        }

        else if ($Menu == "Ayam Goreng") {
            $Harga = 20000;

            $Total = $Harga * $Jumlah;

            echo "Harga : $Total <br>";
        }

        else {
            $Harga = 0;
            $Total = $Harga * $Jumlah;
            echo "Menu tidak Ada <br>";
        }
    }

    elseif ($Jenis == "Minuman" || $Jenis == "minuman") {
        if ($Menu == "Air Mineral") {
            $Harga = 5000;

            $Total = $Harga * $Jumlah;

            echo "Harga : $Total <br>";
        }

        else if ($Menu == "Fresh Tea") {
            $Harga = 7000;

            $Total = $Harga * $Jumlah;

            echo "Harga : $Total <br>";
        }

        else if ($Menu == "Jus") {
            $Harga = 12000;

            $Total = $Harga * $Jumlah;

            echo "Harga : $Total <br>";
        }

        else {
            $Harga = 0;
            $Total = $Harga * $Jumlah;
            echo "Menu tidak Ada <br>";
        }

    }
    // Akhir Hitung

    else {
        echo "Terdapat error ketika memilih jenis menu <br>";
    }

    echo "Jumlah : $Jumlah <br><br>";

    echo "<hr>";
    // New line

    echo "Total : $Total <br>"; 
    // Menghitung Diskon
    if ($Total >= 50000) {
        $Diskon = $Total * 20 / 100;
        $TAkhir = $Total - $Diskon ;

        echo "Diskon 20% : $Diskon <br><br>";
    }

    else {
        echo "Diskon 20% : Tidak ada <br><br>";
    }
    // Akhir Menghitung Diskon

    echo "<hr>";
    // New Line

    // Total Akhir
    if ($Total >= 50000) {

        echo "Total Bayar: $TAkhir <br><br>";
    }

    else {
        echo "Total Bayar: $Total <br><br>";
    }

?>
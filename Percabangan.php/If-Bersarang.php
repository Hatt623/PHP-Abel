<?php
    $Jurusan = "TKRO";
    $Kelas = "10 TKRO";

    if ($Jurusan == "RPL") {
        if ($Kelas == "10 RPL") {
            echo "Ini Kelas 10 RPL";
        }

        elseif ($Kelas == "11 RPL") {
            echo "Ini Kelas 11 RPL";
        }

        elseif ($Kelas == "12 RPL") {
            echo "Ini Kelas 12 RPL";
        }

        else {
            echo "Kelas Tidak Tersedia";
        }
    }

    else if ($Jurusan == "TKRO") {
        if ($Kelas == "10 TKRO") {
            echo "Ini Kelas 10 TKRO";
        }

        elseif ($Kelas == "11 TKRO") {
            echo "Ini Kelas 11 TKRO";
        }

        elseif ($Kelas == "12 TKRO") {
            echo "Ini Kelas 12 TKRO";
        }

        else {
            echo "Kelas Tidak Tersedia";
        }
    }

    else if ($Jurusan == "TBSM") {
        if ($Kelas == "10 TBSM") {
            echo "Ini Kelas 10 TBSM";
        }

        elseif ($Kelas == "11 TBSM") {
            echo "Ini Kelas 11 TBSM";
        }

        elseif ($Kelas == "12 TBSM") {
            echo "Ini Kelas 12 TBSM";
        }

        else {
            echo "Kelas Tidak Tersedia";
        }

    }

    else {
        echo "Jurusan Tidak ada";
    }

?>
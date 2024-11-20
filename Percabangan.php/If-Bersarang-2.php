<?php
    $Provinsi = "Jawa Barat";
    $Kota = "Bandung";

    if ($Provinsi == "Jawa Barat") {
        if ($Kota == "Bandung") {
            echo "Selamat Datang di Kota Bandung";
        }

        elseif ($Kota == "Cimahi") {
            echo "Selamat Datang di Kota Cimahi";
        }

        elseif ($Kota == "Bogor") {
            echo "Selamat Datang di Kota Bogor";
        }

        elseif ($Kota == "Bekasi") {
            echo "Selamat Datang di Kota Bekasi";
        }

        elseif ($Kota == "Depok") {
            echo "Selamat Datang di Kota Depok";
        }

        else {
            echo "Kota Tidak Ada";
        }
    }

    else if ($Provinsi == "Jawa Timur") {
        if ($Kota == "Bangkalan") {
            echo "Selamat Datang di Kota Bangkalan";
        }

        elseif ($Kota == "Banyuwangi") {
            echo "Selamat Datang di Kota Banyuwangi";
        }

        elseif ($Kota == "Blitar") {
            echo "Selamat Datang di Kota Blitar";
        }

        elseif ($Kota == "Bojonegoro") {
            echo "Selamat Datang di Kota Bojonegoro";
        }

        elseif ($Kota == "Bondowoso") {
            echo "Selamat Datang di Kota Blitar";
        }

        else {
            echo "Kota Tidak ada";
        }
    }

    else if ($Jurusan == "Jawa Tengah") {
        if ($Kelas == "Banjarnegara") {
            echo "Selamat Datang di Kota Banjarnegara";
        }

        elseif ($Kelas == "Banyumas") {
            echo "Selamat Datang di Kota Banyumas";
        }

        elseif ($Kelas == "Batang") {
            echo "Selamat Datang di Kota Batang";
        }

        elseif ($Kota == "Blora") {
            echo "Selamat Datang di Kota Blora";
        }

        elseif ($Kota == "Boyolali") {
            echo "Selamat Datang di Kota Boyolali";
        }

        else {
            echo "Kelas Tidak ada";
        }
    }

    else {
        echo "Provinsi tidak ada";
    }

?>
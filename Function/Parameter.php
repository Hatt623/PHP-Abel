<?php
    function Biodata($Nama, $Tempat_lhr, $Asal_lhr, $Jenis_klm, $Agama, $Alamat, $Hobi){
        echo "Nama :" . $Nama . "<br>";
        echo "Tanggal Lahir :" . $Tempat_lhr . "<br>";
        echo "Asal Lahir :" . $Asal_lhr . "<br>";
        echo "Jenis Kelamin :" . $Jenis_klm . "<br>";
        echo "Agama :" . $Agama . "<br>";
        echo "Alamat :" . $Alamat . "<br>";
        echo "Hobi :" . $Hobi;

    }

    Biodata( "Muhammad Nabeel Hikaru Athaillah", "23/01/2008", "Bandung,Pasteur", "Pria", "Islam", "Margahayu", "Musik" );

    echo "<hr>";

    function Menghitung($Angka1, $Angka2){
        echo "Bilangan ke 1 : $Angka1 <br>";
        echo "Bilangan ke 2 : $Angka2 <br>";
        
        $Hasil = $Angka1 + $Angka2;
        echo "Hasilnya : $Hasil";
    }

    Menghitung(10,20);
?>
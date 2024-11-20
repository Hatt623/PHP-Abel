<?php
    class Kucing{
        var $Warna;
        var $Jenis;

        function Makan(){
            echo "Kucing suka makan whiskas";
            
        }

        function Minum(){
            echo "Kucing suka minum Air";

        }

    }

    // Buat object
    $Cetak = new Kucing();
    
    // memanggil Method
    echo $Cetak -> Makan();
    echo "<br>";
    echo $Cetak -> Minum();
    echo "<hr>";

    // Memanggil Property
    echo "Warna Kucingku : <b>" . $Cetak -> Warna = "Kuning" . "</b>";
    echo "<br>";
    echo "Jenis Kucingku : <b>" . $Cetak -> Jenis = "Anggora" . "</b>";


?>
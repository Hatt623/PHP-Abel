<?php
    class Kucing{
        var $Warna;
        var $Jenis;

        public function __construct() {
            echo "Halo saya kucing <br>";
            
        }
        
        function Makan(){
            echo "Kucing suka makan whiskas <br>";
            
        }

        function Minum(){
            echo "Kucing suka minum Air <br>";

        }

        public function __destruct() {
            echo "Suara Kucing : *Miau miau supaniga <br>";
            
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
    echo "Warna Kucingku : <b>" . $Cetak -> Warna = "Kuning" . "</b> <br>";
    echo "<br>";
    echo "Jenis Kucingku : <b>" . $Cetak -> Jenis = "Anggora" . "</b> <br>";


?>
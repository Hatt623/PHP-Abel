<?php
    class bangundatar{

        public $Luas_Persegi;
        public $Luas_Segitiga;
        public $Luas_Persegi_Panjang;
        public $Luas_Lingkaran;

        public function Persegi($Sisi){
            echo "Sisi: $Sisi <br>";
    
            $Sisi *=2;

            $this-> Luas_Persegi = $Sisi;
            echo "Hasilnya : $this->Luas_Persegi";
        }

        public function Segitiga($Alas, $Tinggi){
            echo "Alas: $Alas <br>";
            echo "Tinggi: $Tinggi <br>";
    
            $this->Luas_Segitiga = $Alas * $Tinggi;
            echo "Hasilnya : $this->Luas_Segitiga";
        }

        public function PersegiPanjang($Luas, $Panjang, $Lebar){
            echo "Luas: $Luas <br>";
            echo "Panjang: $Panjang <br>";
            echo "Lebar: $Lebar <br>";
    
            $this->Luas_Persegi_Panjang = $Luas * $Panjang * $Lebar;
            echo "Hasilnya : $this->Luas_Persegi_Panjang";
        }

        public function Lingkaran($Pi, $r){
            echo "Pi/Phi: $Pi <br>";
            echo "Jari Jari: $r <br>";
    
            $r *=2;
            $this->Luas_Lingkaran = $Pi * $r;
            echo "Hasilnya : $this->Luas_Lingkaran";
        }

    }

    $Hasil = new bangundatar();

    echo "<h2>Luas Persegi </h2>";
    echo $Hasil ->  Persegi(2);
    echo "<hr>";

    echo "<h2>Luas Segitiga </h2>";
    echo $Hasil ->  Segitiga(10,6);
    echo "<hr>";

    echo "<h2>Luas Persegi Panjang </h2>";
    echo $Hasil ->  PersegiPanjang(20, 10, 5);
    echo "<hr>";

    echo "<h2>Luas Lingkaran </h2>";
    echo $Hasil ->  Lingkaran(3.14, 5);
    echo "<hr>";

?>
<?php
    class bangun_datar{
        public $Luas_Persegi;
        public $Luas_Segitiga;
        public $Luas_Persegi_Panjang;
        public $Luas_Lingkaran;

        public $Keliling_Persegi;
        public $Keliling_Segitiga;
        public $Keliling_Persegi_Panjang;
        public $Keliling_Lingkaran;
        
    }

    class Luas extends bangun_datar{

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

    class Keliling extends bangun_datar{
        public function Persegi($Sisi){
            echo "Sisi: $Sisi <br>";
    
            $Sisi *=4;

            $this-> Keliling_Persegi = $Sisi;
            echo "Hasilnya : $this->Keliling_Persegi";
        }

        public function Segitiga($A, $B, $C){
            echo "Siku A: $A <br>";
            echo "Siku B: $B <br>";
            echo "Siku C: $C <br>";
    
            $this->Keliling_Segitiga = $A + $B + $C;
            echo "Hasilnya : $this->Keliling_Segitiga";
        }

        public function PersegiPanjang($Panjang, $Lebar){
            echo "Panjang: $Panjang <br>";
            echo "Lebar: $Lebar <br>";
    
            $Kurung = $Panjang + $Lebar;
            $this->Keliling_Persegi_Panjang = 2 * $Kurung;
            echo "Hasilnya : $this->Keliling_Persegi_Panjang";
        }

        public function Lingkaran($Pi, $D){
            if($Pi == 22/7){
                echo "Pi/Phi: 22/7 <br>";
                echo "Diameter : $D <br>";

                $this->Keliling_Lingkaran = $Pi * $D;
                echo "Hasilnya : $this->Keliling_Lingkaran";
            }

            else{
                echo "Pi/Phi: $Pi <br>";
                echo "Diameter : $D <br>";

                $this->Keliling_Lingkaran = $Pi * $D;
                echo "Hasilnya : $this->Keliling_Lingkaran";

            }

            
        }
    }

    $Hasil = new Luas();
    $Hasil2 = new Keliling();

    echo "<center> <h1> Penggunaan Inheritance </h1> </center>";

    // Luas bangun datar
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


    // Kelliling bangun datar
    echo "<center> <h2>Keliling Persegi </h2>";
    echo $Hasil2 ->  Persegi(2);
    echo "<hr>";

    echo "<h2>Keliling Segitiga </h2>";
    echo $Hasil2 ->  Segitiga(10,6,3);
    echo "<hr>";

    echo "<h2>Keliling Persegi Panjang </h2>";
    echo $Hasil2 ->  PersegiPanjang(20, 10);
    echo "<hr>";

    echo "<h2>Keliling Lingkaran </h2>";
    echo $Hasil2 ->  Lingkaran(22/7, 28) . "</center>";
    echo "<hr>";

?>
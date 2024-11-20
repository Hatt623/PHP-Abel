<?php
    class Kendaraan{

        public $warna = "Biru";
        public function a() {
            echo "Saya adalah kendaraan";
            
        }

    }

    class Mobil extends Kendaraan{

        public function b() {
            $this->a();
            echo "<br> Warna saya adalah :$this->warna";
            
        }

    }

    $Print = new Mobil();

    echo $Print->b();

?>
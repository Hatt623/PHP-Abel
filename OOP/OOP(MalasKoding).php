<?php
    class mobil{
        // Property
        public $Warna; 
        public $Merek;
        public $Ukuran;

        // Method
        function Maju(){
            echo "Silahkan maju";
        }
        
        function Berhenti(){
            echo "Mohon untuk berehnti";
        }
        
    }

    // Instansiasi class mobil
    $Mobil = new mobil();

    echo $Mobil -> Maju();
    echo "<hr>";
    

    class Manusia{
        public $Nama = "Fuanxu";
        public $Tempat_tinggal = "Bandung";

        function Tampilkan_Nama(){
            echo "Halo nama saya &nbsp:" . $this -> Nama;

        }

        function Tempat_tinggal(){
            echo "Saya tinggal di &nbsp:" . $this -> Tempat_tinggal;
            
        }
    }

    $Kenalan = new Manusia();

    echo $Kenalan -> Tampilkan_Nama() . "<br>";
    echo $Kenalan -> Tempat_tinggal();
    

?>
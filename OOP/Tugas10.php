<?php
    class Gajihan{

        public $GajiJabatan;
        public $GajiTunjangan;
        public $TPotongan;
        public $GajiBersih;

        public function Gaji_Pokok($Nama, $Jabatan) {
            echo "<h2> Gaji Poko </h2>";

            echo "Nama Karyawan: $Nama <br>";
            echo "Jabatan: $Jabatan <br>";
            echo "Gaji Pokok : &nbsp";

            $GajiJabatan = [
                "Direktur" => 10000000,
                "Manager" => 7500000,
                "Karyawan" => 5000000,
                "OB" => 2500000
            ];  
            
            if ($Jabatan == "Direktur") {
                $this->GajiJabatan =  $GajiJabatan["Direktur"];
                echo number_format ($this->GajiJabatan);
            }

            elseif ($Jabatan == "Manager"){
                $this->GajiJabatan =  $GajiJabatan["Manager"];
                echo number_format ($this->GajiJabatan);
            }

            elseif ($Jabatan == "Karyawan"){
                $this->GajiJabatan = $GajiJabatan["Karyawan"];
                echo number_format ($this->GajiJabatan);
            }

            elseif ($Jabatan == "OB"){
                $this->GajiJabatan = $GajiJabatan["OB"];
                echo number_format ($this->GajiJabatan);
            }


            else {
                echo "Error";
            }

            echo "<hr>";
            
            
        } 

        public function Tunjangan($Pendidikan) {
            echo "<h2> Tunjangan </h2>";

            echo "Pendidikan: $Pendidikan <br>";
            echo "Tunjangan pendidikan : &nbsp";

            $Tunjangan = [
                "S1" => 1000000,
                "SMA" => 750000,
                "SMP" => 500000,
                "SD" => 250000
            ];
            
            if ($Pendidikan == "S1") {
                $this->GajiTunjangan = $Tunjangan["S1"];
                echo number_format ($this->GajiTunjangan);
            }

            elseif ($Pendidikan == "SMA"){
                $this->GajiTunjangan = $Tunjangan["SMA"];
                echo number_format ($this->GajiTunjangan);
            }

            elseif ($Pendidikan == "SMP"){
                $this->GajiTunjangan = $Tunjangan["SMP"];
                echo number_format ($this->GajiTunjangan);
            }

            elseif ($Pendidikan == "SD"){
                $this->GajiTunjangan = $Tunjangan["SD"];
                echo number_format ($this->GajiTunjangan);
            }


            else {
                echo "Error";
            }

            echo "<hr>";
            
            
        }

        public function Potongan($Tabungan, $Pinjaman) {
            echo "<h2> Potongan </h2>";

            echo "Tabungan:" . number_format($Tabungan) . "<br>";
            echo "Pinjaman:" .  number_format($Pinjaman) . "<br>";
            
            $this->TPotongan = $Tabungan + $Pinjaman;
            echo "Pinjaman:" . number_format($this->TPotongan) . "<br>";
            
            echo "<hr>";
        }

        public function Gaji_Bersih() {
            echo "<h2> Gaji Bersih </h2>";

            $this->GajiBersih = $this->GajiJabatan + $this->GajiTunjangan - $this->TPotongan;
            echo "Total Gaji Bersih:" . number_format($this->GajiBersih) . "<br>";
            echo "<hr>";

        }

    }

    $Print = new Gajihan();

    echo $Print->Gaji_Pokok("Abel", "Direktur");
    echo $Print->Tunjangan("S1");
    echo $Print->Potongan(200000, 50000);
    echo $Print->Gaji_Bersih();

?>